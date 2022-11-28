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

</section>
<script>
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
