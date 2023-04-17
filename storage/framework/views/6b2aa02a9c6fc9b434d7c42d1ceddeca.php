<div class="why-on-point section-padding" style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="why-on-point__container container">
        <div class="why-on-point__headings d-flex justify-content-center">
            <div class="why-on-point--width">
                <h2 class="secondary-color text-center"><?php echo e($why_on_point['heading']); ?></h2>
                <p class="text-center"><?php echo e($why_on_point['description']); ?></p>
            </div>
        </div>
        <div class="why-on-point__box-container d-flex">
            <?php $__currentLoopData = $why_on_point['boxes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $box): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="why-on-point__box flex-basis-100">
                    <div class="why-on-point__box-image-container text-center">
                        <img src="<?php echo e(asset($box['image'])); ?>" alt="<?php echo e($box['heading']); ?>" width="80" height="80">
                    </div>
                    <div class="why-on-point__box-headings">
                        <h5 class="text-center text-uppercase secondary-color"><?php echo e($box['heading']); ?></h5>
                        <p class="text-center"><?php echo e($box['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\On-Point-Marketing\resources\views/sections/why-on-point.blade.php ENDPATH**/ ?>