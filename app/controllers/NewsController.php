<?php

namespace App\controllers;

use Engine\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $this->view->render('news/index');
    }
    
    public function one()
    {
        echo "News Onew Page";
    }
}