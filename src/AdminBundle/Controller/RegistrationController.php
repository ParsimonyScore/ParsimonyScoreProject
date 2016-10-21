<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

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
     * Tell the user to check his email provider.
     */
    
/**
     * @Route("/check/{token}", name="check")
     */
    public function checkAction(Request $request, $token)
    {
        $userManager = $this->get('fos_user.user_manager');

        $user = $userManager->findUserByConfirmationToken($token);
        
        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token "%s" does not exist', $token));
        }
        
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
                $user->setPassword( $form["pass_valid"]->getData() );
                $user->setConfirmationToken(null);
                $user->setEnabled(true);

                $userManager->updateUser($user);


                return $this->redirect($this->generateUrl('fos_user_profile_show') );
            }
            else
            {
                return $this->redirect($this->generateUrl('check', array('token'=> $token)));
            }


        }

        return $this->render('AdminBundle:Default:check.html.twig', array(
                'form' => $form->createView(),
            ));
    }
   

   

    /**
     * Tell the user his account is now confirmed.
     */
    public function confirmedAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('FOSUserBundle:Registration:confirmed.html.twig', array(
            'user' => $user,
            'targetUrl' => $this->getTargetUrlFromSession(),
        ));
    }

    
}
