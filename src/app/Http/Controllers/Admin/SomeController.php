<?php

namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jstest;
use App\Models\Someform;
use Carbon\Carbon;

class SomeController extends Controller
{
    public function ajaxtest(Request $request)
    {
        $name_id = $request->name_id;
        if (isset($name_id)) {
            $test ="null以外";
        }else{
            $test="null";
        }
        return response()->json($test);
        /*
        $name_id = $request->name_id;
        return response()->json($name_id);*/
    }

    public function jstest3(Request $request)
    {
        return view('admin.jstest3');
    }
    public function jsget3(Request $request)
    {
        $rules = [];
        //required_with:payment_schedule.0'

        $rules['name.0'] = 'required_with:city.0';
        $rules['name.1'] = 'required_with:city.1';
        $rules['name.2'] = 'required_with:city.2';
        $rules['name.3'] = 'required_with:city.3';
        $rules['name.4'] = 'required_with:city.4';
        $rules['name.5'] = 'required_with:city.5';
        $rules['name.6'] = 'required_with:city.6';
        $rules['name.7'] = 'required_with:city.7';
        $rules['name.8'] = 'required_with:city.8';
        $rules['name.9'] = 'required_with:city.9';
        $rules['name.10'] = 'required_with:city.10';
        $rules['name.11'] = 'required_with:city.11';
        $rules['name.12'] = 'required_with:city.12';
        $rules['name.13'] = 'required_with:city.13';
        $rules['name.14'] = 'required_with:city.14';

        $rules['city.0'] = 'required_with:name.0';
        $rules['city.1'] = 'required_with:name.1';
        $rules['city.2'] = 'required_with:name.2';
        $rules['city.3'] = 'required_with:name.3';
        $rules['city.4'] = 'required_with:name.4';
        $rules['city.5'] = 'required_with:name.5';
        $rules['city.6'] = 'required_with:name.6';
        $rules['city.7'] = 'required_with:name.7';
        $rules['city.8'] = 'required_with:name.8';
        $rules['city.9'] = 'required_with:name.9';
        $rules['city.10'] = 'required_with:name.10';
        $rules['city.11'] = 'required_with:name.11';
        $rules['city.12'] = 'required_with:name.12';
        $rules['city.13'] = 'required_with:name.13';
        $rules['city.14'] = 'required_with:name.14';

/*
        $rules = ['city'];
        $rules = ['streetname'];
        $rules = ['streetaddress'];*/

        $message = [
            //city
            'city.0.required_with'=>'名前が入力された時は都道府県の入力は必須となります',
            'city.1.required_with'=>'名前1が入力された時は都道府県1の入力は必須となります',
            'city.2.required_with'=>'名前2が入力された時は都道府県2の入力は必須となります',
            'city.3.required_with'=>'名前3が入力された時は都道府県3の入力は必須となります',
            'city.4.required_with'=>'名前4が入力された時は都道府県4の入力は必須となります',
            'city.5.required_with'=>'名前5が入力された時は都道府県5の入力は必須となります',
            'city.6.required_with'=>'名前6が入力された時は都道府県6の入力は必須となります',
            'city.7.required_with'=>'名前7が入力された時は都道府県7の入力は必須となります',
            'city.8.required_with'=>'名前8が入力された時は都道府県8の入力は必須となります',
            'city.9.required_with'=>'名前9が入力された時は都道府県9の入力は必須となります',
            'city.10.required_with'=>'名前10が入力された時は都道府県10の入力は必須となります',
            'city.11.required_with'=>'名前11が入力された時は都道府県11の入力は必須となります',
            'city.12.required_with'=>'名前12が入力された時は都道府県12の入力は必須となります',
            'city.13.required_with'=>'名前13が入力された時は都道府県13の入力は必須となります',
            'city.14.required_with'=>'名前14が入力された時は都道府県14の入力は必須となります',

            //name
            'name.0.required_with'=>'都道府県が入力された場合は名前の入力は必須となります',
            'name.1.required_with'=>'都道府県1が入力された場合は名前1の入力は必須となります',
            'name.2.required_with'=>'都道府県2が入力された場合は名前2の入力は必須となります',
            'name.3.required_with'=>'都道府県3が入力された場合は名前3の入力は必須となります',
            'name.4.required_with'=>'都道府県4が入力された場合は名前4の入力は必須となります',
            'name.5.required_with'=>'都道府県5が入力された場合は名前5の入力は必須となります',
            'name.6.required_with'=>'都道府県6が入力された場合は名前6の入力は必須となります',
            'name.7.required_with'=>'都道府県7が入力された場合は名前7の入力は必須となります',
            'name.8.required_with'=>'都道府県8が入力された場合は名前8の入力は必須となります',
            'name.9.required_with'=>'都道府県9が入力された場合は名前9の入力は必須となります',
            'name.10.required_with'=>'都道府県10が入力された場合は名前10の入力は必須となります',
            'name.11.required_with'=>'都道府県11が入力された場合は名前11の入力は必須となります',
            'name.12.required_with'=>'都道府県12が入力された場合は名前12の入力は必須となります',
            'name.13.required_with'=>'都道府県13が入力された場合は名前13の入力は必須となります',
            'name.14.required_with'=>'都道府県14が入力された場合は名前14の入力は必須となります',
        ];

        $validator = Validator::make($request->all(), $rules,$message);
        //Now check validation:
        if ($validator->fails())
        {
            return redirect('admin/jstest3')
                ->withErrors($validator)
                ->withInput();
        }/*else{
            dd(1);
        }*/

        $name = $request->input('name');
        $city = $request->input('city');

        //上記まではOK
        $streetname = $request->input('streetname');
        $streetaddress = $request->input('streetaddress');
            for ($i = 0; $i < 15; $i++) {
                if($name[$i]==!null&&$city[$i]==!null) {
                $value = [
                    'name' => $name[$i],
                    'city' => $city[$i],
                    'streetname' => $streetname[$i],
                    'streetaddress' => $streetaddress[$i],
                ];
                Jstest::insert($value);
            }
        }
        return redirect('admin/jstest3');
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
        if (isset($test)) {
            $test ="null以外";
        }else{
            $test="null";
        }
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
