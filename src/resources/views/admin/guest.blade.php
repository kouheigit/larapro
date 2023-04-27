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
            product_codes1 = '#' + `product_code1[${numbers}]`;
            product_codes2 = '#' + `product_code2[${numbers}]`;
            alert(product_codes1);

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
                        $(product_codes1).val(o.product_code1);
                        $(product_codes2).val(o.product_code2);
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
    /*
     $val['allsum'] = $sum;

        $(function() {
            $('.number').on('keyup', function ()
            {
                id = $(this).attr('id');
                data = id;
                id_data = data.replace(/[^0-9]/g, '');
                id2 = '#year'+id_data;
                id1 = '#billing_day'+id_data;
                $.ajax({
                    type: "get",
                    url: "opmajax",
                    data: {
                        year: $(id2).val(),
                        number: $(this).val(),
                    },
                    cache: false,
                    dataType: 'json',
                    success: function (o) {
                        $.each(o,function(key,obj){
                            id1 = '#billing_day' + id_data;
                            id_payment_schedule ='#payment_schedule'+ id_data;
                            site_name ='#site_name' + id_data;
                            console.log(obj.invoice.slice(0, 10));
                            $(id1).attr('value', obj.invoice.slice(0, 10));
                            $(id_payment_schedule).attr('value',obj.allpay);
                            $(site_name).attr('value',obj.site_name);
                            //ループの外で
                            max = obj.allsum;
                            id_data++;
                        });
                        allsum();
                    },
                    error: function (xhr, ts, err) {
                        console.log(err);
                    }
                })
            });
        });
     */
</script>
<h1>購入履歴</h1>
<li>ID　　　　　　　　　購入者名　　　　　　購入商品　　　　　　購入商品1　　　　 　購入商品2</li>
@for($i=0; $i<15; $i++)
    <li><input type="text" class="id" id="id{{$i}}"name="id[{{$i}}]"value="{{old("id.$i")}}"> <input type="text" class="name" id="name{{$i}}"name="name[{{$i}}]"value="{{old("name.$i")}}">　<input type="text" class="product_code" id="product_code{{$i}}"name="product_code[{{$i}}]"value="{{old("product_code.$i")}}">　<input type="text" class="product_code1"id="product_code1[{{$i}}]"value="{{old("product_code1.$i")}}">　<input type="text" class="product_code2"id="product_code2[{{$i}}]"value="{{old("product_code2.$i")}}"></li>
@endfor
    <b>合計</b><input type="text" class="sum" id="sum" name="sum" value="{{old("sum")}}">
