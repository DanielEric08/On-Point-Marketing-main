<div class="banner">
    <div class="banner__container container d-flex">
        <div class="banner__left d-flex align-items-end flex-basis-100">
            <div class="banner__content">
                <h1 class="remove-spacing text-light"><?php echo $banner['heading']; ?></h1>
                <div class="btn__container">
                    <a class="btn--primary" href="<?php echo e($banner['buttonUrl']); ?>"><?php echo e($banner['buttonText']); ?></a>
                </div>
            </div>
        </div>
        <div class="banner__right flex-basis-100 d-flex align-items-end">
            <img src="<?php echo e(asset($banner['image'])); ?>" alt="Megaphone">
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\On-Point-Marketing\resources\views/sections/banner.blade.php ENDPATH**/ ?>