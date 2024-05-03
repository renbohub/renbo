@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Input New Product<b></b></h5>
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
                   
                        <form method="POST" action="{{route('master.product.create.action')}}"> 
                            @csrf
                        
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">
                                    Product Type 
                                </label>
                                <div class="col-sm-10">
                                    <div>
                                        <label> <input type="radio" value="service" id="optionsRadios1" name="product_type" required>
                                            Services
                                        </label>
                                    </div>
                                    <div>
                                        <label> <input type="radio" value="material" id="optionsRadios2" name="product_type" required> 
                                            Material
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" name="product_name">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" name="product_number">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Desc</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" name="product_desc">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Base Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" value="" name="product_base_price">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" name="product_code">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Unit</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" name="product_unit">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a href="{{route('master.product')}}" class="btn btn-white btn-sm" type="submit">Cancel</a>
                                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                </div>
                            </div>
                        </form>    
                    
                    
                </div>
            </div>
        </div>
        
    </div>
   
   
</div>
@endsection
@section('script')


</script>
@endsection