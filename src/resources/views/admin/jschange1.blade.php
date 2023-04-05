<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script type="text/javascript">
    $(function(){
        $('.btn').click(function(){
            var idname = $(this).attr("id");
           // var selectNo = $(this).val();
            var text1="." + idname + "hidden";
            var getval = $(text1).val();
            
            alert(getval);
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


<input type="button" id="id1" class="btn" value="値がある">
<input type="hidden" id="id1hidden" class="id1hidden" value={{$changeval[0]}}>

<input type="button" id="id2" class="btn" value="値がある">
<input type="hidden" id="id2hidden" class="id2hidden" value={{$changeval[0]}}>


