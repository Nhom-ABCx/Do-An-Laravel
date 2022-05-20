
<script src="/storage/assets/js/markdown/markdown.min.js"></script>
<script src="/storage/assets/js/markdown/bootstrap-markdown.min.js"></script>
<script src="/storage/assets/js/jquery.hotkeys.min.js"></script>
<script src="/storage/assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="/storage/assets/js/bootbox.min.js"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
    //
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //phan` doan mo ta?
    jQuery(function($) {

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        //$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

        //but we want to change a few buttons colors for the third style
        $('#editor1').ace_wysiwyg({
            toolbar: [
                'font',
                null,
                'fontSize',
                null,
                {
                    name: 'bold',
                    className: 'btn-info'
                },
                {
                    name: 'italic',
                    className: 'btn-info'
                },
                {
                    name: 'strikethrough',
                    className: 'btn-info'
                },
                {
                    name: 'underline',
                    className: 'btn-info'
                },
                null,
                {
                    name: 'insertunorderedlist',
                    className: 'btn-success'
                },
                {
                    name: 'insertorderedlist',
                    className: 'btn-success'
                },
                {
                    name: 'outdent',
                    className: 'btn-purple'
                },
                {
                    name: 'indent',
                    className: 'btn-purple'
                },
                null,
                {
                    name: 'justifyleft',
                    className: 'btn-primary'
                },
                {
                    name: 'justifycenter',
                    className: 'btn-primary'
                },
                {
                    name: 'justifyright',
                    className: 'btn-primary'
                },
                {
                    name: 'justifyfull',
                    className: 'btn-inverse'
                },
                null,
                {
                    name: 'createLink',
                    className: 'btn-pink'
                },
                {
                    name: 'unlink',
                    className: 'btn-pink'
                },
                null,
                {
                    name: 'insertImage',
                    className: 'btn-success'
                },
                null,
                'foreColor',
                null,
                {
                    name: 'undo',
                    className: 'btn-grey'
                },
                {
                    name: 'redo',
                    className: 'btn-grey'
                }
            ],
            'wysiwyg': {
                fileUploadError: showErrorAlert
            }
        });



        $('#editor2').css({
            'height': '200px'
        }).ace_wysiwyg({
            toolbar_place: function(toolbar) {
                return $(this).closest('.widget-box').find('.widget-header').prepend(toolbar).children(0).addClass('inline');
            },
            toolbar: [
                'bold',
                {
                    name: 'italic',
                    title: 'Change Title!',
                    icon: 'icon-leaf'
                },
                'strikethrough',
                null,
                'insertunorderedlist',
                'insertorderedlist',
                null,
                'justifyleft',
                'justifycenter',
                'justifyright'
            ],
            speech_button: false
        });


        $('[data-toggle="buttons"] .btn').on('click', function(e) {
            var target = $(this).find('input[type=radio]');
            var which = parseInt(target.val());
            var toolbar = $('#editor1').prev().get(0);
            if (which == 1 || which == 2 || which == 3) {
                toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g, '');
                if (which == 1) $(toolbar).addClass('wysiwyg-style1');
                else if (which == 2) $(toolbar).addClass('wysiwyg-style2');
            }
        });




        //Add Image Resize Functionality to Chrome and Safari
        //webkit browsers don't have image resize functionality when content is editable
        //so let's add something using jQuery UI resizable
        //another option would be opening a dialog for user to enter dimensions.
        if (typeof jQuery.ui !== 'undefined' && /applewebkit/.test(navigator.userAgent.toLowerCase())) {

            var lastResizableImg = null;

            function destroyResizable() {
                if (lastResizableImg == null) return;
                lastResizableImg.resizable("destroy");
                lastResizableImg.removeData('resizable');
                lastResizableImg = null;
            }

            var enableImageResize = function() {
                $('.wysiwyg-editor')
                    .on('mousedown', function(e) {
                        var target = $(e.target);
                        if (e.target instanceof HTMLImageElement) {
                            if (!target.data('resizable')) {
                                target.resizable({
                                    aspectRatio: e.target.width / e.target.height,
                                });
                                target.data('resizable', true);

                                if (lastResizableImg != null) { //disable previous resizable image
                                    lastResizableImg.resizable("destroy");
                                    lastResizableImg.removeData('resizable');
                                }
                                lastResizableImg = target;
                            }
                        }
                    })
                    .on('click', function(e) {
                        if (lastResizableImg != null && !(e.target instanceof HTMLImageElement)) {
                            destroyResizable();
                        }
                    })
                    .on('keydown', function() {
                        destroyResizable();
                    });
            }

            enableImageResize();
        }


    });

    //phần của trang...
    jQuery(function($) {
        $(".chosen-select").chosen();
        $('#chosen-multiple-style').on('click', function(e) {
            var target = $(e.target).find('input[type=radio]');
            var which = parseInt(target.val());
            if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
            else $('#form-field-select-4').removeClass('tag-input-style');
        });


        $('[data-rel=tooltip]').tooltip({
            container: 'body'
        });
        $('[data-rel=popover]').popover({
            container: 'body'
        });

        $('textarea[class*=autosize]').autosize({
            append: "\n"
        });
        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        $.mask.definitions['~'] = '[+-]';
        $('.input-mask-date').mask('99/99/9999');
        $('.input-mask-phone').mask('(999) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999", {
            placeholder: " ",
            completed: function() {
                alert("You typed the following: " + this.val());
            }
        });



        $("#input-size-slider").css('width', '200px').slider({
            value: 1,
            range: "min",
            min: 1,
            max: 8,
            step: 1,
            slide: function(event, ui) {
                var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small',
                    'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'
                ];
                var val = parseInt(ui.value);
                $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
            }
        });

        $("#input-span-slider").slider({
            value: 1,
            range: "min",
            min: 1,
            max: 12,
            step: 1,
            slide: function(event, ui) {
                var val = parseInt(ui.value);
                $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
            }
        });


        $("#slider-range").css('height', '200px').slider({
            orientation: "vertical",
            range: true,
            min: 0,
            max: 100,
            values: [17, 67],
            slide: function(event, ui) {
                var val = ui.values[$(ui.handle).index() - 1] + "";

                if (!ui.handle.firstChild) {
                    $(ui.handle).append(
                        "<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>"
                    );
                }
                $(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('a').on('blur', function() {
            $(this.firstChild).hide();
        });

        $("#slider-range-max").slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2
        });

        $("#eq > span").css({
            width: '90%',
            'float': 'left',
            margin: '15px'
        }).each(function() {
            // read initial values from markup and remove that
            var value = parseInt($(this).text(), 10);
            $(this).empty().slider({
                value: value,
                range: "min",
                animate: true

            });
        });


        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file: 'No File ...',
            btn_choose: 'Choose',
            btn_change: 'Change',
            droppable: false,
            onchange: null,
            thumbnail: false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });

        $('input[name=FileExcel]').ace_file_input({
            style: 'well',
            btn_choose: 'Kéo thả file vào đây hoặc click để chọn',
            btn_change: null,
            no_icon: 'icon-cloud-upload',
            droppable: true,
            thumbnail: 'large'
        });
        $('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Kéo thả hình vào đây hoặc click để chọn',
            btn_change: null,
            no_icon: 'icon-picture',
            droppable: true,
            thumbnail: 'large'
        })

        _valueGN = 10000;
        _valueGB = 10000;
        $('#spinner1').ace_spinner({
            value: _valueGN,
            min: 0,
            max: 1000000000,
            step: 10000,
            touch_spinner: true,
            icon_up: 'icon-caret-up',
            icon_down: 'icon-caret-down'
        });
        $('#spinner2').ace_spinner({
            value: _valueGB,
            min: 0,
            max: 1000000000,
            step: 10000,
            touch_spinner: true,
            icon_up: 'icon-caret-up',
            icon_down: 'icon-caret-down'
        });



        $('.date-picker').datepicker({
            autoclose: true
        }).next().on(ace.click_event, function() {
            $(this).prev().focus();
        });
        $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function() {
            $(this).next().focus();
        });

        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false
        }).next().on(ace.click_event, function() {
            $(this).prev().focus();
        });

        $('#colorpicker1').colorpicker();
        $('#simple-colorpicker-1').ace_colorpicker();


        $(".knob").knob();


        //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
        var tag_input = $('#form-field-tags');
        if (!(/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))) {
            tag_input.tag({
                placeholder: tag_input.attr('placeholder'),
                //enable typeahead by specifying the source array
                source: ace.variable_US_STATES, //defined in ace.js >> ace.enable_search_ahead
            });
        } else {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') +
                '" rows="3">' + tag_input.val() + '</textarea>').remove();
            //$('#form-field-tags').autosize({append: "\n"});
        }

        /////////
        $('#modal-form input[type=file]').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'icon-cloud-upload',
            droppable: true,
            thumbnail: 'large'
        })

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
        /**
        //or you can activate the chosen plugin after modal is shown
        //this way select element becomes visible with dimensions and chosen works as expected
        $('#modal-form').on('shown', function () {
            $(this).find('.modal-chosen').chosen();
        })
        */

        //
        $('table th input:checkbox').on('click', function() {
            var that = this;
            $(this).closest('table').find('tr > td:nth-last-child(2) input:checkbox')
                .each(function(i) {
                    // this.checked = that.checked;
                    // $(this).closest('tr').toggleClass('selected');

                    //khi thay doi? thi` thay doi het du lieu datatable cua td -> khien no render lai nen khoi? can` 2 dong` dau`

                    let selectorTd = $(this).closest('td');
                    var table = $('#BienTheSanPham').closest('table').DataTable();
                    table.cell(selectorTd).data(that.checked);
                });
        });
    });

    //khoi tao bang?
    //lay' ra het tat' ca? input ThuocTinhToHop
    let output = [];
    $('input[name^=ThuocTinhToHop]').map(function() {
        //lay' ra input co' thuoctinh thuoc ve` input do'
        let key = $(this).attr("ThuocTinh");
        let value = $(this).val();
        //day? vao` mang? tam
        output.push({
            key: key,
            value: value
        });
    });

    //nhom'-tach' ket qua? lai
    result = output.reduce(function(r, a) {
        r[a.key] = r[a.key] || [];
        r[a.key].push(a);
        return r;
    }, Object.create(null));
    //

    $('#BienTheSanPham').dataTable({
        autoWidth: false, //ko co cai nay` la` no' thu nho? lai max xau'
        ajax: {
            <?php if(URL::current() == route('SanPham.create')): ?>
                url: "<?php echo e(route('SanPham.CrossJoin')); ?>",
            <?php else: ?>
                url: "<?php echo e(route('SanPham.CrossJoin', $sanPham)); ?>",
            <?php endif; ?>
            method: 'POST',
            //gui di voi cai form
            data: function(d) {
                return JSON.stringify(result);
            },
            //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
            processData: false,
            dataSrc: "", //lay vi tri la rong~ ko phai mac dinh "data"=>[...]
            //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
            dataType: "json",
            // Kiểu nội dung của dữ liệu được gửi lên server.minh gui len la json nen de la json
            contentType: "application/json; charset=utf-8",
        },
        //do du lieu vao cot
        columns: [{
                data: null,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                className: "center",
                searchable: false
            },
            {
                data: 'BienThe',
            },
            {
                data: 'SoLuongTon',
                className: "pink",
                render: DataTable.render.number(',', '.'),
            },
            {
                data: 'GiaBan',
                className: "pink",
                render: DataTable.render.number(',', '.'),
            },
            {
                //render tool
                data: 'TrangThai',
                render: function(data, type, row, meta) {
                    let check = "";
                    if (data)
                        check = "checked";
                    return `<label class="pull-right inline">
                                <input id="gritter-light-2" ` + check + ` type="checkbox" class="ace ace-switch ace-switch-6" value="1" onchange="thayDoiTrangThai_Datatable($(this).parent().parent(),this.checked)">
                                <span class="lbl"></span>
                            </label>`;
                },
                orderable: false,
                searchable: false
            },
            {
                //render tool
                data: null,
                render: function(data, type, row, meta) {
                    return `<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="javascript:void(0)" onclick="showSanPham(` + data + `)" role="button" data-toggle="modal" data-rel="tooltip" title="Xem chi tiết">
                                    <i class="icon-zoom-in bigger-130"></i>
                                </a>

                            </div>

                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                <div class="inline position-relative">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="javascript:void(0)" onclick="showSanPham(` + data + `)" role="button" data-toggle="modal" class="tooltip-info" data-rel="tooltip" title="Xem chi tiết">
                                                <span class="blue">
                                                    <i class="icon-zoom-in bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>`;
                },
                orderable: false,
                searchable: false
            },
        ],
        createdRow: function(row, data, rowIndex) {
            //khi tao moi 1 row, them cac thuoc tinh vao cac td
            $.each($('td', row), function(colIndex) {
                if (colIndex == 2) {
                    $(this).attr('class', 'SoLuongTon pink');
                    $(this).attr('data-name', 'SoLuongTon');
                    $(this).attr('data-pk', rowIndex);
                }
                if (colIndex == 3) {
                    $(this).attr('class', 'GiaBan pink');
                    $(this).attr('data-name', 'GiaBan');
                    $(this).attr('data-pk', rowIndex);
                }
            });
        },
    });


    $('#BienTheSanPham').editable({
        title: 'Nhập giá',
        //url: '#',
        container: 'body',
        selector: 'td.SoLuongTon',
        type: 'text',
        //send: 'always',
        ajaxOptions: {
            //gui len voi phuong thuc, mac dinh la POST
            type: "PUT",
            //mong muon kieu du lieu tra ve tu sever
            dataType: 'json'
        },
        display: function(value) {
            //khi nhan' vao` thi` display no' moi' chay thi` phai?
            //do luc' dau` datatable hien thi theo numberFormat "1,000,000" nen loai bo? het dau', cho no' thanh` so'
            let stringValue = value.replace(/[,]/g, "");

            //khi nhan' thay doi? thi` format lai number
            let soLuongTonFormat = new Intl.NumberFormat().format(stringValue);
            $(this).text(soLuongTonFormat);
        },
        //name: 'SoLuong',
        validate: function(value) {
            if ($.trim(value) == '')
                return 'Không được rỗng';
            if ($.isNumeric(value) == '')
                return 'Nhập số';
        },
        success: function(response, newValue) {

            var table = $('#BienTheSanPham').closest('table').DataTable();
            table.cell(this).data(newValue);

            // if (response != null) {
            //     toastr.success("Cập nhật thành công", 'Thành công', {
            //         timeOut: 3000
            //     });
            // } else {
            //     toastr.warning("Có gì đó xảy ra", 'Cảnh báo', {
            //         timeOut: 3000
            //     });
            // }
        },
        error: function(response) {
            // console.log("request lỗi");

            // $.each(response.responseJSON, function(key, val) {
            //     toastr.error(val[0], 'Có lỗi xảy ra', {
            //         timeOut: 3000
            //     });
            // });
        },
    });

    $('#BienTheSanPham').editable({
        title: 'Nhập giá',
        //url: '#',
        container: 'body',
        selector: 'td.GiaBan',
        type: 'text',
        //send: 'always',
        ajaxOptions: {
            //gui len voi phuong thuc, mac dinh la POST
            type: "PUT",
            //mong muon kieu du lieu tra ve tu sever
            dataType: 'json'
        },
        display: function(value) {
            //khi nhan' vao` thi` display no' moi' chay thi` phai?
            //do luc' dau` datatable hien thi theo numberFormat "1,000,000" nen loai bo? het dau', cho no' thanh` so'
            let stringValue = value.replace(/[,]/g, "");

            //khi nhan' thay doi? thi` format lai number
            let giaBanFormat = new Intl.NumberFormat().format(stringValue);
            $(this).text(giaBanFormat);
        },
        //name: 'SoLuong',
        validate: function(value) {
            if ($.trim(value) == '')
                return 'Không được rỗng';
            if ($.isNumeric(value) == '')
                return 'Nhập số';
        },
        success: function(response, newValue) {

            var table = $('#BienTheSanPham').closest('table').DataTable();
            table.cell(this).data(newValue);

            // if (response != null) {
            //     toastr.success("Cập nhật thành công", 'Thành công', {
            //         timeOut: 3000
            //     });
            // } else {
            //     toastr.warning("Có gì đó xảy ra", 'Cảnh báo', {
            //         timeOut: 3000
            //     });
            // }
        },
        error: function(response) {
            // console.log("request lỗi");

            // $.each(response.responseJSON, function(key, val) {
            //     toastr.error(val[0], 'Có lỗi xảy ra', {
            //         timeOut: 3000
            //     });
            // });
        },
    });

    $('#accordion').on('change', function(e) {

        reloadDatatableBienThe();
    });


    //ajax
    $('#submitForm').on('submit', function(e) {
        //ngan chan form gui di
        e.preventDefault();
        let form = this;

        let data = new FormData(form);
        //truoc khi gui di thi` set value textarea, ko dat trong ham`beforeSend cua ajax dc
        let moTa = $(form).find('#editor1').html();
        data.append("MoTa", moTa);

        //gui het du lieu cua datatable sang controller luon
        let datatable = $('#BienTheSanPham').DataTable().rows().data().toArray();
        data.append("Datatable", JSON.stringify(datatable));


        $.ajax({
            //gui di voi phuong thuc' cua Form
            method: $(form).attr('method'),
            //url = duong dan cua form
            url: $(form).attr('action'),
            //du lieu gui di
            data: data,
            //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
            processData: false,
            // Kiểu nội dung của dữ liệu được gửi lên server. minh gui len la FormData nen de false
            contentType: false,
            //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
            //dataType: 'json',
            //truoc khi gui di thi thuc hien gi do', o day chinh loi~ = rong~
            beforeSend: function() {
                $(form).find('span.error-text').empty();
            },
            success: function(response) {
                window.location.href = response;

                toastr.success("Cập nhật thành công", 'Thành công', {
                    timeOut: 3000
                });
            },
            error: function(response) {
                console.log("request lỗi");

                $.each(response.responseJSON, function(key, val) {
                    $(form).find('span.' + key + '-error').html('<i class="icon-remove bigger-110 red">' + val[0] + '</i>');
                    toastr.error(val[0], 'Có lỗi xảy ra', {
                        timeOut: 3000
                    });
                });
            },
        });
    });
</script>



<script type="text/javascript">
    function reloadDatatableBienThe() {
        //lay' ra het tat' ca? input ThuocTinhToHop
        let output = [];

        $('input[name^=ThuocTinhToHop]').map(function() {
            //lay' ra input co' thuoctinh thuoc ve` input do'
            let key = $(this).attr("ThuocTinh");
            let value = $(this).val();
            //day? vao` mang? tam
            output.push({
                key: key,
                value: value
            });
        });

        if (output.length === 0) {
            $('#BienTheSanPham').DataTable().clear().draw();
            return;
        }

        //nhom'-tach' ket qua? lai
        result = output.reduce(function(r, a) {
            r[a.key] = r[a.key] || [];
            r[a.key].push(a);
            return r;
        }, Object.create(null));


        //reload lai datatable
        $('#BienTheSanPham').DataTable().ajax.reload();
    }

    function inputTenThuocTinhToHopChange(index) {
        //khi thay doi ten cua thuoc tinh to? hop thi` cap nhat lai cai the?
        let txtTenThuocTinh = $('#txtTenThuocTinh-' + index).val();
        $('#tenthuoctinh-' + index).html(txtTenThuocTinh);
        //lay thay doi thuoctinh input ben trong
        $('input[name^="ThuocTinhToHop[' + index + ']"]').each(function() {
            $(this).attr("ThuocTinh", txtTenThuocTinh);
        });
    }

    function inputThuocTinhToHopChange(index) {
        //khi thay doi ten cua thuoc tinh to? hop thi` cap nhat lai cai the?
        let tag = $('a[href="#collapse' + index + '"] span#lstThuocTinh');
        let html = '';
        $('input[name^="ThuocTinhToHop[' + index + ']"]').each(function() {
            //ngua ngua ve~ mau`
            var colors = ['grey', 'success', 'warning', 'danger', 'info', 'purple', 'inverse', 'pink', 'yellow'];
            var color = colors[Math.floor(Math.random() * colors.length)];

            //noi chuoi~
            html += `<span class="badge badge-` + color + `">` + $(this).val() + `</span>`;
        });
        tag.html(html);
    }

    function themThuocTinhKhac(selectThis) {
        //cai nut' them thuoc tinh' khac'
        //lay' ra so' luong dong` cua the div hien tai
        let countDiv = $("#accordion div.panel-default").length;

        //validate
        let divTruocDo = countDiv - 1;
        let txtTenThuocTinh = $('#txtTenThuocTinh-' + divTruocDo).val();
        let txtGiaTriThuocTinhDauTien = $('input[name^="ThuocTinhToHop[' + divTruocDo + ']"]').first().val();
        if (txtTenThuocTinh == '' || txtGiaTriThuocTinhDauTien == '') {
            toastr.error("Thuộc tính mới không được bỏ trống !", 'Có lỗi xảy ra', {
                timeOut: 3000
            });
        } else {

            let txtTenThuocTinh = $('#txtTenThuocTinh-' + countDiv).val();

            $(`<div class="panel panel-default" id="xoa-thuoctinh-khac-` + countDiv +
                `"> <div class="panel-heading"> <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse` +
                countDiv +
                `"> <i class="icon-angle-down bigger-110" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i> &nbsp; <i class=" icon-asterisk smaller-75 green"></i> <label id="tenthuoctinh-` +
                countDiv + `"> Thuộc tính mới </label> <label style="width: 20px"></label> <span id="lstThuocTinh"></span> </a> </h4> </div> <div class="panel-collapse in" id="collapse` +
                countDiv +
                `"> <div class="panel-body"> <div class="form-group"> <label>Tên thuộc tính</label> <div> <div class="input-group"> <input type="text" class="autosize-transition form-control" placeholder="vd: Size/Color" name="ThuocTinh[]" style="font-weight: bold;" id="txtTenThuocTinh-` +
                countDiv + `" onchange="inputTenThuocTinhToHopChange(` +
                countDiv +
                `)"/> <a href="javascript:void(0)" onclick="xoaThuocTinhKhac(` + countDiv +
                `)" class="input-group-addon red" style="background-color:transparent"> <i class="icon-trash"></i> </a> </div> </div> </div> <div class="space-4"></div> <div class="form-group"> <label>Giá trị thuộc tính</label> <div id="form-thuoctinh-tohop-` +
                countDiv +
                `"> <div class="input-group" style="margin-bottom: 5px"> <input type="text" class="autosize-transition form-control" placeholder="vd: Red/Green/Blue" name="ThuocTinhToHop[` +
                countDiv + `][]" ThuocTinh="` + txtTenThuocTinh + `" style="font-weight: bold;" onchange="inputThuocTinhToHopChange(` + countDiv +
                `)" /> <a href="javascript:void(0)" id="xoa-thuoctinh-tohop-` + countDiv +
                `-0" onclick="xoaTheInputBienThe(` + countDiv +
                `,0)" class="input-group-addon red" style="background-color:transparent"> <i class="icon-trash"></i> </a> </div> </div> <div class="input-group" style="margin-bottom: 5px"> <input id="txtThemThuocTinh-` +
                countDiv + `" type="text" class="autosize-transition form-control" placeholder="Thêm giá trị khác ?" value="" /> <a href="javascript:void(0)" onclick="themTheInputBienThe(` +
                countDiv +
                `)" role="button" class="input-group-addon green" data-rel="tooltip" data-placement="bottom" title="Thêm mới 1 thuộc tính"> <i class="icon-plus"></i> </a> </div> </div> </div> </div></div>`
            ).insertBefore(selectThis);
            //them vao` truoc' selector bang` 1 cai' widget
        }
    }

    function themTheInputThuocTinh() {
        //lay' ra so' luong input-group cua? #form
        let countDiv = $("#form-thuoctinh div.div-thuoctinh").length;
        let inputKey = $('#txtThuocTinh-Key');
        let inputValue = $('#txtThuocTinh-Value');

        if (inputKey.val() == '' || inputValue.val() == '') {
            toastr.error("Không được bỏ trống !", 'Có lỗi xảy ra', {
                timeOut: 3000
            });
        } else {
            //them vào trước selector
            $(`<div class="div-thuoctinh"><span class="input-icon"><input type="text" class="input-xlarge" value="` + inputKey.val() +
                `" name="ThuocTinhChung[0][]"><i class="icon-apple blue"></i></span><span class="input-icon input-icon-right"><input type="text" class="input-xxlarge" value="` + inputValue.val() +
                `" name="ThuocTinhChung[1][]"><i class="icon-android green"></i></span><a href="javascript:void(0)" id="xoa-thuoctinh-` + countDiv + `" onclick="xoaTheInputThuocTinh(` + countDiv +
                `)" class="btn btn-white"><i class="icon-trash red"></i></a></div>`).insertBefore("#div-themthuoctinh");

            inputKey.val('');
            inputValue.val('');
        }
    }

    function themTheInputBienThe(parentIndex) {
        //lay' ra so' luong input-group cua? #form
        let countDiv = $("#form-thuoctinh-tohop-" + parentIndex + " div.input-group").length;
        let txtThemThuocTinh = $('#txtThemThuocTinh-' + parentIndex);

        if (txtThemThuocTinh.val() == '') {
            toastr.error("Không được bỏ trống !", 'Có lỗi xảy ra', {
                timeOut: 3000
            });
        } else {
            let tenThuocTinh = $('#txtTenThuocTinh-' + parentIndex).val();

            //them vào sau selector
            $('#form-thuoctinh-tohop-' + parentIndex).append(
                `<div class="input-group" style="margin-bottom: 5px"><input type="text" class="autosize-transition form-control" placeholder="" name="ThuocTinhToHop[` + parentIndex +
                `][]" ThuocTinh="` + tenThuocTinh + `" value="` +
                txtThemThuocTinh.val() + `" style="font-weight: bold;" onchange="inputThuocTinhToHopChange(` + parentIndex +
                `)"/><a href="javascript:void(0)" id="xoa-thuoctinh-tohop-` +
                parentIndex + `-` + countDiv + `"onclick="xoaTheInputBienThe(` + parentIndex + `,` + countDiv +
                `)" class="input-group-addon red" style="background-color:transparent"><i class="icon-trash"></i></a></div>`);

            //reset cai the? input lai
            txtThemThuocTinh.val('');
            //refesh
            inputThuocTinhToHopChange(parentIndex);
            //reload datatable
            reloadDatatableBienThe();
        }
    }

    function xoaTheInputThuocTinh(index) {
        $('#xoa-thuoctinh-' + index).parent().remove();
    }

    function xoaTheInputBienThe(parentIndex, index) {
        $('#xoa-thuoctinh-tohop-' + parentIndex + '-' + index).parent().remove();
        //refesh
        inputThuocTinhToHopChange(parentIndex);
        //reload datatable
        reloadDatatableBienThe();
    }

    function xoaThuocTinhKhac(index) {
        $('#xoa-thuoctinh-khac-' + index).remove();
        //reload datatable
        reloadDatatableBienThe();
    }

    function xoaHinhAnhSanPham(id) {

        $.ajax({
            //gui di voi phuong thuc'
            method: "DELETE",
            //url = duong dan cua form
            url: "<?php echo e(route('HinhAnh.destroy', '')); ?>/" + id,
            //du lieu gui di
            data: {},
            //Set giá trị này là false nếu không muốn dữ liệu được truyền vào thiết lập data sẽ được xử lý và biến thành một query kiểu chuỗi.
            processData: false,
            // Kiểu nội dung của dữ liệu được gửi lên server.minh gui len la rong~
            contentType: false,
            //Kiểu của dữ liệu mong muốn được trả về từ server (duoi dang json).
            //dataType: 'json',
            beforeSend: function() {

            },
            success: function(response) {
                console.log("request ok");

                toastr.success("Xóa thành công", 'Thành công', {
                    timeOut: 3000
                });

                //xoa' the? image vua` xoa'
                $('li#HinhAnh-' + id).remove();
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

    function thayDoiTrangThai_Datatable(selectorTd, checked) {
        //truyen vo phan tu? cha la` the td de selector
        console.log(selectorTd);
        var table = $('#BienTheSanPham').closest('table').DataTable();
        table.cell(selectorTd).data(checked);
    }
</script>
<?php /**PATH D:\DDDD\Do-An-Laravel\resources\views/Admin/SanPham/script/SanPham-edit-script.blade.php ENDPATH**/ ?>