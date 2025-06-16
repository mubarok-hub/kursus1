<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class haloController extends Controller
{
    public function index()
    { 
        return 'Halo dari controller';
    }

    public function tampilNama($nama)
    {
        return "halo, $nama!";
    }
}
