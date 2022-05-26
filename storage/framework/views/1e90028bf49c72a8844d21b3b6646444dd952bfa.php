


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
                <a href="#">Edit loại sản phẩm</a>

                <span class="divider">
                    <i class="icon-angle-right arrow-icon"></i>
                </span>
            </li>
            
        </ul><!-- .breadcrumb -->
        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input"
                        autocomplete="off" />
                    <i class="icon-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- #nav-search -->
        <div class="page-content">
            <div class="span4">
                <div class="pull">
                    <a type="button" class="btn btn-info " href="<?php echo e(route('LoaiSanPham.index')); ?>"><i
                            class="fa fa-angle-double-left"></i> Back</a>
                </div>
                <form class="form-horizontal" role="form" action="<?php echo e(route('LoaiSanPham.update', $loaiSanPham)); ?>"
                    method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4>Edit loại sản phẩm</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="row-fluid">
                                    <label for="id-date-picker-1">Tên loại</label>
                                </div>

                                <div class="control-group">
                                    <div class="row-fluid input-append">
                                        <textarea id="form-field-11" class="autosize-transition form-control"
                                            name="TenLoai"><?php echo e($loaiSanPham->TenLoai); ?></textarea>
                                    </div>
                                </div>
                                <hr />

                                <div class="row-fluid">
                                    <label for="id-date-picker-1">Mô tả</label>
                                </div>
                                <div class="control-group">
                                    <div class="row-fluid input-append">
                                        
                                        <textarea id="form-field-11" class="autosize-transition form-control"
                                            name="MoTa"><?php echo e($loaiSanPham->MoTa); ?></textarea>
                                    </div>
                                </div>
                                <hr />
                                <button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i> Hoàn tất
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/LoaiSanPham/LoaiSanPham-edit.blade.php ENDPATH**/ ?>