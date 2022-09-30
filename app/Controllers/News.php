<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{

    public function index(){
        $model = model(NewsModel::class);
        $data = [
            'title' => 'News',
            'news' => $model->getNews()
        ];

        return $data;
    }

}
