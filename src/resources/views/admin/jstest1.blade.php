<section>
    <form action="#" id="form">
        <input type="text" name="word">
        <input type="submit" value="検索">
    </form>
    <!--ここに表示する-->
    <p id="output"></p>
</section>
<script>
    //formを取得したら発動する
    document.getElementById('form').onsubmit = function(){
        var val = document.getElementById('form').word.value;
        var addpro = function(num){
            
        }
    }
/*
    document.getElementById('form8').onsubmit = function(){
        var val = document.getElementById('form8').word8.value;
        var val1 = document.getElementById('form8').word9.value;
        var addpro2 = function (num,num1){
            var numString = String(num);
            var numString1= String(num1);
            var numString2;
            for(numString= 0; numString<10; numString++){
                for(numString1=0; numString1<10; numString1++){
                    numString2 = numString * numString1;
                    console.log(numString2);
                    //document.getElementById('choice2').textContent = numString2;
                }
            }
        }
        addpro2(val,val1);*/
</script>

