

<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h2>About Us</h2>
        <div class="alert alert-info">
            <strong>Hello!</strong>
            <p>Welcome to the About Us page. Here you can find information about me:</p>
            <p><strong>Name:</strong> ITI Institute</p>
            <p><strong>Background:</strong> [Brief background or bio]</p>
            <p><strong>Interests:</strong> [Your interests or hobbies]</p>
            <p><strong>Contact:</strong> [Your contact information]</p>
        </div>
        <a href="/customer/home" class="btn btn-primary">Back to Home</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ass7-app\resources\views/about_us.blade.php ENDPATH**/ ?>