<?php 

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller 
{
    public function showAction()
    {
        $result = $this->model->getProducts();
        
        $vars = [
            'products' => $result
        ];
        $this->view->render('Product List', $vars);
    }

    public function deleteAction($idArray)
    {
        $this->model->deleteCheckedProducts($idArray);   
        
    }

    

}