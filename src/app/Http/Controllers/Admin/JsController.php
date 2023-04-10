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
        $id1hidden = $request->id1hidden;
        $id2hidden = $request->id2hidden;

        if($id1hidden==0){
            Testform::where('id',3)->update(['name'=>1]);
        }else{
            Testform::where('id',3)->update(['name'=>0]);
        }

        if($id2hidden==0){
            Testform::where('id',4)->update(['name'=>1]);
        }else{
            Testform::where('id',4)->update(['name'=>0]);
        }
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
