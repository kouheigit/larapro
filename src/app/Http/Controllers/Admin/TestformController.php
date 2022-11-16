<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestformController extends Controller
{
    public function index(){
        return view('admin.testform');
    }
    public function indexpost(Request $request){
        $value = [
        $name = $request->input('name'),
        $comment = $request->input('comment'),
        $samp = $request->input('samp'),
        $samp1 = $request->input('samp1'),
        $form_count = $request->input('form_count'),
        $form_counts = count($form_count),
        ];

        dd($value);
        //insert method;
    }
}
