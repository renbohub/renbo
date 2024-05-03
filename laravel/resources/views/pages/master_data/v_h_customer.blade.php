@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>List Customer</h2>
            <a href="{{route('master.customer.create')}}" class="btn btn-success">
                NEW
            </a>
           
        </div>
        <div class="col-lg-2">
            
        </div>
    </div>
    <div class="card">

    </div>
    <table id="table-product" class="table table-striped table-bordered table-hover dataTables-example">
        <thead>
            <th>No</th>
            <th>Customer Name</th>
            <th>Customer Company</th>
            <th>Customer Address</th>
            <th>Customer Type</th>
            <th>Customer Email</th>
            <th>Customer Website</th>
            <th>Customer Number</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($list_customer as $item)
                <tr>
                    <td>{{$item->customer_id}}</td>
                    <td>{{$item->customer_name}}</td>
                    <td>{{$item->customer_company}}</td>
                    <td>{{$item->customer_address}}</td>
                    <td>{{$item->customer_type}}</td>
                    <td>{{$item->customer_email}}</td>
                    <td>{{$item->customer_website}}</td>
                    <td>{{$item->customer_number}}</td>
                    <td><div class="input-group">
                            <form action="{{route('master.customer.edit')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$item->customer_id}}" name="id">
                                <button class="btn btn-warning btn-sm" type="submit"><i class="fa fa-edit"></i></button>
                            </form>  
                            <span class="input-group-append">
                                <form action="{{route('master.customer.delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$item->customer_id}}" name="id">
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                </form> 
                            </span>
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
        pageLength: 25,
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