@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>List Quotation</h2>
            <form action="{{route('quotation.create')}}" method="POST">
                @csrf
                <input type="submit" class="btn btn-success" value="Create Quoatation">
            </form>
           
        </div>
        <div class="col-lg-2">
            
        </div>
    </div>
    <div class="card">

    </div>
    <table id="table-product" class="table table-striped table-bordered table-hover dataTables-example">
        <thead>
            <th>No</th>
            <th>Quoatation Code</th>
            <th>Customer</th>
            <th>Company</th>
            <th>Project Name</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($list_product as $item)
                <tr>
                    <td>{{$item->quotation_id}}</td>
                    <td>{{$item->quotation_number}}</td>
                    <td>{{$item->customer_name}}</td>
                    <td>{{$item->customer_company}}</td>
                    <td>{{$item->quotation_name}}</td>
                    <td>@if ($item->quotation_status == 0)
                           <button class="btn bg-warning">Draft</button> 
                        @elseif($item->quotation_status == 1)
                            <button class="btn bg-primary">Wait to Approved</button> 
                        @elseif($item->quotation_status == 2)
                            <button class="btn bg-info">Approved</button> 
                        @elseif($item->quotation_status == 3)
                            <button class="btn bg-success">Quoatation Sended</button> 
                        @elseif($item->quotation_status >= 4)
                            <button class="btn bg-success">Quoatation Process</button> 
                        @endif
                    </td>
                    <td><div class="input-group">
                                <a href="{{route('quotation.edit',$item->quotation_id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <span class="input-group-append">
                                <a href="{{route('quotation.copy',$item->quotation_id)}}" class="btn btn-success"><i class="fa fa-clone"></i></a>
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