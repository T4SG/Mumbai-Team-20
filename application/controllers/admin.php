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
		$this->load->library('session');
	}

	public function index(){
		$this->adminAuthenticate();
	}

	public function adminAuthenticate(){
		$this->load->library('session');
		$this->load->library('form_validation');
		$data['schools'] = $this->admin_model->schools();
		if(isset($_POST['login'])){
			$this->form_validation->set_rules('username','Username','required|valid_email|trim');
			$this->form_validation->set_rules('password','Password','required|trim');
			if($this->form_validation->run()!=FALSE){
				$username = $_POST['username'];
				$password = hash('sha256',$_POST['password']);
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
					$status = $this->admin_model->admin_verify($log);
					if($status){
						$this->session->set_userdata('user', '$username');
						$data['user'] = "$username";
						$this->load->view('template/header',$data);
						$this->load->view('admin/adminDashboard',$data);
						$this->load->view('template/footer');
					}
					else{
						$data['user'] = "$username";
						$this->load->view('template/header',$data);
						$this->load->view('validation/validateForm');
						$this->load->view('template/footer');
					}
				}
			}
			else{
				$data['error'] = "Error Authenticating";
				$this->load->view('template/msg',$data);
				$this->load->view('admin/adminLogin');
			}
		}
		else{
			$this->load->view('admin/adminLogin');
		}
	}

	public function adminDashboard(){
		if(isset($_POST['user'])){
			$this->addUser();
		}
		else if(isset($_POST['admin'])){
			$this->addAdmin();
		}
		else if(isset($_POST['evaluate'])){
			$this->dataEvaluation();
		}
	}

	public function addUser(){
		$data['schools'] = $this->admin_model->schools();
		$this->load->library('form_validation');
		if(isset($_POST['addUser'])){
			$this->form_validation->set_rules('name','Name','required|alpha|trim');
			$this->form_validation->set_rules('user','Username','required|trim|valid_email');
			$this->form_validation->set_rules('password','Password','required|trim');
			$this->form_validation->set_rules('passwordC','Confirm Password','required|trim');
			$this->form_validation->set_rules('country','Country','required|trim|alpha');
			$this->form_validation->set_rules('city','City','required|trim|alpha');
			$this->form_validation->set_rules('mob','Mobile No','required|numeric|trim');
			if($this->form_validation->run()!=FALSE){
				$username = $_POST['user'];
				$name = $_POST['name'];
				$password = $_POST['password'];
				$Cpassword = $_POST['passwordC'];
				$country = $_POST['country'];
				$city = $_POST['city'];
				$mobile = $_POST['mob'];
				if($password==$Cpassword){
					$password = hash('sha256',$password);
					$addUser = array(
						"name" => $name,
						"username" => $username,
						"password" => $password,
						"country" => $country,
						"city" => $city,
						"mobile" => $mobile
					);
					if($username=="" || $name=="" || $password=="" || $country=="" || $city=="" || $mobile==""){
						$data['warning'] = "Please enter all fields";
						$this->load->view('template/header');
						$this->load->view('template/msg');
						$this->load->view('admin/addUser');
						$this->load->view('template/footer');
					}
					else{
						$user = $this->admin_model->addUser($addUser);
						if($user!=FALSE){
							$data['success'] = $user;
							$this->load->view('template/header');
							$this->load->view('template/msg');
							$this->load->view('admin/adminDashboard',$data);
							$this->load->view('template/footer');
						}
						else{
							$data['warning'] = "Database entry failed!";
							$this->load->view('template/header');
							$this->load->view('template/msg');
							$this->load->view('admin/addUser');
							$this->load->view('template/footer');
						}
					}
				}
				else{
					$data['warning'] = "Password mismatch!";
					$this->load->view('template/header');
					$this->load->view('template/msg');
					$this->load->view('admin/addUser');
					$this->load->view('template/footer');
				}
			}
			else{
				$data['error'] = "Validation failed!";
				$this->load->view('template/header');
				$this->load->view('template/msg');
				$this->load->view('admin/addUser');
				$this->load->view('template/footer');
			}
		}
		else{
			$this->load->view('template/header');
			$this->load->view('admin/addUser');
			$this->load->view('template/footer');
		}
	}

	public function addAdmin(){
		$data['schools'] = $this->admin_model->schools();
		$this->load->library('form_validation');
		if(isset($_POST['addUser'])){
			$this->form_validation->set_rules('name','Name','required|alpha|trim');
			$this->form_validation->set_rules('user','Username','required|trim|valid_email');
			$this->form_validation->set_rules('password','Password','required|trim');
			$this->form_validation->set_rules('passwordC','Confirm Password','required|trim');
			$this->form_validation->set_rules('country','Country','required|trim|alpha');
			$this->form_validation->set_rules('city','City','required|trim|alpha');
			$this->form_validation->set_rules('mob','Mobile No','required|numeric|trim');
			if($this->form_validation->run()!=FALSE){
				$username = $_POST['user'];
				$name = $_POST['name'];
				$password = $_POST['password'];
				$Cpassword = $_POST['passwordC'];
				$country = $_POST['country'];
				$city = $_POST['city'];
				$mobile = $_POST['mob'];
				if($password==$Cpassword){
					$password = hash('sha256',$password);
					$addUser = array(
						"name" => $name,
						"username" => $username,
						"password" => $password,
						"country" => $country,
						"city" => $city,
						"mobile" => $mobile
					);
					if($username=="" || $name=="" || $password=="" || $country=="" || $city=="" || $mobile==""){
						$data['warning'] = "Please enter all fields";
						$this->load->view('template/header');
						$this->load->view('template/msg');
						$this->load->view('admin/addUser');
						$this->load->view('template/footer');
					}
					else{
						$user = $this->admin_model->addAdmin($addUser);
						if($user!=FALSE){
							$data['success'] = $user;
							$this->load->view('template/header');
							$this->load->view('template/msg');
							$this->load->view('admin/adminDashboard',$data);
							$this->load->view('template/footer');
						}
						else{
							$data['warning'] = "Database entry failed!";
							$this->load->view('template/header');
							$this->load->view('template/msg');
							$this->load->view('admin/addAdmin');
							$this->load->view('template/footer');
						}
					}
				}
				else{
					$data['warning'] = "Password mismatch!";
					$this->load->view('template/header');
					$this->load->view('template/msg');
					$this->load->view('admin/addAdmin');
					$this->load->view('template/footer');
				}
			}
			else{
				$data['error'] = "Validation failed!";
				$this->load->view('template/header');
				$this->load->view('template/msg');
				$this->load->view('admin/addAdmin');
				$this->load->view('template/footer');
			}
		}
		else{
			$this->load->view('template/header');
			$this->load->view('admin/addAdmin');
			$this->load->view('template/footer');
		}
	}

	public function logout(){
		$this->load->library('session');
		$this->session->unset_userdata('user');
		session_destroy();
		$this->load->view('admin/adminLogin');
	}

	public function dataEvaluation(){
		$this->load->library('form_validation');
		if(isset($_POST['evaluation'])){
			$this->form_validation->set_rules('ce','Cost','required|numeric');
			$this->form_validation->set_rules('tr','Time','required|numeric');
			$this->form_validation->set_rules('rr','Responsiveness','required|numeric');
			$this->form_validation->set_rules('fr','Distance','required|numeric');
			$this->form_validation->set_rules('cr','Collaboration','required|numeric');
			$this->form_validation->set_rules('sr','Support','required|numeric');
			if($this->form_validation->run()!=FALSE){
				$ce = $_POST['ce'];
				$tr = $_POST['tr'];
				$rr = $_POST['rr'];
				$fr = $_POST['fr'];
				$cr = $_POST['cr'];
				$sr = $_POST['sr'];

				if($ce=="" || $tr=="" || $rr=="" || $fr=="" || $cr=="" || $sr==""){
					$data['error'] = "All fields are required";
					$this->load->view('template/header');
					$this->load->view('template/msg',$data);
					$this->load->view('admin/dataEvalve');
					$this->load->view('template/footer');
				}
				else{
					$evaluation = array(
						"ce" => $ce,
						"tr" => $tr,
						"rr" => $rr,
						"fr" => $fr,
						"cr" => $cr,
						"sr" => $sr
					);
					$db['evaluated'] = $this->admin_model->dataEvaluation($evaluation);
					if(isset($db['evaluated'])){
						$this->load->view('template/header');
						$this->load->view('admin/dataEvaluated',$db);
						$this->load->view('template/footer');
					}
				}
			}
			else{
				$data['error'] = "Validation Failed";
				$this->load->view('template/header');
				$this->load->view('template/msg',$data);
				$this->load->view('admin/dataEvalve');
				$this->load->view('template/footer');
			}
		}
		else{
			$this->load->view('template/header');
			$this->load->view('admin/dataEvalve');
			$this->load->view('template/footer');
		}
	}
}