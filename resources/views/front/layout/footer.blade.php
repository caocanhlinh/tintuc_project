<footer id="colophon" class="site-footer">

	
		<div class="footer-columns clear">

			<div class="container">
				@foreach($theloai as $cat)
				<div class="footer-column footer-column-4">
					<div id="categories-3" class="widget footer-widget widget_categories">		
						<ul>
							<li class="cat-item cat-item-2"><a href="https://www.happythemes.com/demo/newsnow/category/business/" title="You can enter a simple description of this category here">{{$cat->Ten}}</a> (10)
							</li>
						</ul>
					</div> 
				</div>
				@endforeach						

			</div><!-- .container -->

		</div><!-- .footer-columns -->

	
	<div class="clear"></div>

	<div id="site-bottom" class="clear">

		<div class="container">

		<div class="site-info">

			© Copyright 2019 <a href="https://www.happythemes.com/demo/newsnow">NewsNow</a>. All rights reserved. Develop by <a href="https://www.facebook.com/caocanhlinh" target="_blank">Cao Cảnh Linh</a>

		</div><!-- .site-info -->

		<div class="menu-primary-menu-container"><ul id="footer-menu" class="footer-nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127"><a href="https://www.happythemes.com/demo/newsnow/about/">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128"><a href="https://www.happythemes.com/demo/newsnow/contact/">Contact</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130"><a href="https://www.happythemes.com/demo/newsnow/elements/">Elements</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129"><a href="https://www.happythemes.com/demo/newsnow/latest/">Latest Posts</a></li>
</ul></div>	

		</div><!-- .container -->

	</div><!-- #site-bottom -->
						
</footer><!-- #colophon -->