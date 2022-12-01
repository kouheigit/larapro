<section>
    <form action="#" id="form">
        <input type="text" name="word">
        <input type="submit" value="検索">
    </form>
    <!--ここに表示する-->
    <p id="number"></p>
    <p id="output"></p>

</section>
<script>
    //神山美術館の入場料金は、一人600円であるが、5人以上のグループなら一人550円、20人以上の団体なら一人500円である。
    // 人数を入力し、入場料の合計を計算するプログラムを作成せよ。
    //formを取得したら発動する
    document.getElementById('form').onsubmit = function(){
        var val = document.getElementById('form').word.value;
        var addpro = function(num){
            if(num < 5 && num >= 5){
                var numString = String(num);
                var ans = numString * 600;
            }else if(num >= 5 && num > 20){
                var numString = String(num);
                var ans = numString * 550;
            }else if(num >= 20){
                var numString = String(num);
                var ans = numString * 500;
            }
            document.getElementById('number').textContent = numString;
            document.getElementById('output').textContent = ans;
        }
        addpro(val);
    }


</script>

