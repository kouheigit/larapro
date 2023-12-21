<?php

namespace App\Http\Controllers\Admin;

use App\Models\GoogleSheet;
use App\Models\SpreadSheet;
use App\Http\Controllers\Controller;


class SpreadSheetController extends Controller
{
    public function store()
    {
        /*test*/
        $spread_sheet = new SpreadSheet();
        // スプレッドシートに格納するテストデータです
        $insert_data = [
            'hoge' => 'test text',
            'huga' => 12345,
            'foo'  => true
        ];

        $spread_sheet->insert_spread_sheet($insert_data);

        return response('格納に成功！！', 200);
    }
}
