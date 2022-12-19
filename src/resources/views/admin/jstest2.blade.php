<section>
</section>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
</script>
<body>
<table>
        @for($i=0;$i<15; $i++)
        <li><input type="text" class="apple" id="apple{{$i}}" name="apple[]" value="{{old('apple[]')}}">-<input type="text" class="banana" id="banana{{$i}}"name="banana[]"value="{{old('banana[]')}}">-<input type="text" class="orange" id="orange{{$i}}" name="orange[]"value="{{old('orange[]')}}">-<input type="type" class="cherry" id="cherry{{$i}}" name="cherry[]" value="{{old('cherry[]')}}"></li>
        @endfor
</table>
</body>
