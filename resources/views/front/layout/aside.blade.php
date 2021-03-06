<aside id="secondary" class="widget-area sidebar">

  	<style type="text/css">

    
    /* Formatting search box */
    .search-box{
        position: relative;
        display: inline-block;
        font-size: 12px;
    }
    .result{
    	background: #EEE;
        position: absolute;
        margin-right:3px;         
        z-index: 999;
        top: 100%;
        left: 0;
        border: 1px solid #CCC;
        border-top: none;
        
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result ul{
        margin: 0;
        padding: 2px;
        cursor: pointer;
        overflow: auto;
    }
    .result li{
        margin: 0 !important;
        padding: 5px 5px 5px 0;
        cursor: pointer;
        overflow: auto;
        border-bottom: 1px solid #DDD;
    }
    .result li:hover{
        background: #FFF;
    }
    .result li a{
        text-decoration: none;
    }
    .result li img{
        margin: 0;
        padding-right: 4px;
       	display: inline;
       	float: left;
    }
</style>
  	<div id="search-3" class="search-box widget widget_search">
		            
    	<label>
    		<span class="screen-reader-text">Search for:</span>
            <input type="text" name="search" id="search" class="search-field" autocomplete="off" placeholder="Search News Data" />
        </label>
        <input type="submit" class="search-submit" value="Search">
        <div class="result" style="display: none;">
            
            <ul id="output"></ul>
		</div>
					 
	</div>
	<div id="happythemes-ad-13" class="widget widget_ad ad-widget">
		<div class="adwidget"><a href="http://www.happythemes.com/join/" target="_blank"><img src="image/ads/300-1.png" alt="Ad Widget"></a></div>
	</div>
	

		<div class="fb-page"data-href="https://www.facebook.com/vnshoestore" data-width="300" data-hide-cover="false" data-show-facepile="false"></div>
		
		<div id="recent-comments-3" class="widget widget_recent_comments">
			<h2 class="widget-title"><span>Tin Nổi Bật</span></h2>
			<ul id="recentcomments">
				@foreach($theloai as $cat)
					<?php
						$data=$cat->tintuc->where('NoiBat',1)->sortByDesc('created_at')->take(5);
					?>
					@foreach($data->all() as $news)
						<li class="recentcomments">
							<span class="comment-author-link">Allen</span> on <a href="https://www.happythemes.com/demo/newsnow/young-girl-with-pink-shoes-on-longboard/#comment-12">{{$news['TieuDe']}}</a>
						</li>
					@endforeach
					@break
				@endforeach
			</ul>
		</div>
		<div id="happythemes-ad-12" class="widget widget_ad ad-widget"><h2 class="widget-title"><span>Advertisement</span></h2><div class="adwidget"><a href="http://www.happythemes.com/join/" target="_blank"><img src="image/ads/300-2.png" alt="Ad Widget"></a></div></div>		<div id="recent-posts-2" class="widget widget_recent_entries">		<h2 class="widget-title"><span>Recent Posts</span></h2>		<ul>
											<li>
					<a href="https://www.happythemes.com/demo/newsnow/young-photographer-in-action-taking-a-photo/">Young Photographer in Action Taking a Photo</a>
									</li>
											<li>
					<a href="https://www.happythemes.com/demo/newsnow/washington-street-palms-in-san-francisco/">Washington Street Palms in San Francisco</a>
									</li>
											<li>
					<a href="https://www.happythemes.com/demo/newsnow/funny-usa-america-flag-retro-sunglasses/">Funny USA America Flag Retro Sunglasses</a>
									</li>
											<li>
					<a href="https://www.happythemes.com/demo/newsnow/young-girl-with-pink-shoes-on-longboard/">Young Girl with Pink Shoes on Longboard</a>
									</li>
											<li>
					<a href="https://www.happythemes.com/demo/newsnow/san-francisco-bay-area-beautiful-sunset-evening-cityscape/">San Francisco Bay Area Beautiful Sunset Evening Cityscape</a>
									</li>
					</ul>
		</div><div id="happythemes-ad-11" class="widget widget_ad ad-widget"><div class="adwidget"><a href="http://www.happythemes.com/join/" target="_blank"><img src="image/ads/300-3.png" alt="Ad Widget"></a></div></div><div id="tag_cloud-3" class="widget widget_tag_cloud"><h2 class="widget-title"><span>Tags</span></h2><div class="tagcloud"><a href="https://www.happythemes.com/demo/newsnow/tag/girl/" class="tag-cloud-link tag-link-12 tag-link-position-1" style="font-size: 12.581818181818pt;" aria-label="girl (2 items)">girl</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/landscape/" class="tag-cloud-link tag-link-18 tag-link-position-2" style="font-size: 15.636363636364pt;" aria-label="landscape (3 items)">landscape</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/man/" class="tag-cloud-link tag-link-15 tag-link-position-3" style="font-size: 8pt;" aria-label="man (1 item)">man</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/people/" class="tag-cloud-link tag-link-19 tag-link-position-4" style="font-size: 15.636363636364pt;" aria-label="people (3 items)">people</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/photo/" class="tag-cloud-link tag-link-11 tag-link-position-5" style="font-size: 8pt;" aria-label="photo (1 item)">photo</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/tag-one/" class="tag-cloud-link tag-link-16 tag-link-position-6" style="font-size: 20.218181818182pt;" aria-label="tag one (5 items)">tag one</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/tag-two/" class="tag-cloud-link tag-link-17 tag-link-position-7" style="font-size: 18.181818181818pt;" aria-label="tag two (4 items)">tag two</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/test-tag/" class="tag-cloud-link tag-link-21 tag-link-position-8" style="font-size: 15.636363636364pt;" aria-label="test tag (3 items)">test tag</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/woman/" class="tag-cloud-link tag-link-14 tag-link-position-9" style="font-size: 18.181818181818pt;" aria-label="woman (4 items)">woman</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/workspace/" class="tag-cloud-link tag-link-20 tag-link-position-10" style="font-size: 8pt;" aria-label="workspace (1 item)">workspace</a>
<a href="https://www.happythemes.com/demo/newsnow/tag/young/" class="tag-cloud-link tag-link-10 tag-link-position-11" style="font-size: 22pt;" aria-label="young (6 items)">young</a></div>
</div>

</aside><!-- #secondary -->
<script type="text/javascript">
	$(document).ready(function() {

	    fetch_customer_data();

	    function fetch_customer_data(query = '') {
	        $.ajax({
	            url: "{{ route('live_search.action') }}",
	            method: 'GET',
	            data: {
	                query: query
	            },
	            dataType: 'json',
	            success: function(data) {
	                $('ul#output').html(data.table_data);
	                $('#total_records').text(data.total_data);
	            }
	        })
	    }
		/*$('input#search', this)
	        .focus(function(){
	        	$('div.result').show();
	        })
	        .blur(function(){
	            $('div.result').hide();
	        });*/
	        $('div#search-3').hover(function() {
				    $('div.result').show();
				}, function() {
				    $('div.result').hide();
				});
	        

	    $(document).on('keyup', '#search', function() {
	    	//$('.result').show();
	        var query = $(this).val();
	        fetch_customer_data(query);
	    });
	});
</script>