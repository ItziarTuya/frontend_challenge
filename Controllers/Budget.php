<?php namespace App\Controllers;

use Categories;
use App\Models\CategoriesModel;

class Budget extends BaseController
{
	public function index()
	{

		 $model = new CategoriesModel();

        var_dump( $model->getCategories() );
		echo view('pages/home');
		echo view('pages/card1');
		echo view('pages/about');
	
	}

	public function create()
	{
		$session = \Config\Services::session($config);
		$parser = \Config\services::parser();

		if( !$this->validate([
			'description'	=> 'required|max_length[225]',
		]))
		{
			echo view('templates/header');

			$data = [
				'professional' => 'Encuentra profesionales de confianza.',
				'start'        => 'Comenzar',
			];

			echo $parser->setData($data)
						->render('welcome_habitissimo');
		}
		else
		{
			$newdata = [
				'description'	=> $this->request->getPost("description"),
				'time'			=> $this->request->getPost("time")];

			$session->set($newdata);

			var_dump($session->get());

			$categoriesController = New Categories;

			$categories = $categoriesController->getCategories();

			var_dump($categories);

			echo view('pages/home');
			echo view('pages/card2');
			echo view('pages/about');

		}
	}
}
