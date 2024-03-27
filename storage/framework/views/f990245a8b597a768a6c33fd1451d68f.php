



<?php $__env->startSection('content'); ?>

<div class="container">
    <h1>Login</h1>
    <form action="<?php echo e(route('User.login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_praktikum\resources\views/users/login.blade.php ENDPATH**/ ?>