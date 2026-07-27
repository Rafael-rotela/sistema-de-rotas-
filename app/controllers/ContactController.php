<?php

namespace Rjvra\SistemaDeRotas\controllers;


class ContactController
{
    public function index()
    {
        Controller::view('contact');
    }

    public function store()
    {
        var_dump('index do store');
    }
}
