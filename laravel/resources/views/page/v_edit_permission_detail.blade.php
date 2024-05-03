@extends('layouts.menu')   
    @section('content')
        <br>
        <br>
        <div class="container bg-white pt-2">
            <div class="row pt-4">
                
              <div class="col-6">
                <h4> &nbsp; Add Permission &nbsp;&nbsp;</h4>
                
              </div>
              <div class="col-6 text-right">
                
              </div>
              <div class="container">
                <div class="col-12 pt-4">
                  <form action="{{route('edit.permission.detail.act')}}" method="post" id="report_option">
                      @csrf
                      
                      <div class="mb-3" id="year">
                        
                        
                        <div class="mb-3" id="year">
                            <label for="year" class="form-label">Select role</label>
                            <select class="form-control" aria-label="Default select example" name="role_id">
                              @foreach ($role as $r1)
                                  <option value="{{$r1->role_id}}">{{$r1->role_name}}</option>
                              @endforeach
                              
                             
                            </select>
                        </div>
                        <div class="mb-3" id="year">
                            <label for="year" class="form-label">Select route</label>
                            <select class="form-control" aria-label="Default select example" name="route_id">
                              @foreach ($route as $r2)
                                  <option value="{{$r2->route_id}}">{{$r2->route_name}}</option>
                              @endforeach
                            </select>
                        </div>
                     
                      <div class="mb-3" id="year">
                        <button type="submit" class="btn btn-success" id="submitBtn">Submit</button>
                      </div>
                     
                      
                      
                     
                    </form>
                </div>
              </div>
             
               
            </div>
        </div>
        <!-- Add the modal markup -->
                

        <script>
        
        </script>
 @endsection
    
