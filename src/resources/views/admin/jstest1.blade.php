<form method="GET" action="{{('jstest2')}}">
    @csrf
    <table>
        <b>映画館に行きますか?</b>
        <br>
        <input type="radio" name="frequency">週1回以上<br>
        <input type="radio" name="frequency">月に1回くらい<br>
        <input type="radio" name="frequency">1年に数回程度<br>
        <input type="radio" name="frequency">ほとんど行かない、映画は観ない<br>
    </table>
    <br>
    <input type="submit" value="送信する">
</form>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
    
    document.getElementById('form').onsubmit = function(){
        if(Cookies.get('answered') === 'yes'){
            window.alert('回答済みです、アンケートは1回しか入力できません');
            return false;
        }else{
            Cookies.set('answered','yes', {expires: 7});
        }
    };
</script>


