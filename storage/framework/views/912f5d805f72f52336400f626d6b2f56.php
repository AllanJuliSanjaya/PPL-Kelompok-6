

<?php $__env->startSection('content'); ?>
    <h1>Tambah Kontak Baru</h1>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('Contacts.create')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="first_name" placeholder="First Name" value="<?php echo e(old('first_name')); ?>"><br>
        <input type="text" name="last_name" placeholder="Last Name" value="<?php echo e(old('last_name')); ?>"><br>
        <input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>"><br>
        <input type="text" name="phone" placeholder="Phone" value="<?php echo e(old('phone')); ?>"><br>
        <button type="submit">Tambah Kontak</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_praktikum\resources\views/Contacts/create.blade.php ENDPATH**/ ?>