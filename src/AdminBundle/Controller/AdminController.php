<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * @Route("/list_users")
     */
    public function listAction(){
    	$em = $this->getDoctrine()->getManager();
    	$admin = $this->container->get('security.token_storage')->getToken()->getUser();

    	$findUser = $em->getRepository('AdminBundle:User')->findAll();

    	return $this->render('AdminBundle:Default:list.html.twig', array('users' => $findUser,
    																	 'admin' => $admin));
    }

    /**
    * @Route("/remove/{id}")
    */
    public function removeAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
        $userManager = $this->container->get('fos_user.user_manager');
        
        $user = $em->getRepository('AdminBundle:User')->find($id);

        $userManager->deleteUser($user);
        $this->get('session')->getFlashBag()->add('success', $user->getUsername() . ' effacé');
        return $this->redirect($this->generateUrl('admin_admin_list'));

       
    }
}
