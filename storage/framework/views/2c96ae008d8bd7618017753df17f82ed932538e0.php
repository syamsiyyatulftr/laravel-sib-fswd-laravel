

<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Product</h1>

            <a class="btn btn-primary mb-2" href="<?php echo e(route('product.create')); ?>" role="button">Create New</a>

            
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e($message); ?>

                </div>
            <?php endif; ?>

            <?php if($message = Session::get('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e($message); ?>

                </div>
            <?php endif; ?>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Nama</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Brand</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($product->category->name); ?></td>
                                    <td><?php echo e($product->name); ?></td>
                                    <td>Rp. <?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                                    <td>Rp. <?php echo e(number_format($product->sale_price, 0, ',', '.')); ?></td>
                                    <td><?php echo e($product->brands); ?></td>
                                    <td>
                                        <?php if($product->image == null): ?>
                                            <span class="badge bg-primary">No Image</span>
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('storage/product/' . $product->image)); ?>"
                                                alt="<?php echo e($product->name); ?>" style="max-width: 50px">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($product->status == 'approved'): ?>
                                            <span class="badge bg-success">Approved</span>
                                        <?php elseif($product->status == 'rejected'): ?>
                                            <span class="badge bg-danger">Rejected</span>
                                        <?php else: ?>
                                            <?php if(Auth::user()->role->name == 'Admin'): ?>
                                                
                                                <form action="<?php echo e(route('product.updateStatus', $product->id)); ?>"
                                                    method="POST" style="display: inline;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <input type="hidden" name="status" value="approved">
                                                    <button type="submit" class="btn btn-sm btn-success"><i
                                                            class="fas fa-check"></i></button>
                                                </form>
                                                <form action="<?php echo e(route('product.updateStatus', $product->id)); ?>"
                                                    method="POST" style="display: inline;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <input type="hidden" name="status" value="rejected">
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fas fa-times"></i></button>
                                                </form>
                                            <?php else: ?>
                                                <span class="badge bg-info">Pending</span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <form onsubmit="return confirm('Are you sure?');"
                                            action="<?php echo e(route('product.destroy', $product->id)); ?>" method="POST">
                                            <a href="<?php echo e(route('product.edit', $product->id)); ?>"
                                                class="btn btn-sm btn-warning">Edit</a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\arkatama-laravel\resources\views/product/index.blade.php ENDPATH**/ ?>