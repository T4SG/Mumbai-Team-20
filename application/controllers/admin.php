<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 11/7/15
 * Time: 8:10 PM
 */

class admin extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('admin_model');
	}

	public function index(){
		$this->adminAuthenticate();
	}

	public function adminAuthenticate(){
		$this->load->view('admin/adminLogin');

	}

} 