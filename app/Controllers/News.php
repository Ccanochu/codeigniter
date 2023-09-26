<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        $model = new NewsModel();
        $data['news'] = $model->findAll();
        
        return view('news/index', $data);
    }

    public function create()
    {
        return view('news/create');
    }

    public function store()
    {
        $model = new NewsModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'slug' => url_title($this->request->getPost('title'), '-', true),
            'body' => $this->request->getPost('body')
        ];
        $model->insert($data);

        return redirect()->to('/news');
    }

    public function edit($id)
    {
        $model = new NewsModel();
        $data['news'] = $model->find($id);
        
        return view('news/edit', $data);
    }

    public function update($id)
    {
        $model = new NewsModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'slug' => url_title($this->request->getPost('title'), '-', true),
            'body' => $this->request->getPost('body')
        ];
        $model->update($id, $data);

        return redirect()->to('/news');
    }

    public function delete($id)
    {
        $model = new NewsModel();
        $model->delete($id);

        return redirect()->to('/news');
    }
}
