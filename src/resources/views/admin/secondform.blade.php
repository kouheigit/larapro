
<form method="POST" action="{{('secondpost')}}">
@for($i=0; $i<10; $i++)
   <table>
       <ul>
           <input type="hidden" name="form_count[]" value="{{$i}}">
           <input type="text" name="name[]" value="name[]">
           <input type="text" name="text[]" value="text[]">
           <input type="checkbox" name="check[]" value="check[{{$i}}]">
           <input type="checkbox" name="check1[]" value="check1[{{$i}}]">
           <input type="checkbox" name="check2[]" value="check2[{{$i}}]">
       </ul>
   </table>
   <input type="submit" value="送信する">
@endfor
</form>
