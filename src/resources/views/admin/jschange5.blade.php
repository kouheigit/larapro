<table>
    @for($i=0; $i<15; $i++)
        <li><b>第一項目</b><input type="text" class="one" id="one{{$i}}"name="one[{{$i}}]"value="{{old("one.$i")}}"><b>第二項目</b><input type="text"class="two" id="{{$i}}"name="two[]"value="{{old('two[]')}}"><b>第三項目</b><input type="text" id="{{$i}}"class="three[]"name="three[]"value="{{old('three[]')}}"></li>
    @endfor
        <li><b>合計:</b><input type="text" class="sum" class="sum" name="sum"></li>
</table>


