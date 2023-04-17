<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;600;700&family=Raleway&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header class="header">
        <div class="container d-flex justify-content-between">
            <div class="header__left">
                <a href="/">
                    <img id="site-logo" src="<?php echo e(asset($logo_path)); ?>" alt="Site Logo">
                    <img id="site-logo2" class="hide" src="<?php echo e(asset($new_logo_path)); ?>" alt="Site Logo">
                </a>
            </div>
            <div class="header__right">
                <div class="menu-main d-flex align-items-center">
                    <h6 class="text-light remove-spacing">MENU</h6>
                    <button class="menu-toggle"></button>
                </div>
                <nav>
                <ul class="menu">
                    <li data-text="Home">Home</li>
                    <li data-text="Projects">Projects</li>
                    <li data-text="About">About</li>
                    <li data-text="Contact">Contact</li>
                </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="footer">
        <div class="footer__cta" style="background-image: url(<?php echo e(asset('images/footer_background.png')); ?>);">
            <div class="footer__container container">
                <h2 class="text-center text-light">take your business to the next level with on point marketing</h2>
                <div class="btn__container text-center">
                    <a class="btn--primary" href="#">LET'S WORK TOGETHER</a>
                </div>
            </div>
        </div>
        <div class="footer__copyright container">
            <div class="footer__social text-center">
                <i class="fa fa-facebook-f primary-color"></i>
                <i class="fa fa-instagram primary-color"></i>
            </div>
            <div class="footer__copyright-container">
                <p class="text-center primary-color remove-spacing"> Copyrights &copy; <?php echo e(date('Y')); ?> On Point Marketing 2023. All Rights Reserved.</p>
            </div>
        </div>
    </footer>



    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/slick-script.js')); ?>" defer></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\On-Point-Marketing\resources\views/layout/app.blade.php ENDPATH**/ ?>