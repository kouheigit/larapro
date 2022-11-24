<h1 id="choice">ここのテキストを変更する</h1>
<script>
    /*
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
    }*/

 document.getElementById('choice').textContent = new Date();
</script>
