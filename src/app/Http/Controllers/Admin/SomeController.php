<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Someform;


class SomeController extends Controller
{
    public function jstest(){
        return view('admin.jstest');
    }

    public function index(){
        return view('admin.someform');
    }
    public function secondform(Request $request){
        $name = $request->input('name');
        $text = $request->input('text');
        $check = $request->input('check');
        $check1 = $request->input('check1');
        $check2 = $request->input('check2');
        $form_count = $request->input('form_count');
     /*   $form_counts = count($form_count);
        dd($form_counts);*/

/*
        for($i=0; $i<$form_counts; $i++){
            echo $i;
        }*/
        return view('admin.secondform');
    }
}
