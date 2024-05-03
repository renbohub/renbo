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

                
        
        <div class="">
            @yield('content')
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
