<h1>フォームテストJS3</h1>
<form method="GET" action="{{route('admin.jsget3')}}">
    @for($i=0; $i < 15; $i++)
        <li>名前<input tyep="text" class="name" id="name{{$i}}" name="name[{{$i}}]" value="{{old("name.$i")}}">-都道府県<input tyep="text" class="city" id="city{{$i}}" name="city[{{$i}}]" value="{{old("city.$i")}}">-住所<input tyep="text" class="streetname" id="streetname{{$i}}" name="streetname[{{$i}}]" value="{{old("streetname.$i")}}">番地<input tyep="text" class="streetaddress" id="streetaddress{{$i}}" name="streetaddress[{{$i}}]" value="{{old("streetaddress.$i")}}"></li>
    @endfor
        <input type="submit" value="送信する">
</form>

