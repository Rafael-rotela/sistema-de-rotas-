<?php

namespace Rjvra\SistemaDeRotas\controllers;

class HomeController
{
    public function index()
    {
        return Controller::view('home', []);
    }
}
