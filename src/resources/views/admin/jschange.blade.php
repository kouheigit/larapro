<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script type="text/javascript">
        function valuechange() {
            var changeid_1 = $(this).data('value');
            flag = confirm("ボタンID1の値を変更しますか?");
            if (flag == true) {
                $.ajax({
                    type: "get",
                    url: "jschangeajax",
                    data: {
                        changeid_1:changeid_1
                    },
                    cache: false,
                    dataType: 'json',
                    /*
                    data : {
                        comment_id:comment_id,
                    },
                    cache: false,
                    dataType: 'json',*/
                })
            }
        }
        function valuechange1() {
            var changeid_2 = $(this).data('value');
            flag = ("ボタンID2の値を変更しますか?");
            if (flag == true) {
                $.ajax({
                    type: "get",
                    url: "jschangeajax",
                    data: {
                        changeid_2:changeid_2
                    },
                    cache: false,
                    dataType: 'json',
                })
            }
        }
</script>
<!--syamugame-->
{{--まだbuttonの値、class name　idがちゃんと設定できていないのでmanagement.bladeをもう一度参照して作り直せ--}}
<input type="button" class="id1"type="button"value="値がある" onclick="valuechange()">
<input type="hidden" id="id1_hidden" name="id1_value" value={{$changeval[0]}}>

<input type="button" class="id2"type="button"value="値がある" onclick="valuechange1()">
<input type="hidden" id="id2_hidden" name="id2_value" value={{$changeval[1]}}>



{{--一番最初の値のidは1--}}
<h1>{{$changeval[0]}}</h1>
{{--二番目のidは2--}}
<h1>{{$changeval[1]}}</h1>

