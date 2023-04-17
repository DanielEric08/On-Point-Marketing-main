<div class="below-the-banner" style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="below-the-banner__container container d-flex">
      <?php $__currentLoopData = $below_the_banner_boxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $box): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="below-the-banner__item">
          <div class="below-the-banner__content">
            <h3 class="below-the-banner__heading text-light"><?php echo e($box['heading']); ?></h3>
            <p class="text-light box-text"><?php echo e($box['description']); ?></p>
            <div class="btn__container">
              <a class="btn--secondary" href="<?php echo e($box['buttonUrl']); ?>"><?php echo e($box['buttonText']); ?></a>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\On-Point-Marketing\resources\views/sections/below-the-banner.blade.php ENDPATH**/ ?>