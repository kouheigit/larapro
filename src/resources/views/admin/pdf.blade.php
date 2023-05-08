<!---select化してここの部分から読み込む--->
<!--fontを反映するにはbody配下にする必要がある-->
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PDF</title>
    <style>
        @font-face{
            font-family: ipag;
            font-style: normal;
            font-weight: normal;
            src:url('{{ storage_path('fonts/ipag.ttf')}}');
        }
        @font-face{
            font-family: ipag;
            font-style: normal;
            font-weight: bold;
            src:url('{{ storage_path('fonts/ipag.ttf')}}');
        }
        body {
            font-family: ipag;
        }
    </style>
</head>
<!--ここまで--->
<body>
<h1>h1テスト</h1>
<p>pタグテスト</p>
</div>
</body>
</html>
