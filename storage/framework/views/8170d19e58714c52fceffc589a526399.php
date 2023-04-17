<div class="our-recent-work  section-padding" style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="our-recent-work__container">
        <div class="our-recent-work__headings d-flex justify-content-center container">
            <div class="our-recent-work--heading-width">
                <h2 class="secondary-color text-center"><?php echo e($our_recent_work['heading']); ?></h2>
                <p class="text-center"><?php echo e($our_recent_work['description']); ?></p>
            </div>
        </div>
        <div id="our-recent-work__slider-main" class="our-recent-work__slider-main d-flex">
            <?php $__currentLoopData = $our_recent_work['slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="our-recent-work__slide flex-basis-100">
                    <img class="our-recent-work__image" src="<?php echo e(asset($slide['image'])); ?>" alt="<?php echo e($slide['Label']); ?>">
               </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\On-Point-Marketing\resources\views/sections/our-recent-work.blade.php ENDPATH**/ ?>