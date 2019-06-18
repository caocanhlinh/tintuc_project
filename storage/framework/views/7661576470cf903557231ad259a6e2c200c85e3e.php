<?php /* /home/vagrant/code/caocanhlinh/resources/views/admin/loaitin/list.blade.php */ ?>

<?php $__env->startSection('content'); ?>
<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Thể Loại</h1>
      <p>Table to display analytical data effectively</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Danh Sách</li>
      <li class="breadcrumb-item active"><a href="#">Thể Loại</a></li>
    </ul>
    </div>
    <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Tên Không Dấu</th>
                <th>Thể Loại</th>
                <th style="width: 10%" class="table-sm"><div class="btn-group pull-right"><a class="btn btn-success " href="admin/loaitin/add"><i class="fa fa-lg fa-plus"></i>Thêm</a></div></th>
              </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($cat1->id); ?></td>
                <td><?php echo e($cat1->Ten); ?></td>
                <td><?php echo e($cat1->TenKhongDau); ?></td>
                <td><?php echo e($cat1->theloai->Ten); ?></td>
                <td>
                    <div class="btn-group pull-right"><a class="btn btn-primary" href="admin/loaitin/edit/<?php echo e($cat1->id); ?>"><i class="fa fa-lg fa-edit"></i>Sửa</a><a class="btn btn-danger delete<?php echo e($cat1->id); ?>" href="admin/loaitin/delete/<?php echo e($cat1->id); ?>"><i class="fa fa-lg fa-trash"></i>Xóa</a></div>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- Data table plugin-->
    <script type="text/javascript" src="asset/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="asset/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
        <?php if(session('mess_del')): ?>
            $.notify({
                title: "Đã xóa thành công ",
                message: "<?php echo e('Thể loại \" '.session('mess_del')); ?>'\"'",
                icon: "fa fa-trash" 
            },{
                type: "danger"
            });
        <?php endif; ?>
        <?php $__currentLoopData = $loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        $('.delete<?php echo e($cat1->id); ?>').click(function(){
            var href = $('.delete<?php echo e($cat1->id); ?>').attr('href');
            swal({
                title: "Chắc chắn xóa không?",
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