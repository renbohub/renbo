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
                        <form method="post" action="{{route('master.product.edit.action')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->product_id}}">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">
                                    Product Type 
                                </label>
                                <div class="col-sm-10">
                                    <div>
                                        <label> <input type="radio" value="service" id="optionsRadios1" name="product_type" @if ($item->product_type == 'service') checked @else  @endif>
                                            Services
                                        </label>
                                    </div>
                                    <div>
                                        <label> <input type="radio" value="material" id="optionsRadios2" name="product_type" @if ($item->product_type == 'material') checked @else  @endif> 
                                            Material
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_name" value="{{$item->product_name}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_number" value="{{$item->product_number}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Desc</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_desc" value="{{$item->product_desc}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Base Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="product_base_price" value="{{$item->product_base_price}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_code" value="{{$item->product_code}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Unit</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_unit" value="{{$item->product_unit}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a href="{{route('master.product')}}" class="btn btn-white btn-sm" type="submit">Cancel</a>
                                    <button class="btn btn-primary btn-sm" type="submit">Update</button>
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