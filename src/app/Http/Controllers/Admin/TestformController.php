<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TestformController extends Controller
{
    public function index(Request $request){
        return view('admin.testform',compact('request'));
    }
    public function indexpost(Request $request){
        $name = $request->input('name');
        $comment = $request->input('comment');
        $samp = $request->input('samp');
        $samp1 = $request->input('samp1');

        //insert method;
    }
}
