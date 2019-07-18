<?php /* /home/vagrant/code/caocanhlinh/resources/views/admin/layout/index.blade.php */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff.TinMoi</title>
    <base href="<?php echo e(asset("")); ?>">
    <link rel="shortcut icon" href="image/ads/favicon.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="asset/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php echo $__env->make('admin.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php echo $__env->make('admin.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="app-content">
        <?php echo $__env->yieldContent('content'); ?>
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
    <?php echo $__env->yieldContent('script'); ?>
  </body>
</html>