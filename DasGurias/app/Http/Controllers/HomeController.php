<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('home');

    }
    public function calca(){

        return view('calca');
    }
    public function blusa(){

        return view('blusa');
    }
    public function vestido(){

        return view('vestido');
    }

}
