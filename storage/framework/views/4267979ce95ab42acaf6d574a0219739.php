

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Daftar Alamat</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <a href="<?php echo e(route('Addresses.createForm')); ?>" class="btn btn-primary mb-3">Tambah Alamat</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Street</th>
                    <th scope="col">City</th>
                    <th scope="col">Province</th>
                    <th scope="col">Country</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($address->street); ?></td>
                        <td><?php echo e($address->city); ?></td>
                        <td><?php echo e($address->province); ?></td>
                        <td><?php echo e($address->country); ?></td>
                        <td><?php echo e($address->postal_code); ?></td>
                        <td>
                            <a href="<?php echo e(route('Addresses.get', $address->id)); ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="<?php echo e(route('Addresses.updateForm', $address->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <form action="<?php echo e(route('Addresses.delete', $address->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus alamat ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_praktikum\resources\views/Addresses/index.blade.php ENDPATH**/ ?>