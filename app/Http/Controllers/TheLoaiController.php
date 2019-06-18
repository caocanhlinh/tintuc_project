<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;

class TheLoaiController extends Controller
{
    public function getList(){
        //setcookie('user', 'CaoCanhLinh', time() + 60, 'path=/; domain=null; HttpOnly; SameSite=strict');
    	$theloai=TheLoai::all();
    	return view('admin.theloai.list',['theloai'=>$theloai]);
    }

    public function getAdd(){

    	return view('admin.theloai.add');
    }

    public function postAdd( Request $request){

    	$this->validate($request,
    	[
    		'Ten'=>'required|unique:TheLoai,Ten|min:6|max:100'
    	],
    	[
    		'Ten.required'=>'Bạn chưa nhập tên thể loại',
            'Ten.unique'=>'Tên thể loại đã tồn tại',
    		'Ten.min'=>'Tên thể loại có độ dài từ 6 -> 100 ký tự',
    		'Ten.max'=>'Tên thể loại có độ dài từ 6 -> 100 ký tự'
    	]);

    	$theloai = new TheLoai;
    	$theloai->Ten=$request->Ten;
    	$theloai->TenKhongDau=changeTitle($request->Ten);
    	//echo changeTitle($request->Ten);
    	$theloai->save();
    	return redirect('admin/theloai/add')->with('mess_add',$theloai->Ten);
    }

    public function getEdit($id){

    	$theloai=TheLoai::find($id);
        return view('admin.theloai.edit',['theloai'=>$theloai]);
    }
    public function postEdit(Request $request,$id){
        $theloai=TheLoai::find($id);
        $this->validate($request,
        [
            'Ten'=>'required|unique:TheLoai,Ten|min:6|max:100'
        ],
        [
            'Ten.required'=>'Bạn chưa nhập tên thể loại',
            'Ten.unique'=>'Tên thể loại đã tồn tại',
            'Ten.min'=>'Tên thể loại có độ dài từ 6 -> 100 ký tự',
            'Ten.max'=>'Tên thể loại có độ dài từ 6 -> 100 ký tự'
        ]);
        $theloai->Ten=$request->Ten;
        $theloai->TenKhongDau=changeTitle($request->Ten);
        $theloai->save();

        return redirect('admin/theloai/edit/'.$id)->with('mess_edit',$theloai->Ten);
    }
    public function getDelete($id){
        /*if($_SERVER['REQUEST_METHOD']==='POST'){
            if($_POST['_token'] !== NULL && $_POST['_token'] == $_SESSION['_token']){
                
            }
            return redirect('admin/theloai/list');
        }
        else return redirect('admin/theloai/list');*/
        $theloai=TheLoai::find($id);
        $theloai->delete();
        return redirect('admin/theloai/list')->with('mess_del',$theloai->Ten);
    }
}
