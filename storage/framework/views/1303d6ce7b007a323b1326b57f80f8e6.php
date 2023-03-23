<?php $__env->startSection('content'); ?>


    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>Homepage<span>/</span>Courses<span>Category</span>/<?php echo e($category->name); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_special_cource">
                            <img src="<?php echo e(asset('uploads/courses/'.$c->image)); ?>" class="special_img " alt="">
                            <div class="special_cource_text">
                                <a href="<?php echo e(route('front.category', $c->category->id)); ?>" class="btn_4"><?php echo e($c->category->name); ?></a>
                                <h4>$<?php echo e($c->price); ?></h4>
                                <a href="<?php echo e(route('front.show',[$c->category->id, $c->id] )); ?>"><h3><?php echo e($c->name); ?></h3></a>
                                <p><?php echo e($c->desc); ?></p>
                                <div class="author_info">
                                    <div class="author_img">
                                        <img src="<?php echo e(asset('uploads/trainer/'.$c->trainer->img)); ?>" alt="">
                                        <div class="author_info_text">
                                            <p>Conduct by:</p>
                                            <h5><?php echo e($c->trainer->name); ?> </h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="d-flex justify-content-center w-100 mb-2">
                    <?php echo $courses->render(); ?>

                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\halab\OneDrive\سطح المكتب\project\courses1\resources\views/Front/courses/category.blade.php ENDPATH**/ ?>