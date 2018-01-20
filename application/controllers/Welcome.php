<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data = [
			'header' => [
				'libsjs' => ['jquery.fullPage'],
				'js' => ['main'],
				'libscss' => ['jquery.fullPage'],
				'css' => ['font-awesome.min','main'],
				'title' => 'Maxime Bois',
				'description' => 'à changer',
			],
			'jQuery' => true,
			'menu' => [
				'visible' => true,
				'color' => 'light',
			],
			'page' => 'home',
			'footer' => false,			
		];
		$this->load->view('template/t_standard', $data);
	}
}
