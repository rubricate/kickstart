<?php

namespace App\Controller\Admin;

use App\Helper\ViewHelper;

class SignController
{
    public function __construct() 
    { 
    }

    public function indexAction()
    {
        header('location: ./admin-sign/in');
    } 

    public function inAction()
    {
        $view = new ViewHelper();
        $view->render('admin/sign/in');
    } 

}

