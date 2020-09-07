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
                            <!-- <h3 class="box-title">Recent Comments</h3> -->
                            <div class="box-title" style="margin-bottom: 40pt; margin-left: -15pt;">
                                <div class="col-lg-3 col-sm-6 col-xs-12" id="cek">
                                    <button class="btn btn-block btn-warning">Tambah Diskusi</button>
                                </div>
                            </div>
                            <div class="comment-center" id="listDiskusi">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
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
    <script>
        $(document).ready(function () {
            listDiskusi();

            function listDiskusi(){
                var Get = "41ff8b56dc1600ebb68aa901a4299d12";
                $.ajax({
                    type        : "POST",
                    url         : "<?php echo base_url()?>index.php/Dashboard/getAllDiskusi",
                    dataType    : "text",
                    data        :   {
                                        Get: Get
                                    },
                    success : function(d){
                        var data = JSON.parse(d);
                        var html = '';
                        for(i=0; i<data.length; i++){
                            var count = 0;
                            if (data[i].Jawaban != null){
                                count = data[i].Jawaban;
                            } else {
                                count = 0
                            }
                            html += '' +
                            '<div class="comment-body">' +
                                '<div class="user-img"> <img src="<?= base_url() ?>assets/fotoprofil/'+data[i].PhotoProfile+'" alt="user" class="img-circle"></div>' + 
                                '<div class="mail-contnet">' +
                                    '<h5>'+data[i].FullName+' &nbsp;&nbsp;<small style="color: yellow;">- ('+data[i].BeginDate+')</small></h5>' +
                                    '<a href="<?= site_url('Dashboard/detail/') ?>">' +
                                        '<span class="mail-desc">' +
                                            '<div class="row">' +
                                                '<div class="col-lg-9 col-sm-9 col-xs-9 col-md-9"><p style="width: 500pt;">' +
                                                    data[i].Judul +
                                                '</p></div>' +
                                                '<div class="col-lg-3 col-sm-3 col-xs-3 col-md-3" style="text-align: center; margin-top: 5pt;">' +
                                                                        '<ul class="list-inline two-part">' +
                                                        '<li><i style="color: yellow; font-size: 18pt;" class="ti-comment-alt text-info"></i></li>' +
                                                        '<li class="text-left" style="margin-left: -25pt;"><span class="counter" style="font-size: 16pt;">&nbsp; '+count+'</span></li>' +
                                                    '</ul>' +
                                                '</div>' +
                                            '</div>' +
                                        '</span>' +
                                    '</a>' +
                                '</div>' +
                            '</div>';
                        }
                        document.getElementById("listDiskusi").innerHTML = html;
                    }

                });
            }
        });
    </script>
    <!--Style Switcher -->
<script src="<?= base_url() ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>