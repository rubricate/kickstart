<?php

namespace App\Controller;

use App\Helper\ViewHelper;

class AdminController
{
    public function __construct() 
    { 
    }

    public function indexAction()
    {
        header('location: ./admin-sign/in');
    } 

}

