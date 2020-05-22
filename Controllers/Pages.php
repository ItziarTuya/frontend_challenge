<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('welcome_habitissimo');
	}

	public function view($page = 'home')
	{
		if (! is_file(APPPATH . '/Views/pages/' . $page . '.php'))
		{
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		echo view('templates/header');
		echo view('pages/' . $page, $data);
	}
}
