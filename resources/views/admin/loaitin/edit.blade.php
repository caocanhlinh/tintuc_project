@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
    <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Loại Tin</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="admin/theloai/list"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item">Thêm</li>
          <li class="breadcrumb-item active"><a href="#">Loại Tin</a></li>
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
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}
                                @endforeach
                            </div>   
                            @endif

                            @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                            @endif
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Tên Thể Loại</label>
                                    <select name="Loai" class="form-control">
                                        @foreach($theloai as $cat)
                                            <option  value="{{$cat->id}}" <?php if($cat->id==$loaitin->idTheLoai) echo 'selected';?>>
                                                {{$cat->Ten}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tên Loại Tin</label>
                                    <input class="form-control" name="Ten" placeholder="Nhập tên loại tin..." value="{{$loaitin->Ten}}" required />
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cập Nhật</button>
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
@endsection

@section('script')
    <script type="text/javascript" src="asset/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript">
        @if(session('mess_edit'))
                $.notify({
                    title: "Cập nhật loại tin \" ",
                    message: "{{session('mess_edit').'\" thành công.'}}",
                    icon: "fa fa-check" 
                },{
                    type: "success"
                });
            @endif
    </script>
@endsection