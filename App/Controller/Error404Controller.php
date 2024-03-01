<?php

namespace App\Controller;

use App\Helper\ViewHelper;

class Error404Controller
{
    public function indexAction()
    {
        $view = new ViewHelper();
        $view->render('error404');
    } 
}

