@extends('layouts.menu')
@section('content')
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-12 mb-4">
                <b>1. Renbo App</b>
                <hr>
                <div class="row">
                    <div class="col-2 text-center">
                        <center>
                            <a href="{{route('quotation.home')}}">
                                <div class="card rounded shadow-lg border-0" style="border-radius: 10px!important; width:110px">
                                    <div class="card-body py-0" style="background: rgb(255,200,187);
                                        background: linear-gradient(323deg, rgba(255,200,187,1) 35%, rgba(189,188,255,1) 100%);border-radius: 10px!important;height:110px;">
                                        <table style="height:110px">
                                            <tbody>
                                                <tr>
                                                    <td style="vertical-align: middle; ">
                                                        <i style="color:white" class="fa fa-line-chart fa-4x" aria-hidden="true"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                            <div class="text-center py-2">
                                <b>Sales App</b>
                            </div>
                        </center>
                    </div>
                    <div class="col-2 text-center"> 
                        <center>
                            <a href="{{route('quotation.home')}}">
                                <div class="card rounded shadow-lg border-0" style="border-radius: 10px!important; width:110px">
                                    <div class="card-body py-0" style="background: rgb(255,200,187);
                                        background: linear-gradient(323deg, rgb(226, 241, 169) 10%, rgb(86, 184, 107) 100%);border-radius: 10px!important;height:110px; vertical-align:middle">
                                        <table style="height:110px">
                                            <tbody>
                                                <tr>
                                                    <td style="vertical-align: middle; ">
                                                        <i style="color:white" class="fa fa-usd fa-4x" aria-hidden="true"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                            <div class="text-center py-2">
                                <b>Accounting App</b>
                            </div>
                        </center>
                    </div>
                    <div class="col-2 text-center"> 
                        <center>
                            <a href="{{route('quotation.home')}}">
                                <div class="card rounded shadow-lg border-0" style="border-radius: 10px!important; width:110px">
                                    <div class="card-body text-center py-0" style="background: rgb(255,200,187);
                                        background: linear-gradient(323deg, rgb(78, 220, 255) 10%, rgb(86, 184, 107) 100%);border-radius: 10px!important;height:110px; vertical-align:middle">
                                        <table style="height:110px">
                                            <tbody>
                                                <tr>
                                                    <td style="vertical-align: middle; ">
                                                        <i style="color:white" class="fa fa-credit-card-alt fa-4x" aria-hidden="true"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                            <div class="text-center py-2">
                                <b>Purchase App</b>
                            </div>
                        </center>
                    </div>
                   
                </div>
               
                

            </div>

            <div class="col-12 mb-4">
                <b>2. Client App</b>
                <hr>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection