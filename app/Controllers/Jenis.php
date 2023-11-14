<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Jenis extends BaseController
{
    public function index()
    {
        return view("data_jenis");
    }
}
