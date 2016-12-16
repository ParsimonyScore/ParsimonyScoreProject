<?php

namespace PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Cookie;
use JMS\Serializer\SerializationContext;
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
					if($error=="") return $this->render('PagesBundle:Default:index.html.twig', array('success' => "", "score" => $score)) ;	
					
				}
				else $error="variable(s) required null";
				return $this->render('PagesBundle:Default:index.html.twig', array('error' => $error)) ;	
			}catch(\Exception $e) {
				return new Response("Error : ".$e->getMessage()); 
			}			
		}		
	}

    /**
     * @Route("/calculScore", name="pages_calculScore")
     */	 
	public function calculScoreAction(Request $request){
		$doctrine = $this->getDoctrine()->getManager();
		$scoreRepo = $doctrine->getRepository('PagesBundle:ScoreTMP');
		$serializer = $this->container->get('serializer');
		if($request->isMethod('POST')) {
			try{
				$id=$request->request->get("id");
				if($id!=null) {
					$score= $scoreRepo->find($id);
					if($score!=null) {
						if($request->request->get("calcul") !=null) {
							if($output=$this->calculScore($score)) {
								$rep =array();
								$rep["output"] = $output;
								$rep["score"] = $score;
								$doctrine->persist($score);
								$doctrine->flush();
								return new Response($serializer->serialize($rep, 'json',SerializationContext::create()->setSerializeNull(true)));
							}
							else return new Response("Error : calcul of  Score faild");
						}
						else return new Response("Error : Operation faild");
					}
					else return new Response("Error : score not found "); 
				}
				else return new Response("Error : variable(s) required null"); 
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



	/**
     * @Route("/compareScore", name="pages_compareScore")
     */
	public function compareScoreAction(Request $request){
		$id= $request->query->get("id");
		$scoreRepo = $this->getDoctrine()->getManager()->getRepository('PagesBundle:Score');
		$scoreTmpRepo = $this->getDoctrine()->getManager()->getRepository('PagesBundle:ScoreTMP');
		$serializer = $this->container->get('serializer');

		if($id!=null) {
			$is_score_tmp = $request->query->get("isScoreTMP");
			if($is_score_tmp!=null && $is_score_tmp==0 ) $score = $scoreRepo->find($id);
			else $score = $scoreTmpRepo->find($id);
			if($score!=null) {
				$delta = 0.5;
				$gamma = 5;
				$begin = $score->getRn() - $delta; 
				$end = $score->getRn() + $delta;
				$data  = array();
				while (sizeof($data) < 10) {
					$data = $scoreRepo->getScores($delta, $gamma, $score);
					$delta += 0.5;
					$gamma += 5;
				}
				$data = $this->rngs($data, $score);
				return new Response($serializer->serialize($data, 'json',SerializationContext::create()->setSerializeNull(true))); 
			}
			return new Response("Error : Score not found");
		}
		return new Response("Error : id null"); 
	}

	/*
		function to calcul nrgs
	*/
	private function rngs($data, $score) {
		$cst1 = 0.001;
		$cst2 = 0.01;
		$store = array();

		for ($i=0; $i < sizeof($data) ; $i++) { 
			$store[$i]['score'] = $data[$i];
			$store[$i]['rngs'] = ( abs($data[$i]->getRn() - $score->getRn()) + $cst1 ) * ( abs($data[$i]->getRg() - $score->getRg()) + $cst1 ) * ( abs($data[$i]->getNg() - $score->getNg()) + $cst1 ) * ( abs($data[$i]->getS() - $score->getS()) + $cst2 ) * ( abs($data[$i]->getK() - $score->getK()) + $cst2 ) * ( abs($data[$i]->getL() - $score->getL()) + $cst2 );
		}
		uasort($store, function ($a, $b) {
		    if ($a['rngs'] == $b['rngs']) {
		        return 0;
		    }
		    return ($a['rngs'] < $b['rngs']) ? -1 : 1;
		});
		return $store;
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
		$path_name=__DIR__."/../../../web/files/data/".$this->getCodeForFile()."_".$filename.".fasta";
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
		$path_name=__DIR__."/../../../web/files/data/".$this->getCodeForFile()."_".$filename.".fasta";
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

	/*
		function to calcul score from data file 
		return array of string
	*/
	private function calculScore(&$score) {
		$output=array();
		exec ("../bin/parsimony_predictor.exe --collect --input-file=files/data/".$score->getFileName(),$output);
		$data= explode(" ",$output[sizeof($output)-1]);
		$score->setR($data[2]);
		$score->setN($data[3]);
		$score->setG($data[4]);
		$score->setB(0);
		$score->setS($data[5]);
		$score->setRN((($data[2]-$data[3]))/$data[2]*100);
		$score->setRG((($data[2]-$data[4]))/$data[2]*100);
		$score->setRB((($data[2]- $score->getB()))/$data[2]*100);
		$score->setNB((($data[3]-$score->getB()))/$data[3]*100);
		$score->setNG((($data[3]-$data[4]))/$data[3]*100);
		$score->setGB((($data[4]-$score->getB()))/$data[4]*100);
		return $output;
	}

}
