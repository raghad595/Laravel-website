
<?php $__env->startSection("title","Registration form"); ?>
<?php $__env->startSection('content'); ?>
    <h1>Register</h1>
    <form method="POST" action="/customer/registed">
        <?php echo csrf_field(); ?>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
    <a href="/customer/home">Back to Home</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ass7-app\resources\views/register.blade.php ENDPATH**/ ?>