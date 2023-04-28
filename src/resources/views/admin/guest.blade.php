<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script type="text/javascript">
    $(function(){
        function allsum(){
            //合計
            max = 0;
            for(let i = 0; i < 15; i++){
                product_code = '#product_code'+i;
                price = $(product_code).val();
                max = max + Number(price);
            }
            for(let i = 0; i < 15; i++){
                first_product = '#first_product'+i;
                price = $(first_product).val();
                max = max + Number(price);
            }
            for(let i =0; i < 15; i++){
                second_product ='#second_product'+i;
                price = $(second_product).val();
                max = max + Number(price)
            }
            sum = '#sum';
            $(sum).attr('value',max);

        }
        /*
        function allsum(){
            id_payment_schedule ='#payment_schedule0';
            price = $(id_payment_schedule).val();
            max = 0;
            for (let i = 0; i < 14; i++){
                id_payment_schedule ='#payment_schedule'+i;
                price = $(id_payment_schedule).val();
                max = max + Number(price);
            }
            id_max ='#total_amount';
            $(id_max).attr('value',max);
            console.log(max);
        }
         */
        $('.id').on('keyup',function(){
            id_part = $(this).attr('id');
            id = '#' + id_part;
            id_value = $(id).val();

           const numbers = id_part.replace(/[^0-9]/g, '');
            names = '#' + 'name'+ numbers;
            product_codes = '#' + 'product_code' + numbers;
            first_products = '#' + 'first_product' + numbers;
            second_products = '#' + 'second_product' + numbers;

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
                        $(names).val(o.name);
                        $(product_codes).val(o.product_code);
                        $(first_products).val(o.first_product);
                        $(second_products).val(o.second_product);
                    allsum();

                },
                error:function(xhr, ts, err){
                    console.log(err);
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
