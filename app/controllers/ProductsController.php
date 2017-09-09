<?php

namespace App\controllers;

use Engine\Controller;
use App\models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        
        var_dump($this->request->getMethod());
        die('Show here method GET or POST');
        
        
    	$model = new Products();
    	$products = $model->findAll();
        
        $this->view->render('products/index', [
        	'products' => $products
        ]);
    }

    public function insert(){
        $products = new Products();

        $products->insert([
            'title' => 'Apple',
            'price' => '123',
            'description' => 'Apple desc'
        ]);
    }
    public function update(){
        $products = new Products();

        $products->update(2, [
            'title' => 'Apple test',
            'price' => '123',
            'description' => 'Apple desc'
        ]);
    }

    public function delete(){
        $products = new Products();

            $products->delete(3);
    }

}