<?php /* D:\xampp\htdocs\caocanhlinh\resources\views/admin/tintuc/add.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<!-- Page Content -->
        <div class="app-title">
            <div>
              <h1><i class="fa fa-th-list"></i> Tin Tức</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
              <li class="breadcrumb-item"><a href="admin/theloai/list"><i class="fa fa-home fa-lg"></i></a></li>
              <li class="breadcrumb-item">Thêm</li>
              <li class="breadcrumb-item active"><a href="#">Tin Tức</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7">
                                    <!-- /.col-lg-12 -->
                                    <div class="col-lg-12">
                                        <form action="" method="POST">
                                            <!-- <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Thể Loại</label>
                                                    <select class="form-control" name="TheLoai">
                                                        <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($cat->id); ?>">
                                                              <?php echo e($cat->Ten); ?>  
                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Loại Tin</label>
                                                     <select class="form-control" name="LoaiTin">
                                                        <?php $__currentLoopData = $loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($type->id); ?>"><?php echo e($type->Ten); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <label>Tiêu Đề</label>
                                                <input class="form-control" name="txtName" placeholder="Nhập tiêu đề bài viết..." />
                                            </div>
                                            <div class="form-group">
                                                <label>Tóm Tắt</label>
                                                <textarea class="form-control" rows="3" name="txtIntro"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Bài Viết</label>
                                                <textarea class="form-control" id="editor" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-default">Thêm</button>
                                            <button type="reset" class="btn btn-default">Làm Mới</button>
                                    </div>
                                </div>

                                <div  class="col-md-5">
                                    <div class="col-lg-12" style="padding-bottom:120px">
                                        <!-- <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> -->
                                        <div class="form-group">
                                            <label>Từ Khóa</label>
                                            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
                                        </div>
                                        <div class="form-group">
                                            <span style="display: block">Hình ảnh</span>
                                            <label>
                                                <div width="300" class="form-group" style="background-image: url('image/tintuc/9-1406519730_180x108.jpg') !important;background-size: cover;background-position: center;"></div>
                                                <input  onchange="readURL(this)" type="file" name="img_url" id="img_url" style="display:none" />
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Hiện Thị</label>
                                            <label class="radio-inline">
                                                <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                            </label>
                                            <label class="radio-inline">
                                                <input name="rdoStatus" value="2" type="radio">Invisible
                                            </label>
                                            <div class="toggle-flip">
                                                <label>
                                                    <input type="checkbox"><span class="flip-indecator" data-toggle-on="Hiện" data-toggle-off="Ẩn"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </form> 
                                </div>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>