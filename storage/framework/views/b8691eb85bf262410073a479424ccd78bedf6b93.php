<?php /* /home/vagrant/code/caocanhlinh/resources/views/data.blade.php */ ?>
<?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div id="post-74" class="clear last post-74 post type-post status-publish format-standard has-post-thumbnail hentry category-social-media">	

	<a class="thumbnail-link" href="https://www.happythemes.com/demo/newsnow/prague-astronomical-clock-in-the-old-town-square/">
		<div class="thumbnail-wrap">
			<img width="300" height="200" class="attachment-post_thumb size-post_thumb wp-post-image" alt="<?php echo e($news->TieuDe); ?>" src="image/tintuc/<?php echo e($news->Hinh); ?>">
		</div><!-- .thumbnail-wrap -->
	</a>
		

	<div class="entry-header">

		<div class="entry-category-icon category-color<?php echo e($news->loaitin->theloai->id); ?>"><a href="category-<?php echo e($news->loaitin->theloai->id); ?>-<?php echo e($news->loaitin->theloai->TenKhongDau); ?>" title="Xem tất cả bài viết về <?php echo e($news->loaitin->theloai->Ten); ?>"><?php echo e($news->loaitin->theloai->Ten); ?></a> </div>
		
		<h2 class="entry-title"><a href="detail/post/<?php echo e($news->id); ?>-<?php echo e($news->TieuDeKhongDau); ?>"><?php echo e($news->TieuDe); ?></a></h2>

		<div class="entry-meta clear">

			<span class="entry-author"><a href="https://www.happythemes.com/demo/newsnow/author/allen/" title="Posts by Allen" rel="author">Allen</a> — </span> 
			<span class="entry-date">June 27, 2017</span>

			<span class="entry-comment"><a href="https://www.happythemes.com/demo/newsnow/prague-astronomical-clock-in-the-old-town-square/#respond" class="comments-link"><i class="fas fa-tags"></i>&ensp;<?php echo e($news->loaitin->Ten); ?></a></span>
	
		</div><!-- .entry-meta -->
		
	</div><!-- .entry-header -->
		
	<div class="entry-summary"><?php echo e($news->TomTat); ?>...		<span><a href="detail/post/<?php echo e($news->id); ?>-<?php echo e($news->TieuDeKhongDau); ?>">Xem Thêm »</a></span>
	</div><!-- .entry-summary -->
</div><!-- #post-74 -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
