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

    <form action="#" id="form7">
        <input type="text" name="word5">
        <input type="submit" value="検索7">
    </form>
    <b id="choice1"></b>
</section>

   <form action="#" id="form8">
       <input type="text" name="word8">
       <br>
       <input type="text" name="word9">
       <br>
       <input type="submit" value="検索8">
   </form>
 <b id="choice2"></b>

<script>

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
        addpro2(val,val1);
    }



    document.getElementById('form7').onsubmit = function(){
       // 一桁の自然数＝0より大きく、かつ、9以下の整数、として判定すればよい。
        var search = document.getElementById('form7').word5.value;

        var addpro1 = function(num){
            var numString = String(num);
            if(num > 0 && num < 9){
                document.getElementById('choice1').textContent = +num+'は自然数です';
            }else{
                document.getElementById('choice1').textContent = +num+'は自然数ではありません';
            }
            console.log(addpro1(search));
        }
    }
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
