<div id="showLoaiSanPham" class="modal" tabindex="-1" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">{{ $titleModel }}</h4>
            </div>

            <div class="modal-body overflow-visible">
                <form class="form-horizontal" role="form" action="{{ $routeUrl }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field($method) }}
                    <div class="row">
                        <div class="col-xs-12 col-sm-7">
                            <div class="form-group">
                                <label>Tên loại</label>
                                @if ($errors->has('TenLoai'))
                                    <i class="icon-remove bigger-110 red"> {{ $errors->first('TenLoai') }}</i>
                                @endif

                                <div>
                                    <div class="input-group">
                                        <span class="input-group-addon green">
                                            <i class="icon-coffee"></i>
                                        </span>
                                        <textarea class="autosize-transition form-control" placeholder="Nhập tên loại sản phẩm" name="TenLoai">{{ $loaiSanPham->TenLoai ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                @if ($errors->has('MoTa'))
                                    <i class="icon-remove bigger-110 red"> {{ $errors->first('MoTa') }}</i>
                                @endif

                                <div>
                                    <div class="input-group">
                                        <span class="input-group-addon blue">
                                            <i class="icon-edit"></i>
                                        </span>

                                        <textarea class="autosize-transition form-control" placeholder="Nhập mô tả" name="MoTa">{{ $loaiSanPham->MoTa ?? '' }}</textarea>
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
                                            {{ App\Http\Controllers\Admin\LoaiSanPhamController::showSelectOption($lstLoaiSanPham) }}
                                        </select>
                                    </div>
                                </div>
                                @if ($errors->has('parent_id'))
                                    <i class="icon-remove bigger-110 red"> {{ $errors->first('parent_id') }}</i>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Icon ?</label>

                                <div>
                                    <div class="input-group">
                                        <span id="loaiSanPhamIconSpan" class="input-group-addon green">
                                            <i class="icon-sort-by-attributes"></i>
                                        </span>

                                        <select class="chosen-select" data-placeholder="" name="Icon" id="loaiSanPhamIcon"
                                            onchange='javascript:{
                                            var selectedJson = $("#loaiSanPhamIcon").val();
                                            var json=JSON.parse(selectedJson);
                                            $("#loaiSanPhamIconSpan").html(json.iconHtml);
                                            }'>
                                            {{-- vai` dong` query nen viet chung luon cho le --}}
                                            <option value="">&nbsp;</option>
                                            @foreach ($icons as $icon)
                                                <option class='material-icons md-36' value="{{ json_encode($icon) }}">
                                                    {!! $icon['iconHtml'] !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if ($errors->has('Icon'))
                                    <i class="icon-remove bigger-110 red"> {{ $errors->first('Icon') }}</i>
                                @endif
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
