<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 11/7/15
 * Time: 3:54 PM
 */

class validation extends CI_Controller{

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
			$this->form_validation->set_rules('name','Name','required|alpha');
		}
		else{
			$this->load->view('template/header');
			$this->load->view('validation/validateForm');
			$this->load->view('template/footer');
		}
	}

} 