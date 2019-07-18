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
    	$tintuc=TinTuc::orderBy('id','DESC')->where('TrangThai',1);
    	return view('front.home',['tintuc' =>$tintuc]);
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
    function action(Request $request) {
	    if ($request->ajax()) {
	        $output = '';
	        $query = $request->get('query');
	        if ($query != NULL) {
	            $data = TinTuc::where('TieuDe', 'like', '%'.$query.'%')->orderBy('id','DESC')->take(5)->get();
	        }
	        else{
	        	$data="";
	        }
	        $total_row = $data->count();
	        if ($total_row > 0) {
	            foreach($data as $row) {

	                $output .= '<li><a href="detail/post/'.$row->id.'-'.$row ->TieuDeKhongDau.'"><img width="80" src="image/tintuc/'.$row->Hinh.'">'.str_limit($row->TieuDe, 80, '&hellip;').'</a></li>';
	            }
	        } else {
	            $output = 'No Data Found';
	        }
	        $data = array('table_data' => $output, 'total_data' => $total_row);
	        echo json_encode($data);
	    }
	}
}
