<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ngetesaja extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Nyoba aja",
            "name" => "Nisrina"
        ];

        echo view('index', $data);
    }
}