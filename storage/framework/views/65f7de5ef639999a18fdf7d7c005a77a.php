


<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Edit Pengguna</h1>
    <form action="<?php echo e(route('Users.update', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo e($user->username); ?>" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_praktikum\resources\views/users/edit.blade.php ENDPATH**/ ?>