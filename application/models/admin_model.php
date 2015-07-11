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
		$sql = "SELECT flag FROM user WHERE username = '$username' AND password = '$password' LIMIT 1";
		$query = mysql_query($sql);
		$flag = 0;
		while($data = mysql_fetch_array($query)){
			$flag = $data['flag'];
		}
		if(flag==1){
			return TRUE;
		}
		else if(flag==0){
			return FALSE;
		}
	}

} 