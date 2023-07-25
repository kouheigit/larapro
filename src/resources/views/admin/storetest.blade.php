
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<form method="GET" action="{{('storeget')}}">
@for($i=0;$i<9;$i++)
    <div class="tr _td">
        <button class="button_delete" type="button">削除する</button>
        {{--data-confirm="削除してもよろしいでしょうか？"--}}
       {{-- <a href="javascript:void(0)" class="btn_delete"><img src="{{asset("design/images/i_cross2.png")}}" width="20"></a>--}}
        {{--外注、社内の振り分け番号、1は社内委託--}}
        <input type="hidden" name="distribute[]" value="1">
        <div class="col"><input type="text" id="companynumber" class="textc text_comp" name="companynumber[]" data-modal=".modal_staff" value="{{ old('companynumber[]') }}"></div>
        <div class="col"><input type="text" class="textc text_comp" name="pic_comp[]" value="{{ old('pic_com[]') }}"></div>
        <div class="col"><input type="text" class="textc _input_dis text_comp" name="time[]" value="{{ old('time[]') }}"></div>
        <div class="col"><input type="text" class="textc text_comp" name="hourlywage[]" value="{{ old('hourlywage[]') }}"></div>
        <div class="col"><input type="text" class="textc _input_dis text_comp" name="tscost[]" value="{{ old('tscost[]') }}"></div>
    </div>
    <br>
@endfor
   <div class="col_add">
       {{--カラムを追加する箇所--}}
   </div>
    <button type="submit">送信する</button>
</form>
<button type="button" class="col_add_button">カラムを追加する</button>

<script type="text/javascript">
        $(".col_add_button").click(function () {
            var col_add = `<div class="tr _td">
        <button class="button_delete" type="button">削除する</button>

            <input type="hidden" name="distribute[]" value="1">
            <div class="col"><input type="text" id="companynumber" class="textc text_comp" name="companynumber[]" data-modal=".modal_staff" value="{{ old('companynumber[]') }}"></div>
        <div class="col"><input type="text" class="textc text_comp" name="pic_comp[]" value="{{ old('pic_com[]') }}"></div>
        <div class="col"><input type="text" class="textc _input_dis text_comp" name="time[]" value="{{ old('time[]') }}"></div>
        <div class="col"><input type="text" class="textc text_comp" name="hourlywage[]" value="{{ old('hourlywage[]') }}"></div>
        <div class="col"><input type="text" class="textc _input_dis text_comp" name="tscost[]" value="{{ old('tscost[]') }}"></div>
        <div class="col"><input type="text" class="textc _input_dis text_comp" name="deliverycharge[]" value="{{ old('deliverycharge[]') }}"></div>
        <div class="col"><input type="text" class="textc _input_dis text_comp" name="copy[]" value="{{ old('copy[]') }}"></div>
        <div class="col"><input type="text" class="textc _input_dis text_comp" name="cost[]" value="{{ old('cost[]') }}"></div>
        <div class="col"><input type="text" class="textc _input_dis text_comp" name="other[]" value="{{ old('other[]') }}"></div>
        <div class="col"><input type="text" class="textc _input_dis text_comp" name="sum[]" value="{{old('sum[]')}}"></div>
    </div>
     <br>
     `;
        $(".col_add").append(col_add);
        });

        $(".button_delete").click(function(){
            $(this).closest('.tr').remove();
            //test
        });

</script>


