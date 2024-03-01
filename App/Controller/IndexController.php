<?php

namespace App\Controller;

use App\Helper\ViewHelper;

class IndexController
{
    public function __construct() 
    { 
    }

    public function indexAction()
    {
        $view = new ViewHelper();
        $view->render('index');
    } 
}

