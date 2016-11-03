<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use AdminBundle\Entity\Notification;
class RegistrationController extends BaseController
{
    public function registerAction(Request $request)
    {
        $formHandler = $this->container->get('fos_user.registration.form.handler');
        $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');
        $userManager = $this->get('fos_user.user_manager');

       
        $process = $formHandler->process($confirmationEnabled);
        
        $form = $this->container->get('fos_user.registration.form');

        if ($process) {

            /*****************************************************
             * Functionnalities added *
             *****************************************************/

            $this->container->get('logger')->info(
                sprintf('New user registration: %s', $user)
            );

            if ($confirmationEnabled) {
                $this->container->get('session')->set('fos_user_send_confirmation_email/email', $user->getEmail());
                $route = 'admin_admin_list';

                $message = \Swift_Message::newInstance()
                            ->setSubject('Validation d\'inscription')
                            ->setFrom(array('zakariae.ziko.lahyani@gmail.com'=>'Ziko' ))
                            ->setTo($user->getEmail())
                            ->setCharset('utf-8')
                            ->setContentType('text\html')
                            ->setBody($this->renderView('AppBundle:Default:modeuleUsed/mail.html.twig'));

                $this->get('mailer')->send($message);
            } 

            $this->setFlash('fos_user_success', 'registration.flash.user_created');
            $url = $this->container->get('router')->generate($route);

            return new RedirectResponse($url);
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/check/{token}", name="check")
     */
    public function checkAction(Request $request, $token)
    {
        $userManager = $this->get('fos_user.user_manager');
        $doctrine = $this->getDoctrine()->getManager();

        $user = $userManager->findUserByConfirmationToken($token);
        
        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token "%s" does not exist', $token));
        }
        $dispatcher = $this->get('event_dispatcher');
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, $event);
        
        $form = $this->createFormBuilder()
            ->add('password', PasswordType::class)
            ->add('pass_valid', PasswordType::class)
            ->add('save', SubmitType::class)
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pass = $form["password"]->getData();
            $passvalid = $form["pass_valid"]->getData();
            
            if($pass == $passvalid){
                $user->setPlainPassword(  $form["pass_valid"]->getData()  );
                $user->setPassword(  $form["pass_valid"]->getData()  );
                $user->setConfirmationToken(null);
                $user->setEnabled(true);
                
                $userManager->updateUser($user);
                //add notification to super admin
                $notif= new Notification();
                $notif->setUser($user);
                $notif->setDateNotif(new \DateTime("now"));
                $notif->setMessage("Has registered");
                $doctrine->persist($notif);
                $doctrine->flush();

                return $this->redirect($this->generateUrl('fos_user_profile_show') );
            }
            else
            {
                return $this->redirect($this->generateUrl('check', array('token'=> $token)));
            }


        }

        return $this->render('AdminBundle:Default:check.html.twig', array(
                'form' => $form->createView(),
                'user' => $user,
            ));
    }
   

   
    
}
