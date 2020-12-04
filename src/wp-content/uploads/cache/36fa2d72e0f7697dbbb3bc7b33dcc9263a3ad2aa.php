
<?php $__env->startSection('content'); ?>

<section class="py-5 font-sans min-h-screen -mb-10 leading0-normal">
                        <h2 class="text-4xl mb-4"><?php echo e($post->post_title); ?></h2>
                        <?php echo $post->post_content; ?>

        
  
        <div class="row text-center container">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 ">
                                <a href="<?php echo e($project->permalink); ?>" class="text-black no-underline">
                                <img src="<?php echo e($project->thumb); ?>" alt="<?php echo e($project->alt); ?>" title="<?php echo e($project->title); ?>">
                                <p class=""><?php echo e($project->name); ?></p>
                                </a>
                        </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
        </div>          
                
       
</section>  
          
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>