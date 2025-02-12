
<?php $__env->startSection('title', 'Home Page'); ?>
<?php $__env->startSection('content'); ?>   
    <h2>Hello Form Home View </h2>
    <h4>Welcome <?php echo e($data['name']); ?> </h4>
    <h4>Your email is: <?php echo e($data['email']); ?></h4>
    <a href="/customer/contact">Contact Us </a>
    <a href="/customer/registed">Registration Form</a>
    <a href="/customer/about" class="btn btn-secondary">About Us</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ass7-app\resources\views/home.blade.php ENDPATH**/ ?>