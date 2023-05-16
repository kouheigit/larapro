<?php

namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Billingmanagement_list;
use App\Models\Billingmanagement_tax;
use Carbon\Carbon;

class BmController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.Bm');
    }
    public function addvalue(Request $request)
    {
        //Bmlist
        //配列ではない値
        $year = $request->input('year');
        $number = $request->input('number');

        //Bmlist
        //配列の値
        $item = $request->input('item');
        $quantity = $request->input('quantity');
        $unit = $request->input('unit');
        $price = $request->input('price');
        $sum = $request->input('sum');
        $taxation = $request->input('taxation');

        //Bmtax
        //配列ではない値
        $tax = $request->input('tax');
        $value =$request->input('value');
        $subtotal = $request->input('subtotal');
        $ctsv = $request->input('ctsv');
        $total = $request->input('total');
        $remarks = $request->input('remarks');

        //Bm_list
        for($i=0; $i<14; $i++){
            $inset_list = [
                //Bm_list配列出ない値
                'year'=>$year,
                'number'=>$number,

                //Bm_list配列の値
                'item'=>$item[$i],
                'quantity'=>$quantity[$i],
                'unit'=>$unit[$i],
                'price'=>$price[$i],
                'sum'=>$sum[$i],
                'taxation'=>$taxation,
                'created_at'=>new Carbon('Asia/Tokyo'),
            ];
            Billingmanagement_list::insert($inset_list);
        }
        //Bm_tax
        $insert_tax = [
            'tax'=>$tax,
            'value'=>$value,
            'subtotal'=>$subtotal,
            'ctsv'=>$ctsv,
            'total'=>$total,
            'remarks'=>$remarks,
            'created_at'=>new Carbon('Asia/Tokyo'),
        ];
        Billingmanagement_tax::insert($insert_tax);
        dd($inset_list);
        return redirect('admin/bm');
    }
}

