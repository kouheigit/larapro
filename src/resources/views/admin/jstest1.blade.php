<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script>
    /*
    $(function(){

       $('.test').on('keyup',function()
        {
            //thisで.testの要素すべてを取得
            //idの情報のみ取得
            id = $(this).attr('id');
            answer_id = '#answer'+id;

            console.log(id);
            console.log(answer_id);

            //console.log(id);

            $.ajax({
                type: "get",
                url: "jsajax",
                data : {
                    test:$('.test').val(),
                },
                cache: false,
                dataType: 'json',
                success:function(o){
                    $(answer_id).val(o);
                    //alert(o);
                },
                error:function(xhr, ts, err){
                    console.log(err);
                    // alert("error");
                }
            })
        });
    });*/
    $(function(){
        $('.test').on('keyup', function ()
        {
            id = $(this).attr('id');
            console.log(id);
            id2 = '#answer'+id;
            console.log(id2);

            //$(id2).val('test');
            console.log($(this).attr('id'));
            console.log($('.test').val());

            $.ajax({
                type: "get",
                url: "jsajax",
                data : {
                    year:$('.test').val(),
                },
                cache: false,
                dataType: 'json',
                success:function(o){
                    $(id2).val(o);
                    //alert(o);
                },
                error:function(xhr, ts, err){
                    console.log(err);
                    // alert("error");
                }
            })
        });
    });
</script>


<table>
    @for($i=0; $i<15; $i++)
        <li><b>入力</b><input type="text" class="test" id="{{$i}}"name="test[]"value="{{old('test[]')}}"><b>答え</b><input type="text" class="answer"id="answer{{$i}}"name="answer[]"value="{{old('answer[]')}}"></li>
    @endfor
</table>

