@extends('layouts.menu')   
    @section('content')
        <div class="container-fluid">
            <div class="row pt-4">
                
              <div class="col-6">
                <h4><button class="btn btn-success add-button" id="addButton">NEW</button> &nbsp; Add User&nbsp;&nbsp;</h4>
                
              </div>
              <div class="col-6 text-right">
                
              </div>
              <div class="col-12">
                <hr>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                 
                  <div class="card-body">
                    <form action="{{route('add.user.act')}}" method="post" id="report_option">
                      @csrf
                      
                      <input type="hidden" class="form-control"  name="id" >
                        <label for="year" class="form-label">Username</label>
                        <input type="text" class="form-control"  name="username">
                        
                        <div class="mb-3" id="year">
                            <label for="year" class="form-label">Password</label>
                            <input type="password" class="form-control"  name="password">
                        </div>

                        <div class="mb-3" id="year">
                            <label for="year" class="form-label">Roles</label>
                            <select class="form-control" aria-label="Default select example" name="role">
                            @foreach($roles as $r)
                              <option value="{{$r->role_id}}">{{$r->role_name}}</option>
                            @endforeach
                            </select>
                        </div>
                      
                      <div class="mb-3" id="year">
                        <button type="submit" class="btn btn-success" id="submitBtn">Submit</button>
                      </div>
                      
                      
                      
                     
                    </form>
                     
                  </div>
                  <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- Add the modal markup -->
                

        <script>
        
        </script>
 @endsection
    
