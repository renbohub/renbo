@extends('layouts.menu')   
    @section('content')
        <div class="container-fluid">
            <div class="row pt-4">
                
              <div class="col-6">
                <h4>&nbsp; Edit User Password&nbsp;&nbsp;</h4>
                
              </div>
              <div class="col-6 text-right">
                
              </div>
              <div class="col-12">
                <hr>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                 
                  <div class="card-body">
                    <form action="{{route('edit.user.cp.act')}}" method="post" id="report_option">
                      @csrf
                      @foreach ($user as $s)
                      <input type="hidden" class="form-control"  name="id" value="{{$s->id}}">
                        <label for="year" class="form-label">Username</label>
                        <input type="text" class="form-control"  name="username" value="{{$s->username}}" disabled>
                        
                        <div class="mb-3" id="year">
                            <label for="year" class="form-label">Password</label>
                            <input type="password" class="form-control"  name="password" required>
                        </div>
                      
                      <div class="mb-3" id="year">
                        <button type="submit" class="btn btn-success" id="submitBtn">Submit</button>
                      </div>
                      @endforeach           
                     
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
    
