<script type="text/javascript">
   function valuechange(){
       var changeid_1 = $(this).data('value');
       flag = confirm("ボタンID1の値を変更しますか?");
   }
</script>

{{--nameを変更する--}}
<button class="id1"type="button"value="{{$changeval[0]}}"onclick="valuechange">値がある</button>

<button class="id2"type="button"value="{{$changeval[1]}}">値がない</button>
{{--一番最初の値のidは1--}}
<h1>{{$changeval[0]}}</h1>
{{--二番目のidは2--}}
<h1>{{$changeval[1]}}</h1>

