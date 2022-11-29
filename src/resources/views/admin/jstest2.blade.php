<section>
    <p>ありがとうございます。</p>
</section>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
    document.getElementById('form').onsubmit = function(){
        if(Cookies.get('answered') === 'yes'){
            window.alert('回答済みです、アンケートは1回しか入力できません');
            return false;
        }else{
            Cookies.set('answerd','yes', {experies: 7});
        }
    };
</script>
