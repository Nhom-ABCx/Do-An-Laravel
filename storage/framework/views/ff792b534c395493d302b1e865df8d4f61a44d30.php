<?php $__env->startSection('title', 'Tiêu đề'); ?>

<?php $__env->startSection('headThisPage'); ?>

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
                    <a href="#">Forms</a>
                </li>
                <li class="active">Wysiwyg &amp; Markdown</li>
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
            <div class="page-header">
                <h1>Wysiwyg &amp; Markdown Editor </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <h4 class="header green clearfix">
                        Bootstrap Lightweight Editor
                        <span class="block pull-right">
                            <small class="grey middle">Choose style: &nbsp;</small>

                            <span class="btn-toolbar inline middle no-margin">
                                <span data-toggle="buttons" class="btn-group no-margin">
                                    <label class="btn btn-sm btn-yellow">
                                        1
                                        <input type="radio" value="1" />
                                    </label>

                                    <label class="btn btn-sm btn-yellow active">
                                        2
                                        <input type="radio" value="2" />
                                    </label>

                                    <label class="btn btn-sm btn-yellow">
                                        3
                                        <input type="radio" value="3" />
                                    </label>
                                </span>
                            </span>
                        </span>
                    </h4>

                    <div class="wysiwyg-editor" id="editor1"></div>

                    <div class="hr hr-double dotted"></div>


                    <script type="text/javascript">
                        var $path_assets = "assets"; //this will be used in loading jQuery UI if needed!
                    </script>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    <!-- page specific plugin scripts -->

    <script src="/storage/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/storage/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/storage/assets/js/markdown/markdown.min.js"></script>
    <script src="/storage/assets/js/markdown/bootstrap-markdown.min.js"></script>
    <script src="/storage/assets/js/jquery.hotkeys.min.js"></script>
    <script src="/storage/assets/js/bootstrap-wysiwyg.min.js"></script>
    <script src="/storage/assets/js/bootbox.min.js"></script>

    <!-- inline scripts related to this page -->

    <script type="text/javascript">
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
            }).prev().addClass('wysiwyg-style2');



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

                /**
                //or we can load the jQuery UI dynamically only if needed
                if (typeof jQuery.ui !== 'undefined') enableImageResize();
                else {//load jQuery UI if not loaded
                	$.getScript($path_assets+"/js/jquery-ui-1.10.3.custom.min.js", function(data, textStatus, jqxhr) {
                		if('ontouchend' in document) {//also load touch-punch for touch devices
                			$.getScript($path_assets+"/js/jquery.ui.touch-punch.min.js", function(data, textStatus, jqxhr) {
                				enableImageResize();
                			});
                		} else	enableImageResize();
                	});
                }
                */
            }


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DDDD\WEB\Laravel\Do-An-Laravel\resources\views/Admin/WidgetMoTa.blade.php ENDPATH**/ ?>