<?php

namespace App\Http\Controller;

use App\Helper\ViewHelper;

class IndexController
{
    public function __construct() 
    { 
    }

    public function indexAction()
    {
        $view = new ViewHelper();
        $view->render('page/index');
    } 
}

