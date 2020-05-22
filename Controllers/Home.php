<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$parser = \Config\services::parser();

		echo view('templates/header');

		$data = [
			'professional' => 'Encuentra profesionales de confianza.',
			'start'        => 'Comenzar',
		];

		echo $parser->setData($data)
					->render('welcome_habitissimo');
	}

}
