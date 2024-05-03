@extends('layouts.menu')   
    @section('content')
        <div class="container-fluid">
            <div class="row pt-4">
                
              <div class="col-6">
                <h4><button class="btn btn-success add-button" id="addButton">NEW</button> &nbsp; Edit List Shift&nbsp;&nbsp;</h4>
                
              </div>
              <div class="col-6 text-right">
                
              </div>
              <div class="col-12">
                <hr>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                  <div class="card-header pt-2 py-1"><h4>Filter</h4></div>
                  <div class="card-body">
                    <form action="{{route('edit.shift.action')}}" method="post" id="report_option">
                      @csrf
                      @foreach ($shift as $s)
                      <div class="mb-3" id="year">
                        <input type="hidden" class="form-control"  name="id" value="{{$s->shift_id}}">
                        <label for="year" class="form-label">Shift Number</label>
                        <input type="text" class="form-control"  name="shift_no" value="{{$s->shift_no}}" disabled>
                        </div>
                        <div class="mb-3" id="year">
                            <label for="year" class="form-label">Time Start</label>
                            <input type="text" class="form-control"  name="shift_start" value="{{$s->shift_start}}">
                        </div>
                        <div class="mb-3" id="year">
                            <label for="year" class="form-label">Time Finish</label>
                            <input type="text" class="form-control"  name="shift_end" value="{{$s->shift_end}}">
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
    
