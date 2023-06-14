

<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Brand</h1>

            <a class="btn btn-primary mb-2" href="<?php echo e(route('brand.create')); ?>" role="button">Create New</a>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($brand->name); ?></td>
                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');" action="<?php echo e(route('brand.destroy', $brand->id)); ?>" method="POST">
                                            <a href="<?php echo e(route('brand.edit', $brand->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\arkatama-laravel\resources\views/brand/index.blade.php ENDPATH**/ ?>