
<?php $__env->startSection('content'); ?>
    <h1>Users</h1>
    <a href="<?php echo e(route('users.create')); ?>">Create New User</a>
    <ul>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->name); ?> - <?php echo e($user->email); ?>

                <a href="<?php echo e(route('users.edit', $user->id)); ?>">Edit</a>
                <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ass7-app\resources\views/users/index.blade.php ENDPATH**/ ?>