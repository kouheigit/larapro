<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script type="text/javascript">
    $(function(){
        $('.btn').click(function(){
            //classのbtnが押されると
            var idname = $(this).attr("id");
           // var selectNo = $(this).val();
            var text1="." + idname + "hidden";
            var idvalue = $(text1).val();

            alert(text1);

          　 flag = confirm("ボタンの値を変更しますか?");
            if(flag == true){

            if(text1 == ".id1hidden") {
                alert("id1成功")
                $.ajax({
                    type: "get",
                    url: "jschangeajax1",
                    data: {
                        idvalue1:idvalue,
                    },
                    cache: false,
                    dataType: 'json',
                })

                if($(text1).val() == 0){
                    $(text1).val(1);
                    $(idname).val("値がある");
                }else{
                    $(text1).val(0);
                    $(idname).val("値がない");
                }

            }
            if(text1 == ".id2hidden") {
                alert("id2成功")
                $.ajax({
                    type: "get",
                    url: "jschangeajax1",
                    data: {
                        idvalue2:idvalue,
                    },
                    cache: false,
                    dataType: 'json',
                })
            }
                alert("伝票締の変更が完了しました");
            }else{
                alert("値の変更を取り消しました");
                //location.reload();
            }

            /*
               alert("伝票締の変更が完了しました");
                //location.reload();
            }else{
                alert("値の変更を取り消しました");
                //location.reload();
            }
             */
        })

    });
    /*
    $(function(){
        $("button").on("click",function(){
            var getval = $(".target").val();
            $(".set").text(getval);
        });
    });*/

</script>


<h1>なめだるまジャン</h1>
<h1>ID番号1→{{$changeval[0]}}</h1>
<h1>ID番号2→{{$changeval[1]}}</h1>
@if($changeval[0]==1)
    <input type="button" id="id1" class="btn" value="値がある">
    <input type="hidden" id="id1hidden" class="id1hidden" value={{$changeval[0]}}>
@else
    <input type="button" id="id1" class="btn" value="値がない">
    <input type="hidden" id="id1hidden" class="id1hidden" value={{$changeval[0]}}>
@endif

@if($changeval[0]==1)
    <input type="button" id="id2" class="btn" value="値がある">
    <input type="hidden" id="id2hidden" class="id2hidden" value={{$changeval[0]}}>
@else
    <input type="button" id="id2" class="btn" value="値がない">
    <input type="hidden" id="id2hidden" class="id2hidden" value={{$changeval[0]}}>
@endif


