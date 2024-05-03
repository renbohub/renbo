<style>
    table, th, td {
        max-width: 100%;
        min-width: 100%;
        border-collapse: collapse;
    }
    tbody
    {
        border: 1px solid #808080!important
    }
    .text-center{
        text-align: center;
    }
    body {
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
     
    }

    #body-first  {
        border: 2px solid #808080!important
        padding: 80px
    }
    #body-first tr:nth-child(even) {
        background-color: aliceblue;  
    }
    #body-first tr{
        font-size: 12px
    }
    footer {
        position: fixed; 
        width: 100%;
        left: 0;
        bottom: 0;
        background-color:  rgb(99, 153, 67);;
        color: white;
        text-align: center;
        
    }
    
</style>
<body>
    
    
    <header>
        <table>
            <thead>
                <tr>
                    <th align="left">
                    <img src="{{url('sites/img/renbo-1.png')}}" alt="" width="300"> 
                    </th>
                    <th align="right" style="font-size:24px">
                        QUOTATION
                    </th>
                </tr>
                <tr>
                    <th colspan="2" style="background-color: rgb(99, 153, 67);"><br></th> 
                </tr>
            </thead>
        </table>  
    </header>
    <table style=" font-size: 11px;border:none!important">
        <thead style="border:none">
            <tr style="border:none">
                <td rowspan="8" style="font-size: 14px border:none" >
                    <b>PT.Renbo Revolution Technology </b> <br><br>
                    Jln. Kedasih III Blok C-1 No.28, Cikarang Utara<br>
                    Kab. Bekasi, Jawa Barat Indonesia <br>
                    <br>
                    0819-0810-9595 <br>
                    sales@renbo.co.id
                </td>
                <td style="border-bottom: 1px solid rgb(109, 109, 109)!important" align="center"><b>Date</b></td>
            </tr>
            <tr>
                <td class="py-2 bg-light" style="border:none" align="center">{{$quotation_head->quotation_date}}</td>
            </tr>
            <tr>
                <td style="border-bottom: 1px solid rgb(109, 109, 109)!important" align="center"><b>Valid Until</b></td>
            </tr>
            <tr>
                <td class="py-2  bg-light" style="border:none" align="center">{{$quotation_head->quotation_exp}}</td>
            </tr>
            <tr>
                <td style="border-bottom: 1px solid rgb(109, 109, 109)!important" align="center"><b>Quotation No</b></td>
            </tr>
            <tr >
                <td class="py-2  bg-light" style="border:none" align="center">{{$quotation_head->quotation_number}}</td>
            </tr>
            <tr >
                <td style="border-bottom: 1px solid rgb(109, 109, 109)!important" align="center"><b>Tittle Quotation</b></td>
            </tr>
            <tr>
                <td style="border:none" align="center">{{$quotation_head->quotation_name}}</td>
            </tr>
           
        </thead>
        <tbody style="font-size: 11px;border:none!important;">
           
            <tr style="margin-top : 200px">
                <td colspan="2" style="border-bottom: 1px solid rgb(190, 190, 190)">
                    <b>Attention To</b>
                </td>
            </tr>
            <tr >
                <td>
                    {{$quotation_head->customer_name}}
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td colspan="" style="border: none">
                    <b>{{$quotation_head->customer_company}}</b>
                </td>
            </tr>
            <tr>
                <td style="border: none">
                    <div id="address" style="width: 300px;">{{$quotation_head->customer_address}}</div>
                    <br>
                    <div class="">{{$quotation_head->customer_number}}</div>
                </td>
            </tr>
            <tr >
                <td style="border: none"><br><br>Dengan Hormat</td>
            </tr>
            <tr>
                <td style="border: none">Bersama dengan ini kami sampaikan penawaran harga sebagai berikut :</td>
            </tr>
        </tbody>
    </table>
    <table  id="body">
        <thead style="background-color: rgb(99, 153, 67); color:white; font-size: 12px" >
            <tr style="border:none">
                <th class="text-center" style="border:none ; width:30px"></th>
                <th class="text-center" style="border:none">Description</th>
                <th class="text-center" style="border:none">Qty</th>
                <th class="text-center" style="border:none">UoM</th>
                <th class="text-center" style="border:none">Unit Price</th>
                <th class="text-center" style="border:none">Total</th>
                                  
            </tr>
        </thead>
        <tbody id="body-first" style="font-size: 12px;border: none!important">
            @foreach ($quotation_body as $body)
                @if ($body->line_type == 1)
                    <tr style="font-weight: bold; background-color: rgb(190, 233, 197);">
                        <td>
                            {{$body->group_no}}.
                        </td>
                        <td colspan='3'>
                            {{$body->quotation_desc}}               
                        </td>
                        <td align="right">
                                                              
                        </td>
                        <td align="right">
                            Rp. {{number_format($body->quotation_total)}},-
                        </td>
                    </tr>
                @elseif($body->line_type == 2)
                    <tr>
                        <td></td>
                        <td>{{$body->quotation_desc}}  </td>
                        <td align="center">{{$body->quotation_qty}}</td>
                        <td align="center">{{$body->quotation_uom}}</td>
                        <td align="right">Rp. {{number_format($body->quotation_price)}},-</td>
                        <td align="right">Rp. {{number_format($body->quotation_total)}},-</td>
                    </tr>
                @else
                    <tr>
                        <td></td>
                        <td colspan="6">{!! nl2br(e($body->quotation_desc)) !!}</td>
                    </tr>
                @endif
            @endforeach
                 <tr>
                    <td colspan="7">&nbsp;</td>
                 </tr>
                 <tr>
                    <td colspan="7">&nbsp;</td>
                 </tr>
        </tbody>
        <tbody class="bg-white" style="font-size: 12px;border: none!important">
            
             <tr>
                <td colspan="7">&nbsp;</td>
             </tr>
            <tr class="bg-white">
                <td colspan="2">
                   <b>Payment Instruction:</b> 
                </td>
                <td colspan="2" style="border: none"></td>
                <td  align="right" style="font-size: 12px; vertical-align: middle;border:none"><b>Subtotal</b></td>
                <td  align="right" style="font-size: 12px;border-bottom: 1px solid rgb(190, 190, 190)">Rp. {{number_format($total_quotation->total)}},-</td>
            </tr>
            <tr class="bg-white">
                <td colspan="2">
                    {{$quotation_head->remark_desc}}
                </td>
                <td colspan="2"></td>
               
                <td align="right" style="font-size: 11px; vertical-align: middle;border:none"><b>Discount Rate</b></td>
                <td  align="right" style="font-size: 11px;border-bottom: 1px solid rgb(190, 190, 190)"> {{number_format($quotation_head->quotation_disc)}} %</td>
            </tr>
            <tr class="bg-white">
                <td colspan="2" style="border:none">
                    
                </td>
                
                <td colspan="2"></td>
                <td align="right" style="font-size: 11px; vertical-align: middle;border:none"><b>After Discount</b></td>
                <td  align="right" style="font-size: 11px;border-bottom: 1px solid rgb(190, 190, 190)">Rp. {{number_format($total_quotation->total -($total_quotation->total * ($quotation_head->quotation_disc / 100)))}},-</td>
                                        
            </tr>
            <tr class="bg-white">
                <td colspan="2" style="border:none">
                   <b>Note :</b> 
                </td>
                
                <td colspan="2"></td>
                <td align="right" style="font-size: 11px; vertical-align: middle;border:none"><b>Tax Rate</b></td>
                <td  align="right" style="font-size: 11px;border-bottom: 1px solid rgb(190, 190, 190)">{{number_format($quotation_head->quotation_tax)}} %</td>
            </tr>
            <tr class="bg-white">
                <td colspan="4" style="border:none">
                    
                    {!! nl2br(e($quotation_head->quotation_note)) !!}
                    
                </td>
                <td align="right" style="font-size: 11px; vertical-align: middle;border-bottom: 1px solid rgb(190, 190, 190)"><b>Total Tax</b></td>
                <td  align="right" style="font-size: 11px;border-bottom: 1px solid rgb(190, 190, 190)">Rp. {{number_format(($total_quotation->total -($total_quotation->total * ($quotation_head->quotation_disc / 100)))* ($quotation_head->quotation_tax/100))}},-</td>
            </tr>
            <tr class="bg-white">
                <td colspan="4" style="border:none"></td>
                <td align="right" style="font-size: 16px; vertical-align: middle;"><b>Total</b></td>
                <td  align="right" style="font-size: 16px;border-bottom: 1px solid rgb(190, 190, 190)">Rp. {{number_format(($total_quotation->total -($total_quotation->total * ($quotation_head->quotation_disc / 100)))+(($total_quotation->total -($total_quotation->total * ($quotation_head->quotation_disc / 100)))* ($quotation_head->quotation_tax/100)))}},-</td>
            </tr>
                                   
        </tbody>         
    </table>
    <br>
    <br>
    <table style="border:none; font-size: 12px">
        <thead>
            <th style="width: 80%"></th>
            <th style="">scan here</th>
        </thead>
        <tbody style="border: none!important">
            <tr style="border: none!important">
                <td></td>
                <td style="text-align: center;padding-bottom: 5px"><br> {!! $qr_code !!}</td>
            </tr>
            <tr style="border: none!important">
                <td></td>
                <td style="text-align: center;">create by</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center;">{{$quotation_head->username}}</td>
            </tr>
        </tbody>
    </table>
    <footer>
        <div class="">www.renbo.co.id</div>
    </footer>
              
</body>  





</script>
