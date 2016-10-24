<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use JMS\Serializer\SerializationContext;
use PagesBundle\Entity\ScoreTMP;
use PagesBundle\Entity\Score;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
	
    /**
     * @Route("/list_scores_tmp", name="admin_listScoreTmp")
     */
    public function listScoreTmpAction(Request $request){
    	$doctrine = $this->getDoctrine()->getManager();
		$scoreRepo = $doctrine->getRepository('PagesBundle:ScoreTMP');
    	$admin = $this->container->get('security.token_storage')->getToken()->getUser();
		$serializer = $this->container->get('serializer');
	
		if($request->isMethod('POST')) {
			try{
				$page= $request->request->get("page");
				$show= $request->request->get("show");
				$filename= $request->request->get("filename");
				if($filename!=null) {
					return new Response($this->getDataFromFile($filename)); 
				}
				else if($page!=null && $show!=null) {
					$scores = $scoreRepo->findBy(array(), array(), $show, ($page*$show));
					$myres="[";
					$i= sizeof($scores);
					foreach($scores as $score) {
						$myres .=$serializer->serialize($score, 'json',SerializationContext::create()->setSerializeNull(true));
						$i--;
						if($i>=1) $myres .= ",";
					}
					$myres.="]";
					return new Response($myres); 
				}
				else return new Response("Error : variable(s) required null"); 
			}catch(\Exception $e) {
				return new Response("Error : ".$e->getMessage()); 
			}
		}

    	else return $this->render('AdminBundle:Default:listScoreTmp.html.twig');
    }
	
    /**
     * @Route("/accept_score_tmp", name="admin_accept_score")
     */
    public function acceptScoreTmpAction(Request $request){ 
    	$doctrine = $this->getDoctrine()->getManager();
		$scoreTMPRepo = $doctrine->getRepository('PagesBundle:ScoreTMP');
    	$admin = $this->container->get('security.token_storage')->getToken()->getUser();
		$serializer = $this->container->get('serializer');	
		try{
			$id= $request->request->get("id");
			$accept = $request->request->get("accept");
			if($id!=null && $accept!=null) {
				$score_tmp= $scoreTMPRepo->find($id);
				if($score_tmp != null) {
					if($accept==1) {
						// add the score_tmp to scores 
						$score = new Score();
						$vars= (array) $score_tmp;
						foreach ($vars as $n => $value) {
							$n=trim(str_replace("PagesBundle\Entity\ScoreTMP","",$n));
							$name="";
							foreach(explode("_",$n) as $tmp) {
								$name.=ucfirst($tmp);
							}
							if(strpos($name,'Id')===false) {
								call_user_func(array($score, "set".$name), $value);
							}					
						}
						$doctrine->persist($score);						
					}
					else {
						// remove the data file
						unlink(__DIR__."/../../../web/files/data/".$score_tmp->getFileName());
					}
					// remove the score_tmp
					$doctrine->remove($score_tmp);
					$doctrine->flush();	
					return new Response("OK"); 
				}
				else return new Response("Error : score not found"); 
			}
			else return new Response("Error : variable(s) required null"); 
		}catch(\Exception $e) {
			return new Response("Error : ".$e->getMessage()); 
		}
			
	}

    /**
     * @Route("/messages", name="admin_messages")
     */
    public function messagesAction(Request $request){ 
    	$doctrine = $this->getDoctrine()->getManager();
		$messageRepo = $doctrine->getRepository('AdminBundle:Message');
    	$admin = $this->container->get('security.token_storage')->getToken()->getUser();
		$serializer = $this->container->get('serializer');	
		try{
			if($admin->hasRole('ROLE_SUPER_ADMIN')) {
				if($request->isMethod('POST')) {
					$messages="[";
					$list_last_messages = $messageRepo->findBy(array(), array('id' => 'desc'), 5, 0);
					$i=sizeof($list_last_messages);
					foreach($list_last_messages as $msg) {
						$messages.=$serializer->serialize($msg, 'json',SerializationContext::create()->setSerializeNull(true));
						$i--;
						if($i>=1) $messages .= ",";
					}
					$messages.="]";
					return new Response($messages); 
				}
				else {
					$list_messages = $messageRepo->findBy(array(), array('id' => 'desc'));		
					//return new Response(var_dump($list_messages)); 
					return $this->render('AdminBundle:Default:listMessages.html.twig', array("messages" => $list_messages));
				} 

			}
			else return new Response("Error : access denied"); 
		}catch(\Exception $e) {
			return new Response("Error : ".$e->getMessage()); 
		}
			
	}


    /**
     * @Route("/message", name="admin_message")
     */
    public function showMessageAction(Request $request){ 
    	$doctrine = $this->getDoctrine()->getManager();
		$messageRepo = $doctrine->getRepository('AdminBundle:Message');
    	$admin = $this->container->get('security.token_storage')->getToken()->getUser();
		$serializer = $this->container->get('serializer');	
		try{
			if($admin->hasRole('ROLE_SUPER_ADMIN')) {
				$id= $request->query->get("id");
				if($id!=null) {
					$message = $messageRepo->find($id);
					if($message!=null) {
						$message->setSeen(true);
						$message->setSeenDate(new \DateTime("now"));
						$doctrine->persist($message);	
						$doctrine->flush();
						return $this->render('AdminBundle:Default:message.html.twig', array("message"=>$message ));
					}
					else return new Response("Error : Message not found"); 
				}
				else return new Response("Error : variable(s) required null"); 
			}
			else return new Response("Error : access denied"); 
		}catch(\Exception $e) {
			return new Response("Error : ".$e->getMessage()); 
		}			
	}

    /**
     * @Route("/rmMessage", name="admin_removeMessage")
     */
    public function rmMessageAction(Request $request){ 
    	$doctrine = $this->getDoctrine()->getManager();
		$messageRepo = $doctrine->getRepository('AdminBundle:Message');
    	$admin = $this->container->get('security.token_storage')->getToken()->getUser();
		$serializer = $this->container->get('serializer');	
		try{
			if($admin->hasRole('ROLE_SUPER_ADMIN')) {
				$id= $request->query->get("id");
				if($id!=null) {
					$message = $messageRepo->find($id);
					if($message!=null) {
						$doctrine->remove($message);	
						$doctrine->flush();
						return $this->forward('AdminBundle:Admin:messages', array());
					}
					else return new Response("Error : Message not found"); 
				}
				else return new Response("Error : variable(s) required null"); 
			}
			else return new Response("Error : access denied"); 
		}catch(\Exception $e) {
			return new Response("Error : ".$e->getMessage()); 
		}			
	}
	
	/*
		function to get data from file 
		return string
	*/
	private function getDataFromFile($filename) {
		$path_name=__DIR__."/../../../web/files/data/".$filename;
		if(file_exists($path_name)) {
			return file_get_contents($path_name);
		}
		return "File not found";
	}
}
