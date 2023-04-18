<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<scrip>

</scrip>

<h1>購入履歴</h1>
<li>購入者名　　　　　　購入商品　　　　　　購入商品1　　　　　　購入商品2</li>
@for($i=0; $i<15; $i++)
    <li><input type="text" class="name" id="name{{$i}}"name="name[{{$i}}]"value="{{old("name.$i")}}">　<input type="text" class="product_code" id="product_code{{$i}}"name="product_code[{{$i}}]"value="{{old("product_code.$i")}}">　<input type="text" class="product_code1"id="product_code1[{{$i}}]"value="{{old("product_code1.$i")}}">　<input type="text" class="product_code2"id="product_code2[{{$i}}]"value="{{old("product_code2.$i")}}"></li>
@endfor
    <b>合計</b><input type="text" class="sum" id="sum" name="sum" value="{{old("sum")}}">
