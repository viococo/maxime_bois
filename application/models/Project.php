<?php

class Project  extends CI_Controller
{
	function __construct() {
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->database(); 
	}
	public function recup($tab){
		$sql = '';

		if(isset($tab['select']) && !empty($tab['select']))
			$sql .= ' SELECT '.$tab['select'];
		else 
			$sql .= ' SELECT *';
		
		$sql .= ' FROM '. $tab['table'];

		if(isset($tab['id']) && !empty($tab['id']))
			$sql .= ' WHERE id_project = '.$tab['id'];

		$result = $this->db->query($sql)->result();
		if (count($result) == 1)
			return $result[0];
		else
			return $result;
	} 
}
