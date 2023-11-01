<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {

        $contactModel = new Contact();

        $contactModel->delete(7);


        return "Eliminado";

        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
    }
}