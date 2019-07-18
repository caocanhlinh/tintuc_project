<?php /* /home/vagrant/code/caocanhlinh/resources/views/front/allpost.blade.php */ ?>


<?php $__env->startSection('content'); ?>
	<div id="primary" class="content-area clear">

		<div id="main" class="site-main clear">

			<div class="breadcrumbs clear">
				
				<h3>
					All Recent Posts					
				</h3>

			</div><!-- .section-header -->

			<div class="infinite-scroll content-loop">
						<?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div id="post-74" class="clear last post-74 post type-post status-publish format-standard has-post-thumbnail hentry category-social-media">	

								<a class="thumbnail-link" href="detail/post/<?php echo e($news->id); ?>-<?php echo e($news->TieuDeKhongDau); ?>">
									<div class="outer-div thumbnail-wrap">
										<img width="300" height="200" class="inner-div attachment-post_thumb size-post_thumb wp-post-image" alt="<?php echo e($news->TieuDe); ?>" src="image/tintuc/<?php echo e($news->Hinh); ?>">
									</div><!-- .thumbnail-wrap -->
								</a>
									

								<div class="entry-header">

									<div class="entry-category-icon category-color<?php echo e($news->loaitin->theloai->id); ?>"><a href="category-<?php echo e($news->loaitin->theloai->id); ?>-<?php echo e($news->loaitin->theloai->TenKhongDau); ?>" title="Xem tất cả bài viết về <?php echo e($news->loaitin->theloai->Ten); ?>"><?php echo e($news->loaitin->theloai->Ten); ?></a> </div>
									
									<h2 class="entry-title"><a href="detail/post/<?php echo e($news->id); ?>-<?php echo e($news->TieuDeKhongDau); ?>"><?php echo e($news->TieuDe); ?></a></h2>

									<div class="entry-meta clear">
										<span class="entry-date"><?php echo e(\Carbon\Carbon::parse($news->created_at)->format('M d, Y')); ?></span>

										<span class="entry-comment"><a href="https://www.happythemes.com/demo/newsnow/prague-astronomical-clock-in-the-old-town-square/#respond" class="comments-link"><i class="fas fa-tags"></i>&ensp;<?php echo e($news->loaitin->Ten); ?></a></span>
								
									</div><!-- .entry-meta -->
									
								</div><!-- .entry-header -->
									
								<div class="entry-summary"><?php echo e($news->TomTat); ?>...		<span><a href="detail/post/<?php echo e($news->id); ?>-<?php echo e($news->TieuDeKhongDau); ?>">Xem Thêm »</a></span>
								</div><!-- .entry-summary -->
							</div><!-- #post-74 -->
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						<div class="row">
							<div class="col-lg-8 col-lg-push-4 text-center">
								<?php echo $tintuc->onEachSide(2)->links(); ?>

							</div>
						</div>			
			</div><!-- #recent-content -->
	
		</div><!-- #main -->
		
	
		
	</div><!-- #primary -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script src="js/jquery.jscroll.min.js"></script>
	<script type="text/javascript">
	    $('ul.pagination').hide();
	    $(function() {
	        $('.infinite-scroll').jscroll({
	            autoTrigger: true,
	            loadingHtml: '<img class="center-block" src="image/system/bx_loader.gif" alt="Loading..." /><span>Đang tải...</span>',
	            padding: 0,
	            nextSelector: '.pagination li.active + li a',
	            contentSelector: 'div.infinite-scroll',
	            callback: function() {
	                $('ul.pagination').remove();
	            }
	        });
	    });
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>