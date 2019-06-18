<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Theloai;
use App\LoaiTin;
use App\TinTuc;

class ApiTinTucController extends Controller
{
    public function index()
    {
        return TinTuc::select('id','idLoaiTin','TieuDe','TieuDeKhongDau','TomTat','NoiDung')->get();
    }

    public function show($id)
    {
    	return TinTuc::select('id','idLoaiTin','TieuDe','TieuDeKhongDau','TomTat','NoiDung')
    					->where('id',$id)
    					->get();
	}

    public function showtheloai($id)
    {
        $loaitin=LoaiTin::select('id')->where('idTheLoai',$id)->get();
        return TinTuc::select('TinTuc.id','idLoaiTin','LoaiTin.idTheLoai','TieuDe','TieuDeKhongDau','TomTat','NoiDung')
                        ->join('LoaiTin', 'TinTuc.idLoaiTin', '=', 'LoaiTin.id')
                        ->where('LoaiTin.idTheLoai',$id)
                        ->get();
    }
    public function showloaitin($id)
    {
        $loaitin=LoaiTin::select('id')->where('idTheLoai',$id)->get();
        return TinTuc::select('id','idLoaiTin','TieuDe','TieuDeKhongDau','TomTat','NoiDung')
                        ->where('idLoaiTin',$id)
                        ->get();
          /*$someJSON = Article::all();
          // Loop through Object
          var_dump(json_decode($someJSON));
          $someObject = json_decode($someJSON);
          foreach($someObject as $key => $value) {
            echo $value->title . ": " . $value->body . "<br>";
          }*/

        /*$data = file_get_contents('https://pokeapi.co/api/v2/ability/65/');
        var_dump(json_decode($data));
        $decodedData = json_decode($data);*/
    }

    public function store(Request $request)
    {
        $tintuc = TinTuc::Create($request->all());

        return response()->json($tintuc, 201);
    }

    public function update(Request $request, TinTuc $tintuc,$id)
    {
    	$tintuc=TinTuc::find($id);
        $tintuc->update($request->all());
        return response()->json($tintuc, 200);
    }

    public function delete(TinTuc $tintuc,$id)
    {
        $tintuc=TinTuc::find($id);
        $tintuc->delete();

        return response()->json(null, 204);
    }
}
