@extends('layouts.app')
@section('content')
<style>
    #header-2 td {
    padding: 3px;
    }
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Create Quotation</h2>
    </div>
 
</div>
<div class="container-fluid">
    <div class="row">
       <div class="col-12 py-4">
         <div class="card bg-white">
                <div class="card-body py-5" style="overflow: scroll">
                    <div class="p-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                    <img src="{{asset('renbo/sites/img/renbo-1.png')}}" alt="" width="300"> 
                                    </th>
                                    <th class="text-right pr-3" style="vertical-align: middle; font-size:24px">
                                        QUOTATION
                                    </th>
                                </tr>
                                <tr>
                                <th colspan="2" style="background-color: rgb(99, 153, 67);"></th> 
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="px-5">
                        <table class="table my-0" id="header-2">
                            <thead>
                                <tr>
                                    <td rowspan="12" style="font-size: 16px">
                                        <b>PT.Renbo Revolution Technology </b> <br><br>
                                        Jln. Kedasih III Blok C-1 No.28, Cikarang Utara<br>
                                        Kab. Bekasi, Jawa Barat Indonesia <br>
                                        <br>
                                        0819-0810-9595 <br>
                                        sales@renbo.co.id
                                    </td>
                                    <td>Date</td>
                                </tr>
                                <tr>
                                    <td class="py-2 bg-light">{{$quotation_head->quotation_date}}</td>
                                </tr>
                                <tr>
                                    <td>Valid Until</td>
                                </tr>
                                <tr>
                                    <td class="py-2  bg-light">{{$quotation_head->quotation_exp}}</td>
                                </tr>
                                <tr>
                                    <td>Quotation No</td>
                                </tr>
                                <tr >
                                    <td class="py-2  bg-light">{{$quotation_head->quotation_number}}</td>
                                </tr>
                                <tr>
                                    <td>Tittle Quotation</td>
                                </tr>
                                <tr>
                                    <td><input @if ($quotation_head->quotation_status > 0) readonly @endif id="q-tittle" onchange="changeTittle()" type="text" class="form-control" value="{{$quotation_head->quotation_name}}" name="title-head" placeholder="input tittle..."></td>
                                </tr>
                                <tr>
                                
                                <tr >
                                    <td style="border:none">Terms Of Payment</td>
                                </tr>
                                <tr>
                                    <td style="border:none">
                                        <select class='select2_demo_2 form-control' id='top' style='width: 300px' onchange="updateRemark()" @if ($quotation_head->quotation_status > 0) disabled @endif>
                                            @foreach ($list_remark as $lr)
                                                <option value='{{$lr->remark_id}}' @if ($lr->remark_id== $quotation_head->remark_id) selected @else  @endif>{{$lr->remark_code}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <br><br>
                                        <b>Attention To</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class='select2_demo_2 form-control' id='customer_id' style='width: 300px' onchange="updateCust()" @if ($quotation_head->quotation_status > 0) disabled @endif>
                                            <option value='' disabled hidden>Select Here</option>
                                            @foreach ($list_customer as $ic)
                                                <option value='{{$ic->customer_id}}' @if ($ic->customer_id == $quotation_head->customer_id) selected @else  @endif>{{$ic->customer_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                      <div id="address" style="width: 300px;">{{$quotation_head->customer_address}}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">

                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 border">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 border text-center @if ($quotation_head->quotation_status == 0) bg-warning @endif">
                                        Drafted
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 border text-center @if ($quotation_head->quotation_status == 1) bg-info @endif">
                                        Wait Approval
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 border text-center @if ($quotation_head->quotation_status == 2) bg-info @endif">
                                        Approved
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 border text-center @if ($quotation_head->quotation_status >= 3) bg-info @endif">
                                        Quoatation Send
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <table class="table my-0 my-4" id="r-dynamic-table">

                            <thead style="background-color: rgb(99, 153, 67); color:white">
                                <tr>
                                    <th style="width: 10px"></th>
                                    <th style="width: 0px"></th>
                                    <th style="min-width: 2s00px; width: 300px">Item</th>
                                    <th style="min-width: 300px">Desc</th>
                                    <th style="min-width: 80px; width: 100px">Lead Time</th>
                                    <th style="min-width: 80px; width: 100px">Qty</th>
                                    <th style="min-width: 100px; width: 100px">UoM</th>
                                    <th style="min-width: 150px">Unit Price</th>
                                    <th style="min-width: 150px">Total</th>
                                    <th style="width: 30px"></th>
                                </tr>
                            </thead>
                            <form id="product_form">
                                <div class="row pt-5">
                                    
                                    <div class="col-6">
                                        <div class="text-left">
                                            
                                            @if ($quotation_head->quotation_status == 0)
                                                <input type="submit" class="btn btn-success" value="Save change">&nbsp
                                                <button class="btn btn-success" onclick="setApprove(1)">Request Approval</button>
                                            @elseif($quotation_head->quotation_status == 1)
                                                @if(session('Users.role_id')==1)
                                                <button class="btn btn-primary" onclick="setApprove(2)">Approve Quoatation</button>
                                                <button class="btn btn-danger" onclick="setApprove(0)">Reject Quotation</button>
                                                @endif
                                            @elseif($quotation_head->quotation_status == 2)
                                                <button class="btn btn-primary" onclick="setApprove(3)">Mark Quotation as Send</button>
                                                <button class="btn btn-success" onclick="setApprove(0)">Back to Draft</button>
                                            @elseif($quotation_head->quotation_status == 3)
                                                <button class="btn btn-primary" onclick="setApprove(4)">Set To SO</button>
                                                <button class="btn btn-success" onclick="setApprove(0)">Back to Draft</button>
                                          
                                            @elseif($quotation_head->quotation_status == 4)
                                                
                                             @endif
                                            
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <a target="_blank" href="{{route('quotation.preview',$quotation_head->quotation_id)}}" class=" btn btn-warning">Preview</a>&nbsp
                                            @if($quotation_head->quotation_status > 2)
                                            <a  href="{{route('quotation.print',$quotation_head->quotation_id)}}" class=" btn btn-primary">Print</a>&nbsp
                                            @endif
                                            <a  href="{{route('quotation.home')}}" class=" btn btn-primary">Back</a>&nbsp
                                        </div>
                                    </div> 
                                </div>
                                
                                <tbody @if ($quotation_head->quotation_status == 0) id="sortable" @endif>
                                    @foreach ($quotation_body as $body)
                                        @if ($body->line_type == 1)
                                            <tr id='row_{{$body->quotation_order}}'>
                                                <td style='vertical-align:middle'><i class='fa fa-sort'></i></td>
                                                <td colspan='8'>
                                                    <input type='hidden' name='product_id[]' value='0'>
                                                    <input type='text'  placeholder='input section desc' value="{{$body->quotation_desc}}" name='quotation_desc[]' class='form-control' @if ($quotation_head->quotation_status > 0) readonly @endif></input>
                                                    <input type='hidden' name='quotation_lead_time[]' value='0'></input>
                                                    <input type='hidden' name='quotation_qty[]' value='0' ></input>
                                                    <input type='hidden' name='quotation_uom[]' value='-' ></input>
                                                    <input type='hidden' name='product_base_price[]' value='0' ></input>
                                                    <input type='hidden' name='quotation_total[]' value='0'></input><input type='hidden' name='line_type[]' value='{{$body->line_type}}'></input></td>                
                                                <td>
                                                    @if ($quotation_head->quotation_status == 0) 
                                                    <button class='btn btn-danger' onclick='removeRow({{$body->quotation_order}})'><i class='fa fa-trash'></i></button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @elseif($body->line_type == 2)
                                        <tr id='row_{{$body->quotation_order}}'><td style='vertical-align:middle'><i class='fa fa-sort'></i></td>
                                            <td></td>
                                            <td>
                                                <select class='select2_demo_1 form-control' name='product_id[]' style='width: 300px' @if ($quotation_head->quotation_status > 0) disabled @endif>
                                                    
                                                    @foreach ($list_options as $lo)
                                                        <option value='{{$lo->product_id}}' @if ($body->product_id == $lo->product_id) selected @endif>{{$lo->product_name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input @if ($quotation_head->quotation_status > 0) readonly @endif type='text' name='quotation_desc[]' value='{{$body->quotation_desc}}' class='form-control'></input>
                                            </td>
                                            <td>
                                                <input @if ($quotation_head->quotation_status > 0) readonly @endif type='number' name='quotation_lead_time[]' value='{{$body->quotation_lead_time}}' class='form-control'></input>
                                            </td>
                                            <td>
                                                <input @if ($quotation_head->quotation_status > 0) readonly @endif type='number' id='qty_{{$body->quotation_order}}' onchange='addFunction({{$body->quotation_order}});totalAdd();addSep();' name='quotation_qty[]' value='{{$body->quotation_qty}}' class='form-control'></input>
                                            </td>
                                            <td>
                                                <input @if ($quotation_head->quotation_status > 0) readonly @endif type='text' name='quotation_uom[]' value='{{$body->quotation_uom}}' class='form-control'></input>
                                            </td>
                                            <td>
                                                <input @if ($quotation_head->quotation_status > 0) readonly @endif type='text' min='0' step='1000'  id='price_{{$body->quotation_order}}' onchange='addFunction({{$body->quotation_order}});totalAdd();addSep();' name='product_base_price[]' value='{{$body->quotation_price}}' class='form-control text-right'></input>
                                            </td>
                                            <td>
                                                <input type='text'  min='0' step='1000' name='quotation_total[]'  value='{{$body->quotation_total}}' id='total_{{$body->quotation_order}}' class='form-control text-right' readonly></input>
                                                <input type='hidden' name='line_type[]' value='{{$body->line_type}}'></input>
                                            </td>              
                                            <td>
                                                @if ($quotation_head->quotation_status == 0) 
                                                <button class='btn btn-danger' onclick='removeRow({{$body->quotation_order}})'><i class='fa fa-trash'></i></button>
                                                @endif
                                            </td>
                                        </tr>
                                        @else
                                        <tr id='row_{{$body->quotation_order}}'><td colspan='2' style='vertical-align:middle'><i class='fa fa-sort'></i></td>
                                            <td colspan='7'><input type='hidden' name='product_id[]' value='0'>
                                            <textarea @if ($quotation_head->quotation_status > 0) readonly @endif name='quotation_desc[]' value='' class='form-control'> {{$body->quotation_desc}}</textarea>
                                            <input type='hidden' name='quotation_lead_time[]' value='0'></input>
                                            <input type='hidden' name='quotation_qty[]' value='0' ></input>
                                            <input type='hidden' name='quotation_uom[]' value='-' ></input>
                                            <input type='hidden' name='product_base_price[]' value='0' ></input>
                                            <input type='hidden' name='quotation_total[]' value='0'></input><input type='hidden' name='line_type[]' value='{{$body->line_type}}'></input></td>                
                                            <td>
                                                @if ($quotation_head->quotation_status == 0) 
                                                <button class='btn btn-danger' onclick='removeRow({{$body->quotation_order}})'><i class='fa fa-trash'></i></button>
                                                @endif
                                            </td></tr>
                                        @endif
                                    @endforeach
                                </tbody>
                             </form>
                                <tbody>
                                    @if ($quotation_head->quotation_status == 0)
                                    <tr>
                                        <td colspan="10" >
                                            <button class="btn btn-light add-section">Add Section</button>
                                            <button class="btn btn-light add-product">Add Product</button>
                                            <button class="btn btn-light add-note">Add Note</button> 
                                        </td>
                                    </tr>  
                                    @endif
                                    
                                    <tr>
                                        <td colspan="10">
                                            Note:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="10">
                                            <textarea class="form-control" name="note" id="note" onchange="changeText()" rows="2" @if ($quotation_head->quotation_status > 0) readonly @endif></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="8" align="right" style="font-size: 14px; vertical-align: middle;border:none"><b>Subtotal</b></td>
                                        <td><input  id="subtotal" type="text" class="form-control text-right" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8" align="right" style="font-size: 14px; vertical-align: middle;border:none"><b>Discount(%)</b></td>
                                        <td><input @if ($quotation_head->quotation_status > 0) readonly @endif id="discrate" step="0.1"  onchange="updateDisc();totalAdd()" type="number" class="form-control text-right" value="{{$quotation_head->quotation_disc}}"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8" align="right" style="font-size: 14px; vertical-align: middle;border:none"><b>After Discount</b></td>
                                        <td><input id="after_disc" type="text" class="form-control text-right" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8" align="right" style="font-size: 14px; vertical-align: middle;border:none"><b>Tax Rate(%)</b></td>
                                        <td><input @if ($quotation_head->quotation_status > 0) readonly @endif id="taxrate" step="0.1"  onchange="updateTaxRate();totalAdd()" type="number" value="{{$quotation_head->quotation_tax}}" class="form-control text-right"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8" align="right" style="font-size: 14px; vertical-align: middle;border:none"><b>Total Tax</b></td>
                                        <td><input id="after_tax" type="text" class="form-control text-right" disabled></td>
                                    </tr>
                                   
                                    <tr>
                                        <td colspan="7" style="border:none"></td>
                                        <td align="right" style="font-size: 20px; vertical-align: middle;"><b>Total</b></td>
                                        <td><input id="grand_total" type="text" class="form-control text-right" style="font-size: 20px; font-weight: bold" disabled></td>
                                    </tr>
                                   
                                </tbody>
                            
                        </table>
                                           
                    </div>
                </div>
                <div class="card-footer">
                    
                </div>         
         </div>
       </div>
    </div>
</div>

<div class="modal fade" id="modalSuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <div class="">Data Saved</div>
            <i class="fa fa-check-circle fa-5x" style="color:aquamarine" aria-hidden="true"></i>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalFailled" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <b><div id="getCode">Inccorect Data</div></b>
            <br>
            <i class="fa fa-times-circle fa-5x" style="color: red" aria-hidden="true"></i>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

@endsection
@section('script')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
$(document).ready(function () { 
    var jumlah = @json($quotation_body);
    var jmlh = jumlah.length
    var rowIndex=0 + jmlh;
    $(".add-section").click(function () { 
        rowIndex++;
        var m1 ="<tr id='row_"+rowIndex+"'><td style='vertical-align:middle'><i class='fa fa-sort'></i></td>"
        var m2 =""
        var m3 ="<td colspan='8'><input type='hidden' name='product_id[]' value='0'>"
        var m4 ="<input type='text' placeholder='input section desc' name='quotation_desc[]' class='form-control'></textarea>"
        var m5 ="<input type='hidden' name='quotation_lead_time[]' value='0'></input>"
        var m6 ="<input type='hidden' name='quotation_qty[]' value='0' ></input>"
        var m7 ="<input type='hidden' name='quotation_uom[]' value='-' ></input>"
        var m8 ="<input type='hidden' name='product_base_price[]' value='0' ></input>"
        var m9 ="<input type='hidden' name='quotation_total[]' value='0'></input><input type='hidden' name='line_type[]' value='1'></input></td>"                  
        var m10 ="<td><button class='btn btn-danger' onclick='removeRow("+rowIndex+")''><i class='fa fa-trash'></i></button></td></tr>";   
        markup = ""+m1+""+m2+""+m3+""+m4+""+m5+""+m6+""+m7+""+m8+""+m9+""+m10+""  
        tableBody = $("#r-dynamic-table"); 
        tableBody.append(markup);
    }); 
    $(".add-note").click(function () { 
        rowIndex++;
        var m1 ="<tr id='row_"+rowIndex+"'><td colspan='2' style='vertical-align:middle'><i class='fa fa-sort'></i></td>"
        var m2 =""
        var m3 ="<td colspan='7'><input type='hidden' name='product_id[]' value='0'>"
        var m4 ="<textarea name='quotation_desc[]' placeholder='input note here' value='input note' class='form-control'>&nbsp; -</textarea>"
        var m5 ="<input type='hidden' name='quotation_lead_time[]' value='0'></input>"
        var m6 ="<input type='hidden' name='quotation_qty[]' value='0' ></input>"
        var m7 ="<input type='hidden' name='quotation_uom[]' value='-' ></input>"
        var m8 ="<input type='hidden' name='product_base_price[]' value='0' ></input>"
        var m9 ="<input type='hidden' name='quotation_total[]' value='0'></input><input type='hidden' name='line_type[]' value='3'></input></td>"                  
        var m10 ="<td><button class='btn btn-danger' onclick='removeRow("+rowIndex+")''><i class='fa fa-trash'></i></button></td></tr>";   
        markup = ""+m1+""+m2+""+m3+""+m4+""+m5+""+m6+""+m7+""+m8+""+m9+""+m10+""    
        tableBody = $("#r-dynamic-table"); 
        tableBody.append(markup);
    });
    $(".add-product").click(function () { 
        var options = @json($list_options);
        var element = ''
        for (let i = 0; i < options.length; i++) {
            element += "<option value='"+options[i].product_id+"'>"+options[i].product_name+"</option>";
        }
        
        rowIndex++;
        var m1 ="<tr id='row_"+rowIndex+"'><td style='vertical-align:middle'><i class='fa fa-sort'></i></td>"
        var m2 ="<td></td>"
        var m3 ="<td><select class='select2_demo_1 form-control' name='product_id[]' style='width: 300px'><option selected disabled hidden>Select Here</option>"+element+"</select></td>"
        var m4 ="<td><input type='text' name='quotation_desc[]' value='' class='form-control'></input></td>"
        var m5 ="<td> <input type='number' name='quotation_lead_time[]' value='0' class='form-control'></input></td>"
        var m6 ="<td><input type='number' id='qty_"+rowIndex+"' onchange='addFunction("+rowIndex+");totalAdd();addSep();' name='quotation_qty[]' value='0' class='form-control'></input></td>"
        var m7 ="<td><input type='text' name='quotation_uom[]' value='lot' class='form-control'></input></td>"
        var m8 ="<td><input type='text' id='price_"+rowIndex+"' onchange='addFunction("+rowIndex+");totalAdd();addSep();' name='product_base_price[]' value='0' class='form-control text-right'></input></td>"
        var m9 ="<td><input type='text' name='quotation_total[]'  value='0' id='total_"+rowIndex+"' class='form-control text-right' readonly></input><input type='hidden' name='line_type[]' value='2'></input></td>"                  
        var m10 ="<td><button class='btn btn-danger' onclick='removeRow("+rowIndex+")''><i class='fa fa-trash'></i></button></td></tr>";   
        markup = ""+m1+""+m2+""+m3+""+m4+""+m5+""+m6+""+m7+""+m8+""+m9+""+m10+""     
        tableBody = $("#r-dynamic-table"); 
        tableBody.append(markup);

        $(".select2_demo_1").select2();
    }); 
    
    $( "#sortable" ).sortable();
    $("#product_form").submit(function(event) {
        event.preventDefault();
        var product_id = $("select[name='product_id[]'],input[name='product_id[]']").map(function() { return $(this).val();}).get();
        var quotation_desc = $("input[name='quotation_desc[]'], textarea[name='quotation_desc[]']").map(function() { return $(this).val();}).get();;
        var quotation_lead_time = $("input[name='quotation_lead_time[]']").map(function() { return $(this).val();}).get();
        var quotation_qty = $("input[name='quotation_qty[]']").map(function() { return $(this).val();}).get();
        var quotation_uom = $("input[name='quotation_uom[]']").map(function() { return $(this).val();}).get();
        var quotation_price = $("input[name='product_base_price[]']").map(function() { return $(this).val();}).get();
        var quotation_total= $("input[name='quotation_total[]']").map(function() { return $(this).val();}).get();
        var line_type = $("input[name='line_type[]']").map(function() { return $(this).val();}).get();
        var data = [];
        var group = 0;
        var order = 0;
        var q_id = '{{$quotation_head->quotation_id}}';
        for (let i = 0; i < quotation_desc.length; i++) {
           if (line_type[i] == 1) {
             group++
           }
           order++
           if (product_id[i] == undefined){
              var id = 0;
           }else{
             id = product_id[i]
           }
           var arr = {
                'q_id' : q_id,
                'q_order' : order,
                'g_no' : group,
                'p_id' : parseInt(id),
                'q_price' : parseInt(quotation_price[i].replace(/,/g, '')),
                'q_qty' : parseInt(quotation_qty[i]),
                'q_desc' : quotation_desc[i],
                'l_type' : parseInt(line_type[i]),
                'q_lead_time' : parseInt(quotation_lead_time[i]),
                'q_total' : parseInt(quotation_total[i].replace(/,/g, '')),
                'q_uom' : quotation_uom[i],
            }      
            data.push(arr);
        }
        $.ajax({
                url: '{{route("quotation.create.act")}}',
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'value' : data
                },
                success: function(data) {
                    console.log(data);
                    if(data.error==402){
                        $("#modalFailled").modal('show');
                    }else{
                     $("#modalSuccess").modal('show');
                     }
                },
                error: function (request, status, error) {
                    console.log(status,error)
                    $("#getCode").html(error);
                    $("#modalFailled").modal('show');
                }
                
        })
        
        
    });
});
function removeRow(index){
        $('#row_'+index+'').remove();
    }
function addFunction(index){
    var a = $('#qty_'+index+'')[0].value;
    var b = $('#price_'+index+'')[0].value;
    var d =parseInt(b.replace(/,/g, ''));
    var c = a * d;
    $('#total_'+index+'').attr("value",c);
    var desc= $("input[name='quotation_desc[]'],textarea[name='quotation_desc[]']").map(function() { return $(this).val();}).get();
    for (let i = 0; i < desc.length; i++) {
        var b = i + 1;
        if(document.getElementById('price_'+b+'') !== null){


            var data = document.getElementById('price_'+b+'').value;
            var data_a = data.replace(/,/g, "");
            var after = addCommas(data_a);
          


            var data_1 = document.getElementById('total_'+b+'').value;
            var after_1 = addCommas(data_1);
            
            $("#total_"+b+"").attr("value",after_1);
            $("#price_" + b).val(after);
            console.log("datd"+after);
        }
    }
    console.log(desc);
}
function totalAdd(){

    var quotation_total= $("input[name='quotation_total[]']").map(function() { return $(this).val();}).get();
    var total = 0
    for (let i = 0; i < quotation_total.length; i++) {
        total += parseInt(quotation_total[i].replace(/,/g, ""));
    }
    var after_total = addCommas(total.toFixed(0));
    var dr = document.getElementById('discrate').value;
    var dr_t = total- (total * (parseFloat(dr)/100));
    var disc_total = addCommas(dr_t.toFixed(0));

    var tax = document.getElementById('taxrate').value;
    var tax_t = dr_t * (parseFloat(tax)/100);
    var tax_total = addCommas(tax_t.toFixed(0));
    $("#subtotal").val(after_total);
    $("#after_tax").val(tax_total);
    $("#after_disc").val(disc_total);
    var gt = document.getElementById('grand_total').value;
    var gt_t = tax_t + dr_t;
    var gt_total = addCommas(gt_t.toFixed(0));
    $("#grand_total").val(gt_total);
}
$(".select2_demo_2").select2();

function updateCust(){
    var dropdown = document.getElementById("customer_id");
    var selectedValue = dropdown.value;
    var q_id = '{{$quotation_head->quotation_id}}';
    $.ajax({
                url: '{{route("quotation.edit.cust")}}',
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'value' : selectedValue,
                    'id'    : q_id
                },
                
                success: function(data) {
                  
                    $("#address").html(data.data.customer_address);
                }
        })
}
$(document).ready(function() {
    var quotation_total= $("input[name='quotation_total[]']").map(function() { return $(this).val();}).get();
    var total = 0
    for (let i = 0; i < quotation_total.length; i++) {
        total += parseInt(quotation_total[i].replace(/,/g, ""));
    }
    var after_total = addCommas(total.toFixed(0));
    var dr = document.getElementById('discrate').value;
    var dr_t = total- (total * (parseFloat(dr)/100));
    var disc_total = addCommas(dr_t.toFixed(0));

    var tax = document.getElementById('taxrate').value;
    var tax_t = dr_t * (parseFloat(tax)/100);
    var tax_total = addCommas(tax_t.toFixed(0));
    $("#subtotal").val(after_total);
    $("#after_tax").val(tax_total);
    $("#after_disc").val(disc_total);

    var gt = document.getElementById('grand_total').value;
    var gt_t = tax_t + dr_t;
    var gt_total = addCommas(gt_t.toFixed(0));
    $("#grand_total").val(gt_total);
});
function changeTittle(){
    var dropdown = document.getElementById("q-tittle");
    var selectedValue = dropdown.value;
    var q_id = '{{$quotation_head->quotation_id}}';
    $.ajax({
                url: '{{route("quotation.edit.tittle")}}',
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'value' : selectedValue,
                    'id'    : q_id
                },
                success: function(data) {
                   
                }
        })
}

function updateTaxRate(){
    
    var dropdown = document.getElementById("taxrate");
    var selectedValue = dropdown.value;
    var q_id = '{{$quotation_head->quotation_id}}';
    $.ajax({
                url: '{{route("quotation.edit.tax")}}',
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'value' : selectedValue,
                    'id'    : q_id
                },
                success: function(data) {
                   
                }
        })
}

function updateDisc(){
    var dropdown = document.getElementById("discrate");
    var selectedValue = dropdown.value;
    var q_id = '{{$quotation_head->quotation_id}}';
    $.ajax({
                url: '{{route("quotation.edit.disc")}}',
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'value' : selectedValue,
                    'id'    : q_id
                },
                success: function(data) {
                   
                }
        })
}

$(document).ready(function() {
    var desc= $("input[name='quotation_desc[]'],textarea[name='quotation_desc[]']").map(function() { return $(this).val();}).get();
    for (let i = 0; i < desc.length; i++) {
        var b = i + 1;
        if(document.getElementById('price_'+b+'') !== null){
            var data = document.getElementById('price_'+b+'').value;
            var after = addCommas(data);
            $("#price_"+b+"").attr("value",after);
            var data_1 = document.getElementById('total_'+b+'').value;
            var after_1 = addCommas(data_1);
            $("#total_"+b+"").attr("value",after_1);
        }
    }
    
});

function addCommas(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
function removeCommas(str) {
    return str.replace(/,/g, "");
}
function addSep(){
    
}
function setApprove(id){
    var q_id = '{{$quotation_head->quotation_id}}';
    $.ajax({
                url: '{{route("quotation.req.approve")}}',
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'value' : id,
                    'id'    : q_id
                },
                success: function(data) {
                   
                }
    })
    setTimeout(function() {
        location.reload();
    }, 1000);
}

function changeText(){
    var dropdown = document.getElementById("note");
    var selectedValue = dropdown.value;
    var q_id = '{{$quotation_head->quotation_id}}';
    $.ajax({
                url: '{{route("quotation.edit.note")}}',
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'value' : selectedValue,
                    'id'    : q_id
                },
                success: function(data) {
                   
                }
    })
};

function updateRemark(){
    var dropdown = document.getElementById("top");
    var selectedValue = dropdown.value;
    var q_id = '{{$quotation_head->quotation_id}}';
    $.ajax({
                url: '{{route("quotation.edit.remark")}}',
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'value' : selectedValue,
                    'id'    : q_id
                },
                success: function(data) {
                   
                }
    })
};

function updateRemark(){
    var dropdown = document.getElementById("top");
    var selectedValue = dropdown.value;
    var q_id = '{{$quotation_head->quotation_id}}';
    $.ajax({
                url: '{{route("quotation.edit.remark")}}',
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'value' : selectedValue,
                    'id'    : q_id
                },
                success: function(data) {
                   
                }
    })
};


</script>
@endsection