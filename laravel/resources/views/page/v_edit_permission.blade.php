@extends('layouts.menu')   
    @section('content')
        <div class="container-fluid">
            <div class="row pt-4">
                
              <div class="col-6">
                <h4><a href="{{route('edit.permission.detail')}}"class="btn btn-success add-button" id="addButton">NEW</a> &nbsp; Edit List Area &nbsp;&nbsp;</h4>
                
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
                        <th>Route Name</th>
                        <th>Permission Id</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($shift as $s)
                            <tr>
                               <td> {{$s->permission_id}}</td>
                               <td> {{$s->route_name}}</td>
                               <td> {{$s->role_name}}</td>
                               <td><form action="{{route('edit.permission.action')}}" method="POST" id="report_option">
                                        @csrf
                                         <input type="hidden" class="form-control"  name="id" value="{{$s->permission_id}}">
                                        <button type="submit" class="btn btn-success" id="submitBtn">Delete</button>
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
    
