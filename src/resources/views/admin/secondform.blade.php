<form method="POST" action="{{('secondpost')}}">
    @for($i=0; $i<10; $i++)
        <table>
            <b>フォーム{{$i}}</b>
            <ul>
                <input type="hidden" name="form_count[]" value="{{$i}}">
                <li>名前:<br><input type="text" name="name[]" value="{{old('name[]')}}"></li>
                <li>テキスト:<br><input type="text" name="text[]" value="{{old('text[]')}}"></li>
                <li>チェック:<input type="checkbox" name="check[{{$i}}]" value="check[{{$i}}]"></li>
                <li>チェック1:<input type="checkbox" name="check1[{{$i}}]" value="check1[{{$i}}]"></li>
                <li>チェック2:<input type="checkbox" name="check2[{{$i}}]" value="check2[{{$i}}]"></li>
            </ul>
        </table>
    @endfor
        <input type="submit" value="送信する">
</form>
