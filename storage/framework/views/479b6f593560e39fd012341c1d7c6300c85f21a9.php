<div id="showLoaiSanPham" class="modal" tabindex="-1" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger"><?php echo e($titleModel); ?></h4>
            </div>

            <div class="modal-body overflow-visible">
                <form class="form-horizontal" role="form" action="<?php echo e($routeUrl); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field($method)); ?>

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
                                        <textarea class="autosize-transition form-control" placeholder="Nhập tên loại sản phẩm" name="TenLoai"><?php echo e($loaiSanPham->TenLoai ?? ''); ?></textarea>
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

                                        <textarea class="autosize-transition form-control" placeholder="Nhập mô tả" name="MoTa"><?php echo e($loaiSanPham->MoTa ?? ''); ?></textarea>
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
                                            <?php echo e(App\Http\Controllers\Admin\LoaiSanPhamController::showSelectOption($lstLoaiSanPham, $loaiSanPham->parent_id ?? null)); ?>

                                        </select>
                                    </div>
                                </div>
                                <?php if($errors->has('parent_id')): ?>
                                    <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('parent_id')); ?></i>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label>Icon ?</label>

                                <div>
                                    <div class="input-group">
                                        <span id="loaiSanPhamIconSpan" class="input-group-addon green">
                                            <?php if(empty($loaiSanPham->Icon)): ?>
                                                <i class="icon-sort-by-attributes"></i>
                                            <?php else: ?>
                                                <?php echo $loaiSanPham->Icon['iconHtml']; ?>

                                            <?php endif; ?>
                                        </span>

                                        <select class="chosen-select" data-placeholder="" name="Icon" id="loaiSanPhamIcon"
                                            onchange='javascript:{
                                            var selectedJson = $("#loaiSanPhamIcon").val();
                                            var json=JSON.parse(selectedJson);
                                            $("#loaiSanPhamIconSpan").html(json.iconHtml);
                                            }'>
                                            
                                            <option value="">&nbsp;</option>
                                            <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option class='material-icons md-36' value="<?php echo e(json_encode($icon)); ?>" <?php if(($loaiSanPham->Icon ?? []) == $icon): ?> selected <?php endif; ?>>
                                                    <?php echo $icon['iconHtml']; ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <?php if($errors->has('Icon')): ?>
                                    <i class="icon-remove bigger-110 red"> <?php echo e($errors->first('Icon')); ?></i>
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


<script src="/storage/assets/js/chosen.jquery.min.js"></script>
<script type="text/javascript">
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
    $('#showLoaiSanPham').on('shown.bs.modal', function() {
        $(this).find('.chosen-container').each(function() {
            $(this).find('a:first-child').css('width', '210px');
            $(this).find('.chosen-drop').css('width', '210px');
            $(this).find('.chosen-search input').css('width', '200px');
        });
    });
</script>
<?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/LoaiSanPham/LoaiSanPham-show-model.blade.php ENDPATH**/ ?>