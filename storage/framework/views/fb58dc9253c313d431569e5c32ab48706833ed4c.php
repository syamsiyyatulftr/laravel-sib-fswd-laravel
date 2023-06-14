

<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">User</h1>

            <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary mb-2">Create User</a>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <img src="https://placehold.co/50x50" alt="avatar">
                                    </td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->phone); ?></td>
                                    <td>
                                        <span class="badge  <?php echo e($user->role->name == 'admin' ? 'bg-success' : 'bg-primary'); ?>"><?php echo e($user->role->name); ?></span>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('user.destroy', $user->id)); ?>" method="POST" class="d-inline">
                                            <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-warning">Edit</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\arkatama-laravel\resources\views/user/index.blade.php ENDPATH**/ ?>