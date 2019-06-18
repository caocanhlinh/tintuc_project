<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;

class LoaiTinController extends Controller
{
    public function getList(){
    	$loaitin=LoaiTin::all();
    	return view('admin.loaitin.list',['loaitin'=>$loaitin]);
    }

    public function getAdd(){
    	$theloai=TheLoai::all();
    	return view('admin.loaitin.add',['theloai'=>$theloai]);
    }

    public function postAdd( Request $request){

    	$this->validate($request,
    	[
    		'Ten'=>'required|unique:LoaiTin,Ten|min:6|max:100'
    	],
    	[
    		'Ten.required'=>'Bạn chưa nhập tên thể loại',
            'Ten.unique'=>'Tên loại tin đã tồn tại',
    		'Ten.min'=>'Tên loại tin có độ dài từ 6 -> 100 ký tự',
    		'Ten.max'=>'Tên loại tin có độ dài từ 6 -> 100 ký tự'
    	]);

    	$loaitin = new loaitin;
    	$loaitin->Ten=$request->Ten;
    	$loaitin->TenKhongDau=changeTitle($request->Ten);
    	$loaitin->idTheLoai=$request->Loai;

    	//echo changeTitle($request->Ten);
    	$loaitin->save();
    	return redirect('admin/loaitin/add')->with('mess_add',$loaitin->Ten);
    }

    public function getEdit($id){
    	$theloai=TheLoai::all();
    	$loaitin=LoaiTin::find($id);
    	return view('admin.loaitin.edit',['theloai'=>$theloai,'loaitin'=>$loaitin]);
    }

    public function postEdit( Request $request,$id){
    	$loaitin=LoaiTin::find($id);
    	$this->validate($request,
    	[
    		'Ten'=>'required|min:6|max:100'
    	],
    	[
    		'Ten.required'=>'Bạn chưa nhập tên thể loại',
    		'Ten.min'=>'Tên loại tin có độ dài từ 6 -> 100 ký tự',
    		'Ten.max'=>'Tên loại tin có độ dài từ 6 -> 100 ký tự'
    	]);

    	$loaitin->Ten=$request->Ten;
    	$loaitin->TenKhongDau=changeTitle($request->Ten);
    	$loaitin->idTheLoai=$request->Loai;

    	//echo changeTitle($request->Ten);
    	$loaitin->save();
    	return redirect('admin/loaitin/edit/'.$id)->with('mess_edit',$loaitin->Ten);
    }

    public function getDelete($id){
        $loaitin=LoaiTin::find($id);
        $loaitin->delete();
        return redirect('admin/loaitin/list')->with('mess_del',$loaitin->Ten);
    }
}
