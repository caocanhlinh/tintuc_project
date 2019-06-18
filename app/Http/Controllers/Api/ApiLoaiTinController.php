<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\LoaiTin;

class ApiLoaiTinController extends Controller
{
    public function index()
    {
        return LoaiTin::select('id','Ten','TenKhongDau')->get();
    }

    public function show($id)
    {
        return LoaiTin::select('id','Ten','TenKhongDau')
                        ->where('id',$id)
                        ->get();
    }

    /*public function showLoaiTin($id)
    {
        $loaitin=LoaiTin::select('id')->where('idLoaiTin',$id)->get();
        return TinTuc::select('TinTuc.id','idLoaiTin','LoaiTin.idLoaiTin','TieuDe','TieuDeKhongDau','TomTat','NoiDung')
                        ->join('LoaiTin', 'TinTuc.idLoaiTin', '=', 'LoaiTin.id')
                        ->where('LoaiTin.idLoaiTin',$id)
                        ->get();
    }*/
    /*public function showloaitin($id)
    {
        $loaitin=LoaiTin::select('id')->where('idLoaiTin',$id)->get();
        return TinTuc::select('id','idLoaiTin','TieuDe','TieuDeKhongDau','TomTat','NoiDung')
                        ->where('idLoaiTin',$id)
                        ->get();*/
          /*$someJSON = Article::all();
          // Loop through Object
          var_dump(json_decode($someJSON));
          $someObject = json_decode($someJSON);
          foreach($someObject as $key => $value) {
            echo $value->title . ": " . $value->body . "<br>";
          }*/

        /*$data = file_get_contents('https://pokeapi.co/api/v2/ability/65/');
        var_dump(json_decode($data));
        $decodedData = json_decode($data);
    }*/

    public function store(Request $request)
    {
        $LoaiTin = LoaiTin::Create($request->all());

        return response()->json($LoaiTin, 201);
    }

    public function update(Request $request, LoaiTin $LoaiTin,$id)
    {
        $LoaiTin=LoaiTin::find($id);
        $LoaiTin->update($request->all());
        return response()->json($LoaiTin, 200);
    }

    public function delete(LoaiTin $LoaiTin,$id)
    {
        $LoaiTin=LoaiTin::find($id);
        $LoaiTin->delete();

        return response()->json(null, 204);
    }
}
