<?php /* /home/vagrant/code/caocanhlinh/resources/views/admin/theloai/add.blade.php */ ?>


<?php $__env->startSection('content'); ?>
<!-- Page Content -->
    <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Thể Loại</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="admin/theloai/list"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item">Thêm</li>
          <li class="breadcrumb-item active"><a href="#">Thể Loại</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col-lg-12 -->
                        <div class="col-lg-7" style="padding-bottom:120px">
                            <?php if(count($errors)>0): ?>
                            <div class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($err); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>   
                            <?php endif; ?>

                            <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('thongbao')); ?>

                            </div>
                            <?php endif; ?>
                            <form action="admin/theloai/add" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label>Tên Thể Loại</label>
                                    <input class="form-control" name="Ten" placeholder="Nhập tên thể loại" required />
                                </div>
                                <button ype="submit" name="submit" value="Thêm" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm</button>
                                <button type="reset" id="reset" class="btn btn-default">Làm Mới</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="asset/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript">
        <?php if(session('mess_add')): ?>
                $.notify({
                    title: "Thêm thể loại \" ",
                    message: "<?php echo e(session('mess_add').'\" thành công.'); ?>",
                    icon: "fa fa-check" 
                },{
                    type: "success"
                });
            <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>