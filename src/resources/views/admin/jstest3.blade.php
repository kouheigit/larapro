<h1>フォームテストJS3</h1>
@for($i=0; $i<15; $i++)
    <li>名前<input tyep="text" class="name" id="name{{$i}}" name="name[{{$i}}]" value="{{old("name.$i")}}">-都市<input type="text" id="city{{$i}}" name="city[{{$i}}]"value="{{old("city")}}">-地区名<input type="text" id="streetname{{$i}}" name="streetname[{{$i}}]" value="{{old("streetname.$i")}}">-住所<input type="text" id="streetaddress{{$i}}" name="streetaddress[{{$i}}]" value="{{old("streetaddress.$i")}}"></li>
@endfor

