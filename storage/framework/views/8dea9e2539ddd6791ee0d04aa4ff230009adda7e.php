<?php /* /home/vagrant/code/caocanhlinh/resources/views/front/postDetail.blade.php */ ?>


<?php $__env->startSection('content'); ?>
<div id="primary" class="content-area">

		<main id="main" class="site-main">

		
<article id="post-16" class="post-16 post type-post status-publish format-standard has-post-thumbnail hentry category-business">
	<header class="entry-header clear">
	
		<div class="entry-category-icon"><a href="https://www.happythemes.com/demo/newsnow/category/business/" title="View all posts in Business"><?php echo e($tintuc->loaitin->theloai->Ten); ?></a> </div>

		<h1 class="entry-title"><?php echo e($tintuc->TieuDe); ?></h1>
		<div class="entry-meta clear">

	<span class="entry-author"><a href="https://www.happythemes.com/demo/newsnow/author/allen/" title="Posts by Allen" rel="author">Allen</a> — </span>
	<span class="entry-date">June 27, 2017</span>

	<span class="entry-comment"><a href="https://www.happythemes.com/demo/newsnow/laptop-on-wooden-desk-in-office-open-space/#respond" class="comments-link"><?php echo e($tintuc->loaitin->Ten); ?></a></span>
	<div class="entry-author text-right">
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=1912967308968186&autoLogAppEvents=1"></script>
		<div class="fb-share-button" data-href="http://caocanhlinh.local/detail/post/<?php echo e($tintuc->id); ?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fcaocanhlinh.local%2Fdetail%2Fpost%2F923&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
	</div>
	
</div><!-- .entry-meta -->

		
	</header><!-- .entry-header -->

	<div class="entry-content">
			
		<p><img src="image/tintuc/<?php echo e($tintuc->Hinh); ?>" id="myImg" alt="<?php echo e($tintuc->TieuDe); ?>" width="4000" height="2667" class="alignnone size-full wp-image-17"></p>
	<p><?php echo $tintuc->NoiDung; ?></p>
	</div><!-- .entry-content -->

	<span class="entry-tags">
		
	</span><!-- .entry-tags -->

</article><!-- #post-## -->

<div id="comments" class="comments-area">

		<div id="respond" class="comment-respond">
			<h3 id="reply-title" class="comment-reply-title">Bình luận</h3>
			<!-- ----------------- -->
			<div class="tab">
			  	<button class="tablinks" onclick="openCity(event, 'sys')">Hệ Thống</button>
			  	<button class="tablinks" onclick="openCity(event, 'face')">Facebook</button>
			</div>
			<div id="sys" class="tabcontent form-group" >
			  	<textarea class="form-control" id="exampleTextarea" rows="4" style="margin-top: 0px; margin-bottom: 0px; height: 60px;"></textarea>
			  	<button class="">Lưu</button>
			</div>

			<div id="face" class="tabcontent form-group" style="display: none;">
			  	<div id="fb-root"></div>
				<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=1912967308968186&autoLogAppEvents=1"></script>
				<div class="fb-comments" data-href="http://caocanhlinh.local/detail/post/<?php echo e($tintuc->id); ?>" data-width="30%" data-numposts="5"></div>
			</div>
		
			</div><!-- #respond -->
	
</div><!-- #comments -->

		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- The Modal -->
<div id="myModal" class="modal">
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById("myImg");
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
		  modal.style.display = "block";
		  modalImg.src = this.src;
		  captionText.innerHTML = this.alt;
		}
		// When the user clicks on <span> (x), close the modal
		modal.onclick = function() { 
		  modal.style.display = "none";
		}

		function openCity(evt, typecom) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(typecom).style.display = "block";
		  evt.currentTarget.className += " active";
		}
	</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>