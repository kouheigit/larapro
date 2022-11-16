<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testform;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestformController extends Controller
{
    public function index()
    {
        $testform = Testform::all();
        return view('admin.testform',compact('testform'));
    }

    public function indexpost(Request $request)
    {
        $name = $request->input('name');
        $comment = $request->input('comment');
        $samp = $request->input('samp');
        $samp1 = $request->input('samp1');
        $remark = $request->input('remark');

        $form_count = $request->input('form_count');
        //カウント数を取得
        $form_counts = count($form_count);

        for ($i = 0; $i < $form_counts; $i++) {

            $samp_check_value = 0;
            if (isset($samp[$i])) {
                $samp_check_value = 1;
            }

            $samp1_check_value = 0;
            if(isset($samp1[$i])){
                $samp1_check_value = 1;
            }

            if($name[$i]==!null&&$comment==!null) {
                $value = [
                    'name' => $name[$i],
                    'comment' => $comment[$i],
                    'samp' => $samp_check_value,
                    'samp1' => $samp1_check_value,
                    'remark' => $remark[$i],
                    'created_at' => new Carbon('Asia/Tokyo'),
                ];
                Testform::insert($value);
            }
        }

        return redirect('admin/testform');
    }
}
