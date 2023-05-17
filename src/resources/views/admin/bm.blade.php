<h1>テストサイト</h1>
<!--エラーメッセージ-->
@if(count($errors) > 0)
    <p>入力に問題があります</p>
@endif

@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach

<form method="GET" action="{{ route('admin.addvalue') }}">
    @csrf
    <!--案件番号-->
    <b>案件番号</b>
    <br>
<input type="text" class="year" id="year" name="year"value="{{old("year")}}">-<input type="text" class="number" id="number"name="number"value="{{old("number")}}">
<br>
<br>
@for($i=0; $i<15; $i++)
    <li>項目<input type="text" id="item{{$i}}"name="item[{{$i}}]"value="{{old("item.$i")}}">数量<input type="text" id="quantity[{{$i}}]" name="quantity[{{$i}}]" value="{{old("quantity.$i")}}"> 単位<input type="text" id="unit{{$i}}" name="unit[{{$i}}]"value="{{old("unit.$i")}}">単価<input type="text"  id="price{{$i}}"name="price[{{$i}}]" value="{{old("price.$i")}}"> 合計<input type="text" id="sum[{{$i}}]"name="sum{{$i}}"value="{{old("sum.$i")}}"> 課税<input type="checkbox" name="taxation[{{$i}}]" value={{$i}}></li>
@endfor
    <br>
    <br>
    <!--消費税関連-->
    <b>消費税関連</b>
    <br>
        消費税<input type="text" class="tax" id="tax" name="tax" value="{{old("tax")}}">有効値<input type="text" class="value" id="value" name="value" value="{{old("value")}}">
        <br>
        小計<input type="text" class="subtotal" id="subtotal" name="subtotal" value="{{old("subtotal")}}">消費税有効値<input type="text" class="ctsv" id="ctsv" name="ctsv" value="{{old("ctsv")}}">
        <br>合計<input type="text" class="total" id="total" name="total" value="{{old("total")}}">備考欄<input type="text" class="remarks" id="remarks" name="remarks" value="{{old("remarks")}}">
         <br>
         <input type="submit"value="送信する">
</form>

