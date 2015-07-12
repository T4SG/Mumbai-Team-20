<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 11/7/15
 * Time: 6:51 PM
 */

class validation_model extends CI_Model{

	public function __construct() {
		parent:: __construct();
		$this->load->helper('form');
	}

	public function validate($valid){
		echo("1");
		extract($valid);
		echo("2");
			$query = "INSERT INTO school(Name,UserName,NoOfStudents,CostOfSchool,Responsiveness,Support,collaborate,TimeLine,Intake,State,Country,Place,FreqND) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)" or die(mysql_error());
			echo $query;
			echo $this->db->query($query, array($nameOfSchool,$name,$presentStudent,$cost,$responsive,$support,$collaborate,$duration,$expectedStudent,$state,$country,$city,$freqnd));
			echo $this->db->last_query();
			/*if(//$sql){
				$success = "Your request has been sent successfully";
				return $success;
			}
			else return FALSE;
		*/}


} 