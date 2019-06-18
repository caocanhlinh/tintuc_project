<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;
use App\TinTuc;

class PagesController extends Controller
{
	function __construct(){
		$theloai= TheLoai::all();
		view()->share('theloai',$theloai);
	}
	function index(){
    	return view('front.index');
    }

    function home(){
    	return view('front.home');
    }
    function allpost(Request $request){
    	$tintuc=TinTuc::orderBy('id','DESC')->where('TrangThai',1)->Paginate(10);
    	return view('front.allpost',['tintuc'=>$tintuc]);
    }
    function catpost($id){
    	$tintuc=TinTuc::select('TinTuc.*','Ten')
                        ->join('LoaiTin', 'TinTuc.idLoaiTin', '=', 'LoaiTin.id')
                        ->where('LoaiTin.idTheLoai',$id)
                        ->orderBy('TinTuc.id','DESC')->Paginate(10);
    	return view('front.catpost',['tintuc'=>$tintuc]);
    }
    function detail($id){
    	$tintuc=TinTuc::find($id);
    	return view('front.postDetail',['tintuc'=>$tintuc]);
    }
}
