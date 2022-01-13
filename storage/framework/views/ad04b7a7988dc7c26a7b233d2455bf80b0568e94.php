


<?php $__env->startSection('title', 'Edit_HangSanXuat'); ?>

<?php $__env->startSection('headThisPage'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <div class="main-content">

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">Home</a>

                <span class="divider">
                    <i class="icon-angle-right arrow-icon"></i>
                </span>
            </li>

            <li>
                <a href="#">Hãng Sản Xuất</a>

                <span class="divider">
                    <i class="icon-angle-right arrow-icon"></i>
                </span>
            </li>
            <li class="active">Edit Hãng Sản Xuất</li>
        </ul><!-- .breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="icon-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- #nav-search -->
        <div class="page-content">
            <div class="pull">
                <a class="btn btn-primary" href="<?php echo e(route('HangSanXuat.index')); ?>"> Back</a>
            </div>
            <div class="page-header position-relative">
                <h1>
                    Edit Hãng Sản Xuất
                </h1>

            </div><!-- /.page-header -->

            <div class="row-fluid">
                <div class="span12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form action="<?php echo e(route('HangSanXuat.update', $hsx)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tên Hãng</strong>
                                    <input type="text" name="Ten" value="<?php echo e($hsx->Ten); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Địa Chỉ</strong>
                                    <input type="text" name="DiaChi" value="<?php echo e($hsx->DiaChi); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email</strong>
                                    <input type="text" name="Email" value="<?php echo e($hsx->Email); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Phone</strong>
                                    <input type="text" name="Phone" value="<?php echo e($hsx->Phone); ?>" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-3">Submit</button>
                        </div>
                    </form>
                </div><!-- /.span -->
            </div><!-- /.row-fluid -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tranphuocvinh\laravel\Do-An-Laravel\resources\views/HangSanXuat/HangSanXuat-edit.blade.php ENDPATH**/ ?>