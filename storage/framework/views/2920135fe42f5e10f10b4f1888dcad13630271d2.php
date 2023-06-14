<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SunnysideShop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon.ico')); ?>" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('css/landing.css')); ?>" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">SunnysideShop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                      

                        <li class="nav-item dropdown">
                            
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('landing', ['category' => $category->name])); ?>"><?php echo e($category->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </a>
                        
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-outline-dark ms-1">
                                <i class="bi-person-fill me-1"> </i>
                                Dashboard 
                            </a>
                        <?php endif; ?>

                        <?php if(auth()->guard()->guest()): ?>
                            
                            <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-dark ms-1">
                                <i class="bi-person-fill me-1"> </i>
                                Login 
                            </a>    
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </nav>

        <!--ini yg katanya diilangin aja / dihapus-->
        
        
       <!-- Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo e($loop->iteration - 1); ?>" class="<?php echo e($loop->first ? 'active' : ''); ?>"
                    aria-current="<?php echo e($loop->first ? 'true' : ''); ?>" aria-label="Slide 1"></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="carousel-inner">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($loop->first ? 'active' : ''); ?>" data-bs-interval="3000">
                    <img src="<?php echo e(asset('storage/slider/' . $slider->image)); ?>" class="d-block w-100" alt="<?php echo e($slider->image); ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo e($slider->title); ?></h5>
                        <p><?php echo e($slider->caption); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

        <!-- Section-->        
         <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <form action="<?php echo e(route('landing')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <div class="row g-3 my-5">
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Min" name="min" >
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Max" name="max" >
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </form>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                  <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <?php if($product->status == 'approved'): ?>
                  <?php endif; ?>

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
                                    <a href="<?php echo e(route('product.show', ['id' => $product->id])); ?>" style="text-decoration: none" class="text-dark">
                                        <small class="text-strong"><?php echo e($product->category->name); ?> </small>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; SunnysideShop 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        
    </body>
</html>
<?php /**PATH D:\laragon\www\arkatama-laravel\resources\views/landing.blade.php ENDPATH**/ ?>