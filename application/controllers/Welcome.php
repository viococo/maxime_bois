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
	
	public function project($id)
	{
		if(isset($id) && !empty($id) && is_numeric($id)){
			$data['data']['project'] = $this->project->recup(array(
				'table' => 'projects',
				'id' => $id,
				'join' => [
					0 => [
						'table' => 'items',
					], 
					1 => [
						'table' => 'sections',
						'join' => [
							0 => [
								'table' => 'content',
							],
						],
					],
				],
			));
			
			/* 
			echo '<pre>';
			var_dump($data['data']['project'][0]);
			echo '</pre>'; 
			*/

			if (empty($data['data']['project']))
				redirect();

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
					'color' => 'light',
					'rs' => false,
				],
				'page' => 'project',
				'footer' => false,			
			];
			 $this->load->view('template/t_standard', $data);
		} else {
			redirect();
		}
	}
}
