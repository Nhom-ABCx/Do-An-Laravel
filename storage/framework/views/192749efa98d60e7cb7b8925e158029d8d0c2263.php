<?php $__env->startSection('title', 'Edit-Sản Phẩm'); ?>

<?php $__env->startSection('headThisPage'); ?>
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/colorpicker.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try {
                    ace.settings.check('breadcrumbs', 'fixed')
                } catch (e) {}
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                </li>

                <li>
                    <a href="<?php echo e(route('SanPham.index')); ?>">Quản lý sản phẩm</a>
                </li>

                <li>
                    <a href="<?php echo e(route('SanPham.show', ['sanPham' => $sanPham])); ?>"><?php echo e($sanPham->id); ?></a>
                </li>

                <li class="active">Chỉnh sửa</li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="icon-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- #nav-search -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    
                    <form id="submitForm" class="form-horizontal" role="form" action="<?php echo e(route('SanPham.update', $sanPham)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="space-10"></div>
                        <div class="widget-box">
                            <div class="widget-header">
                                <h3 class="header smaller lighter blue">Sản phẩm</h3>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="icon-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Tên sản phẩm </label>

                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-coffee"></i>
                                                </span>
                                                <textarea id="form-field-11" class="autosize-transition form-control" placeholder="Nhập tên sản phẩm" name="TenSanPham"><?php echo e($sanPham->TenSanPham); ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <h4 class="header green clearfix" style="padding: 0 1% 0 1%">
                                            Mô tả sản phẩm
                                            <span class="block pull-right">
                                                <small class="grey middle">Chọn giao diện: &nbsp;</small>

                                                <span class="btn-toolbar inline middle no-margin">
                                                    <span data-toggle="buttons" class="btn-group no-margin">
                                                        <label class="btn btn-sm btn-yellow">1<input type="radio" value="1" /></label>
                                                        <label class="btn btn-sm btn-yellow">2<input type="radio" value="2" /></label>
                                                        <label class="btn btn-sm btn-yellow active">3<input type="radio" value="3" /></label>
                                                    </span>
                                                </span>
                                            </span>
                                        </h4>

                                        <div class="wysiwyg-editor" id="editor1"><?php echo e($sanPham->MoTa); ?></div>

                                        <div class="hr hr-double dotted"></div>
                                        <textarea name="MoTa" style="display:none;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-10"></div>
                        <div class="widget-box">
                            <div class="widget-header">
                                <h3 class="header smaller lighter blue">Hình ảnh</h3>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="icon-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="form-group">
                                        <?php $__currentLoopData = $sanPham->HinhAnh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img style="width:150px;max-height:150px;object-fit:contain;float: left;" src="<?php echo e($item->fixImage()); ?>" alt="">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <div class="col-sm-2">
                                            <input multiple type="file" accept="image/*" id="id-input-file-3" name="HinhAnh[]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-10"></div>
                        <div class="widget-box">
                            <div class="widget-header">
                                <h3 class="header smaller lighter blue">Thông tin chung</h3>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="icon-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Thuộc tính</label>

                                        <div id="form-thuoctinh" class="col-sm-10">
                                            <?php $__currentLoopData = $sanPham->decodeThuocTinh(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="div-thuoctinh">
                                                    <span class="input-icon">
                                                        <input type="text" class="input-xlarge" value="<?php echo e($key); ?>" name="ThuocTinhChung[0][]">
                                                        <i class="icon-apple blue"></i>
                                                    </span>

                                                    <span class="input-icon input-icon-right">
                                                        <input type="text" class="input-xxlarge" value="<?php echo e($value); ?>" name="ThuocTinhChung[1][]">
                                                        <i class="icon-android green"></i>
                                                    </span>

                                                    <a href="javascript:void(0)" id="xoa-thuoctinh-<?php echo e($loop->index); ?>" onclick="xoaTheInputThuocTinh(<?php echo e($loop->index); ?>)" class="btn btn-white">
                                                        <i class="icon-trash red"></i>
                                                    </a>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div id="div-themthuoctinh">
                                                <input type="text" class="input-xlarge" placeholder="Tên" id="txtThuocTinh-Key">

                                                <input type="text" class="input-xxlarge" placeholder="Giá trị" id="txtThuocTinh-Value">

                                                <a href="javascript:void(0)" onclick="themTheInputThuocTinh()" class="btn btn-white" data-rel="tooltip" data-placement="top" title="Thêm mới 1 thuộc tính">
                                                    <i class="icon-plus green"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Hãng sản xuất</label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-sort-by-attributes"></i>
                                                </span>

                                                <select class="width-90 chosen-select" id="form-field-select-3" data-placeholder="" name="HangSanXuatId">
                                                    <option value="">&nbsp;</option>
                                                    <?php $__currentLoopData = $lstHangSanXuat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item->id); ?>" <?php if($item->id == $sanPham->HangSanXuatId): ?> selected <?php endif; ?>>
                                                            <?php echo e($item->TenHangSanXuat); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Loại sản phẩm
                                        </label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-sort-by-attributes"></i>
                                                </span>

                                                <select class="width-90 chosen-select" id="form-field-select-3" data-placeholder="" name="LoaiSanPhamId">
                                                    <option value="">&nbsp;</option>
                                                    <?php $__currentLoopData = $lstLoaiSanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item->id); ?>" <?php if($item->id == $sanPham->LoaiSanPhamId): ?> selected <?php endif; ?>>
                                                            <?php echo e($item->TenLoai); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Tổng số lượng tồn </label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-foursquare"></i>
                                                </span>

                                                <input type="text" class="form-control center" readonly id="form-input-readonly" value="<?php echo e($sanPham->tongSoLuongTon()); ?>" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>


                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Lượt mua </label>

                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon-bar-chart"></i>
                                                </span>

                                                <input class="form-control center" readonly type="text" id="form-input-readonly" value="<?php echo e($sanPham->LuotMua); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-10"></div>
                        <div class="widget-box">
                            <div class="widget-header">
                                <h3 class="header smaller lighter blue">Biến thể sản phẩm</h3>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="icon-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Biến thể</label>

                                        <div id="accordion" class="accordion-style1 panel-group col-sm-10">
                                            <?php $__currentLoopData = $sanPham->decodeThuocTinhToHop(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thuocTinh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo e($loop->index); ?>">
                                                                <i class="icon-angle-down bigger-110" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>
                                                                &nbsp; <i class=" icon-asterisk smaller-75 green"></i>
                                                                <label id="tenthuoctinh-<?php echo e($loop->index); ?>"> <?php echo e($thuocTinh); ?> </label>
                                                                <label style="width: 20px"></label>

                                                                <span id="lstThuocTinh">
                                                                    <?php $__currentLoopData = $sanPham->lstThuocTinh()[$loop->index]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <span
                                                                            class="badge badge-<?php echo e(collect(['grey', 'success', 'warning', 'danger', 'info', 'purple', 'inverse', 'pink', 'yellow'])->random()); ?>">
                                                                            <?php echo e($item); ?>

                                                                        </span>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </span>
                                                            </a>
                                                        </h4>
                                                    </div>

                                                    <div class="panel-collapse collapse" id="collapse<?php echo e($loop->index); ?>">
                                                        <div class="panel-body">

                                                            <div class="form-group">
                                                                <label>Tên thuộc tính</label>

                                                                <div>
                                                                    <div class="input-group">
                                                                        <input type="text" class="autosize-transition form-control" placeholder="vd: Size/Color" name="ThuocTinh[]"
                                                                            value="<?php echo e($sanPham->decodeThuocTinhToHop()[$loop->index]); ?>" style="font-weight: bold;"
                                                                            id="txtTenThuocTinh-<?php echo e($loop->index); ?>" onchange="inputTenThuocTinhToHopChange(<?php echo e($loop->index); ?>)" />


                                                                        <a href="#" class="input-group-addon red" style="background-color:transparent">
                                                                            <i class="icon-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-4"></div>

                                                            <div class="form-group">
                                                                <label>Giá trị thuộc tính</label>

                                                                <div id="form-thuoctinh-tohop-<?php echo e($loop->index); ?>">
                                                                    <?php $__currentLoopData = $sanPham->lstThuocTinh()[$loop->index]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="input-group" style="margin-bottom: 5px">
                                                                            <input type="text" class="autosize-transition form-control" placeholder="vd: Red/Green/Blue"
                                                                                name="ThuocTinhToHop[<?php echo e($loop->parent->index); ?>][]" ThuocTinh="<?php echo e($thuocTinh); ?>" value="<?php echo e($item); ?>"
                                                                                style="font-weight: bold;" onchange="inputThuocTinhToHopChange(<?php echo e($loop->parent->index); ?>)" />

                                                                            <a href="javascript:void(0)" id="xoa-thuoctinh-tohop-<?php echo e($loop->parent->index); ?>-<?php echo e($loop->index); ?>"
                                                                                onclick="xoaTheInputBienThe(<?php echo e($loop->parent->index); ?>,<?php echo e($loop->index); ?>)" class="input-group-addon red"
                                                                                style="background-color:transparent">
                                                                                <i class="icon-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                                <div class="input-group" style="margin-bottom: 5px">
                                                                    <input id="txtThemThuocTinh-<?php echo e($loop->index); ?>" type="text" class="autosize-transition form-control"
                                                                        placeholder="Thêm giá trị khác ?" value="" />

                                                                    <a href="javascript:void(0)" onclick="themTheInputBienThe(<?php echo e($loop->index); ?>,'<?php echo e($thuocTinh); ?>')" role="button"
                                                                        class="input-group-addon green" data-rel="tooltip" data-placement="bottom" title="Thêm mới 1 thuộc tính">
                                                                        <i class="icon-plus"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <button onclick="themThuocTinhKhac(this)" type="button" class="btn btn-sm btn-success">
                                                <i class="icon-plus icon-on-right bigger-110"></i>
                                                Thêm thuộc tính khác
                                            </button>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="table-responsive">
                                        <table id="BienTheSanPham" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center"><i class="icon-adn"></i></th>
                                                    <th><i class="icon-align-left"></i>Mẫu mã</th>
                                                    <th><i class="icon-money"></i>Giá bán</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-10"></div>
                        <div class="widget-box">
                            <div class="widget-header">
                                <h3 class="header smaller lighter blue">Sản phẩm</h3>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="icon-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main">

                                </div>
                            </div>
                        </div>



                        <div class="space-4"></div>

                        <div class="clearfix form-actions">
                            <div style="float: right">
                                <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    Reset
                                </button>

                                &nbsp; &nbsp; &nbsp;

                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    <script src="/storage/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/storage/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <script src="/storage/assets/js/fuelux/fuelux.spinner.min.js"></script>
    <script src="/storage/assets/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="/storage/assets/js/date-time/bootstrap-timepicker.min.js"></script>
    <script src="/storage/assets/js/date-time/moment.min.js"></script>
    <script src="/storage/assets/js/date-time/daterangepicker.min.js"></script>
    <script src="/storage/assets/js/bootstrap-colorpicker.min.js"></script>
    <script src="/storage/assets/js/jquery.knob.min.js"></script>
    <script src="/storage/assets/js/jquery.autosize.min.js"></script>
    <script src="/storage/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
    <script src="/storage/assets/js/jquery.maskedinput.min.js"></script>
    <script src="/storage/assets/js/bootstrap-tag.min.js"></script>
    
    <?php echo $__env->make('Admin.SanPham.script.SanPham-edit-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DDDD\WEB\Laravel\Do-An-Laravel\resources\views/Admin/SanPham/SanPham-edit.blade.php ENDPATH**/ ?>