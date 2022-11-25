<form method="POST" action="{{('secondpost')}}">
    @for($i=0; $i<10; $i++)
        <table>
            <ul>
                <input type="hidden" name="form_count[]" value="{{$i}}">
                <li>名前:<input type="text" name="name[]" value="{{old('name[]')}}"></li>
                <li>テキスト<input type="text" name="text[]" value="{{old('text[]')}}"></li>
                <li>チェックボックス<input type="checkbox" name="check[{{$i}}]" value="check[{{$i}}]"></li>
                <li>チェックボックス1<input type="checkbox" name="check1[{{$i}}]" value="check1[{{$i}}]"></li>
                <li>チェックボックス2<input type="checkbox" name="check2[{{$i}}]" value="check2[{{$i}}]"></li>
            </ul>
        </table>
        <input type="submit" value="送信する">
    @endfor
</form>
