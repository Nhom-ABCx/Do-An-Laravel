<?php $__env->startSection('title', 'QL loại sản phẩm'); ?>

<?php $__env->startSection('headThisPage'); ?>
    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
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
                    <a href="<?php echo e(route('Home.index')); ?>">Home</a>
                </li>
                <?php if(URL::current() == route('LoaiSanPham.DaXoa')): ?>
                    <li>
                        <a href="<?php echo e(route('LoaiSanPham.index')); ?>">Quản lý loại sản phẩm</a>
                    </li>
                    <li class="active">Đã xóa</li>
                <?php else: ?>
                    <li class="active">Quản lý loại sản phẩm</li>
                <?php endif; ?>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header">
                            <?php if(URL::current() == route('LoaiSanPham.DaXoa')): ?>
                                <h3 class="header smaller lighter blue">Quản lý loại sản phẩm đã xoá</h3>
                            <?php else: ?>
                                <h3 class="header smaller lighter blue">Quản lý loại sản phẩm</h3>
                            <?php endif; ?>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <form class="form-inline" action="<?php echo e(URL::current() == route('LoaiSanPham.DaXoa') ? route('LoaiSanPham.DaXoa') : route('LoaiSanPham.index')); ?>" method="get">

                                    <a href="#modal-form" role="button" data-toggle="modal" class="btn btn-success">
                                        <i class="icon-plus"></i>
                                        Thêm sản phẩm
                                    </a>

                                    <?php if(URL::current() == route('LoaiSanPham.DaXoa')): ?>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('LoaiSanPham.DaXoa')); ?>" class="btn btn-inverse">
                                            <i class="icon-trash"></i>
                                            Loại sản phẩm đã xóa
                                        </a>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng loại sản phẩm
                        <form class="form-inline" action="<?php echo e(URL::current() == route('LoaiSanPham.DaXoa') ? route('LoaiSanPham.DaXoa') : route('LoaiSanPham.index')); ?>" method="get">
                            <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Nhập tên" title="Tìm kiếm theo tên" data-placement="bottom" value="<?php echo e($request['Ten']); ?>" name="Ten" />

                            <button type="submit" class="btn btn-purple btn-sm">
                                Tìm kiếm
                                <i class="icon-search icon-on-right bigger-110"></i>
                            </button>
                            <button type="reset" class="btn btn-sm">
                                <i class="icon-refresh"></i>
                                Reset
                            </button>
                        </form>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-key "></i>##</th>
                                    <th><i class="fa fa-align-left"></i>Tên loại</th>
                                    <th><i class="fa fa-file-text-o"></i>Mô tả</th>
                                    <th><i class="fa fa-pencil"></i>parent</th>
                                    <th><i class="fa fa-pencil"></i>Ngày tạo</th>
                                    <th><i class="fa fa-check-square-o"></i>Ngày cập nhật</th>
                                    <th><i class="fa fa-trash"></i>Ngày xoá</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $loaiSp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="center"><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->TenLoai); ?></td>
                                        <td><?php echo e($item->MoTa); ?></td>
                                        <td><?php echo e($item->parent_Id); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        <td><?php echo e($item->deleted_at); ?></td>
                                        <?php if(URL::current() == route('LoaiSanPham.DaXoa')): ?>
                                            <td>

                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('LoaiSanPham.KhoiPhuc', $item->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        
                                                        <button type="submit" class="btn-link blue" title="Khôi phục"><i class="icon-undo bigger-130"></i></button>
                                                    </form>
                                                </div>

                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="#">
                                                        <i class="fa fa-plus"></i>
                                                    </a>

                                                    <a class="green" href="<?php echo e(route('LoaiSanPham.edit', $item)); ?>" title="Sữa">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>
                                                    <form action="<?php echo e(route('LoaiSanPham.destroy', $item)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn-link red" title="Xoá"><i class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php endif; ?>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div><!-- /.page-content -->

        <div id="modal-form" class="modal" tabindex="-1" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="blue bigger">Thêm loại sản phẩm</h4>
                    </div>

                    <div class="modal-body overflow-visible">
                        <form class="form-horizontal" role="form" action="<?php echo e(route('LoaiSanPham.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-7">
                                    <div class="form-group">
                                        <label>Tên loại</label>
                                        <?php if($errors->has('TenLoai')): ?>
                                            <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('TenLoai')); ?></i>
                                        <?php endif; ?>

                                        <div>
                                            <div class="input-group">
                                                <span class="input-group-addon green">
                                                    <i class="icon-coffee"></i>
                                                </span>
                                                <textarea class="autosize-transition form-control" placeholder="Nhập tên loại sản phẩm" name="TenLoai"><?php echo e(old('TenLoai')); ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <?php if($errors->has('MoTa')): ?>
                                            <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('MoTa')); ?></i>
                                        <?php endif; ?>

                                        <div>
                                            <div class="input-group">
                                                <span class="input-group-addon blue">
                                                    <i class="icon-edit"></i>
                                                </span>

                                                <textarea class="autosize-transition form-control" placeholder="Nhập mô tả" name="MoTa"><?php echo e(old('MoTa')); ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Loại sản phẩm cha ?</label>

                                        <div>
                                            <div class="input-group">
                                                <span class="input-group-addon pink">
                                                    <i class="icon-sort-by-attributes"></i>
                                                </span>

                                                <select class="chosen-select" data-placeholder="" name="parent_id">
                                                    <option value="">&nbsp;</option>
                                                    <?php echo e(App\Http\Controllers\Admin\LoaiSanPhamController::showSelectOption($loaiSp)); ?>

                                                </select>
                                            </div>
                                        </div>
                                        <?php if($errors->has('parent_id')): ?>
                                            <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('parent_id')); ?></i>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-sm" data-dismiss="modal">
                                    <i class="icon-remove"></i>
                                    Hủy
                                </button>

                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="icon-ok"></i>
                                    Lưu
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.page-content -->

    </div><!-- /.main-content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>

    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    
    <script src="/storage/assets/js/bootbox.min.js"></script>
    

    <!-- inline scripts related to this page -->

    
    <script type="text/javascript">
        jQuery(function($) {
            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [
                    null, null,
                    {
                        "bSortable": false
                    }, //mota
                    null, null, null, null,
                    {
                        "bSortable": false
                    }, //hinh anh

                ]
            });

            $('table th input:checkbox').on('click', function() {
                var that = this;
                $(this).closest('table').find('tr > td:first-child input:checkbox')
                    .each(function() {
                        this.checked = that.checked;
                        $(this).closest('tr').toggleClass('selected');
                    });

            });


            $('[data-rel="tooltip"]').tooltip({
                placement: tooltip_placement
            });

            function tooltip_placement(context, source) {
                var $source = $(source);
                var $parent = $source.closest('table')
                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $source.offset();
                var w2 = $source.width();

                if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
                return 'left';
            }
        })
        $('[data-rel=tooltip]').tooltip({
            container: 'body'
        });
        $(".chosen-select").chosen();
        $('#chosen-multiple-style').on('click', function(e) {
            var target = $(e.target).find('input[type=radio]');
            var which = parseInt(target.val());
            if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
            else $('#form-field-select-4').removeClass('tag-input-style');
        });

        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        $('#modal-form').on('shown.bs.modal', function() {
            $(this).find('.chosen-container').each(function() {
                $(this).find('a:first-child').css('width', '210px');
                $(this).find('.chosen-drop').css('width', '210px');
                $(this).find('.chosen-search input').css('width', '200px');
            });
        })
    </script>
    

    
    <script type="text/javascript">
        jQuery(function($) {
            $(".bootbox-options").on(ace.click_event, function() {
                bootbox.dialog({
                    message: "<span class='bigger-110'>Bạn có chắc chắn muốn xóa vĩnh viễn mục này ??? <i class='icon-exclamation-sign red bigger-130'></i></span>",
                    buttons: {
                        "button": {
                            "label": "Hủy",
                            "className": "btn-sm"
                        },
                        "danger": {
                            "label": "Xác nhận xóa",
                            "className": "btn-sm btn-danger",
                            "callback": function() {
                                $("#form").submit()
                            }
                        },
                    }
                });
            });
        });


        <?php if($errors->any()): ?>
            $('#modal-form').modal('show');
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error('<?php echo e($error); ?>', 'Có lỗi xảy ra', {
                    timeOut: 3000
                });
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if(Session::has('themMoi')): ?>
            toastr.success("<?php echo e(Session::get('themMoi')); ?>", "Thành công", {
                timeOut: 3000
            });
        <?php endif; ?>
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/LoaiSanPham/LoaiSanPham-index.blade.php ENDPATH**/ ?>