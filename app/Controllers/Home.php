<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('template', [
            'title' => 'ITE311 Martinez',
            'content' => view('home'),
        ]);
    }
}