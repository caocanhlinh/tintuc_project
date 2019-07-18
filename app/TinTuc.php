<?php

namespace App;

use App\Traits\Cacheable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use Notifiable;
    //use Cacheable;

    protected $cacheTime = 10;
    protected $table = "TinTuc";
    protected $fillable = ['idLoaiTin', 'TieuDe','TieuDeKhongDau','TomTat','NoiDung','NoiBat','Hinh'];

    public function loaitin(){

    	return $this->belongsTo('App\LoaiTin','idLoaiTin','id');
    }
    public function comment(){

    	return $this->hasMany('App\comment','idTinTuc','id');
    }
}
