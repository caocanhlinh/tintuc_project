<?php /* /home/vagrant/code/caocanhlinh/resources/views/front/home.blade.php */ ?>


<?php $__env->startSection('content'); ?>
	<div id="primary" class="content-area clear">

		
		<div id="home-welcome" class="clear">

		<div id="featured-content">
	

			<?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			<?php
				$data=$cat->tintuc->where('NoiBat',1)->sortByDesc('created_at')->take(4);
				$news1=$data->shift();
			?>
			
			<ul class="bxslider">
			
			<li class="featured-slide hentry">

					<a class="thumbnail-link" href="https://www.happythemes.com/demo/newsnow/san-francisco-bay-area-beautiful-sunset-evening-cityscape/">

						<span class="gradient" style="display: inline;"></span>
						
						<div class="outer-div thumbnail-wrap">
							<img width="720" height="400" src="image/tintuc/<?php echo e($news1['Hinh']); ?>" class="inner-div attachment-featured_large_thumb size-featured_large_thumb wp-post-image" alt="<?php echo e($news1['TieuDe']); ?>">						
						</div><!-- .thumbnail-wrap -->
					</a>

				<div class="entry-header clear" style="display: block;">
					<h2 class="entry-title"><a href="https://www.happythemes.com/demo/newsnow/san-francisco-bay-area-beautiful-sunset-evening-cityscape/"><?php echo e($news1['TieuDe']); ?></a></h2>
				</div><!-- .entry-header -->

			</li><!-- .featured-slide .hentry -->

			
			</ul><!-- .bxslider -->

						
			<div class="row" style="margin-left: 0">
				
				<?php $i=0; ?>
				<?php $__currentLoopData = $data->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($i==3): ?> <?php break; ?> <?php endif; ?>
					<div class="featured-square hentry <?php if($i==2): ?> <?php echo e('last'); ?> <?php endif; ?>">

								<a class="thumbnail-link" href="https://www.happythemes.com/demo/newsnow/fresh-strawberries-and-blackberries-in-little-bowl/">
								<div class="outer-div thumbnail-wrap" style="overflow:hidden !important;">
									<img width="300" height="200" src="image/tintuc/<?php echo e($news['Hinh']); ?>" class="inner-div img-responsive" alt="">					
								</div><!-- .thumbnail-wrap -->
								</a>
						
						<div class="entry-header">
							<h2 class="entry-title"><a href="detail/post/<?php echo e($news['id']); ?>"><?php echo e($news['TieuDe']); ?></a></h2>
						</div><!-- .entry-header -->

					</div><!-- .hentry -->
					<?php $i++; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php break; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>

						
				<div class="ribbon"><span>Nổi Bật</span></div>

			</div><!-- #featured-content -->

		
			<div id="latest-content">
				<h3>Tin Mới</h3>

					<?php 
						$i=0;
						$data=$cat->tintuc->sortByDesc('id')->take(5);
					?>
					<?php $__currentLoopData = $data->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="latest-square hentry <?php if($i==4): ?> <?php echo e('last'); ?> <?php endif; ?> ">

							<div class="entry-header clear">
								<h2 class="entry-title"><a href="detail/post/<?php echo e($news['id']); ?>"><?php echo e($news['TieuDe']); ?></a></h2>
							</div><!-- .entry-header -->

						</div><!-- .hentry -->
						<?php $i++; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						

					
					<div class="more-button">
						<a class="btn" href="allpost">Xem Thêm</a>
					</div>

			</div><!-- #latest-content -->

							

		</div><!-- #home-welcome -->

		
	<main id="main" class="site-main clear">

		<div id="recent-content">
			
			<?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($cat->tintuc->count() != 0): ?>
			<div id="happythemes-home-block-one-2" class="widget widget-newsnow-home-block-one">
				<div class="content-block content-block-1 clear">
					
					<div class="section-heading">
						<h3 class="section-title"><a href="category-<?php echo e($cat['id']); ?>-<?php echo e($cat['Ten']); ?>"><?php echo e($cat['Ten']); ?></a></h3><span class="section-more-link"><a href="category-<?php echo e($cat['id']); ?>-<?php echo e($cat['Ten']); ?>">Xem Thêm</a></span>
					</div><!-- .section-heading -->	

					<?php
						$data=$cat->tintuc->where('NoiBat',1)->sortByDesc('created_at')->take(5);
						$news1=$data->shift();
					?>

						<div class="post-big hentry">

									<a class="thumbnail-link" href="detail/post/<?php echo e($news1['id']); ?>-<?php echo e($news1['TieuDeKhongDau']); ?>">
									<div class="outer-div thumbnail-wrap">
										<img width="600" height="400" src="image/tintuc/<?php echo e($news1['Hinh']); ?>" class="inner-div attachment-block_large_thumb size-block_large_thumb wp-post-image" alt="">			</div><!-- .thumbnail-wrap -->
									</a>
							
							<div class="entry-header">
								<h2 class="entry-title"><a href="detail/post/<?php echo e($news1['id']); ?>-<?php echo e($news1['TieuDeKhongDau']); ?>"><?php echo e($news1['TieuDe']); ?></a></h2>
							</div><!-- .entry-header -->

							<div class="entry-meta">
								<span class="entry-date"><?php echo e($news1['created_at']); ?></span>
								<span class="entry-comment"><a href="https://www.happythemes.com/demo/newsnow/funny-usa-america-flag-retro-sunglasses/#comments" class="comments-link">1 comment</a></span>
							</div><!-- .entry-meta -->

							<div class="entry-summary">
								<?php echo e($news1['TomTat']); ?>	</div><!-- .entry-summary -->

						</div><!-- .hentry -->
						<?php $i=0; ?>
						<?php $__currentLoopData = $data->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="post-small hentry <?php if($i==3) echo 'last' ?> ">

										<a class="thumbnail-link" href="detail/post/<?php echo e($news['id']); ?>-<?php echo e($news['TieuDeKhongDau']); ?>">
											<div class="outer-div thumbnail-wrap ">
												<img width="300" height="200" src="image/tintuc/<?php echo e($news['Hinh']); ?>" class="inner-div attachment-post_thumb size-post_thumb wp-post-image" alt="">			
											</div><!-- .thumbnail-wrap -->
										</a>
								
								<div class="entry-header">

									<h2 class="entry-title"><a href="detail/post/<?php echo e($news['id']); ?>-<?php echo e($news['TieuDeKhongDau']); ?>"><?php echo e($news['TieuDe']); ?></a></h2>

									<div class="entry-meta">
										<span class="entry-date"><?php echo e(\Carbon\Carbon::parse($news['created_at'])->format('M d, Y')); ?></span>
										<span class="entry-comment"><a href="https://www.happythemes.com/demo/newsnow/boho-peace-hippie-girl-enjoying-summer-with-flower-styling/#comments" class="comments-link">1 comment</a></span>
									</div><!-- .entry-meta -->

								</div><!-- .entry-header -->

							</div><!-- .hentry -->
							<?php $i++; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


				</div><!-- .content-block-1 -->

			</div>
					<?php endif; ?>					
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div><!-- #recent-content -->		

	</main><!-- .site-main -->

	</div><!-- #primary -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>