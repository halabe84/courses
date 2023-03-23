<?php $__env->startSection('content'); ?>




    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Course</h2>
                            <p>Homepage<span>/</span>Courses<span>/</span><?php echo e($courses->category->name); ?><span>/</span><?php echo e($courses->name); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="<?php echo e(asset('uploads/courses/' . $courses->image)); ?>" alt="">
                    </div>
                    <div class="content_wrapper mt-5">
                        <?php echo $courses->desc; ?>

                    </div>

                </div>
                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer’s Name</p>
                                    <span class="color"> <?php echo e($courses->trainer->name); ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Course Fee </p>
                                    <span>$<?php echo e($courses->trainer->price); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form class="form-contact " action="<?php echo e(route('front.forms.enroll')); ?>" method="post" id="" >
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <input type="hidden"name="course_id" value="<?php echo e($courses->id); ?>">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" onfocus="this.placeholder='' " onblur="this.placeholder='Inter your name'" placeholder="Enter your name " >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email"  onfocus="this.placeholder='' " onblur="this.placeholder='Inter your name'" placeholder="Enter your email " >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="spec" onfocus="this.placeholder='' " onblur="this.placeholder='Inter your name'" placeholder="Enter your specialty " >
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="button button-group-area btn_1 "> Enroll</button>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\halab\OneDrive\سطح المكتب\project\courses1\resources\views/Front/courses/show.blade.php ENDPATH**/ ?>