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
		
	}

} 