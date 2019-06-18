<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getLoginAdmin(){
    	return view('admin.login');
    }

    public function postLoginAdmin(Request $request){
    	$this->validate($request,[
    		'email'=>'required',
    		'password'=>'required|max:32',
    	],[
    		'email.required'=>'Bạn chưa nhập email',
    		'password.required'=>'Bạn chưa nhập mật khẩu',
    		'password.max'=>'Mật khẩu không được lớn hơn 32 kí tự',
    	]);

    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    	{
    		return redirect('admin/theloai/list');
    	}
    	else{
    		return redirect('admin/login')->with('mess_login','Đăng nhập không thành công');
    	}
    }

    public function getLogoutAdmin(){
    	Auth::logout();
    	return redirect('admin/login');
    }
}
