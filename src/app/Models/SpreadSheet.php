<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpreadSheet extends Model
{
    use HasFactory;

    static function insert_spread_sheet($insert_data)
    {
        //start
        // スプレッドシートを操作するGoogleClientインスタンスの生成（後述のファンクション）
        $sheets = SpreadSheet::instance();
        // データを格納したい SpreadSheet のURLが
        // https://docs.google.com/spreadsheets/d/×××××××××××××××××××/edit#gid=0
        // である場合、××××××××××××××××××× の部分を以下に記入する
        $sheet_id = '1VjLZlueXu2T4CuG851QEpGc0DuhZznYAGbIYt15IPuA';
        $range = 'A1:A';
        $response = $sheets->spreadsheets_values->get($sheet_id, $range);

        // 格納する行の計算
        $row = count($response->getValues() ?? []) + 1; // nullの場合は空配列にする

        // データを整形（この順序でシートに格納される）
        //start
        $contact = [
            $insert_data['hoge'],
            $insert_data['huga'],
            $insert_data['foo'],
        ];
        $values = new \Google_Service_Sheets_ValueRange();
        $values->setValues([
            'values' => $contact
        ]);
        $sheets->spreadsheets_values->append(
            $sheet_id,
            'A'.$row,
            $values,
            ["valueInputOption" => 'USER_ENTERED']
        );
        return true;
    }

    // スプレッドシート操作用のインスタンスを生成するFunction
    public static function instance() {
        // storage/app/json フォルダに GCP からダウンロードした JSON ファイルを設置する
        $credentials_path = storage_path('app/json/credentials.json');
        $client = new \Google_Client();
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAuthConfig($credentials_path);
        return new \Google_Service_Sheets($client);
    }
}
