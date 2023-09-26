<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'body'];

    protected $beforeInsert = ['generateSlug'];

    protected function generateSlug(array $data)
    {
        $data['data']['slug'] = url_title($data['data']['title'], '-', true);
        return $data;
    }
}
