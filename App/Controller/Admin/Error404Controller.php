<?php

namespace App\Controller\Admin;

use App\Helper\ViewHelper;

class Error404Controller
{
    public function __construct() 
    { 
    }

    public function indexAction()
    {
        $view = new ViewHelper();
        $view->render('admin/error404');
    } 
}

