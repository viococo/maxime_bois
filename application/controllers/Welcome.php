<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data['data']['projects'] = $this->project->recup(array(
			'table' => 'projects',
			'select' => 'image_home, texte_home, name, speciality, id',
		));
		$data += [
			'header' => [
				'title' => 'Maxime Bois',
				'description' => 'à changer',
				'libsjs' => ['jquery.fullPage'],
				'js' => ['main'],
				'libscss' => ['jquery.fullPage'],
				'css' => ['font-awesome.min','main'],
			],
			'jQuery' => true,
			'menu' => [
				'visible' => true,
				'color' => 'lightRight',
				'rs' => true,
			],
			'page' => 'home',
			'footer' => false,			
		];
		$this->load->view('template/t_standard', $data);
	}
	
}
