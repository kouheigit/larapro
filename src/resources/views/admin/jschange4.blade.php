<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
    $(function (){
        $(.)
    });
</script>

{{--
<h1>{{$changes[2]}}</h1>
<h1>{{$changes[3]}}</h1>
--}}

<input type="button" id="idchange" class="idchange" value="値がある"onclick="">
<input type="hidden" id="idchangehidden" class="idchangehidden" value={{$changes[2]}}>

<input type="button" id="id1change" class="id1change" value="値がある">
<input type="hidden" id="id1changehidden" class="id1changehidden" value={{$changes[3]}}>

{{--
<input type="button" id="id1" class="id1" value="値がある"onclick>
<input type="hidden" id="id1hidden" class="id1hidden" value={{$changeval[0]}}>
--}}
