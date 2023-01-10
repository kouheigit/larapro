<h1>これはSomeJSのフォームです。</h1>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>

</script>
<body>
<h3>計算する値A+計算する値B✖️100</h3>
<h3>計算する値A+計算する値B✖️200</h3>
<h3>計算する値A+計算する値B✖️300</h3>
<h3>計算する値A+計算する値B✖️400</h3>
<h3>上記の全合計</h3>
<table>
    @for($i=0;$i<15;$i++)
        <li>計算する値A<input type="text"class="jsvalue"id="jsvalue{{$i}}"name="jsvalue[]"value="{{old('jsvalue[]')}}">-計算する値B<input type="text"class="jsvalue1"id="jsvalue1"name="jsvalue1[]"value="{{old('jsvalue1[]')}}"></li>
    @endfor
</table>
</body>

