<?php

class Project  extends CI_Controller
{
	function __construct() {
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->database(); 
	}

	public function recup($tab, $id = null, $from = null){
		$sql = '';

		if(isset($tab['select']) && !empty($tab['select']))
			$sql .= ' SELECT '.$tab['select'];
		else 
			$sql .= ' SELECT *';
		
		$sql .= ' FROM '. $tab['table'];

		if(isset($tab['id']) && !empty($tab['id']))
			$sql .= ' WHERE '.$tab['table'].'.id = '.$tab['id'];
			
		if ($id != null && $from != null) {
			$sql .= ' WHERE '.$tab['table'].'.id_'.$from.' = '.$id;
		}

		$result = [];

		foreach ($this->db->query($sql)->result() as $k => $v) {
			$result[$k]['object'] = $v;
			
			if(isset($tab['join'])) {
				foreach ( $tab['join'] as $j ){
					$result[$k]['join'][$j['table']] = $this->recup($j, $v->id, $tab['table']);
				}
			}
		}

		return $result;
	}

	public function prev($id){
		$select = 'SELECT id, name, image_home as image ';
		$from = 'FROM projects ';

		$sql = $select.$from.'WHERE id < '.$id.' ORDER BY id DESC LIMIT 1';

		$result = $this->db->query($sql)->result();
		if(!empty($result)){
			return $result[0];
		} else {
			$sql = $select.$from.'ORDER BY id DESC LIMIT 1';
			$result = $this->db->query($sql)->result();
			return $result[0];
		}
	}
	public function next($id){
		$select = 'SELECT id, name, image_home as image ';
		$from = 'FROM projects ';

		$sql = $select.$from.'WHERE id > '.$id.' LIMIT 1';

		$result = $this->db->query($sql)->result();
		if(!empty($result)){
			return $result[0];
		} else {
			$sql = $select.$from.'ORDER BY id ASC LIMIT 1';
			$result = $this->db->query($sql)->result();
			return $result[0];
		}
	}
}
