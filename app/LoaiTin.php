<?php

namespace App;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    //
    use Cacheable;

    protected $cacheTime = 10;
    protected $table = "LoaiTin";
    protected $fillable = ['Ten','TenKhongDau'];

    public function theloai(){

    	return $this->belongsTo('App\TheLoai','idTheLoai','id');
    }

    public function tintuc(){

    	return $this->hasMany('App\TinTuc','idLoaiTin','id');
    }
}
