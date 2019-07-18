@extends('admin.layout.index')

@section('content')
    <div class="app-title">
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                        <div class="col-md-8">
                            <h1 class="page-header">Product
                                <small>Danh Sách</small>
                            </h1>
                        </div>
                        <div class="col-md-4">
                            <div class="btn-group pull-right"><a class="btn btn-dark " href="admin/getContents"><i class="fa fa-cloud-download"></i>Get URL</a></div>
                        </div>
                    </div>
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
                                <th>Nổi Bật</th>
                                <th>Trạng Thái</th>
                                <th style="width: 10%" class="table-sm"><div class="btn-group pull-center"><a class="btn btn-success " href="admin/tintuc/add"><i class="fa fa-lg fa-plus"></i>Thêm</a></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tintuc as $news)
                            <tr class="odd gradeX" align="center">
                                <td>{{$news->id}}</td>
                                <td>
                                    <p>{{$news->TieuDe}}</p>
                                    <img width="100" class="img-thumbnail" src="image/tintuc/{{$news->Hinh}}">
                                </td>
                                <td width="50%">{{$news->TomTat}}</td>
                                <td>{{$news->loaitin->theloai->Ten}}</td>
                                <td>{{$news->loaitin->Ten}}</td>
                                <td>{{$news->NoiBat}}</td>
                                <td>{{$news->TrangThai}}</td>
                                <td>
                                    <div class="btn-group pull-right"><a class="btn btn-primary" href="admin/tintuc/edit/{{$news->id}}"><i class="fa fa-lg fa-edit"></i>Sửa</a><a class="btn btn-danger dedelete{{$news->id}}" href="admin/tintuc/delete/{{$news->id}}"><i class="fa fa-lg fa-trash"></i>Xóa</a></div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center mx-auto">
                        <div class="row">
                            <div class="col-lg-4 col-lg-push-4 text-center">
                                  {!!$tintuc->links()!!}     
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
@endsection
@section('script')
    <!-- Data table plugin-->
    <script type="text/javascript" src="asset/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
        @if(session('NewsDel'))
            $.notify({
                title: "Đã xóa thành công ",
                message: "{{'Tin Tức \" '.session('NewsDel')}}'\"'",
                icon: "fa fa-trash" 
            },{
                type: "danger"
            });
        @endif
        @if(session('getUrl'))
            $.notify({
                title: "Tin mới được get thành công!",
                message: "",
                icon: "fa fa-check" 
            },{
                type: "success"
            });
        @endif
        @foreach($tintuc as $news)
        $('.delete{{$news->id}}').click(function(){
            var href = $('.delete{{$news->id}}').attr('href');
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
        @endforeach

        /*$(document).ready(function() {

            fetch_customer_data();

            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{-- route('getUrl') --}}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('ul#output').html(data.table_data);
                        $('#total_records').text(data.total_data);
                    }
                })
            }
            $('input#search', this)
                .focus(function(){
                    $('div.result').show();
                })
                .blur(function(){
                    $('div.result').hide();
                });

            $(document).on('keyup', '#search', function() {
                //$('.result').show();
                var query = $(this).val();
                fetch_customer_data(query);
            });
        });*/
    </script>

@endsection