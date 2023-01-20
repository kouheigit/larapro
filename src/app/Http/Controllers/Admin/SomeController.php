<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Someform;
use Carbon\Carbon;

class SomeController extends Controller
{
    public function jstest3(Request $request)
    {
        return view('admin.jstest3');
    }

    public function somejs(Request $request)
    {
        return view('admin.somejs');
    }


    public function fixwave(Request $request)
    {
        $day = new Carbon();
        $days = $day->toDateTimeString();

        $day_2 = new Carbon("2022-12-30");
        if($day_2 > $days){
            $day = 1;
        }else{
            $day = 0;
        }

        return view('admin.fixwave',compact('day'));
    }
    public function jstest2(Request $request)
    {
        $apple = $request->apple;
        $banana = $request->banana;

        return view('admin.jstest2');
    }
    public function jstest1()
    {
        return view('admin.jstest1');
    }

    public function jsajax(Request $request){
        $test = $request->test;
        return response()->json($test);
    }

    public function jstest(){
        return view('admin.jstest');
    }

    public function index(){
        return view('admin.someform');
    }
    public function secondform(Request $request)
    {
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
