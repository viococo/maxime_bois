<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {
	
	public function project($id)
	{
		if(isset($id) && !empty($id) && is_numeric($id)){

			$data['data']['project'] = $this->project->recup(array(
				'table' => 'projects',
				'id' => $id,
				'join' => [
					[
						'table' => 'items',
					], [
						'table' => 'sections',
						'join' => [
							[
								'table' => 'content',
								'join' => [
									[
										'table' => 'background',
									]
								],
							],
						],
					],
				],
			));

			if (empty($data['data']['project']))
				redirect();

			$data['data']['prev'] = $this->project->prev($id);
			$data['data']['next'] = $this->project->next($id);
			
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
