<div class="companies-we-work-with  section-padding" style="background: #F8F8F8;">
    <div class="companies-we-work-with__container container">
        <div class="companies-we-work-with__headings">
            <h2 class="text-center secondary-color"><?php echo e($companies_we_work_with['heading']); ?></h2>
            <?php if(!empty($companies_we_work_with['description'])): ?>
                <p class="text-center"><?php echo e($companies_we_work_with['description']); ?></p>
            <?php endif; ?>
        </div>
        <div class="companies-we-work-with__logos d-flex">
            <?php $__currentLoopData = $companies_we_work_with['company_logos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company_logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="companies-we-work-with__logo">
                    <img src="<?php echo e(asset($company_logo['image'])); ?>" alt="<?php echo e($company_logo['label']); ?>">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\On-Point-Marketing\resources\views/sections/companies-we-work-with.blade.php ENDPATH**/ ?>