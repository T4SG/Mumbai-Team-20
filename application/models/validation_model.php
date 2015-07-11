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
		extract($valid);
		if($name==null && $nameOfSchool==null && $cost==null && $duration==null && $cooperation==null && $responsive==null && $expectedStudent==null && $presentStudent==null && $country==null && $state==null && $city==null){
			return FALSE;
		}
		else{
			$query = "INSERT INTO school(Name,UserName,NoOfStudents,CostOfSchool,Responsiveness,Support,TimeLine,Intake,State,Country,Place) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			$sql = $this->db->query($query, array($nameOfSchool,$name,$presentStudent,$cost,$responsive,$cooperation,$duration,$expectedStudent,$state,$country,$city));
			if($sql==1){
				$success = "Your request has been sent successfully";
				return $success;
			}
			else return FALSE;
		}
	}

} 