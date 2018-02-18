<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	public function index()
	{
		$data['data'] = [];
		$data += [
			'header' => [
				'title' => 'Maxime Bois',
				'description' => 'à changer',
				'libsjs' => [],
				'js' => ['main'],
				'libscss' => [],
				'css' => ['font-awesome.min','main'],
			],
			'jQuery' => true,
			'menu' => [
				'visible' => true,
				'color' => 'lightLeft',
				'rs' => true,
			],
			'page' => 'about',
			'footer' => false,			
		];
		$this->load->view('template/t_standard', $data);
	}
}
