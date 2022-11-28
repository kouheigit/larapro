<section>
   <form action="#" id="form">
       <input type="submit" value="検索">
   </form>
    <form action="#" id="form1">
        <input type="submit" value="検索1">
    </form>

    <form action="#" id="form2">
        <input type="text" name="word">
        <input type="submit" value="検索2">
    </form>
    <p id="output"></p>

    <form action="#" id="form3">
        <input type="text" name="word1">
        <input type="submit"value="検索3">
    </form>

    <form action="#" id="form4">
        <input type="text" name="word2">
        <input type="submit"value="検索Fiz">
    </form>

    <form action="#" id="form5">
        <input type="text" name="word3">
        <input type="submit" value="検索5">
    </form>

    <form action="#" id="form6">
        <input type="text" name="word4">
        <input type="submit" value="検索6">
    </form>
    <b id="choice"></b>
    <!--整数値を入力させ、その値が偶数ならばeven、奇数ならばoddと表示するプログラムを作成せよ。-->

</section>
<script>
    //formが起動したら発動する
    document.getElementById('form6').onsubmit = function(){
        var search = document.getElementById('form6').word4.value;
        var addpro = function(num){

            var numString = String(num);
            if(numString % 2 == 0) {
                document.getElementById('choice').textContent = "even";
            }else{
                document.getElementById('choice').textContent = "odd";
            }

        }
        console.log(addpro(search));
    }


    document.getElementById('form5').onsubmit = function(){
        var search = document.getElementById('form5').word3.value;
        var addcount = function(num){
            console.log(num);
        }
        console.log(addcount(search));
    }


    var addZero = function(num,digit){
        var numString = String(num);
        while(numString.length < digit){
            numString ='0'+ numString;
        }
        return numString;
    }
    console.log(addZero(1,10));


    document.getElementById('form4').onsubmit = function() {
        var search = document.getElementById('form4').word2.value;
        if(search % 3 == 0 && search % 5 == 0) {
            window.alert("FIZZBUZZ");
        }else if(search % 3== 0){
            window.alert("FIZZ");
        }else if(search % 5 == 0){
            window.alert("BUZZ");
        }else{
            window.alert("NONVALUE")
        }
    }

    /*


    function clickBtn1() {
        const t1 = document.getElementById("text1").value;
        window.alert(t1);
        if(t1 % 3 == 0 && t1 % 5 == 0){
            window.alert("fizzbuzz");
        }else if(t1 % 3 == 0){
            window.alert("fizz");
        }else if(t1 % 5 == 0){
            window.alert("buzz");
        }else{
            window.alert("nofizzbuzz");
        }*/


document.getElementById('form').onsubmit = function(){
console.log('クリックされました');
}

document.getElementById('form1').onsubmit = function(){
    console.log('クリックされました');
}

document.getElementById('form2').onsubmit = function(){
    var search = document.getElementById('form2').word.value;
    document.getElementById('output').textContent = ''+ search +'';
    return false;
}

document.getElementById('form3').onsubmit = function(){
    var search =document.getElementById('form3').word1.value;
    console.log(search);
}
</script>
