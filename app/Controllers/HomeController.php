<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {

        $contactModel = new Contact();

        return $contactModel->create([
            'name' => 'Milton Otavo',
            'email' => 'milton@gmail.com',
            'phone' => '3121131121'
        ]);



        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
    }
}