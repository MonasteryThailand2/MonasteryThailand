<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonasteryThailand extends CI_Controller {

	public function index(){
		$this->load->view('documentPreparing');
		$this->load->view('homepage');
		/*$this->load->model('mt_model','mt');
		$data = array("inverted"=>$this->mt->inverted());
		if($data=""){
			$this->load->view('documentPreparing');
			$this->load->view('homepage');
		} else {
			$this->load->view('homepage');
		}
		if(isset($data)){
   			echo"true not null";
				$this->load->view('homepage');
		}else{
    		echo "false ";
				$this->load->view('documentPreparing');
				$this->load->view('homepage');
			}*/
	}
	public function detail_region(){
			$region = (isset($_REQUEST["region"])?$_REQUEST["region"]:'');
			$this->load->model('mt_model','mt');
			if($region){
				$data = array("region"=>$this->mt->get_region(),"show_region"=>$this->mt->show_as_region($region));
			}else{
				$data = array("region"=>$this->mt->get_region());
			}
			$this->load->view('resultOfRegion',$data);
		}
	public function test_detail(){
		$this->load->view('displayTemple');
	}
	public function query_ans(){
		$this->load->model('mt_model','mt');
		$data = array("region"=>$this->mt->get_region());
		$this->load->view('resultOfSearch',$data);
	}
	public function detail_temple(){
			$temple = (isset($_REQUEST["temple"])?$_REQUEST["temple"]:'');
			$this->load->model('mt_model','mt');
			$data = array("temple"=>$this->mt->show_detail($temple),"region"=>$this->mt->get_region());
			$this->load->view('displayTemple',$data);
	}
	public function detail_reign(){
			$reign = (isset($_REQUEST["reign"])?$_REQUEST["reign"]:'');
			$this->load->model('mt_model','mt');
			$data = array("temple"=>$this->mt->show_reign($reign),"region"=>$this->mt->get_region());
			$this->load->view('displayTemple',$data);
	}
}
?>
