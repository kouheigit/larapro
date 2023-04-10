<?php

namespace App\Http\Controllers\Admin;
use App\Models\Testform;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class JsController extends Controller
{
    public function ajaxchange4(Request $request)
    {

    }

    public function jschange4(Request $request)
    {

        $value = Testform::all();
        $i = 0;
        foreach($value as $values){
            $changes[$i] = $values->name;
            $i++;
        }
        return view('admin.jschange4',compact('changes'));
    }
}
