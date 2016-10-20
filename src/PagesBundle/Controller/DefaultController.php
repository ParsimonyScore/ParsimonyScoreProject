<?php

namespace PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use PagesBundle\Entity\ScoreTMP;
//use PagesBundle\Entity\Message;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="pages_index")
     */
    public function indexAction(Request $request)
    {
		if($request->isMethod('POST')) {
			try{
				$doctrine = $this->getDoctrine()->getManager();
				$scoreRepo = $doctrine->getRepository('PagesBundle:ScoreTMP');
				$score = new ScoreTMP();
				$problem = trim($request->request->get("problem"));
				$type=$request->request->get("type");
				$error="";
				if($problem!=null && $type!=null) {
					$score->setProblem($problem);
					if($type=="text") {
						$data= trim($request->request->get("text_data"));
						$path_name=__DIR__."/../../../web/files/data/".$this->getCodeForFile()."_".$problem.".txt";
						file_put_contents($path_name,$data);
						$all_seq= explode(">",$data);
						$k= sizeof($all_seq)-1;
						$first_data= str_replace("\n","",substr(trim($all_seq[1]), strpos(trim($all_seq[1]),"\n")));
						$first_data= str_replace(" ","",$first_data);
						$l= strlen($first_data);  
					}
					
					else if($type=="file") {
						$file=$_FILES["file_data"];
						$type_file=substr($file['name'],strrpos($file['name'],'.'));
						if(strpos($type_file,"txt")!==false){
							$path_name=__DIR__."/../../../web/files/data/".$this->getCodeForFile()."_".$problem.".txt";
							if(move_uploaded_file($file['tmp_name'],$path_name)){
								$data= trim(file_get_contents($path_name));
								$all_seq= explode(">",$data);
								$k= sizeof($all_seq)-1;
								$first_data= str_replace("\n","",substr(trim($all_seq[1]), strpos(trim($all_seq[1]),"\n")));
								$first_data= str_replace(" ","",$first_data);
								$l= strlen($first_data);  
							}
							else $error ="Error :File upload failed"; 
						}
						else $error = "Error : File type not allowed"; 
					}
					else $error = "Error : unexpected type "; 
					
					// here execution of c++ programme 
					$score->setK($k);
					$score->setL($l);
					$score->setFileName(substr($path_name,strpos($path_name,"data/")+5));
					$doctrine->persist($score);
					$doctrine->flush();
					
					if($error=="") return $this->render('PagesBundle:Default:index.html.twig', array('success' => "k= ".$k." l=".$l)) ;	
					
				}
				else $error="variable(s) required null";
				return $this->render('PagesBundle:Default:index.html.twig', array('error' => $error)) ;	
			}catch(\Exception $e) {
				return new Response("Error : ".$e->getMessage()); 
			}
			
		}
		else {
			$lang= $request->query->get("lang");
			if($lang != NULL) {
				$sessions =$request->getSession();	
				$sessions->set('ParsimonyScore_lang', $lang);
			}
			return $this->render('PagesBundle:Default:index.html.twig');			
		}
    }
	
	/**
     * @Route("/contact", name="pages_contact")
     */	
	public function contactAction(Request $request) {
		if($request->isMethod('POST')) {
			try{
				$email = $request->request->get("email");
				$msg= $request->request->get("msg");
				$error="";
				if($email !=null && $msg!=null ) {
					return $this->render('PagesBundle:Default:contact.html.twig', array('success' => "ok")) ;	
				}
				else $error="variable(s) required null";
				return $this->render('PagesBundle:Default:contact.html.twig', array('error' => $error)) ;	
				
			}catch(\Exception $e) {
				return new Response("Error : ".$e->getMessage()); 
			}
		}
		else return $this->render('PagesBundle:Default:contact.html.twig');
	}
	
	/**
     * @Route("/about", name="pages_about")
     */	
	public function aboutAction(Request $request) {
		return $this->render('PagesBundle:Default:about.html.twig');
	}
	
	private function getCodeForFile(){
		$mycode="".strtotime(date("Y-m-d h:i:s"));
		$mycode.=rand(0,100000);
		return $mycode;
	}
}
