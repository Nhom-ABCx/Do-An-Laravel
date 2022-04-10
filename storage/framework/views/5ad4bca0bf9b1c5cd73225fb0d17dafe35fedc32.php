<?php $__env->startSection('title', 'QL Sản phẩm'); ?>

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
                    <a href="<?php echo e(route('Home.index')); ?>">Home</a>
                </li>
                <?php if(URL::current() == route('SanPham.DaXoa')): ?>
                    <li>
                        <a href="<?php echo e(route('SanPham.index')); ?>">Quản lý sản phẩm</a>
                    </li>
                    <li class="active">Đã xóa</li>
                <?php else: ?>
                    <li class="active">Quản lý sản phẩm</li>
                <?php endif; ?>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h3 class="header smaller lighter blue">Quản lý sản phẩm</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main">
                                <a href="#" role="button" class="btn btn-success">
                                    <i class="icon-plus"></i>
                                    Thêm sản phẩm
                                </a>
                                <?php if(URL::current() == route('SanPham.DaXoa')): ?>
                                <?php else: ?>
                                    <a href="<?php echo e(route('SanPham.DaXoa')); ?>" class="btn btn-inverse">
                                        <i class="icon-trash"></i>
                                        Sản phẩm đã xóa
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>

                    <div class="table-header">
                        Bảng sản phẩm
                        <form class="form-inline" action="<?php echo e(URL::current() == route('SanPham.DaXoa') ? route('SanPham.DaXoa') : route('SanPham.index')); ?>" method="get">
                            <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Nhập tên" title="Tìm kiếm theo tên" data-placement="bottom" value="<?php echo e($request['TenSanPham']); ?>"
                                name="TenSanPham" />

                            <label for=""> Hãng sãn xuất: </label>
                            <select class="width-10 chosen-select" id="form-field-select-4" name="HangSanXuatId">
                                <option value="">Tất cả</option>
                                <?php $__currentLoopData = $lstHangSanXuat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" <?php if($item->id == $request['HangSanXuatId']): ?> selected <?php endif; ?>>
                                        <?php echo e($item->TenHangSanXuat); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <label for=""> Loại sản phẩm: </label>
                            <select class="width-10 chosen-select" id="form-field-select-4" name="LoaiSanPhamId">
                                <option value="">Tất cả</option>
                                <?php $__currentLoopData = $lstLoaiSanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" <?php if($item->id == $request['LoaiSanPhamId']): ?> selected <?php endif; ?>>
                                        <?php echo e($item->TenLoai); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <?php if(URL::current() == route('SanPham.DaXoa')): ?>
                            <?php else: ?>
                                <label for=""> Trạng thái: </label>
                                <select class="width-10 chosen-select" id="form-field-select-4" name="TrangThai">
                                    <option value="">Tất cả</option>
                                    <option value="0" <?php if('0' == $request['TrangThai']): ?> selected <?php endif; ?>>
                                        Ẩn
                                    </option>
                                    <option value="1" <?php if('1' == $request['TrangThai']): ?> selected <?php endif; ?>>
                                        Đang bán
                                    </option>
                                </select>
                            <?php endif; ?>

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
                                    <th class="center"><i class="icon-adn"></i>Id</th>
                                    <th><i class="icon-picture"></i>Hình ảnh</th>
                                    <th><i class="icon-align-left"></i>Tên sản phẩm</th>
                                    <th><i class="icon-file-text-alt"></i>Thuộc tính</th>
                                    <th><i class="icon-bar-chart"></i>Tổng SL tồn</th>
                                    <th><i class="icon-bar-chart"></i>Lượt mua</th>
                                    <th><i class="icon-apple"></i>Hãng sãn xuất</th>
                                    <th><i class="icon-android"></i>Loại sản phẩm</th>
                                    <th><i class="icon-exclamation-sign"></i>Trạng thái</th>
                                    <th><i class="icon-time bigger-110 hidden-480"></i>Ngày thêm</th>
                                    <th><i class="icon-time bigger-110 hidden-480"></i>Ngày sửa</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $sanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="center"><?php echo e($item->id); ?></td>
                                        <td style="width: 150px">
                                            <?php $__currentLoopData = $item->HinhAnh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hinhAnh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <img src='<?php echo e($hinhAnh->HinhAnh); ?>' width='50' height='50'>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><?php echo e($item->TenSanPham); ?></td>
                                        <td>
                                            <?php $__currentLoopData = $item->ThuocTinhToHop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thuocTinh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <p><i class=" icon-asterisk smaller-75 green"></i> <?php echo e($thuocTinh); ?></p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><?php echo e($item->tongSoLuongTon()); ?></td>
                                        <td><?php echo e($item->LuotMua); ?></td>
                                        <td><?php echo e($item->HangSanXuat->TenHangSanXuat); ?></td>
                                        <td><?php echo e($item->LoaiSanPham->TenLoai); ?></td>
                                        <td>
                                            <?php if($item->TrangThai): ?>
                                                <span class="label label-success arrowed-in arrowed-in-right">Đang bán</span>
                                            <?php else: ?>
                                                <span class="label arrowed">Ẩn</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->updated_at); ?></td>
                                        <?php if(URL::current() == route('SanPham.DaXoa')): ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <form action="<?php echo e(route('SanPham.KhoiPhuc', $item->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        
                                                        <button type="submit" class="btn-link blue" data-rel="tooltip" title="Khôi phục" data-placement="bottom"><i
                                                                class="icon-undo bigger-130"></i></button>
                                                    </form>

                                                    <form id="form" action="<?php echo e(route('SanPham.XoaVinhVien', $item->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="button" class="btn-link red bootbox-options" data-rel="tooltip" title="Xóa vĩnh viễn" data-placement="bottom"><i
                                                                class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <form action="<?php echo e(route('SanPham.KhoiPhuc', $item->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    
                                                                    <button type="submit" class="tooltip-error btn-link blue" data-rel="tooltip" title="Khôi phục"><i
                                                                            class="icon-undo bigger-120"></i></button>
                                                                </form>
                                                            </li>

                                                            <li>
                                                                <form id="form" action="<?php echo e(route('SanPham.XoaVinhVien', $item->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="button" class="tooltip-error btn-link red bootbox-options" data-rel="tooltip" title="Xóa vĩnh viễn"><i
                                                                            class="icon-trash bigger-130"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <span class="dropdown-hover dropup dropdown-pink">
                                                        <i class="icon-cog green bigger-200" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:void(0)" onclick="capnhatTrangThaiSanPham(<?php echo e($item->id); ?>,0)" tabindex="-1">Ẩn</a>
                                                                <a href="javascript:void(0)" onclick="capnhatTrangThaiSanPham(<?php echo e($item->id); ?>,1)" tabindex="-1">Đang bán</a>
                                                            </li>
                                                        </ul>
                                                    </span>

                                                    <a href="javascript:void(0)" onclick="showSanPham(<?php echo e($item->id); ?>)" role="button" data-toggle="modal" class="tooltip-info" data-rel="tooltip"
                                                        title="Xem chi tiết">
                                                        <span class="blue">
                                                            <i class="icon-zoom-in bigger-120"></i>
                                                        </span>
                                                    </a>

                                                    <a class="green" href="<?php echo e(route('SanPham.edit', $item)); ?>" data-rel="tooltip" title="Chỉnh sửa" data-placement="top">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>

                                                    <form action="<?php echo e(route('SanPham.destroy', $item)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn-link red" data-rel="tooltip" title="Xóa"><i class="icon-trash bigger-130"></i></button>
                                                    </form>
                                                    
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <span class="dropdown-hover dropup dropdown-pink">
                                                                    <i class="icon-cog green bigger-200" data-rel="tooltip" title="Chỉnh sửa trạng thái" data-placement="bottom"></i>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="javascript:void(0)" onclick="capnhatTrangThaiSanPham(<?php echo e($item->id); ?>,0)" tabindex="-1">Ẩn</a>
                                                                            <a href="javascript:void(0)" onclick="capnhatTrangThaiSanPham(<?php echo e($item->id); ?>,1)" tabindex="-1">Đang bán</a>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" onclick="showSanPham(<?php echo e($item->id); ?>)" role="button" data-toggle="modal" class="tooltip-info"
                                                                    data-rel="tooltip" title="Xem chi tiết">
                                                                    <span class="blue">
                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="<?php echo e(route('SanPham.edit', $item)); ?>" class="tooltip-success" data-rel="tooltip" title="Chỉnh sửa">
                                                                    <span class="green">
                                                                        <i class="icon-edit bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <form action="<?php echo e(route('SanPham.destroy', $item)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="submit" class="tooltip-error btn-link red" data-rel="tooltip" title="Xóa"><i class="icon-trash bigger-120"></i></button>
                                                                </form>
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

            <div id="showModal"></div>
        </div><!-- /.main-content -->

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scriptThisPage'); ?>
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
        
        <script src="/storage/assets/js/bootbox.min.js"></script>
        

        <!-- inline scripts related to this page -->
        
        <script type="text/javascript">
            jQuery(function($) {
                var oTable1 = $('#sample-table-2').dataTable({
                    "aoColumns": [
                        null, {
                            "bSortable": false
                        }, //hinh anh
                        null,
                        {
                            "bSortable": false
                        }, //mota
                        null,
                        null, null, null, null, null, null,
                        {
                            "bSortable": false
                        }
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
        </script>
        

        <?php echo $__env->make('Admin.SanPham.script.SanPham-show-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <script type="text/javascript">
            //
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            function capnhatTrangThaiSanPham(sanPhamId, trangThai) {
                console.log(trangThai);
                var url = "<?php echo e(route('SanPham.CapNhatTrangThai', ':sanPham')); ?>";
                url = url.replace(':sanPham', sanPhamId);

                $.ajax({
                    //gui di voi phuong thuc'
                    method: "PUT",
                    //url = duong dan cua form
                    url: url,
                    //du lieu gui di
                    data: JSON.stringify({
                        "TrangThai": trangThai
                    }),
                    //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
                    processData: false,
                    // Kiểu nội dung của dữ liệu được gửi lên server.minh gui len la json nen de la json
                    contentType: "application/json; charset=utf-8",
                    //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(response) {
                        location.reload();
                        // toastr.success("Cập nhật thành công", 'Thành công', {
                        //     timeOut: 3000
                        // });
                    },
                    error: function(response) {
                        console.log("request lỗi");

                        $.each(response.responseJSON, function(key, val) {
                            toastr.error(val, 'Có lỗi xảy ra', {
                                timeOut: 3000
                            });
                        });
                    },
                });
            }
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DDDD\WEB\Laravel\Do-An-Laravel\resources\views/Admin/SanPham/SanPham-index.blade.php ENDPATH**/ ?>