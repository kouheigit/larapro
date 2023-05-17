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
    //validation start
    public function addvalue(Request $request)
    {


        $rules = [];
        //item

        $rules['year'] = 'nullable|numeric|required_with:number';
        $rules['number'] = 'nullable|numeric|required_with:year';

        $rules['item.0'] = 'nullable|required_with:quantity.0';
        $rules['item.1'] = 'nullable|required_with:quantity.1';
        $rules['item.2'] = 'nullable|required_with:quantity.2';
        $rules['item.3'] = 'nullable|required_with:quantity.3';
        $rules['item.4'] = 'nullable|required_with:quantity.4';
        $rules['item.5'] = 'nullable|required_with:quantity.5';
        $rules['item.6'] = 'nullable|required_with:quantity.6';
        $rules['item.7'] = 'nullable|required_with:quantity.7';
        $rules['item.8'] = 'nullable|required_with:quantity.8';
        $rules['item.9'] = 'nullable|required_with:quantity.9';
        $rules['item.10'] = 'nullable|required_with:quantity.10';
        $rules['item.11'] = 'nullable|required_with:quantity.11';
        $rules['item.12'] = 'nullable|required_with:quantity.12';
        $rules['item.13'] = 'nullable|required_with:quantity.13';

        $rules['quantity.0'] = 'nullable|numeric|required_with:item.0';
        $rules['quantity.1'] = 'nullable|numeric|required_with:item.1';
        $rules['quantity.2'] = 'nullable|numeric|required_with:item.2';
        $rules['quantity.3'] = 'nullable|numeric|required_with:item.3';
        $rules['quantity.4'] = 'nullable|numeric|required_with:item.4';
        $rules['quantity.5'] = 'nullable|numeric|required_with:item.5';
        $rules['quantity.7'] = 'nullable|numeric|required_with:item.7';
        $rules['quantity.8'] = 'nullable|numeric|required_with:item.8';
        $rules['quantity.9'] = 'nullable|numeric|required_with:item.9';
        $rules['quantity.11'] = 'nullable|numeric|required_with:item.11';
        $rules['quantity.12'] = 'nullable|numeric|required_with:item.12';
        $rules['quantity.13'] = 'nullable|numeric|required_with:item.13';

        

        $message =[
            'year.numeric'=>'案件番号は数字で入力する必要があります',
            'year.required_with'=>'案件番号は両枠入力する必要があります',

            'number.numeric'=>'案件番号は数字で入力する必要があります',
            'number.required_with'=>'案件番号は両枠入力する必要があります',

            'item.0.required_with'=>'数量1が入力された場合は項目1の入力は必須です',
            'item.1.required_with'=>'数量2が入力された場合は項目2の入力は必須です',
            'item.2.required_with'=>'数量3が入力された場合は項目3の入力は必須です',
            'item.3.required_with'=>'数量4が入力された場合は項目4の入力は必須です',
            'item.4.required_with'=>'数量5が入力された場合は項目5の入力は必須です',
            'item.5.required_with'=>'数量6が入力された場合は項目6の入力は必須です',
            'item.6.required_with'=>'数量7が入力された場合は項目7の入力は必須です',
            'item.7.required_with'=>'数量8が入力された場合は項目8の入力は必須です',
            'item.8.required_with'=>'数量9が入力された場合は項目9の入力は必須です',
            'item.9.required_with'=>'数量10が入力された場合は項目10の入力は必須です',
            'item.10.required_with'=>'数量11が入力された場合は項目11の入力は必須です',
            'item.11.required_with'=>'数量12が入力された場合は項目12の入力は必須です',
            'item.12.required_with'=>'数量13が入力された場合は項目13の入力は必須です',
            'item.13.required_with'=>'数量14が入力された場合は項目14の入力は必須です',

            'quantity.0.required_with'=>'項目1が入力された場合は数量1の入力は必須です',
            'quantity.1.required_with'=>'項目2が入力された場合は数量2の入力は必須です',
            'quantity.2.required_with'=>'項目3が入力された場合は数量3の入力は必須です',
            'quantity.3.required_with'=>'項目4が入力された場合は数量4の入力は必須です',
            'quantity.4.required_with'=>'項目2が入力された場合は数量4の入力は必須です',
            'quantity.5.required_with'=>'項目3が入力された場合は数量5の入力は必須です',
            'quantity.6.required_with'=>'項目4が入力された場合は数量6の入力は必須です',
            'quantity.7.required_with'=>'項目7が入力された場合は数量7の入力は必須です',
            'quantity.8.required_with'=>'項目8が入力された場合は数量8の入力は必須です',
            'quantity.9.required_with'=>'項目9が入力された場合は数量9の入力は必須です',
            'quantity.10.required_with'=>'項目10が入力された場合は数量10の入力は必須です',
            'quantity.11.required_with'=>'項目11が入力された場合は数量11の入力は必須です',
            'quantity.12.required_with'=>'項目12が入力された場合は数量12の入力は必須です',
            'quantity.13.required_with'=>'項目13が入力された場合は数量13の入力は必須です',

            'quantity.0.numeric'=>'数量1は数字で入力をしてください',
            'quantity.1.numeric'=>'数量2は数字で入力をしてください',


        ];

        $validator = Validator::make($request->all(), $rules,$message);
        //Now check validation:
        if ($validator->fails())
        {
            return redirect(route('admin.bm'))
                ->withErrors($validator)
                ->withInput();
        }


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
            if($item[$i]==!null&&$quantity[$i]=!null&&$unit[$i]=!null&&$price[$i]=!null&&$sum[$i]=!null) {
                $taxation_check = 0;
                if (isset($taxation[$i])) {
                    $taxation_check = 1;
                }
                $inset_list = [
                    //Bm_list配列出ない値
                    'year' => $year,
                    'number' => $number,
                    //Bm_list配列の値
                    'item' => $item[$i],
                    'quantity' => $quantity[$i],
                    'unit' => $unit[$i],
                    'price' => $price[$i],
                    'sum' => $sum[$i],
                    'taxation' => $taxation_check,
                    'created_at' => new Carbon('Asia/Tokyo'),
                ];
                Billingmanagement_list::insert($inset_list);
            }
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
        return redirect('admin/bm');
    }
}

