<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 11/7/15
 * Time: 8:13 PM
 */

class admin_model extends CI_Model{

	public function __construct() {
		parent:: __construct();
		$this->load->helper('form');
	}

	public function admin_verify($log){
		extract($log);
		$sql = "SELECT status FROM user WHERE Email = '$username' AND Password = '$password'";
		$query = $this->db->query($sql);
		$status = 0;
		foreach($query->result_array() as $fetchrow){
			$status = $fetchrow['status'];
		}
		if($status==1){
			return TRUE;
		}
		else if($status==0){
			return FALSE;
		}
	}

	public function addUser($addUser){
		extract($addUser);
		$sql = "INSERT INTO user(Password,Name,Country,City,Mob,Email,status) VALUES(?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, array($password,$name,$country,$city,$mobile,$username,0));
		if($query){
			$ret = "Local Partner <b>".$name."</b> added successfully";
		}
		else return FALSE;
	}

	public function addAdmin($addAdmin){
		extract($addAdmin);
		$sql = "INSERT INTO user(Password,Name,Country,City,Mob,Email,status) VALUES(?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, array($password,$name,$country,$city,$mobile,$username,1));
		if($query){
			$ret = "HHF member <b>".$name."</b> added successfully";
		}
		else return FALSE;
	}

} 