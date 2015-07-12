<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 11/7/15
 * Time: 3:54 PM
 */

class validation extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('validation_model');
	}

	public function index(){
		$this->validate();
	}

	public function validate(){
		$this->load->library('form_validation');
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('name','Name','required|alpha');
			$this->form_validation->set_rules('nameOfSchool','Name Of School','required|alpha');
			$this->form_validation->set_rules('country','Country','required|alpha');
			$this->form_validation->set_rules('state','State','required|alpha');
			$this->form_validation->set_rules('city','Place','required|alpha');
			$this->form_validation->set_rules('cost','Cost','required');
			$this->form_validation->set_rules('presentStudent','Present Students','required');
			$this->form_validation->set_rules('expectedStudent','Expected Students','required');
			$this->form_validation->set_rules('duration','Duration','required');
			$this->form_validation->set_rules('collaborate','Collaboration','required');
			$this->form_validation->set_rules('support','Support','required');
			$this->form_validation->set_rules('responsive','Responsive','required');
			$this->form_validation->set_rules('freqnd','Frequency','required');
			if($this->form_validation->run()!=FALSE){
				$name = $_POST['name'];
				$nameOfSchool = $_POST['nameOfSchool'];
				$country = $_POST['country'];
				$state = $_POST['state'];
				$city = $_POST['city'];
				$cost = $_POST['cost'];
				$presentStudent = $_POST['presentStudent'];
				$expectedStudent = $_POST['expectedStudent'];
				$duration = $_POST['duration'];
				$responsive = $_POST['responsive'];
				$support = $_POST['support'];
				$collaborate = $_POST['collaborate'];
				$freqnd = $_POST['freqnd'];

				$validate = array(
					'name' => $name,
					'nameOfSchool' => strtoupper($nameOfSchool),
					'country' => $country,
					'state' => $state,
					'city' => $city,
					'cost' => $cost,
					'presentStudent' => $presentStudent,
					'expectedStudent' => $expectedStudent,
					'duration' => $duration,
					'responsive' => $responsive,
					'collaborate' => $collaborate,
					'support' => $support,
					'freqnd' => $freqnd
				);

				$query = $this->validation_model->validate($validate);
					$data['success'] = $query;
					$this->load->view('template/header');
					$this->load->view('template/msg',$data);
					$this->load->view('validation/validateForm');
					$this->load->view('template/footer');
			}
		}
		else{
			$this->load->view('template/header');
			$this->load->view('validation/validateForm');
			$this->load->view('template/footer');
		}
	}
				 public function maps(){
					$this->load->view('template/header');
				//	$this->load->view('template/maps');
					$this->load->view('template/footer');
 				}
}
