@extends('admin.layout.index')

@section('content')
    <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Thể Loại</h1>
          <p>{{$theloai->Ten}}</p>
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
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                        </div>   
                        @endif
                        <form action="admin/theloai/edit/{{$theloai->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên Thể Loại</label>
                                <input class="form-control" name="Ten" placeholder="Điền tên thể loại..." value="{{$theloai->Ten}}" />
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
@endsection
@section('script')
<script type="text/javascript" src="asset/js/plugins/bootstrap-notify.min.js"></script>
<script type="text/javascript">
    @if(session('mess_edit'))
            $.notify({
                title: "Thể loại \" ",
                message: "{{session('mess_edit').'\" đã được cập nhật lại.'}}",
                icon: "fa fa-edit" 
            },{
                type: "success"
            });
        @endif
</script>
@endsection
