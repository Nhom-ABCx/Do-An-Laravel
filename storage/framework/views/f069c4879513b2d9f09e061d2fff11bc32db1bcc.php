


<?php $__env->startSection('title', 'Page Title'); ?>

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
            <a href="#">Đơn vị vận chuyển</a>

            <span class="divider">
                <i class="icon-angle-right arrow-icon"></i>
            </span>
        </li>
        <li class="active">Thêm đơn vị vận chuyển</li>
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
            <a class="btn btn-primary" href="<?php echo e(route('DonViVanChuyen.index')); ?>"> Back</a>
        </div>
        <div class="page-header position-relative">
            <h1>
                Thêm đơn vị vận chuyển mới
            </h1>

        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                

                <form class="form-horizontal" role="form" action="<?php echo e(route('DonViVanChuyen.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    
                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Tên đơn vị </label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-coffee"></i>
                                </span>

                                <input class="form-control" type="text" placeholder="Nhập tên đơn vị vận chuyển" value="<?php echo e(old('TenDonViVanChuyen')); ?>" name="TenDonViVanChuyen" />
                            </div>
                        </div>
                        <?php if($errors->has('TenDonViVanChuyen')): ?>
                        <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('TenDonViVanChuyen')); ?></i>
                        <?php endif; ?>
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Website </label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-edit"></i>
                                </span>

                                <input class="form-control" type="text" placeholder="Nhập website" value="<?php echo e(old('Website')); ?>" name="Website" />
                            </div>
                        </div>
                        <?php if($errors->has('Website')): ?>
                        <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('Website')); ?></i>
                        <?php endif; ?>
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Email </label>

                        <div class="col-sm-3">
                            <div class="input-group">
                            <span class="input-group-addon">
                                    <i class="fa fa-mail-reply-all"></i>
                            </span>
                            
                            <input type="text"  id="spinner3" value="<?php echo e(old('Email')); ?>" name="Email" />
                            </div>
                            
                        </div>
                        <?php if($errors->has('Email')): ?>
                        <i class="fa fa-mail-reply-all"> <?php echo e($errors->first('Email')); ?></i>
                        <?php endif; ?>
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Phone </label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-credit-card"></i>
                                </span>

                                
                                <input type="text"  id="spinner1" value="<?php echo e(old('Phone')); ?>" name="Phone" />
                            </div>
                        </div>
                        <?php if($errors->has('Phone')): ?>
                        <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('Phone')); ?></i>
                        <?php endif; ?>
                    </div>
                    <div class="space-4"></div>

                    <div class="clearfix form-actions">
                        <div class="col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="icon-ok bigger-110"></i>
                                Submit
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                    <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
Đoạn script chỉ xài cho trang
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tranphuocvinh\laravel\Do-An-Laravel\resources\views/DonViVanChuyen/DonViVanChuyen-create.blade.php ENDPATH**/ ?>