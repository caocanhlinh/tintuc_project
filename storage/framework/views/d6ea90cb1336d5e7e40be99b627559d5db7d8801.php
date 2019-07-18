<?php /* /home/vagrant/code/caocanhlinh/resources/views/admin/test.blade.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="infinite-scroll">
	    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <h4 class="media-heading"><?php echo e($comment->author_name); ?>

	            <small><?php echo e($comment->created_at->diffForHumans()); ?></small>
	        </h4>
	        <?php echo e($comment->body); ?>

	        <hr>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	    <?php echo e($comments->links()); ?>

	</div>
</body>
</html>