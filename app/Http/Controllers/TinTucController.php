<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Theloai;
use App\LoaiTin;
use App\TinTuc;
use App\comment;
use App\notifications;
use Intervention\Image\ImageManagerStatic as Image;
use App\Events\ConfirmPosts;
//use Notification;
//use App\Notifications\ConfirmPosts;
//use App\Traits\UploadTrait;


class TinTucController extends Controller
{
    //use UploadTrait; 
    public function getTest(){
        /*$tintuc = Cache::remember('postCache',Carbon::now()->addMinutes(2),function(){
            return TinTuc::orderBy('id','DESC')->get();
            
        });
        return view('admin.tintuc.list',['tintuc'=>$tintuc]);*/
        $tintuc=TinTuc::paginate(10);
        return view('admin.test',['tintuc'=>$tintuc]);
    }

    public function getList(){
        /*$tintuc = Cache::remember('postCache',Carbon::now()->addMinutes(2),function(){
            return TinTuc::orderBy('id','DESC')->get();
            
        });
        return view('admin.tintuc.list',['tintuc'=>$tintuc]);*/
        $tintuc=TinTuc::orderBy('id','DESC')->paginate(10);
        return view('admin.tintuc.list',['tintuc'=>$tintuc]);
    }

    public function getID($id){
        $news=TinTuc::find($id);
        //Redis::del('tintuc:'.$id);
        //$news=Redis::Hset('tintuc','id',$news->id,'TieuDe',$news->TieuDe,'TomTat',$news->TomTat,'NoiDung',$news->NoiDung);
        //return Redis::HgetAll('tintuc');
        /*Redis::pipeline(function ($pipe) {
            for ($i = 0; $i < 1000; $i++) {
                $pipe->set("key:$i", $i);
            }
        });*/

       Redis::hMset('tintuc:' . $id, 
            [
                'id' => $news->id,
                'TieuDe' => $news->TieuDe,
                'TomTat' => $news->TomTat,
                'NoiDung' => $news->NoiDung
            ]
        );
        
        return Redis::HgetAll('tintuc:'.$id);
        //return view('admin.tintuc.list',['tintuc'=>$tintuc]);
    }

    public function getAdd(){
    	$theloai=TheLoai::all();
    	$loaitin=LoaiTin::all();
    	return view('admin.tintuc.add',['theloai'=>$theloai,'loaitin'=>$loaitin]);
    }

    public function postAdd( Request $request){
    	$request->validate([
            'TieuDe'            =>  'required',
            'TomTat'            =>  'required|max:500',
            'content'           =>  'required',
            'Tags'              =>  'required',
            'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        $tintuc = new TinTuc;
        $tintuc->idLoaiTin=$request->LoaiTin;
        $tintuc->TieuDe=$request->TieuDe;
        $tintuc->TieuDeKhongDau=changeTitle($request->TieuDe);
        $tintuc->TomTat=$request->TomTat;
        $tintuc->NoiDung=$request->content;
        $tintuc->Tags=$request->Tags;
        //$tintuc->created_at=$request->create_at;

        if($request->Status == 'on') $data=1;
        else $data=0;
        $tintuc->TrangThai=$data;
        if($request->NoiBat == 'on') $data1=1;
        else $data1=0;
        $tintuc->NoiBat=$data1;

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            $image = $request->file('profile_image');
            $name = str_slug($request->input('TieuDe')).'_'.time().'.'.$image->getClientOriginalExtension();
            $folder = public_path('/image/tintuc/');
            $filePath = $folder . $name;
            // Upload image
            //$this->uploadOne($image, $folder, 'public', $name);
            $img=Image::make($image)->fit(1280, 720)->insert('image/ads/watermark.png','bottom-right', 10, 10)->save($filePath,80);
            $img->destroy();
            //$image->move($folder, $name);
            // Set user profile image path in database to filePath
            $tintuc->Hinh = $name;
        }
        // Persist user record to database

        $tintuc->save();

        // Return user back and show a flash message
        return redirect('admin/tintuc/list')->with(['NewsDel' => 'Profile updated successfully.']);
    
    }

    public function getEdit($id){
        $theloai=TheLoai::all();
        $loaitin=LoaiTin::all();
        $tintuc=TinTuc::find($id);
        return view('admin.tintuc.edit',['theloai'=>$theloai,'loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }

    public function postEdit( Request $request,$id){
        $tintuc=TinTuc::find($id);
        $request->validate([
            'TieuDe'            =>  'required',
            'TomTat'            =>  'required|max:200',
            'content'           =>  'required',
            'Tags'              =>  'required',
            'profile_image'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        $tintuc->idLoaiTin=$request->LoaiTin;
        $tintuc->TieuDe=$request->TieuDe;
        $tintuc->TieuDeKhongDau=changeTitle($request->TieuDe);
        $tintuc->TomTat=$request->TomTat;
        $tintuc->NoiDung=$request->content;
        $tintuc->Tags=$request->Tags;
        //$tintuc->created_at=$request->create_at;

        if($request->Status == 'on') $data=1;
        else $data=0;
        $tintuc->TrangThai=$data;
        if($request->NoiBat == 'on') $data1=1;
        else $data1=0;
        $tintuc->NoiBat=$data1;

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            //Delete old image
            unlink('image/tintuc/'.$tintuc->Hinh);
            //Get new image
            $image = $request->file('profile_image');
            $name = str_slug($request->input('TieuDe')).'_'.time().'.'.$image->getClientOriginalExtension();
            $folder = public_path('/image/tintuc/');
            $filePath = $folder . $name;
            // Upload image
            //$this->uploadOne($image, $folder, 'public', $name);
            $img=Image::make($image)->fit(1280, 720)->insert('image/ads/watermark.png','bottom-right', 10, 10)->save($filePath,80);
            $img->destroy();
            //$image->move($folder, $name);
            // Set user profile image path in database to filePath
            $tintuc->Hinh = $name;
        }
        // Persist user record to database

        $tintuc->save();
        $item_event='Cập nhật bài viết "'.$tintuc->TieuDe.'" thành công!';
        event(new ConfirmPosts($item_event));
        $noti=new notifications;
        $noti->type="updated";
        $noti->NoiDung=$item_event;
        $noti->save();
        // Return user back and show a flash message
        return redirect('admin/tintuc/list')->with(['NewsDel' => 'Profile updated successfully.']);
    
    }

    public function getDelete($id){
        $comment=comment::where('idTinTuc',$id)->delete();
        $tintuc=TinTuc::find($id);
        $item_event='Đã xóa bài viết "'.$tintuc->TieuDe.'"';
        if (file_exists( public_path() . '/image/tintuc/' . $tintuc->Hinh) && $tintuc->Hinh != 'no_image.jpg') {
            unlink('image/tintuc/'.$tintuc->Hinh);
        }     
 
        $tintuc->delete();
        event(new ConfirmPosts($item_event));
        $noti=new notifications;
        $noti->type="deleted";
        $noti->NoiDung=$item_event;
        $noti->save();
        //$tintuc->notify(new ConfirmPosts($name));
        return redirect('admin/tintuc/list')->with('NewsDel',$tintuc->TieuDe);
    }
    public function getNotifications($id){
        $noti=notifications::all();
        return view('admin.dashboard',['notifications'=>$noti]);
    }
}
