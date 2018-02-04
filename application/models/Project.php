<?php

class Project  extends CI_Controller
{
	function __construct() {
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->database(); 
	}
	public function recup($tab){
		var_dump($tab);
		$sql = '';

		if(isset($tab['select']) && !empty($tab['select']))
			$sql .= ' SELECT '.$tab['select'];
		else 
			$sql .= ' SELECT *';
		
		$sql .= ' FROM '. $tab['table'];

		if(isset($tab['id']) && !empty($tab['id']))
			$sql .= ' WHERE '.$tab['table'].'.id = '.$tab['id'];
			

		if(isset($tab['where']) && !empty($tab['where']))
			$sql .= ' WHERE '.$tab['table'].'.id_'.$tab['where'].' = '.$tab['where'].'.id';

		foreach ($this->db->query($sql)->result() as $k => $v) {
			$result[$k]['object'] = $v;
			if(isset($tab['join']) && !empty($tab['join'])){
				foreach($tab['join'] as $value){
					$result[$k]['join'][$value['table']] = $this->recup($value);
				}
			}
		}

		
		return $result;
	} 
}
