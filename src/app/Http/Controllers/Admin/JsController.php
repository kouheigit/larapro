<?php

namespace App\Http\Controllers\Admin;
use App\Models\Jstest;
use App\Models\Testform;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class JsController extends Controller
{
    public function jschange5(Request $request)
    {
        return view('admin.jschange5');
    }
    public function jschange5post(Request $request)
    {
        $one = $request->input('one');
        $two = $request->input('two');
        $three = $request->input('three');
        for($i=0; $i<15; $i++){
            $value = [
                'one' => $one[$i],
                'two' => $two[$i],
                'three'=>$three[$i],
            ];
            //Jstest::insert($value);
        }
        return redirect('admin/jstest5');
    }

    public function ajaxchange4(Request $request)
    {
        $id1hidden = $request->id1hidden;

            if ($id1hidden == 0) {
                Testform::where('id', 3)->update(['name' => 1]);
                $value ="ID1の値を0から1に変更しました。";
                return response()->json($value);
            } else {
                Testform::where('id', 3)->update(['name' => 0]);
                $value ="ID1の値を1から0に変更しました。";
                return response()->json($value);
            }

    }
    public function ajaxchange5(Request $request)
    {

        $id2hidden = $request->id2hidden;

        if ($id2hidden == 0) {
            Testform::where('id', 4)->update(['name' => 1]);
            $value ="ID2の値を0から1に変更しました。";
            return response()->json($value);
        } else {
            Testform::where('id', 4)->update(['name' => 0]);
            $value ="ID2の値を1から0に変更しました。";
            return response()->json($value);
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
