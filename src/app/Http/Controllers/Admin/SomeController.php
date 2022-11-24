<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Someform;


class SomeController extends Controller
{
    public function index(){
        return view('admin.someform');
    }
    public function secondform(Request $request){
        return view('admin.secondform');
    }
}
