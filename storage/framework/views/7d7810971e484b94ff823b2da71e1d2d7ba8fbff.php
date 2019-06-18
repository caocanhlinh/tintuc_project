<?php /* /home/vagrant/code/caocanhlinh/resources/views/admin/theloai/edit.blade.php */ ?>


<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Thể Loại</h1>
          <p><?php echo e($theloai->Ten); ?></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="admin/theloai/list"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item">Sửa</li>
          <li class="breadcrumb-item active"><a href="#">Thể Loại</a></li>
        </ul>
    </div>
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
                        <form action="admin/theloai/edit/<?php echo e($theloai->id); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Tên Thể Loại</label>
                                <input class="form-control" name="Ten" placeholder="Điền tên thể loại..." value="<?php echo e($theloai->Ten); ?>" />
                            </div>
                          
                            <button type="submit" name="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cập Nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="asset/js/plugins/bootstrap-notify.min.js"></script>
<script type="text/javascript">
    <?php if(session('mess_edit')): ?>
            $.notify({
                title: "Thể loại \" ",
                message: "<?php echo e(session('mess_edit').'\" đã được cập nhật lại.'); ?>",
                icon: "fa fa-edit" 
            },{
                type: "success"
            });
        <?php endif; ?>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>