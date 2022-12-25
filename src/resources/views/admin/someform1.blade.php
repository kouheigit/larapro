<h1>フォームテスト</h1>
<form method="GET" action="{{('someform1')}}"></form>
@csrf
<table>
    <ul>
        <li>名前:<br><input name="name[]" value="{{old('name[]') }}"></li>
        <li>コメント:<br><input name="comment[]" value="{{'comment[]'}}"></li>
    </ul>

<!--以下はお手本記述し終わったら速やかに消すこと-->
    <b>フォーム{{$i}}</b>
    <input type="hidden" name="form_count[]" value="{{$i}}">
    <ul>
        <li>名前:<br><input type="text" name="name[]" value="{{old('name[]')}}"></li>

        <li>コメント:<br><input type="text" name="comment[]" value="{{old('comment[]')}}"></li>

        <li>チェック<input type="checkbox" name="samp[{{$i}}]" value="{{$i}}"></li>

        <li>チェック1<input type="checkbox" name="samp1[{{$i}}]" value="{{$i}}"></li>

        <li>備考<br><input type="text" name="remark[]" value="{{old('remark[]')}}"></li>
    </ul>
</table>
<!--終了-->
</form>
