

<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <?php if($product['sale_price'] != 0): ?>
                                        <!-- Sale badge-->
                                        <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                    <?php endif; ?>

                                    <!-- Product image-->
                                    <img class="card-img-top" src="<?php echo e(asset('storage/product/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" />

                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <a href="#" style="text-decoration: none" class="text-dark">
                                                <h5 class="fw-bolder"><?php echo e($product->name); ?></h5>
                                            </a>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <?php for($i = 0; $i < $product->rating; $i++): ?>
                                                    <div class="bi-star-fill"></div>
                                                <?php endfor; ?>
                                            </div>
                                            <!-- Product price-->
                                            <?php if($product['sale_price'] != 0): ?>
                                                <span class="text-muted text-decoration-line-through">Rp.<?php echo e(number_format($product->price, 0)); ?></span>
                                                Rp.<?php echo e(number_format($product->sale_price, 0)); ?>

                                            <?php else: ?>
                                                Rp.<?php echo e(number_format($product->price, 0)); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="alert alert-secondary w-100 text-center" role="alert">
                                <h4>Produk belum tersedia</h4>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\arkatama-laravel\resources\views/product/card.blade.php ENDPATH**/ ?>