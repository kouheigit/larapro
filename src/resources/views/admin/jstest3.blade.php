<h1>フォームテストJS3</h1>
@if(count($errors) > 0)
    <p>入力に問題があります</p>
@endif
@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script type="text/javascript">

    //js未完成
    $(function() {
        $('.search').on('keyup', function ()
        {
            id_all = $(this).attr('id');
            id = id_all.replace(/[^0-9]/g, '');
            name_id = "#name"+ id;
            console.log(name_id);
        })
    });
</script>

<form method="GET" action="{{route('admin.jsget3')}}">
    <input tyep="text" class="test" id="test" name="test" value="{{old("test")}}">
    @for($i=0; $i < 15; $i++)
        <li>ID検索<input tyep="text" class="search" id="search{{$i}}" name="search[{{$i}}]" value="{{old("search.$i")}}">名前<input tyep="text" class="name" id="name{{$i}}" name="name[{{$i}}]" value="{{old("name.$i")}}">-都道府県<input tyep="text" class="city" id="city{{$i}}" name="city[{{$i}}]" value="{{old("city.$i")}}">-住所<input tyep="text" class="streetname" id="streetname{{$i}}" name="streetname[{{$i}}]" value="{{old("streetname.$i")}}">番地<input tyep="text" class="streetaddress" id="streetaddress{{$i}}" name="streetaddress[{{$i}}]" value="{{old("streetaddress.$i")}}"></li>
    @endfor
        <input type="submit" value="送信する">
</form>
