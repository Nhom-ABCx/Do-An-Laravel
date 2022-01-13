


<?php $__env->startSection('title', 'ChuongTrinh-Khuyến Mãi'); ?>
<?php $__env->startSection('headThisPage'); ?>

    <link rel="stylesheet" href="/storage/assets/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="/storage/assets/css/jquery.gritter.css" />

    <link rel="stylesheet" href="/storage/assets/css/chosen.css" />
    <link rel="stylesheet" href="/storage/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/storage/assets/css/colorpicker.css" />
    <!-- inline styles related to this page -->
    <style>
        .spinner-preview {
            width: 100px;
            height: 100px;
            text-align: center;
            margin-top: 60px;
        }

        .dropdown-preview {
            margin: 0 5px;
            display: inline-block;
        }

        .dropdown-preview>.dropdown-menu {
            display: block;
            position: static;
            margin-bottom: 5px;
        }

    </style>
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
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Tables</a>
                </li>
                <li class="active">Chương Trình_Khuyến mãi</li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                            autocomplete="off" />
                        <i class="icon-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- #nav-search -->
        </div>
        <div class="col-xs-12">
            <h3 class="header smaller lighter blue">Chương trình khuyến mãi</h3>

            <div class="pull">
                <a type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i
                        class="fa fa-plus"></i>
                    Thêm chương trình khuyến mãi
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">
                                    <div class="widget-header">
                                        <h4>Thêm chương trình khuyến mãi</h4>
                                    </div>
                                </h5>

                            </div>
                            <div class="modal-body">
                                <form action="<?php echo e(route('KhuyenMai.store')); ?>" method="POST" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>
                                    <div class="widget-box">
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <div class="row-fluid">
                                                    <label for="id-date-picker-1">Tên chương trình</label>
                                                </div>
                                                <div class="control-group">
                                                    <div class="row-fluid input-append">
                                                        <textarea name="TenChuongTrinh" rows="4" cols="50">
                                                                                                                                                                                                                                                                                                                                                                             </textarea>
                                                    </div>
                                                    <?php if($errors->has('TenChuongTrinh')): ?>
                                                        <i class="icon-remove bigger-110 red">
                                                            <?php echo e($errors->first('TenChuongTrinh')); ?></i>
                                                    <?php endif; ?>
                                                </div>
                                                <hr />
                                                <div class="row-fluid">
                                                    <label for="id-date-picker-1">Mô tả</label>
                                                </div>

                                                <div class="control-group">
                                                    <div class="row-fluid input-append">
                                                        <textarea name="MoTa" id="w3review" name="w3review" rows="4"
                                                            cols="50">
                                                                                                                                                                                                                                                                                                                                                                                            </textarea>
                                                    </div>
                                                    <?php if($errors->has('MoTa')): ?>
                                                        <i class="icon-remove bigger-110 red">
                                                            <?php echo e($errors->first('MoTa')); ?></i>
                                                    <?php endif; ?>
                                                </div>
                                                <hr />
                                                <div class="control-group">
                                                    <div class="form-group">
                                                        <label for="id-date-range-picker-1">Ngày bắt đầu</label><br>
                                                        <div class="row">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="icon-calendar bigger-110"></i>
                                                                </span>
                                                                <input class="form-control" type="text"
                                                                    name="date-range-picker" id="id-date-range-picker-1" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <?php if($errors->has('FromDate')): ?>
                                                        <i class="icon-remove bigger-110 red">
                                                            <?php echo e($errors->first('FromDate')); ?></i>
                                                    <?php endif; ?>
                                                </div>
                                                <hr />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-primary">Lưu </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr>

            <div class="table-header">
                Bảng Chương Trình Khuyến mãi
            </div>

            <div class="table-responsive">
                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-align-left"></i>
                                Tên chương trình
                            </th>

                            <th>
                                <i class="fa fa-file-text-o"></i>
                                Mô tả
                            </th>
                            <th>
                                <i class="fa fa-calendar"></i>
                                Ngày bắt đầu
                            </th>
                            <th>
                                <i class="fa fa-calendar-check-o"></i>
                                Ngày kết thúc
                            </th>
                            <th>
                                <i class="fa fa-pencil"></i>
                                created_att
                            </th>
                            <th>
                                <i class="fa fa-check-square-o"></i>
                                updated_at
                            </th>
                            
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $ctkm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->TenChuongTrinh); ?></td>
                                <td><?php echo e($item->MoTa); ?></td>
                                <td><?php echo e($item->FromDate); ?></td>
                                <td><?php echo e($item->ToDate); ?></td>
                                <td><?php echo e($item->created_at); ?></td>
                                <td><?php echo e($item->updated_at); ?></td>
                                

                                <td>
                                    <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                        <a class="blue" href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>

                                        <a class="green" href="<?php echo e(route('KhuyenMai.edit', $item)); ?>">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                        <form action="<?php echo e(route('KhuyenMai.destroy', $item)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn-link red"><i
                                                    class="icon-trash bigger-130"></i></button>
                                        </form>
                                    </div>

                                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                                        <div class="inline position-relative">
                                            <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                data-toggle="dropdown">
                                                <i class="icon-caret-down icon-only bigger-120"></i>
                                            </button>

                                            <ul
                                                class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
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
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- /.main-content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    
    <!-- inline scripts related to this page -->
    <script src="/storage/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/storage/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/storage/assets/js/bootbox.min.js"></script>
    <script src="/storage/assets/js/jquery.easy-pie-chart.min.js"></script>
    <script src="/storage/assets/js/jquery.gritter.min.js"></script>
    <script src="/storage/assets/js/spin.min.js"></script>
    
    <script src="/storage/assets/js/chosen.jquery.min.js"></script>
    <script src="/storage/assets/js/date-time/moment.min.js"></script>
    <script src="/storage/assets/js/date-time/daterangepicker.min.js"></script>
    <script src="/storage/assets/js/jquery.autosize.min.js"></script>
    <script src="/storage/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
    <script src="/storage/assets/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript">
        $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function() {
            $(this).next().focus();
        });
    </script>
    
    <script type="text/javascript">
        jQuery(function($) {
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    $.gritter.add({
                    title: 'Lỗi' ,
                    text: '<?php echo e($error); ?>',
                    class_name: 'gritter-error' + (!$( '#gritter-light').get(0) ?
                    ' gritter-light' : '')
                    });
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            var oTable1 = $('#sample-table-2').dataTable({
                "aoColumns": [
                    null, {
                        "bSortable": false
                    },
                    null, {
                        "bSortable": false
                    },
                    null, null, {
                        "bSortable": false
                    },
                    // {
                    //     "bSortable": false
                    // },
                ]
            });


            $('[data-rel="tooltip"]').tooltip({
                placement: tooltip_placement
            });
            // $('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
            // 		$(this).next().focus();
            // });
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
    </script>
    <script type="text/javascript">
        <?php if(count($errors) > 0): ?>
            $('#exampleModalCenter').modal('show');
        <?php endif; ?>
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tranphuocvinh\laravel\Do-An-Laravel\resources\views/KhuyenMai/KhuyenMai-index.blade.php ENDPATH**/ ?>