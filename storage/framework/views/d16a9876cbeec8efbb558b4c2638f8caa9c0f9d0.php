

<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Create Slider</h1>

            <div class="card mb-4">
                <div class="card-body">

                    <form action="<?php echo e(route('slider.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <input type="text" class="form-control" id="caption" name="caption" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Slider Image</label>
                            <input class="form-control" type="file" name="image" id="image" accept=".jpg, .jpeg, .png., .webp">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo e(route('slider.index')); ?>" class="btn btn-secondary">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\arkatama-laravel\resources\views/slider/create.blade.php ENDPATH**/ ?>