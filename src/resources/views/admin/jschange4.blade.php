<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script>
    $(function(){
        $('.id1').click(function() {
            var id1hidden =$('.id1hidden').val();
          window.alert(id1hidden);
          $.ajax({
              type:"get",
              url:"ajaxchange4",
              data: {
                  id1hidden:id1hidden,
              },
              cache:false,
              datatype:'json',
          })
        })

        $('.id2').click(function(){
            var id2hidden = $('.id2hidden').val();
            window.alert(id2hidden);
            $.ajax({
                type:"get",
                url:"ajaxchange5",
                data: {
                    id2hidden:id2hidden,
                },
                cache:false,
                datatype:'json',
            })
        })
    });
</script>

<h1>{{$changes[2]}}</h1>
<h1>{{$changes[3]}}</h1>

<input type="button" id="id1" class="id1" value="値がない">
<input type="hidden" id="id1hidden" class="id1hidden" value={{$changes[2]}}>

<input type="button" id="id2" class="id2" value="値がない">
<input type="hidden" id="id2hidden" class="id2hidden" value={{$changes[3]}}>
{{--
<input type="button" id="id1" class="id1" value="値がない"onclick>
<input type="hidden" id="id1hidden" class="id1hidden" value={{$changes[2]}}>


<input type="button" id="id2" class="id2" value="値がない"onclick>
<input type="hidden" id="id2hidden" class="id2hidden" value={{$changes[3]}}>
--}}
