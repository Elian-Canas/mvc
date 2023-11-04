<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {

        $contactModel = new Contact();

        return $contactModel->update(8, [
            'name' => 'Andres',
            'email' => 'andres@gmail.com',
            'phone' => '319863623'
        ]);


        

        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
    }
}