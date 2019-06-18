@extends('admin.layout.index')

@section('content')
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
                                <div class="col-md-8">
                                    <!-- /.col-lg-12 -->
                                    <div class="col-lg-12">
                                        @if(count($errors)>0)
                                            <div class="alert alert-danger">
                                                @foreach($errors->all() as $err)
                                                    {{$err}}
                                                @endforeach
                                            </div>   
                                        @endif
                                        <form action="admin/tintuc/add" method="POST" role="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Thể Loại</label>
                                                    <select id="TheLoai" class="form-control" name="TheLoai">
                                                        @foreach($theloai as $cat)
                                                            <option value="{{$cat->id}}">
                                                              {{$cat->Ten}}  
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Loại Tin</label>
                                                     <select id="LoaiTin" class="form-control" name="LoaiTin">
                                                        @foreach($loaitin as $type)
                                                            <option value="{{$type->id}}">{{$type->Ten}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <label>Tiêu Đề</label>
                                                <input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề bài viết..." />
                                            </div>
                                            <div class="form-group">
                                                <label>Tóm Tắt</label>
                                                <textarea class="form-control" rows="3" maxlength="100" name="TomTat"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Bài Viết</label>
                                                <textarea class="form-control" rows="5" id="editor" name="content" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm</button>
                                            <button type="reset" class="btn btn-default">Làm Mới</button>
                                    </div>
                                </div>

                                <div  class="col-md-4">
                                    <div class="col-lg-12" style="padding-bottom:120px">
                                        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                                        <div class="form-group">
                                            <label>Từ Khóa</label>
                                            <input class="form-control" name="Tags" placeholder="Please Enter Category Keywords" />
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Đăng</label>
                                            <div class="tile-body">
                                              <input class="form-control" id="demoDate" name="create_at" type="text" placeholder="Select Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span style="display: block">Hình ảnh</span>
                                            <!-- <label>
                                                <div width="300" class="form-group" style="background-image: url('image/tintuc/9-1406519730_180x108.jpg') !important;background-size: cover;background-position: center;"></div>
                                                <input  onchange="readURL(this)" type="file" name="img_url" id="img_url" style="display:none" />
                                            </label> -->
                                              <label>
                                                <div class="form-control text-center">
                                                    <img id="preimg" class="img-thumbnail"  src="image/system/addimage.jpg" alt="Add image" /><br>
                                                    <input id="profile_image" class="form-control"  onchange="readURL(this)" type="file" name="profile_image" style="display:none" />
                                                </div>
                                              </label>     
                                        </div>
                                        <div class="row">  
                                            <div class="col-md-6">
                                                <span class="d-block text-center">Nổi Bật</span>
                                                <div class="toggle lg text-center">
                                                  <label>
                                                    <input type="checkbox" name="NoiBat"><span class="button-indecator"></span>
                                                  </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="d-block text-center">Trạng Thái</span>
                                                    <div class="toggle-flip text-center">
                                                        <label>
                                                            <input type="checkbox" checked name="Status"><span class="flip-indecator" data-toggle-on="Hiện" data-toggle-off="Ẩn"></span>
                                                        </label>
                                                    </div>
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
@endsection
@section('script')
    <script src="asset/js/plugins/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script>
        $('#demoDate').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
          });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preimg')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                cloudServices: {
                    tokenUrl: 'https://39915.cke-cs.com/token/dev/aUG9lKf1933F0GWAOkDhoAAREO5KRC4OvtfRb9DW5AHmPmierxs0D415z0nu',
                    uploadUrl: 'https://39915.cke-cs.com/easyimage/upload/'
                }
                
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );

    </script>
@endsection