@extends('layouts.menu')   
    @section('content')
        <div class="container-fluid">
            <div class="row pt-4">
                
              <div class="col-6">
                <h4><button class="btn btn-success add-button" id="addButton">NEW</button> &nbsp; Edit List Area &nbsp;&nbsp;</h4>
                
              </div>
              <div class="col-6 text-right">
                
              </div>
              <div class="col-12">
                <hr>
              </div>
                <table  id="data-table" class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Shift No</th>
                        <th>Shift Start</th>
                        <th>Shift End</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($shift as $s)
                            <tr>
                               <td> {{$s->shift_id}}</td>
                               <td> {{$s->shift_no}}</td>
                               <td> {{$s->shift_start}}</td>
                               <td> {{$s->shift_end}}</td>
                               <td>
                                    <form action="{{route('edit.shift.detail')}}" method="GET" id="report_option">
                                        <input type="hidden" class="form-control"  name="id" value="{{$s->shift_id}}">
                                        <button type="submit" class="btn btn-success" id="submitBtn">Edit</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Add the modal markup -->
                

        <script>
        
        </script>
 @endsection
    
