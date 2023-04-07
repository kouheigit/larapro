<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script type="text/javascript">

    function changevalue(){
        var comment_id =  $(this).data('value');
        flag = confirm("欠番の値を変更しますか?");
        // 「はい」が押されたときの処理
        if ( flag == true ){
            $.ajax({
                type: "get",
                url: "ajaxpost",
                data : {
                    comment_id:comment_id,
                },
                cache: false,
                dataType: 'json',
            })

            if($('#edit_comment_value').val() == 0){
                $('#edit_comment_value').val(1);
                $('#edit_comment').val("戻す");
            }else{
                $('#edit_comment_value').val(0);
                $('#edit_comment').val("欠番");
            }
               alert("欠番の値の変更が完了しました");
            }else{
               alert("値の変更を取り消しました");
           }
    };



$(function(){
    $('#id1').click(function() {
        var id1hidden = $('#id1hidden').val();
        alert(id1hidden);
        flag = confirm("ボタンの値を変更しますか?");
        if(flag == true){
            $.ajax({
                type:"get",
                url: "jschangeajax2",
                data: {
                    id1hidden:id1hidden
                },
                cache:false,
                datatype: 'json',
            })
            if($('#id1hidden').val() == 0){
                $('#id1hidden').val(1);
                $('#id1').val("値がない");
            }else{
                $('#id1hidden').val(0);
                $('#id1').val("値がある");
            }
            alert("値の変更が完了しました");
        }else{
            alert("値の変更を取り消しました");
        }
    });
});

</script>
<h1>ID番号1→{{$changeval[0]}}</h1>
<h1>ID番号2→{{$changeval[1]}}</h1>

@if($changeval[0]==1)
    <input type="button" id="id1" class="id1" value="値がある">
    <input type="hidden" id="id1hidden" class="id1hidden" value={{$changeval[0]}}>
@else
    <input type="button" id="id1" class="id1" value="値がない">
    <input type="hidden" id="id1hidden" class="id1hidden" value={{$changeval[0]}}>
@endif


<input type="button" id="id2" class="id2" value="値がある">
<input type="hidden" id="id2hidden" class="id2hidden" value={{$changeval[1]}}>
