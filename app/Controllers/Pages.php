<?php

namespace App\Controllers;

class Pages extends BaseController{
    public function index(){
        echo view('templates/header');
        echo view('contenido');
        echo view('templates/footer');
    }

    public function prueba(){
        echo view('templates/header');
        echo view('contenido_prueba');
        echo view('templates/footer');
    }

    public function view($page = 'contenido')
    {
        if (! is_file(APPPATH .'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('' . $page)
            . view('templates/footer');
    }

}