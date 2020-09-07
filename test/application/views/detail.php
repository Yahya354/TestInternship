<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/plugins/images/icont.jpg">
    <title>Diskusi</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?= base_url() ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?= base_url() ?>assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?= base_url() ?>assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?= base_url() ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- summernotes CSS -->
    <link href="<?= base_url() ?>assets/plugins/bower_components/summernote/dist/summernote.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">

            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Diskusi</h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-lg-8 col-sm-12">
                        <div class="white-box">
                            <a href="<?= site_url('Dashboard') ?>" class="box-title" style="margin-left: -10pt; color: yellow;"><i class="ti-arrow-left" style="font-size: 12px;"></i> &nbsp;Kembali</a>
                            <!-- <h3 class="box-title">Recent Comments</h3> -->
                            <div class="box-title" style="margin-bottom: 60pt; margin-top: 20pt; margin-left: -15pt;">
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <button class="btn btn-block btn-warning">Tambah Diskusi</button>
                                </div>
                            </div>
                            <div class="comment-center">
                                <div class="comment-body">
                                    <div class="user-img"> <img src="<?= base_url() ?>assets/fotoprofil/1.jpg" alt="user" class="img-circle"></div>
                                    <div class="mail-contnet">
                                        <div class="row">
                                            <h5>Pavan kumar &nbsp;&nbsp;<small style="color: yellow;">- (April 14, 2016)</small></h5>
                                            <p style="color: black;">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</p>
                                            <p style="font-size: 9pt;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="margin-top: 5pt;">
                                                <p style="font-weight: bold;">23 Jawaban</p>
                                                <textarea style="margin-left: -5pt;" id="textarea" class="form-control" placeholder="Tulis komentar anda disini..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-body" style="margin-left: 40pt;">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                            <div class="user-img"> <img src="<?= base_url() ?>assets/fotoprofil/2.jpg" alt="user" class="img-circle"></div>
                                            <div class="mail-contnet">
                                                <div class="row">
                                                    <h5>Arijit Sinh &nbsp;&nbsp;<small style="color: yellow;">- (April 14, 2016)</small></h5>
                                                    <p style="color: black; font-size: 9pt;">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</p>
                                                    <p style="font-size: 9pt; color: yellow;">Balas</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                            <div style="margin-left: 30pt; margin-top: 5pt;">
                                                <div class="user-img" style="width: 25px; height: 25px;">
                                                    <img src="<?= base_url() ?>assets/fotoprofil/1.jpg" alt="user" class="img-circle" width="25" height="25">
                                                </div>
                                                <div class="mail-contnet">
                                                    <div class="row">
                                                        <h5>Pavan kumar &nbsp;&nbsp;<small style="color: yellow;">- (April 14, 2016)</small></h5>
                                                        <p style="color: black; font-size: 9pt;">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</p>
                                                        <p style="font-size: 9pt; color: yellow;">Balas</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-body" style="margin-left: 40pt;">
                                    <div class="user-img"> <img src="<?= base_url() ?>assets/fotoprofil/3.jpg" alt="user" class="img-circle"></div>
                                    <div class="mail-contnet">
                                        <div class="row">
                                            <h5>Sonu Nigam &nbsp;&nbsp;<small style="color: yellow;">- (April 14, 2016)</small></h5>
                                            <p style="color: black; font-size: 9pt;">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</p>
                                            <p style="font-size: 9pt; color: yellow;">Balas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>\
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?= base_url() ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>assets/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?= base_url() ?>assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?= base_url() ?>assets/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url() ?>assets/js/custom.min.js"></script>
    <script src="<?= base_url() ?>assets/js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?= base_url() ?>assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bower_components/summernote/dist/summernote.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            $('.summernote').summernote({
                height: 150, // set editor height
                minHeight: 150, // set minimum height of editor
                maxHeight: 150, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
            });
            $('.inline-editor').summernote({
                airMode: true
            });
        });
        window.edit = function () {
            $(".click2edit").summernote()
        }, window.save = function () {
            $(".click2edit").destroy()
        }
    </script>\
<script src="<?= base_url() ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>