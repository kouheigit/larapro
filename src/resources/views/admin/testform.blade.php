<h1>フォームテスト</h1>
<form method="POST" action="{{('admin.testform')}}">
    @for($i=0; $i<3; $i++)
        @csrf
        <table>
            <b>フォーム</b>
            <ul>
                <li>名前:<input type="text" name="name[]"value="{{old('name')}}"></li>
                <br>
                <li>コメント:<input type="text" name="comment[]"value="{{old('comment')}}"></li>
                <br>
                <li>チェック<input type="checkbox" name="samp[{{$i}}]"value="{{$i}}"></li>
                <br>
                <li>チェック1<input type="checkbox" name="samp1[{{$i}}]"value="{{$i}}"></li>
                <br>
                <li>備考<input type="text" name="remark[]"value="{{old('remark')}}"></li>
            </ul>
        </table>
    @endfor
    <input type="submit" value="送信する">
</form>

