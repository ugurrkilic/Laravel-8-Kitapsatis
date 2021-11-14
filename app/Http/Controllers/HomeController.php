<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

class HomeController extends Controller
{
    //
    public function index($id,$name)
    { 
        return view('home.index'); 

    }
}