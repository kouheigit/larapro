<h1>これはSomeJSのフォームです。</h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
    $(function() {
        $('.jsvalue').on('keyup', function () {

        })
    });
</script>
<script>
    /*
    $(function() {
        $('.jsvalue').on('keyup',function()
        {
        //jsvalueのidを取得する
        jsvalue_id = $(this).attr('id');
        //id単体で取得する
        id = jsvalue_id.replace(/[^0-9]/g, '');
        //idのjsvalue1を出力する
        jsvalue1_id = '#jsvalue1' + id;
        alert(jsvalue_id);
    })
    });*/
</script>
<body>
<h3>計算する値A+計算する値B✖️100</h3>
<h3>計算する値A+計算する値B✖️200</h3>
<h3>計算する値A+計算する値B✖️300</h3>
<h3>計算する値A+計算する値B✖️400</h3>
<h3>上記の全合計</h3>
<table>
    @for($i=0;$i<15;$i++)
        <li>計算する値A<input type="text"class="jsvalue"id="jsvalue{{$i}}"name="jsvalue[]"value="{{old('jsvalue[]')}}">-計算する値B<input type="text"class="jsvalue1"id="jsvalue1"name="jsvalue1[]"value="{{old('jsvalue1[]')}}">　答え<input type="text"class="answer"id="answer{{$i}}"name="answer[]"value="{{old('answer[]')}}"></li>
    @endfor
      　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　 合計<input type="text"class="sum"id="sum"name="sum"value="{{old('sum')}}">
</table>
</body>

