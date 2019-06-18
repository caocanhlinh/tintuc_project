@extends('admin.layout.index')
@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Thể Loại</h1>
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
                <th style="width: 10%" class="table-sm"><div class="btn-group pull-right"><a class="btn btn-success" href="admin/theloai/add"><i class="fa fa-lg fa-plus"></i>Thêm</a></div></th>
              </tr>
            </thead>
            <tbody>
            @foreach($theloai as $cat)
              <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->Ten}}</td>
                <td>{{$cat->TenKhongDau}}</td>
                <td>
                    <form action="" method="POST">
                        @csrf
                        <div class="btn-group pull-right"><a class="btn btn-primary" href="admin/theloai/edit/{{$cat->id}}"><i class="fa fa-lg fa-edit"></i>Sửa</a><a class="btn btn-danger delete{{$cat->id}}" href="admin/theloai/delete/{{$cat->id}}"><i class="fa fa-lg fa-trash"></i>Xóa</a></div>
                    </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
@endsection
@section('script')
    <!-- Data table plugin-->
    <script type="text/javascript" src="asset/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="asset/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="asset/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
        @if(session('mess_del'))
            $.notify({
                title: "Đã xóa thành công ",
                message: "{{'Thể loại \" '.session('mess_del')}}'\"'",
                icon: "fa fa-trash" 
            },{
                type: "danger"
            });
        @endif
        @foreach($theloai as $cat)
        $('.delete{{$cat->id}}').click(function(){
            var href = $('.delete{{$cat->id}}').attr('href');
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
        @endforeach
    </script>

@endsection