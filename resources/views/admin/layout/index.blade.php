<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff.TinMoi</title>
    <base href="{{asset("")}}">
    <link rel="shortcut icon" href="image/ads/favicon.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="asset/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    @include('admin.layout.header')
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @include('admin.layout.menu')
    <main class="app-content">
        @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="asset/js/jquery-3.2.1.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="asset/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript">   
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
            }
        });
    </script>
    @yield('script')
  </body>
</html>