<?php

namespace App\Controllers;

class CarreraController extends BaseController
{
    public function index()
    {
        return view('Carrera/carreras');
    }
}
