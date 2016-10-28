<?php

namespace PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Cookie;
use PagesBundle\Entity\ScoreTMP;
use AdminBundle\Entity\Message;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="pages_index")
     */
    public function indexAction(Request $request)
    {
		
		// choose a language
		$lang= $request->query->get("lang");
		if($lang != NULL) {
			try{
				$sessions =$request->getSession();	
				$sessions->set('ParsimonyScore_lang', $lang);
				$response = new Response();
				$cookie_info = array(
					'name'  => 'ParsimonyScore_lang',
					'value' => $lang,
					'time'  => time() + 3600 * 24 * 30 * 12
				);
				$cookie = new Cookie($cookie_info['name'], $cookie_info['value'], $cookie_info['time']);
				$response->headers->setCookie($cookie);	
				$response->send();
			}catch(\Exception $e) {
				return new Response("Error : ".$e->getMessage()); 
			}
		}
		return $this->render('PagesBundle:Default:index.html.twig');			
    }

    /**
     * @Route("/addScore", name="pages_addScore")
     */	 
	public function addScoreAction(Request $request){
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
						$filename= $this->saveData(trim($request->request->get("text_data")), $problem);
					}				
					else if($type=="file") {
						$filename= $this->saveDataFile($_FILES["file_data"], $problem);
					}
					else $error = "Error : unexpected type "; 
					
					if($filename!=false) {
						$data= file_get_contents($filename);
						if($this->getKLFromData($data, $score)) {
							// here execution of c++ programme 
							$score->setFileName(substr($filename,strpos($filename,"data/")+5));
							$doctrine->persist($score);
							$doctrine->flush();							
						}
						else $error = "Error : faild to calcul k and l"; 
					}
					else $error = "Error : File creation faild "; 
					if($error=="") return $this->render('PagesBundle:Default:index.html.twig', array('success' => "k= ".$score->getK()." l=".$score->getL())) ;	
					
				}
				else $error="variable(s) required null";
				return $this->render('PagesBundle:Default:index.html.twig', array('error' => $error)) ;	
			}catch(\Exception $e) {
				return new Response("Error : ".$e->getMessage()); 
			}			
		}		
	}
	
	/**
     * @Route("/contact", name="pages_contact")
     */	
	public function contactAction(Request $request) {
		if($request->isMethod('POST')) {
			try{
				$doctrine = $this->getDoctrine()->getManager();
				$messageRepo = $doctrine->getRepository('AdminBundle:Message');
				$email = $request->request->get("email");
				$msg= $request->request->get("msg");
				$error="";
				if($email !=null && $msg!=null ) {
					$message= new Message();
					$message->setEmail($email);
					$message->setMessage($msg);
					$message->setSendDate(new \DateTime("now"));
					$doctrine->persist($message);
					$doctrine->flush();	
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
	
	// for an unique name for each file
	private function getCodeForFile(){
		$mycode="".strtotime(date("Y-m-d h:i:s"));
		$mycode.=rand(0,100000);
		return $mycode;
	}

	/*
		function to save an file Data
		return  
			filename if success
			false if not
		
	*/
	private function saveDataFile($file, $filename){
		$path_name=__DIR__."/../../../web/files/data/".$this->getCodeForFile()."_".$filename.".txt";
		$type_file=substr($file['name'],strrpos($file['name'],'.'));
		if(strpos($type_file,"txt")!==false || strpos($type_file,"fasta") ){
			if(move_uploaded_file($file['tmp_name'],$path_name)){
				return $path_name;
			}
		}
		return false;
	}
	
	/*
		function to save Data in a new file
		return  
			filename if success
			false if not
		
	*/
	private function saveData($data, $filename) {
		$path_name=__DIR__."/../../../web/files/data/".$this->getCodeForFile()."_".$filename.".txt";
		if(file_put_contents($path_name,$data)) return $path_name;
		else return false;
	}
	
	/*
		function to calculate the number of sequences and the length of an sequence
		return true/false
	*/
	
	private function getKLFromData($data, &$score) {
		$all_seq= explode(">",$data);
		if(sizeof($all_seq)>1) {
			$score->setK(sizeof($all_seq)-1);
			$first_data= str_replace("\n","",substr(trim($all_seq[1]), strpos(trim($all_seq[1]),"\n")));
			$first_data= str_replace(" ","",$first_data);
			$score->setL(strlen($first_data));
			return true;
		}
		return false;		
	}
}
