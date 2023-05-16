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
        $sum = $request->input('sum');
        $remarks = $request->input('remarks');
    }
}
