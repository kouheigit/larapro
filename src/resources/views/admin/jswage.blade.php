<h1>フォームテストJSwage</h1>
<form method="GET" action="{{'admin.wagepost'}}">
    @for($i=0; $i<15; $i++)
        <li>名前<input tyep="text" class="name" id="name{{$i}}" name="name[{{$i}}]" value="{{old("name.$i")}}">都道府県<input type="text" class="city"id="city{{$i}}" name="city[{{$i}}]"value="{{old("city.$i")}}">住所<input type="text" class="streetname"id="streetname{{$i}}"name="streetname[{{$i}}]"value="{{old("streetname.$i")}}">番地<input type="text" class="streetaddress"id="streetaddress"name="streetaddress[{{$i}}]"value="{{old("streetaddress.$i")}}">遅刻<input type="checkbox"  name="missing_number[{{$i}}]" value={{$i}}>労働時間<input type="text"class="worktime"id="worktime"name="worktime[{{$i}}]" value="{{old("worktime.$i")}}"></li>
    @endfor


</form>
