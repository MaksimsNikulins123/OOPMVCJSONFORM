<?php 

namespace application\controllers;

use application\core\Controller;

class ProductController extends Controller 
{

    public $idArray = [];
    public $inputs = [];


    public function showAction()
    {
        $this->view->render('Addproduct');
       
    }

    public function addAction($inputs)
    {
        

        $this->model->addProduct($inputs);

        // $this->view->render('Addproduct');

        // $this->view->redirect('/');

        // $this->view->render('Product List');

    }

    // public function cancelAction($inputs)
    // {
    //     $this->view->render('Addproduct');
    // }

    

}