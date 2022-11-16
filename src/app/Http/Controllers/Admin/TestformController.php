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
        $name = $request->input('name');
        $comment = $request->input('comment');
        $samp = $request->input('samp');
        $samp1 = $request->input('samp1');
        $value = $request->input('value');

        dd($value);
        //insert method;
    }
}
