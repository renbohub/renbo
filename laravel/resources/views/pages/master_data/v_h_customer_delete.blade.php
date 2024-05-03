@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Are you sure to delete this Customer Data<b></b></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                      
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    @foreach ($list_product as $item)
                        <form method="get">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->customer_id}}">
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Customer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$item->customer_name}}" disabled>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Company</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$item->customer_company}}" disabled>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Customer Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$item->customer_type}}" disabled>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a href="{{route('master.product')}}" class="btn btn-white btn-sm" type="submit">Cancel</a>
                                    <button class="btn btn-primary btn-sm" type="submit">Delete</button>
                                </div>
                            </div>
                        </form>    
                    @endforeach
                    
                </div>
            </div>
        </div>
        
    </div>
   
   
</div>
@endsection
@section('script')


</script>
@endsection