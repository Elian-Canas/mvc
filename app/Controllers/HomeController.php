<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {

        $contactModel = new Contact();

        return $contactModel->update(6, [
            'name' => 'Hugo Otavo',
            'email' => 'Hugo@gmail.com',
            'phone' => '3121131687'
        ]);



        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
    }
}