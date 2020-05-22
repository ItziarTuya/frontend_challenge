<?php namespace App\Contollers;

use App\Models\CategoriesModel;

class CategoriesController extends BaseController
{
	public function index()
    {
        $model = new CategoriesModel();

		$data = [
	        'news'  => $model->getCategories(),
		    'title' => 'News archive'
    ];
	var_dump($data);
		echo view('overview', $data);

    }

	public function getCategories()
    {
        $model = new CategoriesModel();

        return $model->getCategories();

    }
    public function view($slug = null)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);
    }
}
