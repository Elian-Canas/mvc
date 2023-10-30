<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        return $this->view('home');
    }

    public function view($route)
    {
        if (file_exists("../resources/views/{$route}.php")) {
            
            ob_start();
            
            include "../resources/views/{$route}.php";
            
            $content = ob_get_clean();

            return $content;
        } else {
            return "E>l archivo no existe";
        }

    }
}