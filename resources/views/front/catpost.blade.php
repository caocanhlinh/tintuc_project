@extends('front.layout.index')

@section('content')
	<div id="primary" class="content-area clear">

		<div id="main" class="site-main clear">

			<div class="breadcrumbs clear">
				
				<h3>
					All Recent Posts					
				</h3>

			</div><!-- .section-header -->

			<div id="recent-content" class="content-loop">
				@foreach($tintuc as $news)
				<div id="post-74" class="clear last post-74 post type-post status-publish format-standard has-post-thumbnail hentry category-social-media">	

					<a class="thumbnail-link" href="https://www.happythemes.com/demo/newsnow/prague-astronomical-clock-in-the-old-town-square/">
						<div class="outer-div thumbnail-wrap">
							<img width="300" height="200" src="./24-300x200.jpg" class="inner-div attachment-post_thumb size-post_thumb wp-post-image" alt="" srcset="https://www.happythemes.com/demo/newsnow/wp-content/uploads/sites/10/2017/06/24-300x200.jpg 300w, https://www.happythemes.com/demo/newsnow/wp-content/uploads/sites/10/2017/06/24-768x512.jpg 768w, https://www.happythemes.com/demo/newsnow/wp-content/uploads/sites/10/2017/06/24-1024x683.jpg 1024w, https://www.happythemes.com/demo/newsnow/wp-content/uploads/sites/10/2017/06/24-720x480.jpg 720w, https://www.happythemes.com/demo/newsnow/wp-content/uploads/sites/10/2017/06/24-600x400.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">			
						</div><!-- .thumbnail-wrap -->
					</a>
						

					<div class="entry-header">

						<div class="entry-category-icon category-color{{$news->loaitin->theloai->id}}"><a href="category-{{$news->loaitin->theloai->id}}-{{$news->loaitin->theloai->TenKhongDau}}" title="Xem tất cả bài viết về {{$news->loaitin->theloai->Ten}}">{{$news->loaitin->theloai->Ten}}</a> </div>
						
						<h2 class="entry-title"><a href="detail/post/{{$news->id}}-{{$news->TieuDeKhongDau}}">{{$news->TieuDe}}</a></h2>

						<div class="entry-meta clear">
							<span class="entry-comment"><a href="https://www.happythemes.com/demo/newsnow/prague-astronomical-clock-in-the-old-town-square/#respond" class="comments-link"><i class="fas fa-tags"></i>&ensp;{{$news->loaitin->Ten}}</a>-</span>
							<span class="entry-date">June 27, 2017</span>
					
						</div><!-- .entry-meta -->
						
					</div><!-- .entry-header -->
						
					<div class="entry-summary">{{$news->TomTat}}...		<span><a href="detail/post/{{$news->id}}-{{$news->TieuDeKhongDau}}">Xem Thêm »</a></span>
					</div><!-- .entry-summary -->
				</div><!-- #post-74 -->
				@endforeach
			</div><!-- #recent-content -->
				
		</div><!-- #main -->
		<div class="row">
			<div class="col-lg-8 col-lg-push-4 text-center">
				{!!$tintuc->onEachSide(2)->links()!!}
			</div>
		</div>
	
		
	</div><!-- #primary -->
@endsection