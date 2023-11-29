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

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
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

        // Configuración para la carga de archivos
        $image = $this->request->getFile('image');

        // Verificar si se cargó una imagen
        if ($image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/', $imageName);
        } else {
            $imageName = null; // Si no se cargó una imagen, establecer el nombre a null
        }

        // Guardar en la base de datos
        $model->save([
            'title' => $this->request->getPost('title'),
            'slug' => url_title($this->request->getPost('title'), '-', true),
            'body' => $this->request->getPost('body'),
            'image' => $imageName,
        ]);

        return redirect()->to(base_url('news'));
    }


    public function edit($slug = null)
    {
        $model = new NewsModel();
        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        return view('news/edit', $data);
    }

    public function update()
    {
        $model = new NewsModel();

        // Obtener la noticia actual
        $currentNews = $model->find($this->request->getPost('id'));

        // Configuración para la carga de archivos
        $newImage = $this->request->getFile('new_image');

        // Verificar si se cargó una nueva imagen
        if ($newImage->isValid()) {
            // Mover la nueva imagen y obtener el nombre
            $imageName = $newImage->getRandomName();
            $newImage->move(ROOTPATH . 'public/uploads/', $imageName);

            // Eliminar la imagen anterior si existe
            if (!empty($currentNews['image'])) {
                unlink(ROOTPATH . 'public/uploads/' . $currentNews['image']);
            }
        } else {
            // Si no se cargó una nueva imagen, conservar la imagen actual
            $imageName = $currentNews['image'];
        }

        // Actualizar en la base de datos
        $model->update($this->request->getPost('id'), [
            'title' => $this->request->getPost('title'),
            'slug' => url_title($this->request->getPost('title'), '-', true),
            'body' => $this->request->getPost('body'),
            'image' => $imageName,
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
