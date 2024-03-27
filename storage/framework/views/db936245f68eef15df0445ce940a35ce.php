

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Pengguna</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->name); ?></td>

                <td>
                    <a href="<?php echo e(route('Users.get', $user->id)); ?>">Get User</a>
                    <a href="<?php echo e(route('Users.edit', $user->id)); ?>">Update User</a>
                    <!-- Logout button -->
                    <form action="<?php echo e(route('logout')); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Log Out</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Logout button or login/register links -->
    <?php if(Auth::check()): ?>
        <!-- If user is logged in, show logout button -->
        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    <?php else: ?>
        <!-- If user is not logged in, show login and register links -->
        <a href="<?php echo e(route('User.loginForm')); ?>" class="btn btn-primary">Login</a>
        <a href="<?php echo e(route('User.registerForm')); ?>" class="btn btn-success">Register</a>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_praktikum\resources\views/users/index.blade.php ENDPATH**/ ?>