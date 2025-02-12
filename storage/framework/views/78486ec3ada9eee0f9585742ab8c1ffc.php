<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title', 'Laravel App'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/master.css')); ?>">
</head>
<body>
    <header>
        <nav>
            <!-- Navigation bar content -->
        </nav>
    </header>
    
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\Ass7-app\resources\views/master.blade.php ENDPATH**/ ?>