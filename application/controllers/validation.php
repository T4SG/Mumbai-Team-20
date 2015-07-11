<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 11/7/15
 * Time: 3:54 PM
 */

class validation extends CI_Controller{

	public function index(){
		$this->load->view('template/header');
	}

	public function validate(){
		$this->load->view('template/header');
		$this->load->view('validation/validateForm');
		$this->load->view('template/footer');
	}

} 