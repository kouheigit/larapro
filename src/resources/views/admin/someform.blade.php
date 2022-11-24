<h1 id="choice">ここのテキストを変更する</h1>
<h1 id="output">新たなテキスト</h1>
<script>
    /*
    var todo = ['デザインカンプ作成','マズイ高い速い','宮本天外','ぐんぴぃ','Syamuさん'];
    for(var i = 0; i<todo.length; i++){
        console.log(todo[i]);
    }

   var fizzbuzz = function(num){
       if(num % 3 == 0 || num % 5 == 0){
            return 'fizzbuzz';
       }else if(num % 3 == 0 ){
           return'fizz';
       }else if(num % 5 == 0){
           return 'buzz';
       }else{
          return num;
       }
   }
   for(var i=0; i<=10; i++) {
       console.log(fizzbuzz(i));
   }
    /*
    var total = function(price){
        var tax = 0.08;
        return price + price * tax;
    }
    console.log('コーヒーメーカーの値段は'+total(8000)+'円(税込です)');
    document.getElementById('output').textContent ='コーヒーメーカの値段は'+total(8000)+'円です';

    for(var i=0; i<=10; i++){
        console.log(i);
    }

    var number = Math.floor(Math.random() * 5);
    var answer = parseInt(window.prompt("1~5までの数字を入力してください"));
    if(answer == number) {
        message = "あたり";
    }else if(answer > 5) {
        message = "0~5の数値を入力してください。"
    }else if(answer > number){
        message = "入力された答えの方が数値が大きいです。";
    }else if(answer < number) {
        message = "数字の方が大きいです";
    }else{
        message ="0~5の値を入力してください"
    }
    window.alert(message);


    var answer = window.prompt('ゲームを開始しますか?')
    if(answer=='yes') {
        window.alert("ゲームを開始します");
    }else if(answer=='no'){
        window.alert('ゲームを終了します');
    }else{
        window.alert('yesかnoで入力してください');
    }


    var answer = window.prompt('ヘルプを見ますか?');
    console.log(answer);

    if(window.confirm("ゲームスタート!準備はいい?")){
        window.alert("ゲームを開始します");
    }else{
        window.alert("ゲームを終了します");
    }
*/
 document.getElementById('choice').textContent = new Date();
</script>
