<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class News extends BaseController
{
	public function index()
	{
		helper('html');
		$model = model(NewsModel::class);

        $data['news'] = $model->getNews();
		$data['title'] = 'News Archive';

		echo view('templates/header', $data);
		echo view('templates/nav', $data);
		echo view('news/overview', $data);
		echo view('templates/footer', $data);
	}

	public function view($slug = null)
    {
		helper('html');
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

		if (empty($data['news'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
		}

		$data['title'] = $data['news']['title'];

		echo view('templates/header', $data);
		echo view('templates/nav', $data);
		echo view('news/view', $data);
		echo view('templates/footer', $data);
    }

	public function create()
	{
		helper('html');
		$model = model(NewsModel::class);
		$data = [];
		// helper('form');

		if ($this->request->getMethod() === 'post' && $this->validate([
			'title' => 'required|min_length[3]|max_length[255]',
			'body'  => 'required',
		])) {
			$model->save([
				'title' => $this->request->getPost('title'),
				'slug'  => url_title($this->request->getPost('title'), '-', true),
				'body'  => $this->request->getPost('body'),
			]);

			return redirect()->to('/news');
			// echo view('news/success');
		} else {
			echo view('templates/header', ['title' => 'Create a news item']);
			echo view('templates/nav', $data);
			echo view('news/create');
			echo view('templates/footer');
		}
	}
}
