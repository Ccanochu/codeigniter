<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
        $model = new NewsModel();
        $data['news'] = $model->getNews();
        
        return view('news/index', $data);
    }

    public function view($slug = null)
    {
        $model = new NewsModel();
        $data['news'] = $model->getNews($slug);

        if (empty($data['news']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
        }

        return view('news/view', $data);
    }

    public function create()
    {
        return view('news/create');
    }

    public function store()
    {
        $model = new NewsModel();

        $model->save([
            'title' => $this->request->getPost('title'),
            'slug'  => url_title($this->request->getPost('title'), '-', true),
            'body'  => $this->request->getPost('body'),
        ]);

        return redirect()->to(base_url('news'));
    }

    public function edit($slug = null)
    {
        $model = new NewsModel();
        $data['news'] = $model->getNews($slug);

        if (empty($data['news']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
        }

        return view('news/edit', $data);
    }

    public function update()
    {
        $model = new NewsModel();

        $model->update($this->request->getPost('id'), [
            'title' => $this->request->getPost('title'),
            'slug'  => url_title($this->request->getPost('title'), '-', true),
            'body'  => $this->request->getPost('body'),
        ]);

        return redirect()->to(base_url('news'));
    }

    public function delete($id = null)
    {
        $model = new NewsModel();

        $model->delete($id);

        return redirect()->to(base_url('news'));
    }
}
