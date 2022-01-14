<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('headThisPage'); ?>

    <link rel="stylesheet" href="/storage/assets/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="/storage/assets/css/jquery.gritter.css" />

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
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="row header smaller lighter orange">
                                <span class="col-sm-8">
                                    <i class="icon-bell-alt"></i>
                                    Gritter Notifications
                                </span><!-- /span -->

                                <span class="col-sm-4">
                                    <label class="pull-right inline">
                                        <small class="muted">Dark:</small>

                                        <input id="gritter-light" checked="" type="checkbox" class="ace ace-switch ace-switch-5" />
                                        <span class="lbl"></span>
                                    </label>
                                </span><!-- /span -->
                            </h3>

                            <p>
                                <i>Click to see</i>
                            </p>

                            <p>
                                <button class="btn" id="gritter-regular">Regular</button>
                                <button class="btn btn-info" id="gritter-sticky">Sticky</button>
                                <button class="btn btn-success" id="gritter-without-image">Without Image</button>
                            </p>

                            <p>
                                <button class="btn btn-danger" id="gritter-error">Error</button>
                                <button class="btn btn-warning" id="gritter-max3">Max 3</button>
                                <button class="btn btn-primary" id="gritter-center">Center</button>
                                <button class="btn btn-inverse" id="gritter-remove">Remove</button>
                            </p>
                        </div><!-- /span -->
                    </div><!-- /row -->

                    <script type="text/javascript">
                        var $path_assets = "assets"; //this will be used in gritter alerts containing images
                    </script>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->

        </div>
    </div><!-- /.main-content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptThisPage'); ?>
    <!-- page specific plugin scripts -->
    <!--[if lte IE 8]>
      <script src="assets/js/excanvas.min.js"></script>
      <![endif]-->

    <script src="/storage/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/storage/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/storage/assets/js/bootbox.min.js"></script>
    <script src="/storage/assets/js/jquery.easy-pie-chart.min.js"></script>
    <script src="/storage/assets/js/jquery.gritter.min.js"></script>
    <script src="/storage/assets/js/spin.min.js"></script>

    <script type="text/javascript">
        jQuery(function($) {
            /**
            $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
              console.log(e.target.getAttribute("href"));
            })
            */


            $('#accordion-style').on('click', function(ev) {
                var target = $('input', ev.target);
                var which = parseInt(target.val());
                if (which == 2) $('#accordion').addClass('accordion-style2');
                else $('#accordion').removeClass('accordion-style2');
            });


            var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
            $('.easy-pie-chart.percentage').each(function() {
                $(this).easyPieChart({
                    barColor: $(this).data('color'),
                    trackColor: '#EEEEEE',
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: 8,
                    animate: oldie ? false : 1000,
                    size: 75
                }).css('color', $(this).data('color'));
            });

            $('[data-rel=tooltip]').tooltip();
            $('[data-rel=popover]').popover({
                html: true
            });


            $('#gritter-regular').on(ace.click_event, function() {
                $.gritter.add({
                    title: 'This is a regular notice!',
                    text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                    image: $path_assets + '/avatars/avatar1.png',
                    sticky: false,
                    time: '',
                    class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
                });

                return false;
            });

            $('#gritter-sticky').on(ace.click_event, function() {
                var unique_id = $.gritter.add({
                    title: 'This is a sticky notice!',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                    image: $path_assets + '/avatars/avatar.png',
                    sticky: true,
                    time: '',
                    class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });


            $('#gritter-without-image').on(ace.click_event, function() {
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'This is a notice without an image!',
                    // (string | mandatory) the text inside the notification
                    text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                    class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });


            $('#gritter-max3').on(ace.click_event, function() {
                $.gritter.add({
                    title: 'This is a notice with a max of 3 on screen at one time!',
                    text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                    image: $path_assets + '/avatars/avatar3.png',
                    sticky: false,
                    before_open: function() {
                        if ($('.gritter-item-wrapper').length >= 3) {
                            return false;
                        }
                    },
                    class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });


            $('#gritter-center').on(ace.click_event, function() {
                $.gritter.add({
                    title: 'This is a centered notification',
                    text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                    class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });

            $('#gritter-error').on(ace.click_event, function() {
                $.gritter.add({
                    title: 'This is a warning notification',
                    text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                    class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });


            $("#gritter-remove").on(ace.click_event, function() {
                $.gritter.removeAll();
                return false;
            });


            ///////


            $("#bootbox-regular").on(ace.click_event, function() {
                bootbox.prompt("What is your name?", function(result) {
                    if (result === null) {
                        //Example.show("Prompt dismissed");
                    } else {
                        //Example.show("Hi <b>"+result+"</b>");
                    }
                });
            });

            $("#bootbox-confirm").on(ace.click_event, function() {
                bootbox.confirm("Are you sure?", function(result) {
                    if (result) {
                        //
                    }
                });
            });

            $("#bootbox-options").on(ace.click_event, function() {
                bootbox.dialog({
                    message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
                    buttons: {
                        "success": {
                            "label": "<i class='icon-ok'></i> Success!",
                            "className": "btn-sm btn-success",
                            "callback": function() {
                                //Example.show("great success");
                            }
                        },
                        "danger": {
                            "label": "Danger!",
                            "className": "btn-sm btn-danger",
                            "callback": function() {
                                //Example.show("uh oh, look out!");
                            }
                        },
                        "click": {
                            "label": "Click ME!",
                            "className": "btn-sm btn-primary",
                            "callback": function() {
                                //Example.show("Primary button");
                            }
                        },
                        "button": {
                            "label": "Just a button...",
                            "className": "btn-sm"
                        }
                    }
                });
            });



            $('#spinner-opts small').css({
                display: 'inline-block',
                width: '60px'
            })

            var slide_styles = ['', 'green', 'red', 'purple', 'orange', 'dark'];
            var ii = 0;
            $("#spinner-opts input[type=text]").each(function() {
                var $this = $(this);
                $this.hide().after('<span />');
                $this.next().addClass('ui-slider-small').
                addClass("inline ui-slider-" + slide_styles[ii++ % slide_styles.length]).
                css({
                    'width': '125px'
                }).slider({
                    value: parseInt($this.val()),
                    range: "min",
                    animate: true,
                    min: parseInt($this.data('min')),
                    max: parseInt($this.data('max')),
                    step: parseFloat($this.data('step')),
                    slide: function(event, ui) {
                        $this.attr('value', ui.value);
                        spinner_update();
                    }
                });
            });





            $.fn.spin = function(opts) {
                this.each(function() {
                    var $this = $(this),
                        data = $this.data();

                    if (data.spinner) {
                        data.spinner.stop();
                        delete data.spinner;
                    }
                    if (opts !== false) {
                        data.spinner = new Spinner($.extend({
                            color: $this.css('color')
                        }, opts)).spin(this);
                    }
                });
                return this;
            };

            function spinner_update() {
                var opts = {};
                $('#spinner-opts input[type=text]').each(function() {
                    opts[this.name] = parseFloat(this.value);
                });
                $('#spinner-preview').spin(opts);
            }



            $('#id-pills-stacked').removeAttr('checked').on('click', function() {
                $('.nav-pills').toggleClass('nav-stacked');
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Do-An-Laravel\resources\views/WidgetThongBao.blade.php ENDPATH**/ ?>