<div class="frequently-asked-questions section-padding" style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="frequently-asked-questions__container container">
        <div class="frequently-asked-questions__headings">
            <h2 class="text-center secondary-color"><?php echo e($frequently_asked_questions['heading']); ?></h2>
            <?php if(!empty($frequently_asked_questions['description'])): ?>
                <p class="text-center"><?php echo e($frequently_asked_questions['description']); ?></p>
            <?php endif; ?>
        </div>
        <div class="frequently-asked-questions__content position-relative">
            <?php $__currentLoopData = $frequently_asked_questions['frequently_asked_questions_1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="frequently-asked-questions__items d-flex">
                <div class="frequently-asked-questions__item-answer flex-basis-100">
                    <h6 class="text-uppercase"><?php echo e($faq[0]['question']); ?></h6>
                </div>
                <div class="frequently-asked-questions__item-question flex-basis-100 ">
                    <div class="frequently-asked-questions__item-position position-absolute">
                        <h6 class="secondary-color"><?php echo e($faq[0]['answer_heading']); ?></h6>
                        <p><?php echo e($faq[0]['answer']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div> 
<?php /**PATH C:\xampp\htdocs\On-Point-Marketing\resources\views/sections/frequently-asked-questions.blade.php ENDPATH**/ ?>