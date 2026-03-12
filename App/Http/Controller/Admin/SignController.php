<?php

namespace App\Http\Controller\Admin;

use App\Helper\ViewHelper;

class SignController
{
    public function __construct() 
    { 
    }

    public function indexAction()
    {
        header('location: ./admin-auth/login');
    } 

    public function inAction()
    {
        $view = new ViewHelper();
        $view->render('admin/auth/login');
    } 

}

