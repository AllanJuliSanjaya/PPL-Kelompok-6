

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Daftar Kontak</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <div class="row mb-4">
            <div class="col-md-6">
                <form action="<?php echo e(route('Contacts.search')); ?>" method="GET" class="form-inline">
                    <input type="text" name="keyword" class="form-control mr-sm-2" placeholder="Cari kontak...">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <a href="<?php echo e(route('Contacts.createForm')); ?>" class="btn btn-primary">Tambah Kontak</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($contact->first_name); ?> <?php echo e($contact->last_name); ?></td>
                            <td><?php echo e($contact->email); ?></td>
                            <td><?php echo e($contact->phone); ?></td>
                            <td>
                                <a href="<?php echo e(route('Contacts.get', $contact->id)); ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="<?php echo e(route('Contacts.updateForm', $contact->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                <form action="<?php echo e(route('Contacts.delete', $contact->id)); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kontak ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_praktikum\resources\views/Contacts/index.blade.php ENDPATH**/ ?>