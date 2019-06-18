<?php /* D:\xampp\htdocs\caocanhlinh\resources\views/admin/tintuc/list.blade.php */ ?>
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
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tiêu Đề</th>
                                <th>Tóm Tắt</th>
                                <th>Thể Loại</th>
                                <th>Loại Tin</th>
                                <th>Xem</th>
                                <th>Nổi Bật</th>
                                <th style="width: 10%" class="table-sm"><div class="btn-group pull-right"><a class="btn btn-success " href="admin/tintuc/add"><i class="fa fa-lg fa-plus"></i>Thêm</a></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($news->id); ?></td>
                                <td>
                                    <p><?php echo e($news->TieuDe); ?></p>
                                    <img width="100" src="image/tintuc/<?php echo e($news->Hinh); ?>">
                                </td>
                                <td width="50%"><?php echo e($news->TomTat); ?></td>
                                <td><?php echo e($news->loaitin->theloai->Ten); ?></td>
                                <td><?php echo e($news->loaitin->Ten); ?></td>
                                <td><?php echo e($news->SoLuotXem); ?></td>
                                <td><?php echo e($news->NoiBat); ?></td>
                                <td>
                                    <div class="btn-group pull-right"><a class="btn btn-primary" href="admin/loaitin/edit/"><i class="fa fa-lg fa-edit"></i>Sửa</a><a class="btn btn-danger delete" href="admin/loaitin/delete/"><i class="fa fa-lg fa-trash"></i>Xóa</a></div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
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
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="asset/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/sweetalert.min.js"></script>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>