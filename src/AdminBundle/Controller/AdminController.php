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
use AdminBundle\Entity\Notification;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdminController extends Controller
{
    
    
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('PagesBundle:Default:index.html.twig');
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
        $notifRepo = $doctrine->getRepository('AdminBundle:Notification');
    	$admin = $this->container->get('security.token_storage')->getToken()->getUser();
		$serializer = $this->container->get('serializer');	
		try{
			$id= $request->request->get("id");
			$accept = $request->request->get("accept");
			if($id!=null && $accept!=null) {
				$score_tmp= $scoreTMPRepo->find($id);
				if($score_tmp != null) {
					if($accept==1) {
                        //add notification if admin is not the superadmin
                        if(!$admin->hasRole('ROLE_SUPER_ADMIN')) {
                            $notif= new Notification();
                            $notif->setUser($admin);
                            $notif->setDateNotif(new \DateTime("now"));
                            $notif->setMessage("Has added the score ".$score_tmp->getProblem()." to list of scores");
                            $doctrine->persist($notif);
                        }
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
					return $this->render('AdminBundle:Default:listMessages.html.twig',
                                         array("messages" => $list_messages));
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
						return $this->render('AdminBundle:Default:message.html.twig',
                                             array("message"=>$message ));
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
	
    
    /**
     * @Route("/insertion",  name="insertion")
     */
    
    // parse the file submitted by the administrator and saves its contents in the table "score"
    public function insertionAction(Request $request)
    {
     
           try{
             	$doctrine = $this->getDoctrine()->getManager();
				$scoreRepo = $doctrine->getRepository('PagesBundle:Score');
				
				$file=$_FILES['file_data'];
				$error="";
				if ($file['size'] != 0) {
                   
                    $type_file=substr($file['name'],strrpos($file['name'],'.'));
                    if(strpos($type_file,"txt")!==false || strpos($type_file,"csv")!==false){
                            $path_name=__DIR__."/../../../web/files/data/".basename($file['name']);
                            if(move_uploaded_file($file['tmp_name'],$path_name)){

                                $data= trim(file_get_contents($path_name));

                                $lines = explode("\n",$data);  // each line
                                foreach($lines as $line) {  
                                   $values = explode(',',$line);  // each value
                                
                                   $this->addScore(substr($values[0],1,-1),$values[1],$values[2],$values[3],$values[4],$values[5],$values[6],$values[7],$doctrine);
                                }
                                unlink($path_name);

                            }
                            else $error ="Error :File upload failed"; 
                        }
                        else $error = "Error : only csv or txt format are allowed"; 

                        $scores = $this->getDoctrine()->getRepository('PagesBundle:Score')->findBy([], ['problem' => 'ASC']);
                        if($error=="") {
                           
                            return $this->render('AdminBundle:Default:listeScore.html.twig',
                                                 array('success' => "data added to database" ,'scores' => $scores )) ;
                        } else 
                            return $this->render('AdminBundle:Default:all_socres.html.twig',
                                                 array('error' => $error ,'scores' => $scores )) ;
                    
                } else {
                    $scores = $this->getDoctrine()->getRepository('PagesBundle:Score')->findBy([], ['problem' => 'ASC']);
                    $error="veillez inserer un fichier";
                    return $this->render('AdminBundle:Default:listeScore.html.twig',
                                         array('error' => $error ,'scores' => $scores )) ;
                }
           }catch(\Exception $e) {
				return new Response("Error : ".$e->getMessage()); 
           }
			
    }
    
    
    /**
     * @Route("/scores" , name="admin_allScores")
     */
    public function listeScoresAction(Request $request)
    {
        $doctrine = $this->getDoctrine()->getManager();
        $scoreRepo = $doctrine->getRepository('PagesBundle:Score');
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
        else return $this->render('AdminBundle:Default:listeScore.html.twig');
    }
    
    
    
    /**
     * @Route("/rm_score" , name="admin_removeScore")
     */

    // Delete the score from the database
    public function rmScoreAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id= $request->request->get("id");
        $score = $em->getRepository('PagesBundle:Score')->find($id);
        if (!$score) {
            throw $this->createNotFoundException(
                'Score not found'
            );
        }
        $path_name=__DIR__."/../../../web/files/data/".$score->getFileName();  
        if(file_exists($path_name)) unlink($path_name);        
        $em->remove($score);
        $em->flush();

        return $this->redirectToRoute('admin_allScores');
    }
    
    /**
    * @Route("/add",name ="add_score")
    */   

    // add score to the database
    public function add_score(Request $request){
             
           try{
             	$doctrine = $this->getDoctrine()->getManager();
				$scoreRepo = $doctrine->getRepository('PagesBundle:Score');

                
               $this->addScore(trim($request->request->get("name")), trim($request->request->get("K")), trim($request->request->get("L")),
                               trim($request->request->get("R")), trim($request->request->get("N")), trim($request->request->get("G")),
                               trim($request->request->get("B")),  trim($request->request->get("S")),$doctrine);
             
                $scores = $this->getDoctrine()->getRepository('PagesBundle:Score')->findBy([], ['problem' => 'ASC']);
               
                return $this->render('AdminBundle:Default:listeScore.html.twig', 
                                     array('success' => 'data bien enregistrer','scores' => $scores));
                      
           }catch(\Exception $e) {
				return new Response("Error : ".$e->getMessage()); 
           }
      
    }


    /**
     * @Route("/notif", name="admin_notif")
     */
    public function notificationsAction(Request $request){ 
        $doctrine = $this->getDoctrine()->getManager();
        $notifRepo = $doctrine->getRepository('AdminBundle:Notification');
        $admin = $this->container->get('security.token_storage')->getToken()->getUser();
        $serializer = $this->container->get('serializer');  
        try{
            if($admin->hasRole('ROLE_SUPER_ADMIN')) {
                if($request->isMethod('GET')) {
                    // here to update notif when the admin see it
                    $id=$request->query->get("id");
                    $notif= $notifRepo->find($id);
                    if($notif!==null) {
                        $notif->setSeen(true);
                        $notif->setDateSeen(new \DateTime("now"));
                        $doctrine->persist($notif);
                        $doctrine->flush();
                        return new Response("OK"); 
                    }
                }
                else {
                    // here to send list of notification not seen yet 
                    $list_notif = $notifRepo->findBy(array("seen" => false), array('id' => 'desc')); 
                    $notif="[";  $i=sizeof($list_notif); 
                    foreach($list_notif as $n) {
                        $notif.=$serializer->serialize($n, 'json',SerializationContext::create()->setSerializeNull(true));
                        $i--;
                        if($i>=1)  $notif.= ",";
                    } 
                    $notif.="]"; 
                    return new Response($notif);     
                   
                } 

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

    // add one score to the DB
    private function addScore($name,$k,$l,$r,$n,$g,$b,$s,&$doctrine) {
                $score = new Score();
                $score->setProblem($name);
                $score->setK($k);
                $score->setL($l);
                $score->setR($r);
                $score->setN($n);
                $score->setG($g);
                $score->setB($b);
                $score->setS($s);
              
                if($r != 0) {  // RN - RG - RB
                    $score->setRn(($r-$n)/$r*100);
                    $score->setRg(($r-$g)/$r*100);
                    $score->setRb(($r-$b)/$r*100);
                } else {
                    $score->setRn(0);
                    $score->setRg(0);
                    $score->setRb(0);
                }

                if($n != 0) {  // NB - NG
                    $score->setNb(($n-$b)/$n*100);
                    $score->setNg(($n-$g)/$n*100);
                } else {
                    $score->setNb(0);
                    $score->setNg(0);
                }

                if($g !=0) $score->setGb(($g-$b)/$g*100); // GB
                else $score->setGb(0);

                $doctrine->persist($score);
                $doctrine->flush();
    }
   
}