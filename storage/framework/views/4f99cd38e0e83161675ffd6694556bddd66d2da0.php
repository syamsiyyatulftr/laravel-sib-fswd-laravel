

<?php $__env->startSection('content'); ?>
    <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Category</h1>
                
                <a class="btn btn-primary mb-2" href="<?php echo e(route('category.create')); ?>" role="button">Create New</a>
                
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                 <tr>
                                    <th>#</th>        
                                    <th>Nama</th>        
                                    <th>Aksi</th>
                                </tr>       
                            </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($category['name']); ?></td>
                                            <td>
                                                <form onsubmit="return confirm('Are you sure? ');" action="<?php echo e(route('category.destroy', $category->id)); ?>" method="POST">
                                                    <a href="<?php echo e(route('category.edit', $category->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\arkatama-laravel\resources\views/category/index.blade.php ENDPATH**/ ?>