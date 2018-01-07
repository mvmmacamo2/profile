<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <title>@yield('title')</title>
 <link rel="stylesheet" href="{{ asset("/admin-lte/bootstrap/css/bootstrap.min.css") }}">
 <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <link rel="stylesheet" href="{{ asset("/admin-lte/dist/css/AdminLTE.min.css") }}">
 <link rel="stylesheet" href="{{ asset("/admin-lte/dist/css/skins/_all-skins.min.css") }}">
 <link rel="stylesheet" href="{{ asset("/admin-lte/plugins/iCheck/flat/blue.css") }}">
 <link rel="stylesheet" href="{{ asset("/admin-lte/plugins/morris/morris.css") }}">
 <link rel="stylesheet" href="{{ asset("/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}">
 <link rel="stylesheet" href="{{ asset("/admin-lte/plugins/datepicker/datepicker3.css") }}">
 <link rel="stylesheet" href="{{ asset("/admin-lte/plugins/daterangepicker/daterangepicker.css") }}">
 <link rel="stylesheet" href="{{ asset("/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}">
 <link rel="stylesheet" href="{{ asset("/admin-lte/dist/css/AdminLTE.min.css") }}">
 <link rel="stylesheet" href="{{ asset("/admin-lte/dist/css/skins/skin-blue.min.css") }}">

</head>

<body class="hold-transition skin-blue sidebar-mini">
  
  <div id="app">
    <div id="wrapper">
      @yield('menu')
      @yield('sidebar')
      @yield('content')
      @yield('footer')
      @yield('content-wrapper')
      
    </div>
  </div>





  <script src="{{ asset("/admin-lte/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/bootstrap/js/bootstrap.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/fastclick/fastclick.js") }}"></script>
  <script src="{{ asset("/admin-lte/dist/js/app.min.js") }}"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> 
  <script>  $.widget.bridge('uibutton', $.ui.button); </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="{{ asset("/admin-lte/plugins/morris/morris.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/sparkline/jquery.sparkline.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/knob/jquery.knob.js") }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="{{ asset("/admin-lte/plugins/daterangepicker/daterangepicker.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/datepicker/bootstrap-datepicker.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/fastclick/fastclick.js") }}"></script>
  <script src="{{ asset("/admin-lte/dist/js/app.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/dist/js/app.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/plugins/chartjs/Chart.min.js") }}"></script>
  <script src="{{ asset("/admin-lte/dist/js/pages/dashboard.js") }}"></script>
  <script src="{{ asset("/admin-lte/dist/js/demo.js") }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>