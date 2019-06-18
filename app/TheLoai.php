<?php

namespace App;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    //
    use Cacheable;

    protected $cacheTime = 10;
    protected $table = "TheLoai";
    protected $fillable = ['Ten','TenKhongDau'];

    Public function loaitin(){

    	return $this->hasMany('App\LoaiTin','idTheLoai','id');
    }

    public function tintuc(){

    	return $this->hasManyThrough('App\TinTuc','App\LoaiTin','idTheLoai','idLoaiTin','id');
    }
}
