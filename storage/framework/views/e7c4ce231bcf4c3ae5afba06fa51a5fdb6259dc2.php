<?php /* /home/vagrant/code/caocanhlinh/resources/views/admin/tintuc/list.blade.php */ ?>


<?php $__env->startSection('content'); ?>
    <div class="app-title">
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tiêu Đề</th>
                                <th>Tóm Tắt</th>
                                <th>Thể Loại</th>
                                <th>Loại Tin</th>
                                <th>Xem</th>
                                <th>Nổi Bật</th>
                                <th style="width: 10%" class="table-sm"><div class="btn-group pull-center"><a class="btn btn-success " href="admin/tintuc/add"><i class="fa fa-lg fa-plus"></i>Thêm</a></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($news->id); ?></td>
                                <td>
                                    <p><?php echo e($news->TieuDe); ?></p>
                                    <img width="100" class="img-thumbnail" src="image/tintuc/<?php echo e($news->Hinh); ?>">
                                </td>
                                <td width="50%"><?php echo e($news->TomTat); ?></td>
                                <td><?php echo e($news->loaitin->theloai->Ten); ?></td>
                                <td><?php echo e($news->loaitin->Ten); ?></td>
                                <td><?php echo e($news->SoLuotXem); ?></td>
                                <td><?php echo e($news->NoiBat); ?></td>
                                <td>
                                    <div class="btn-group pull-right"><a class="btn btn-primary" href="admin/tintuc/edit/<?php echo e($news->id); ?>"><i class="fa fa-lg fa-edit"></i>Sửa</a><a class="btn btn-danger dedelete<?php echo e($news->id); ?>" href="admin/tintuc/delete/<?php echo e($news->id); ?>"><i class="fa fa-lg fa-trash"></i>Xóa</a></div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="text-center mx-auto">
                        <div class="row">
                            <div class="col-lg-4 col-lg-push-4 text-center">
                                  <?php echo $tintuc->links(); ?>     
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- Data table plugin-->
    <script type="text/javascript" src="asset/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
        <?php if(session('NewsDel')): ?>
            $.notify({
                title: "Đã xóa thành công ",
                message: "<?php echo e('Tin Tức \" '.session('NewsDel')); ?>'\"'",
                icon: "fa fa-trash" 
            },{
                type: "danger"
            });
        <?php endif; ?>
        <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        $('.delete<?php echo e($news->id); ?>').click(function(){
            var href = $('.delete<?php echo e($news->id); ?>').attr('href');
            swal({
                title: "Chắc chắn xóa không?",
                text: "Tất cả bình luận của bài viết sẽ bị xóa!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Đồng ý",
                cancelButtonText: "Hủy",
                closeOnConfirm: false
            }, function(isConfirm) {
                if (isConfirm) {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    window.location.href =href;
                }
            });
            return false;
          });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>