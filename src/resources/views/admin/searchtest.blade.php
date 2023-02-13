<h1>Search Test</h1>
<form method="GET" action="{{ route('admin.searchtest') }}">
    <input type="text" name="name" value="{{old('name')}}">
    <input type="submit" value="送信する">
</form>
@foreach($value as $val)
    <p>{{$val->name}}-{{$val->city}}-{{$val->streetaddress}}</p>
@endforeach
