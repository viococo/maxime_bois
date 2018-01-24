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
			$sql .= ' WHERE '.$tab['table'].'.id = '.$tab['id'];

		$result['object'] = $this->db->query($sql)->result();

		if(isset($tab['join']) && !empty($tab['join'])){
			foreach($tab['join'] as $table_join){
				$sql = ' SELECT * FROM '.$table_join.' WHERE '.$table_join.'.id_'.$tab['table'].' = '.$tab['id'];
				$result['join'][$table_join] = $this->db->query($sql)->result();
			}
		}
		return $result;
	} 
}
