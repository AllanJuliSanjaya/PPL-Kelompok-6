


<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Detail Pengguna</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: <?php echo e($user->name); ?></h5>
            <p class="card-text">Username: <?php echo e($user->username); ?></p>
            <a href="<?php echo e(route('Users.index')); ?>" class="btn btn-primary">Back to list</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_praktikum\resources\views/users/get.blade.php ENDPATH**/ ?>