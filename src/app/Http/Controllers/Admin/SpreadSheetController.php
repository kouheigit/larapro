<?php

namespace App\Http\Controllers\Admin;

use App\Models\GoogleSheet;
use App\Models\SpreadSheet;
use App\Http\Controllers\Controller;


class SpreadSheetController extends Controller
{
    public function insertData()
    {
        $googleSheetModel = new GoogleSheet();

        $insertData = [
            'hoge' => 'value1',
            'huga' => 'value2',
            'foo' => 'value3',
        ];

        $googleSheetModel->insertSpreadSheet($insertData);

        // 成功メッセージやリダイレクトなどの処理を追加する場合はここに記述

        return response()->json(['message' => 'Data inserted successfully']);
    }

    public function store()
    {
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
