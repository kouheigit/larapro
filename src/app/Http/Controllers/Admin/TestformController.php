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
        //新規作成
        $name = $request->input('name');
        $comment = $request->input('comment');
        $samp = $request->input('samp');
        $samp1 = $request->input('samp1');
        $remark = $request->input('remark');
        $form_count = $request->input('form_count');
        //カウント数を取得
        $form_counts = count($form_count);


        //更新用情報の取得
        $id = $request->id;
        $name_edit = $request->input('name_edit');
        $comment_edit = $request->input('comment_edit');
        $samp_edit = $request->input('samp_edit');
        $samp1_edit = $request->input('samp1_edit');
        $remark_edit = $request->input('remark_edit');


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
        if($id==!null) {
            $i = 0;
            foreach ($id as $id_value) {
                if ($name_edit[$i] == !null) {
                    Testform::where('id', $id_value[$i])->update(['date' => $name_edit[$i]]);
                }
            }
        }
        return redirect('admin/testform');
    }
}
