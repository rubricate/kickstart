<?php

namespace App\Http\Controller\Admin;

use App\Helper\ViewHelper;

class AuthController
{
    public function __construct() 
    { 
    }

    public function indexAction()
    {
        header('location: ./admin-auth/login');
    } 

    public function loginAction()
    {
        $view = new ViewHelper();
        $view->render('admin/page/auth/login');
    } 

}

