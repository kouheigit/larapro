<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script type="text/javascript">
    $(function(){
        $('.id').on('keyup',function(){
            id_part = $(this).attr('id');
            id = '#' + id_part;
            //idの値を取得した奴
            id_value = $(id).val();

            //数字
           const numbers = id_part.replace(/[^0-9]/g, '');
            names = '#' + 'name'+ numbers;
            product_codes = '#' + 'product_code' + numbers;
            first_products = '#' + 'first_product' + numbers;
            second_products = '#' + 'second_product' + numbers;
            /*
            product_codes1 = '#' + `product_code1[${numbers}]`;
            product_codes2 = '#' + `product_code2[${numbers}]`;*/
            alert(second_products);

            $.ajax({
                type:"get",
                url:"ajaxguest",
                data:{
                    id_value:id_value,
                },
                cache: false,
                dataType:'json',
                success: function (o) {
                   // $('.name').val(obj);
                    //$.each(o,function(key,obj){
                      //  console.log(key);
                        $(names).val(o.name);
                        $(product_codes).val(o.product_code);
                        $(first_products).val(o.first_product);
                        $(second_products).val(o.second_product);
                        //alert(o);
                   // });
                },
                error:function(xhr, ts, err){
                    console.log(err);
                    // alert("error");
                },
            })
        })
    })
</script>
<h1>購入履歴</h1>
<li>ID　　　　　　　　　購入者名　　　　　　購入商品　　　　　　購入商品1　　　　 　購入商品2</li>
@for($i=0; $i<15; $i++)
    <li><input type="text" class="id" id="id{{$i}}"name="id[{{$i}}]"value="{{old("id.$i")}}"> <input type="text" class="name" id="name{{$i}}"name="name[{{$i}}]"value="{{old("name.$i")}}">　<input type="text" class="product_code" id="product_code{{$i}}"name="product_code[{{$i}}]"value="{{old("product_code.$i")}}">　<input type="text" class="first_product"id="first_product{{$i}}"value="{{old("first_product.$i")}}">　<input type="text" class="second_product"id="second_product{{$i}}"value="{{old("second_product.$i")}}"></li>
@endfor
    <b>合計</b><input type="text" class="sum" id="sum" name="sum" value="{{old("sum")}}">
