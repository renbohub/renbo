@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>List Sales Order</h2>
           
        </div>
        <div class="col-lg-2">
            
        </div>
    </div>
    <div class="card">

    </div>
    <table id="table-product" class="table table-striped table-bordered table-hover dataTables-example">
        <thead>
            <th>No</th>
            <th>SO Number</th>
            <th>Customer</th>
            <th>Company</th>
            <th>Project Name</th>
            <th>Payment Rate</th>
            <th>Status SO</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($list_product as $item)
                <tr>
                    <td>{{$item->quotation_id}}</td>
                    <td>{{$item->so_number}}</td>
                    <td>{{$item->customer_name}}</td>
                    <td>{{$item->customer_company}}</td>
                    <td>{{$item->quotation_name}}</td>
                    <td>{{$item->payment_rate}}</td>
                    <td>@if ($item->cust_po_number == "-")
                           <button class="btn bg-warning">PO Cust Not Inputed</button> 
                        @else
                            <button class="btn bg-primary">Confirm</button> 
                        @endif
                    </td>
                    <td><div class="input-group">
                                <a href="{{route('so.edit',$item->quotation_id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                      
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('script')
<script>
$(document).ready(function(){
    $('.dataTables-example').DataTable({
        pageLength: 10,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            { extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            {extend: 'pdf', title: 'ExampleFile'},

            {extend: 'print',
             customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
            }
            }
        ]

    });

});

</script>
@endsection