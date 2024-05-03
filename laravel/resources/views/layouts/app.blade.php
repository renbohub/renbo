<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Production Dashboard</title>

    <link href="{{asset('renbo/sites/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('renbo/sites/css/bootstrap-multiselect.css')}}" rel="stylesheet">
    <link href="{{asset('renbo/sites/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('renbo/sites/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('renbo/sites/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('renbo/sites/js/mqtt.js')}}"></script>
    <script src="{{asset('renbo/sites/js/apex.js')}}"></script>
    <link href="{{asset('renbo/sites/css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <script src="{{asset('renbo/sites/js/jquery-3.1.1.min.js')}}"></script>
    <link href="{{asset('renbo/sites/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('renbo/sites/js/multiselect/dist/filter_multi_select.css')}}" />
    <script src="{{asset('renbo/sites/js/multiselect/dist/filter-multi-select-bundle.min.js')}}"></script>

</head>

        <body class="top-navigation" style="background-color: rgb(229, 225, 225)">        
            <nav class="navbar navbar-dark navbar-expand-lg navbar-static-top" role="navigation" style="z-index: 999!important">

                    <a href="{{route('dashboard')}}" class="navbar-brand bg-dark">RENBO</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-reorder"></i>
                    </button>

                <div class="navbar-collapse collapse justify-content-center" id="navbar" >
                    <ul class="nav justify-content-center">
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="{{route('quotation.dashboard')}}" >Sales Dashboard</a>
                           
                        </li>
                        
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="{{route('quotation.home')}}" >Quotation</a>
                          
                        </li>
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="{{route('so.home')}}" >Sales Order</a>
                          
                        </li>
                        
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown" >Master Data</a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="{{route('master.product')}}">List Product</a></li>
                                <li><a href="{{route('master.customer')}}">List Customer</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>
                <div class="">
                    <ul class="nav navbar-top-links navbar-right">
                      
                        <li class="dropdown">
                            <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-user-circle-o"></i> Hi! {{session('Users.username')}} </a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="{{route('logout-action')}}"><i class="fa fa-sign-out"></i> Log out</a></li>
                                <li>
                                    <form action="{{route('edit.user.cp')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{session('Users.id')}}" name="id">
                                        <button style="font-size: 14px" type="submit" class="btn btn-white border-0 py-2"> &nbsp; <i class="fa fa-cog"></i> Change Password</button>
                                    </form>
                                </li>
                                @if (session('Users.role_id') == 1)
                                <li><a href="{{route('edit.user')}}"><i class="fa fa-sliders"></i> Edit User</a></li>
                                <li><a href="{{route('edit.permission')}}"><i class="fa fa-sliders"></i> Edit Permisiion</a></li>
                                @elseif(session('Users.role_id') == 2)
                                <li><a href="{{route('edit.user')}}"><i class="fa fa-sliders"></i> Edit User</a></li>
                                @endif
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        
        <div class="">
            @yield('content')
        </div>
        

        </div>
        </div>



    <script src="{{asset('renbo/sites/js/popper.min.js')}}"></script>
    <script src="{{asset('renbo/sites/js/bootstrap.js')}}"></script>
    
    <script src="{{asset('renbo/sites/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('renbo/sites/js/inspinia.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/pace/pace.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('renbo/sites/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- ChartJS-->
    

    <!-- Peity -->
    <script src="{{asset('renbo/sites/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <!-- Peity demo -->
    <script src="{{asset('renbo/sites/js/demo/peity-demo.js')}}"></script>
    <script src="{{asset('renbo/sites/js/bootstrap-multiselect.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('renbo/sites/js/easy-number-separator.js')}}"></script>
    @yield('script')
  

</body>

</html>
