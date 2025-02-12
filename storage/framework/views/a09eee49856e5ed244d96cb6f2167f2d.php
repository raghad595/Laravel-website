<!-- resources/views/edit_user.blade.php -->


<?php $__env->startSection('title', 'Edit User'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Edit User</h1>
    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo e($user->name); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo e($user->email); ?>" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit">Update User</button>
    </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ass7-app\resources\views/edit_user.blade.php ENDPATH**/ ?>