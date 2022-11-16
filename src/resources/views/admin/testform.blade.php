<h1>フォームテスト</h1>
<form method="POST" action="{{('testform')}}">
    @foreach($testform as $ts_val)
        <table>
            <ul>
                <li>名前:<br><input type="text" name="name[]" value="{{old('name_edit[]',$ts_val->name)}}"></li>

                <li>コメント:<br><input type="text" name="comment[]" value="{{old('comment_edit[]',$ts_val->comment)}}"></li>
                @if(old('samp[]',$ts_val->samp) == 1)
                <li>チェック<input type="checkbox" name="samp[{{$ts_val}}]" value="samp{{old($ts_val->id)}}" checked></li>
                @else
                    <li>チェック<input type="checkbox" name="samp[{{$ts_val}}]" value="{{old($ts_val->id)}}"></li>
                @endif

                @if(old('samp1[]',$ts_val->samp1) == 1)
                <li>チェック1<input type="checkbox"  name="samp1[{{$ts_val}}]" value="{{old($ts_val->id)}}" checked></li>
                @else
                    <li>チェック1<input type="checkbox" name="samp1[{{$ts_val}}]" value="{{old($ts_val->id)}}"></li>
                @endif
                <li>備考:<br><input type="text" name="remark[]" value="{{old('remark[]',$ts_val->remark)}}"></li>

            </ul>
        </table>
    @endforeach

    @for($i=0; $i<3; $i++)
        @csrf
        <table>
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
    @endfor
    <input type="submit" value="送信する">
</form>

