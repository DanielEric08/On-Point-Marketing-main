<div class="people-who-trust-us  section-padding" style="background-image: url('images/bg_blue.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="people-who-trust-us__container">
        <div class="people-who-trust-us__headings d-flex justify-content-center container">
            <div class="people-who-trust-us--heading-width">
                <h2 class="text-light text-center"><?php echo e($people_who_trust_us['heading']); ?></h2>
                <p class="text-light text-center"><?php echo e($people_who_trust_us['description']); ?></p>
            </div>
        </div>
        <div id="people-who-trust-us__slider-main" class="people-who-trust-us__slider-main d-flex">
            <?php $__currentLoopData = $people_who_trust_us['testimonials']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div id="people-who-trust-us__slide" class="people-who-trust-us__slide">
                    <div class="people-who-trust-us__slid-item">
                        <p class="text-dark text-center"><?php echo e($testimonial['feedback']); ?></p>
                        <h6 class="secondary-color text-center text-uppercase remove-spacing"><?php echo e($testimonial['name']); ?></h6>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\On-Point-Marketing\resources\views/sections/people-who-trust-us.blade.php ENDPATH**/ ?>