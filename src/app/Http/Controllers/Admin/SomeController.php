<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SomeController extends Controller
{
    public function index(){
        return view('admin.someform');
    }
}
