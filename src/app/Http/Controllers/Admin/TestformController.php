<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TestformController extends Controller
{
    public function index(){
        return view('admin.testform');
    }

}
