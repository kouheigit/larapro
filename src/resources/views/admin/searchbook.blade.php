
<h1>{{$writer_name->name}}</h1>
@foreach($books_name as $name)
<h1>{{$name->name}}</h1>
@endforeach

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<input type="text" class="search" id="search" name="search" value="{{old("search")}}">
<script type="text/javascript">
    $(function(){
        $('.search').on('keyup',function (){
           var search = $(this).val();
          $.ajax({
              type:"get",
              url:"search_asy",
              data:{
                  search:search,
              },
              cache:false,
              datatype:'json',
              success: function(o){
                  alert(o);
              },
              error:function(xhr,ts,err){
                  console.log(err);
              },
          })
        })
    })
</script>
