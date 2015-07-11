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
		$this->load->library('form_validation');
		if(isset($_POST['login'])){
			$this->form_validation->set_rules('username','Username','required|valid_email|xss-client|trim');
			$this->form_validation->set_rules('password','Password','required|trim');
			if($this->form_validation->run()!=FALSE){
				$username = $_POST['username'];
				$password = hash('sha256',md5($_POST['password']));
				if($username=="" || $password==""){
					$data['error'] = "Username or Password not entered";
					$this->load->view('template/msg',$data);
					$this->load->view('admin/adminLogin');
				}
				else{
					$log = array(
						'username' => $username,
						'password' => $password
					);
					$flag = $this->admin_model->admin_verify($log);
					if($flag){
						$this->load->view('template/header');
						$this->load->view('admin/adminDashboard');
						$this->load->view('template/footer');
					}
					else{
						$this->load->view('template/header');
						$this->load->view('validation/validateForm');
						$this->load->view('template/footer');
					}
				}
			}
		}
		else{
			$this->load->view('admin/adminLogin');
		}

	}

} 