<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\TinTuc;
use Intervention\Image\ImageManagerStatic as Image;

class GetContentsController extends Controller
{
    function getUrl(){
    	$html= file_get_html("https://vnexpress.net");
    	//echo $html->plaintext;
	    $tin=$html->find('#list_sub_featured li a[title]');
	    foreach ($tin as $t) {
			preg_match('/.*(?=\?vn_source=)/', $t->href, $matchesUrl);
			preg_match('/(\d*)+(?=.html)/', $matchesUrl[0], $matchesId);
			preg_match('/https:\/\/(?=vnexpress.net)/', $matchesUrl[0], $matchesUrlAccept);
			if($matchesUrlAccept != NULL) { 

				$tintuc = TinTuc::firstOrNew(['idGetUrl' => $matchesId[0]]);
		        $html= file_get_html($matchesUrl[0]);
		        $TomTat=$html->find('section p.description',0);
		        $NoiDung=$html->find("section article",0);
		     	$name="no_image.jpg";
		     	foreach ($html->find('section.sidebar_1 article table tbody img[src]') as $img) {

		     		if($img->src != NULL){
		     			$name =changeTitle($t->innertext).'_'.time().'.'.'jpg';
			            $folder = public_path('/image/tintuc/');
			            $filePath = $folder . $name;
			     		$img = Image::make($img->src)->fit(1280, 720)->insert(public_path('/image/ads/watermark.png'),'bottom-right', 10, 10)->save($filePath,80);
			     		$img->destroy();
			     		$tintuc->TrangThai=1;
			     	}
		     		unset($img->src);
		     		break;
		     	}

		       	$tintuc->Hinh = $name;
		        $tintuc->idLoaiTin=1;
		        $tintuc->TieuDe=$t->innertext;
		        $tintuc->TieuDeKhongDau=changeTitle($t->innertext);
		        try {
			        $tintuc->TomTat=$TomTat->plaintext;
			        $tintuc->NoiDung=$NoiDung->innertext;
			        $tintuc->Tags=$t->innertext;
			        $tintuc->idGetUrl=$matchesId[0];
			        if(!isset($tintuc->TrangThai)){
			        	$tintuc->TrangThai=0;
			        }
			        $tintuc->NoiBat=0;
			        $tintuc->save();
		        } catch (Exception $e) {
				    return redirect('admin/tintuc/list')->with(['getUrl' => 'Tạo bài viết thành công.']);
			    }
			}
	        
	    }

	    return redirect('admin/tintuc/list')->with(['getUrl' => 'Tạo bài viết thành công.']);
    
    }
}