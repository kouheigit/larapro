<?php

namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jstest;
use App\Models\Jstest3;
use App\Models\guest;
use App\Models\First;
use App\Models\Someform;
use App\Models\Testform;
use Carbon\Carbon;

class SomeController extends Controller
{
    public function ajaxguest(Request $request)
    {
        //ajaxstart
        /*
        \DB::enableQueryLog();
        dd(\DB::getQueryLog());*/


        $id_value = $request->id_value;

        //all_valueを取得する
        //$all_value[] = null;


        //取得したい値をselectに全部取得する
        $query = guest::select('guests.name as name','guests.product_code as product_code','firsts.value');
        $guest_value = $query->join('firsts','guests.product_code','=','firsts.product_code')->where('guests.id',$id_value)->get();


        foreach($guest_value as $guest_values) {
            if ($guest_values->name) {
                $value_name = $guest_values->name;
                //all_valueを追加した
                $all_value['name'] = $value_name;
            }
            $value_value = $guest_values->value;
            //all_valueを追加した
            $all_value['product_code'] = $value_value;
        }

       // $query1 = guest::query();
        $query1 = guest::select('guests.name as name','guests.product_code1 as product_code','firsts.value');
        $guest_value1 = $query1->join('firsts','guests.product_code1','=','firsts.product_code')->where('guests.id',$id_value)->get();
                //新しいテストコード
                foreach ($guest_value1 as $guest_values1){
                    $value_value1 = $guest_values1->value;
                    //all_valueを追加した
                    $all_value['product_code1'] = $value_value1;
                }


        $query2 = guest::select('guests.name as name','guests.product_code2 as product_code','firsts.value');
       // $query2= guest::query();
        $guest_value2 = $query2->join('firsts','guests.product_code2','=','firsts.product_code')->where('guests.id',$id_value)->get();

                 foreach($guest_value2 as $guest_values2){
                     $value_value2 = $guest_values2->value;
                     //all_valueを追加した
                     $all_value['product_code2'] =  $value_value2;
                 }
                 //dd($all_value);
        return response()->json($all_value);
    }


    public function guest(Request $request)
    {
        return view('admin.guest');
    }

    //jschange2
    public function jschangeajax2(Request $request)
    {
        $id1hidden = $request->id1hidden;
        $id2hidden = $request->id2hidden;

        if($id1hidden==0){
            Testform::where('id',1)->update(['name'=>1]);
        }else{
            Testform::where('id',1)->update(['name'=>0]);
        }

        if($id2hidden==0){
            Testform::where('id',2)->update(['name'=>1]);
        }else{
            Testform::where('id',2)->update(['name'=>0]);
        }

    }

    public function jschange2(Request $request)
    {
        $value = Testform::all();
        $i = 0;
        foreach($value as $values) {
            $changeval[$i] = $values->name;
            $i++;
        }

        return view("admin.jschange2",compact('changeval'));
    }

    public function jschangeajax1(Request $request)
    {
        $idvalue1 = $request->idvalue1;
        $idvalue2 = $request->idvalue2;

        if($idvalue1 == 0){
            Testform::where('id',1)->update(['name'=>1]);
        }else{
            Testform::where('id',1)->update(['name'=>0]);
        }

        if($idvalue2 == 0){
            Testform::where('id',2)->update(['name'=>1]);
        }else{
            Testform::where('id',2)->update(['name'=>0]);
        }

    }
    public function jschange1(Request $request)
    {
        $value = Testform::all();
        $i = 0;
        foreach($value as $values) {
            $changeval[$i] = $values->name;
            $i++;
        }
        return view('admin.jschange1',compact('changeval'));
    }


    public function jschangeajax(Request $request)
    {
        /*backend changevalue*/
        $changeid_1 = $request->changeid_1;//idは1
        $changeid_2 = $request->changeid_2;//idは2


        if($changeid_1 == 0){
            Testform::where('id',1)->update(['name'=>1]);
        }else{
            Testform::where('id',1)->update(['name'=>0]);
        }

        if($changeid_2 == 0){
            Testform::where('id',2)->update(['name'=>1]);
        }else{
            Testform::where('id',2)->update(['name'=>0]);
        }
    }
    public function jschange(Request $request)
    {
        /*
         $value = Testform::where('id', 1)->value('name');
         $value1 = Testform::where('id', 2)->value('name');*/
        $value = Testform::all();
        $i = 0;
        foreach($value as $values){
            $changeval[$i] = $values->name;
            $i++;
        }

        return view('admin.jschange',compact('changeval'));
    }


    public function searchtest(Request $request)
    {

        $name =$request->input('name');
        if(isset($name)){
            $query = Jstest3::query();
            if ($name) {
               $value =  $query->where('name', 'like', "%$name%")->get();
            }
        }else{
            $value = Jstest3::all();
        }
        return view('admin.searchtest',compact('value'));
    }
    public function ajaxtest(Request $request)
    {
        $name = $request->name;
        $jstest3 = Jstest3::where('id','=',$name)->get();

        foreach($jstest3 as $value){
            $value['name'] = $value->name;
            $value['city'] = $value->city;
            $value['streetname'] = $value->streetname;
            $value['streetaddress'] = $value->streetaddress;
            $show[] = $value;

        }

        /*
        if(is_numeric($name)){
            $name = Jstest3::where('id','=',$name)->value('name');
        }else{
            $name = "数値で入力してください";
        }*/
        return response()->json($show);
    }

    //現在開発中のメソット
    public function jswage(Request $request)
    {
        return view('admin.jswage');
    }

    public function wageget(Request $request)
    {

        //ここから3つはjstest3です
        $name = $request->input('name');
        $city = $request->input('city');
        $streetname = $request->input('streetname');
        $streetaddress = $request->input('streetaddress');


        //ここから2つはAttendanceです
        //労働時間
        $workingtime = $request->input('workingtime');
        //欠勤
        $missing_number = $request->input('missing_number');

        /*
        $absence_check_value = 0;
        if (isset($absence[$i])) {
            $absence_check_value = 1;
        }
        */
        for($i=0; $i<15; $i++){
            $missing_check = 0;
            if(isset($missing_number[$i])){
                $missing_check = 1;
            }
            $value =[
                'name'=>$name[$i],
                'city'=>$city[$i],
                'streetname'=>$streetname[$i],
                'streetaddress'=>$streetaddress[$i],
                'workingtime' =>$workingtime[$i],
                'missing_nunmber'=>$missing_check,
            ];
        }
        return redirect('admin/jswage');
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

    public function jsajax(Request $request)
    {
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
