	<base href="{{asset('')}}">
	<header id="masthead" class="site-header clear">

		<div id="primary-bar">

			<div class="container">
			
				<!-- Chèn thêm nội dung -->
			
			</div><!-- .container -->

		</div><!-- #primary-bar -->	

		<div class="site-start clear">

			<div class="container">

			<div class="site-branding">

								
				<div id="logo">
					<span class="helper"></span>
					<a href="https://www.happythemes.com/demo/newsnow/" rel="home">
						<img src="image/ads/logovn.png" alt="">
					</a>
				</div><!-- #logo -->

				
			</div><!-- .site-branding -->

			<div id="happythemes-ad-8" class="header-ad widget_ad ad-widget"><div class="adwidget"><a href="http://www.happythemes.com/join/" target="_blank"><img width="728" height="90" src="image/ads/topbanner.png" class="attachment-post_thumb size-post_thumb wp-post-image" alt=""></a></div></div>
			<span class="mobile-menu-icon">
				<span class="menu-icon-open">Menu</span>
				<span class="menu-icon-close"><span class="genericon genericon-close"></span></span>		
			</span>	
			
			</div><!-- .container -->

		</div><!-- .site-start -->

		<div id="secondary-bar" class="container clear">

			<div class="container">

			<nav id="secondary-nav" class="secondary-navigation">

				<div class="menu-secondary-menu-container">
					<ul id="secondary-menu" class="sf-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
						<li id="menu-item-120" class="navactive menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-120"><a class="active" href="home/">Trang Chủ</a></li>
						<li id="menu-item-152" class="navactive menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-152"><a class="active" href="allpost/">Tất Cả</a>
						</li>
						@foreach($theloai as $cat)
							@if($cat->tintuc->count() != 0)
								<li id="menu-item-113" class="navactive menu-item menu-item-type-taxonomy menu-item-object-category menu-item-113"><a class="active" href="category-{{$cat->id}}">{{$cat->Ten}}</a>
								</li>
							@endif
						@endforeach
</ul></div>
			</nav><!-- #secondary-nav -->

			</div><!-- .container -->				

		</div><!-- .secondary-bar -->

		<div class="mobile-menu clear">

			<div class="container">

				<div class="menu-secondary-menu-container"><ul id="secondary-mobile-menu" class=""><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-120"><a href="https://www.happythemes.com/demo/newsnow/">Trang Chủ</a></li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-152"><a href="allpost/">Tất Cả</a></li>
				@foreach($theloai as $cat)
					@if($cat->tintuc->count() != 0)
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-113"><a href="category-{{$cat->id}}">{{$cat->Ten}}</a></li>
					@endif
				@endforeach
</ul></div></div>
			</div><!-- .container -->

		</div><!-- .mobile-menu -->	

					
			<span class="search-icon">
				<span class="genericon genericon-search"></span>
				<span class="genericon genericon-close"></span>			
			</span>

								

	</header>
	