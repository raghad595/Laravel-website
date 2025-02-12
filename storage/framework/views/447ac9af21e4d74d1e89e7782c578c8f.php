

<?php $__env->startSection('title', 'Form Submission Result'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h2>Form Submission Result</h2>
        <div class="alert alert-success">
            <strong>Thank you for your submission!</strong>
            <p><strong>Email:</strong> <?php echo e($email); ?></p>
            <p><strong>Password:</strong> <?php echo e($password); ?></p>
            <p><strong>Remember me:</strong> <?php echo e($remember ? 'Yes' : 'No'); ?></p>
        </div>
        <a href="/customer/contact" class="btn btn-primary">Back to Contact Form</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ass7-app\resources\views/result.blade.php ENDPATH**/ ?>