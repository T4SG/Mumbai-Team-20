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
		$sql = "SELECT flag FROM user WHERE username = '$username' AND password = '$password'";
		$query = mysql_query($sql);
		
	}

} 