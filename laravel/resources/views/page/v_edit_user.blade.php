@extends('layouts.menu')   
    @section('content')
        <div class="container-fluid bg-white">
            <div class="row pt-4">
                
              <div class="col-6">
                <h4><a href="{{route('add.user.action')}}" class="btn btn-success add-button" id="addButton">NEW</a> &nbsp; Edit List User &nbsp;&nbsp;</h4>
                
              </div>
              <div class="col-6 text-right">
                
              </div>
              <div class="col-12">
                <hr>
              </div>
                <table  id="data-table" class="table bg-white">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Roles Account</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->username}}</td>
                                <td>{{$row->role_name}}</td>
                                <td>  
                                    <div class="row">
                                        <div class="col-6 text-right">
                                    
                                            <form action="{{route('edit.user.detail')}}" method="POST" id="report_option">
                                                @csrf
                                                
                                                <input type="hidden" class="form-control"  name="id" value="{{$row->id}}">
                                                <button type="submit" class="btn btn-warning" id="submitBtn">Edit</button>
                                            </form>
                                            
                                        </div>
                                        <div class="col-6">
                                            @if($row->username != 'superadmin')
                                            <form action="{{route('delete.user.action')}}" method="POST" id="report_option">
                                                @csrf
                                                <input type="hidden" class="form-control"  name="id" value="{{$row->id}}">
                                                <button type="submit" class="btn btn-danger" id="submitBtn">Delete</button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Add the modal markup -->
              
                
       
 @endsection
    
