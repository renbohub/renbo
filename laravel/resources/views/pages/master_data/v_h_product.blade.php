@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>List Product</h2>
            <a href="{{route('master.product.create')}}" class="btn btn-success">
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
            <th>Product Name</th>
            <th>Product Type</th>
            <th>Product Base Price</th>
            <th>Product Desc</th>
            <th>Unit</th>
            <th>Product Image</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($list_product as $item)
                <tr>
                    <td>{{$item->product_id}}</td>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->product_type}}</td>
                    <td>{{$item->product_base_price}}</td>
                    <td>{{$item->product_desc}}</td>
                    <td>{{$item->product_unit}}</td>
                    <td>{{$item->product_image}}</td>
                    <td><div class="input-group">
                            <form action="{{route('master.product.edit')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$item->product_id}}" name="id">
                                <button class="btn btn-warning btn-sm" type="submit"><i class="fa fa-edit"></i></button>
                            </form>  
                            <span class="input-group-append">
                                <form action="{{route('master.product.delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$item->product_id}}" name="id">
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