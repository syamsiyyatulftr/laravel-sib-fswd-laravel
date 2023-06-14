 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <?php if(Auth::user()->role->name == 'Admin' || Auth::user()->role->name == 'Staff'): ?>
                                <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                            </a>
                            <?php endif; ?>

                            <?php if(Auth::user()->role->name == 'Admin'): ?>
                                <div class="sb-sidenav-menu-heading">Content</div>
                            <a class="nav-link" href="<?php echo e(route('slider.index')); ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                    Slider
                            </a>
                            <?php endif; ?>

                            <div class="sb-sidenav-menu-heading">Management</div>
                            <?php if(Auth::user()->role->name == 'Admin' || Auth::user()->role->name == 'Staff'): ?>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Product
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?php echo e(route('brand.index')); ?>">Brand</a>
                                        <a class="nav-link" href="<?php echo e(route('category.index')); ?>">Category</a>
                                        <a class="nav-link" href="<?php echo e(route('product.index')); ?>">Product</a>
                                    </nav>
                                </div>
                            <?php endif; ?>

                            <?php if(Auth::user()->role->name == 'Admin'): ?>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo e(route('role.index')); ?>">Role</a>
                                    <a class="nav-link" href="<?php echo e(route('user.index')); ?>">User</a>
                                </nav>
                            </div>    
                            <?php endif; ?>

                            
                            <?php if(Auth::user()->role->name == 'User'): ?>
                                <a class="nav-link" href="<?php echo e(route('product.index')); ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Product
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        
                         
                        ( <?php echo e(Auth::user()->role->name); ?> ) <?php echo e(Auth::user()->name); ?>

                    </div>
                </nav><?php /**PATH D:\laragon\www\arkatama-laravel\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>