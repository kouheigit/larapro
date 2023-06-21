<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
use Google\Spreadsheet\SpreadsheetService;

class GoogleSheet extends Model
{
    use HasFactory;
    public function insertSpreadSheet($insertData)
    {
        // 認証情報を取得する（省略）

        // スプレッドシートのIDを指定
        $spreadsheetId = '1VjLZlueXu2T4CuG851QEpGc0DuhZznYAGbIYt15IPuA';

        // サービスリクエストを作成
        $serviceRequest = new DefaultServiceRequest($accessToken);

        // サービスリクエストファクトリを作成
        ServiceRequestFactory::setInstance($serviceRequest);

        // スプレッドシートを取得
        $spreadsheet = (new SpreadsheetService)->getSpreadsheetById($spreadsheetId);

        // シートを取得
        $worksheet = $spreadsheet->getActiveSheet();

        // データを挿入する行を計算
        $rowCount = $worksheet->getLastRow() + 1;

        // データを整形（この順序でシートに格納される）
        $rowData = [
            $insertData['hoge'],
            $insertData['huga'],
            $insertData['foo'],
        ];

        // データを挿入
        $worksheet->insertRow($rowCount, $rowData);
    }
    /*
    public function insertSpreadSheet($insertData)
    {
        // Google Sheets APIのクライアントを作成
        $client = new \Google_Client();
        $client->setAuthConfig('app/json/sheet.json'); // ダウンロードした認証情報ファイルのパスを指定
        $client->addScope(\Google_Service_Sheets::SPREADSHEETS);

        // Google Sheetsサービスを作成
        $service = new Sheets($client);

        // スプレッドシートのIDと範囲を指定
        $spreadsheetId = '1VjLZlueXu2T4CuG851QEpGc0DuhZznYAGbIYt15IPuA';
        $range = 'Sheet1!A1:C3';

        // 書き込むデータを作成
        $data = [
            [$insertData['hoge'], $insertData['huga'], $insertData['foo']],
            // 追加のデータ行を記述
        ];

        // データをリクエスト用のオブジェクトに変換
        $values = new \Google_Service_Sheets_ValueRange([
            'values' => $data
        ]);

        // データをスプレッドシートに挿入
        $options = [
            'valueInputOption' => 'RAW' // データの形式を指定
        ];
        $service->spreadsheets_values->append($spreadsheetId, $range, $values, $options);
    }*/
}
