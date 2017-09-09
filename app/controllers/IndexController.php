<?php

namespace App\controllers;

use App\models\News;
use Engine\Controller;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index()
    {
        $news = new News();
        $allNews = $news->getNews();

        $this->view->render('default/index', [
            'news' => $allNews,
            'hello' => Carbon::now()
        ]);
    }
}