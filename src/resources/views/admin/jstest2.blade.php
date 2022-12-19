<section>
</section>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
    $('.apple').on('keyup',function(){
        //apple+idを取得する
        //
        id = $(this).attr('id');
        data = id;
        //idのみ取得
        data_number = data.replace(/[^0-9]/g, '');
        //bananaのidを取得
        banana_id = '#banana'+data_number;

        $.ajax({
            type:"get",
            //jstest2に送信してる
            url:"jstest2",
            data: {
                apple: $(this).val(),
                banana: $(banana_id).val(),
            },
            cache: false,
            dateType: 'json',
            success: function(o) {
            },
            error: function (xhr, ts, err) {
                console.log(err);
                // alert("error");
            }
        })
    });
</script>
<body>
<table>
    @for($i=0;$i<15; $i++)
        <li><input type="text" class="apple" id="apple{{$i}}" name="apple[]" value="{{old('apple[]')}}">-<input type="text" class="banana" id="banana{{$i}}"name="banana[]"value="{{old('banana[]')}}">-<input type="text" class="orange" id="orange{{$i}}" name="orange[]"value="{{old('orange[]')}}">-<input type="type" class="cherry" id="cherry{{$i}}" name="cherry[]" value="{{old('cherry[]')}}"></li>
    @endfor
</table>
</body>
