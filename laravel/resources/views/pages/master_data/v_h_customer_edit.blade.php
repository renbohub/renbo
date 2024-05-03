@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Are you sure to edit this Product<b></b></h5>
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
                        <form method="post" action="{{route('master.customer.edit.action')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->customer_id}}">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">
                                    Customer Type
                                </label>
                                <div class="col-sm-10">
                                    <div>
                                        <label> <input type="radio" value="personal" id="optionsRadios1" name="customer_type" required @if ($item->customer_type == 'personal') 
                                            checked
                                        @else
                                            
                                        @endif>
                                            Personal
                                        </label>
                                    </div>
                                    <div>
                                        <label> <input type="radio" value="company" id="optionsRadios2" name="customer_type" required @if ($item->customer_type == 'company') 
                                            checked
                                        @else
                                            
                                        @endif>
                                            Company
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Customer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$item->customer_name}}" name="customer_name">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Customer Company</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$item->customer_company}}" name="customer_company">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Customer Address</label>
                                <div class="col-sm-10">
                                    <textarea name="customer_address" rows="10" class="form-control">{{$item->customer_address}}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Customer Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" value="{{$item->customer_email}}" name="customer_email" required>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Customer Website</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$item->customer_website}}" name="customer_website">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Csutomer Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$item->customer_number}}" name="customer_number">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a href="{{route('master.customer')}}" class="btn btn-white btn-sm" type="submit">Cancel</a>
                                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
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