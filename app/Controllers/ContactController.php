<?php

namespace App\Controllers;

class ContactController extends Controller
{
    public function index()
        {
            return "Aquí se mostrará el listado de contactos";
        }
    
    public function create()
    {
        return "Aqui se mostrara el formulario para crear un contacto";
    }

    public function store()
    {
        return "Aquí se procesará el formulario para crear un contacto";
    }

    public function show($id)
    {
        return "Aquí se mostrará el contacto con id: $id";
    }

    public function edit($id)
    {
        return "Aquí se mostrará el formulario para editar el contacto con id: $id";
    }

    public function update($id)
    {
        return "Aqui se procesara el formulario para editar el contacto con id: $id";
    }

    public function destroy($id)
    {
        return "Aqui se procesará la peticion para eliminar el contacto con id: $id";
    }
}