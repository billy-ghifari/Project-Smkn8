<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_trash extends Controller
{
    public function index(){
        return view('trash');
    }
}
