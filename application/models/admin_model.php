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

	public function schools(){
		$sql = "SELECT Sr FROM school";
		$query = $this->db->query($sql);
		//$rows = mysql_num_rows($query);
		$rows = $query->num_rows();
		return $rows;
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

	public function dataEvaluation($evaluation) { $frequency=50;
		extract($evaluation);
		$sql = "SELECT NoOfStudents,CostOfSchool,Responsiveness,Support,TimeLine,Intake,FreqND,collaborate FROM school";
		$result = $this->db->query($sql);
		//echo $this->db->last_query();
			// output data of each row
		$trun = "truncate table solution";
		$this->db->query($trun);
		foreach($result->result_array() as $row) {

				$cost_per_student = ((6000-$row['CostOfSchool']/$row['Intake'])/900)*$ce;
				$cost_per_student_i = 10*$ce;

				$timeline =  $row['TimeLine']*2*$tr;
				$timeline_i =  10*$tr;

				$responsiveness = ($row['Responsiveness']/4)*$rr;
        $responsiveness_i = 10*$rr;

        if($row['Support']=="FULL")
			$support = 10*$sr;
		else if($row['Support']=="MODERATE")
			$support = 5*$sr;
		else
			$support = 0;
        $support_i = 10*$sr;

        if($row['FreqND']>=75)
			$frequency = 2.5*$fr;
		else if ($row['FreqND']<75 && $row['FreqND']>50)
			$frequency = 5*$fr;
		else if($row['FreqND']<50 && $row['FreqND'] >=25)
			$frequency = 7.5*$fr;
		else
			$frequency = 10*$fr;

        $frequency_i = 10*$fr;
        if($row['collaborate']=="NGO")
        $collaboration = 10*$cr;
        else if($row['collaborate']=="CORPORATE")
        $collaboration = 7.5*$cr;
        else
        $collaboration = 5*$cr;
        $collaboration_i = 10*$cr;

        $result = ($cost_per_student + $timeline + $responsiveness + $support + $frequency + $collaboration )/($cost_per_student_i + $timeline_i + $responsiveness_i + $support_i + $frequency_i + $collaboration_i)*100 ;


        $coste =  ($cost_per_student/$cost_per_student_i)*10;
        $time = ($timeline/$timeline_i)*10;
        $respc = ($responsiveness/$responsiveness_i);
      //  $disr = ($frequency/$frequency_i)*10;
        $coll = ($collaboration/$collaboration_i);
        $suppor = ($support/$support_i)*10;
        $query1 = "INSERT INTO solution(coste,timee,respc,disr,coll,support,result) VALUES (?,?,?,?,?,?,?)";
		$exe = $this->db->query($query1, array($coste,$time,$respc,$frequency,$coll,$suppor,$result));
				//echo $this->db->last_query();
}
		$sql = "SELECT s.Name,s.Place,s.State,s.Country,so.coste,so.timee,so.respc,so.disr,so.coll,so.support,so.result FROM school s,solution so WHERE s.Sr= so.Sr order by so.result desc";
		$exe = $this->db->query($sql);
		//echo $this->db->last_query();
		return $exe;
	}

	public function contactus($contact){
		extract($contact);
		$query = "INSERT INTO contact(name,email,area) VALUES(?,?,?)";
		$sql = $this->db->query($query, array($name,$email,$area));
		return TRUE;
	}
}