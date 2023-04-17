<div class="feature" style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="feature__container container d-flex section-padding align-items-center">
        <?php $__currentLoopData = $feature_boxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $box): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="feature__item <?php echo e($box['class']); ?> d-flex">
          <div class="feature__content">
            <h5 class="feature__heading text-uppercase"><?php echo e($box['heading']); ?></h5>
            <p class="feature__description box-text"><?php echo e($box['description']); ?></p>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\On-Point-Marketing\resources\views/sections/feature.blade.php ENDPATH**/ ?>