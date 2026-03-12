<?php

namespace App\Http\Controller;

use App\Helper\ViewHelper;

class Error404Controller
{
    public function indexAction()
    {
        $view = new ViewHelper();
        $view->render('page/error404');
    } 
}

