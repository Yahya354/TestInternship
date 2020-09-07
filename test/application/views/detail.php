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
                        <h4 class="page-title" id="cek">Diskusi</h4>
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
                                    <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah Diskusi</button>
                                </div>
                            </div>
                            <div class="comment-center">
                                <div class="comment-body" id="detailDiskusi">
                                </div>
                                <div id="listJawaban">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1">Tambah Diskusi</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Judul:</label>
                                        <input type="text" class="form-control" id="recipient-name1">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Deskripsi:</label>
                                        <textarea class="form-control" id="message-text1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label" id="cek">Kategori:</label>
                                        <br>
                                        <select class="form-control" id="listKategori">
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-warning">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
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
    </script>
    <script>
        $(document).ready(function () {
            var data = "<?php echo $data; ?>";
            setKategori();
            detailDiskusi();
            listJawaban();

            function setKategori(){
                var Get = "41ff8b56dc1600ebb68aa901a4299d12";
                $.ajax({
                    type        : "POST",
                    url         : "<?php echo base_url()?>index.php/Dashboard/getAllKategori",
                    dataType    : "text",
                    data        :   {
                                        Get: Get
                                    },
                    success : function(d){
                        var data = JSON.parse(d);

                        var sel = document.getElementById('listKategori');
                        for (var i = 0; i < data.length; i++) {
                            var opt = document.createElement('option');
                            opt.appendChild(document.createTextNode(data[i].NamaKategori));
                            opt.value = data[i].KategoriID;
                            sel.appendChild(opt);
                        }
                    }
                });
            }

            function detailDiskusi(){
                var Get = "41ff8b56dc1600ebb68aa901a4299d12";
                $.ajax({
                    type        : "POST",
                    url         : "<?php echo base_url()?>index.php/Dashboard/getByIdDiskusi",
                    dataType    : "text",
                    data        :   {
                                        Get: Get,
                                        Data :data
                                    },
                    success : function(d){
                        var data = JSON.parse(d);
                        // document.getElementById("cek").innerHTML = data[0].FullName;
                        var html = '';
                        var count = 0;
                        if (data[0].Jawaban != null){
                            count = data[0].Jawaban;
                        } else {
                            count = 0;
                        }

                        html += ""+
                        '<div class="user-img"> <img src="<?= base_url() ?>assets/fotoprofil/'+data[0].PhotoProfile+'" alt="user" class="img-circle"></div>'+
                        '<div class="mail-contnet">'+
                            '<div class="row">'+
                                '<h5>'+data[0].FullName+' &nbsp;&nbsp;<small style="color: yellow;">- ('+data[0].BeginDate+')</small></h5>'+
                                '<p style="color: black;">'+data[0].Judul+'</p>'+
                                '<p style="font-size: 9pt;">'+data[0].Deskripsi+'</p>'+
                                '<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="margin-top: 5pt;">'+
                                    '<p style="font-weight: bold;">'+count+' Jawaban</p>'+
                                    '<textarea style="margin-left: -5pt;" id="textarea" class="form-control" placeholder="Tulis komentar anda disini..."></textarea>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                        document.getElementById("detailDiskusi").innerHTML = html;
                    }

                });
            }

            function listJawaban(){
                var Get = "41ff8b56dc1600ebb68aa901a4299d12";
                $.ajax({
                    type        : "POST",
                    url         : "<?php echo base_url()?>index.php/Dashboard/getByDiskusiIdJawaban",
                    dataType    : "text",
                    data        :   {
                                        Get: Get,
                                        Data :data
                                    },
                    success : function(d){
                        var data = JSON.parse(d);
                        var count = 0;
                        var JawabanID = 0;
                        if (data.length > 0) {
                            var html = '';

                            for (var i = 0; i < data.length; i++){
                                html += ""+
                                '<div class="comment-body" style="margin-left: 40pt;">'+
                                    '<div class="row">'+
                                        '<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">'+
                                            '<div class="user-img"> <img src="<?= base_url() ?>assets/fotoprofil/'+data[i].PhotoProfile+'" alt="user" class="img-circle"></div>'+
                                            '<div class="mail-contnet">'+
                                                '<div class="row">'+
                                                    '<h5>'+data[i].FullName+' &nbsp;&nbsp;<small style="color: yellow;">- ('+data[i].BeginDate+')</small></h5>'+
                                                    '<p style="color: black; font-size: 9pt;">'+data[i].Jawaban+'</p>'+
                                                    '<p style="font-size: 9pt; color: yellow;">Balas</p>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div id="listBalasan'+data[i].JawabanID+'">'+
                                        '</div>'+
                                    '</div>'+
                                '</div>';

                                if (data[i].Balasan != null){
                                    count = data[i].Balasan;
                                    JawabanID = data[i].JawabanID;
                                } else {
                                    count = 0;
                                }

                                if (count > 0){
                                    $.ajax({
                                        type        : "POST",
                                        url         : "<?php echo base_url()?>index.php/Dashboard/getByJawabanIdBalasan",
                                        dataType    : "text",
                                        data        :   {
                                                            Get: Get,
                                                            JawabanID :JawabanID
                                                        },
                                        success : function(bd){
                                            var bdata = JSON.parse(bd);
                                            if (bdata.length > 0) {
                                                var bhtml = '';
                                                for (var j = 0; j < bdata.length; j++){
                                                    bhtml += ""+
                                                    '<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">'+
                                                        '<div style="margin-left: 30pt; margin-top: 5pt;">'+
                                                            '<div class="user-img" style="width: 25px; height: 25px;">'+
                                                                '<img src="<?= base_url() ?>assets/fotoprofil/'+bdata[j].PhotoProfile+'" alt="user" class="img-circle" width="25" height="25">'+
                                                            '</div>'+
                                                            '<div class="mail-contnet">'+
                                                                '<div class="row">'+
                                                                    '<h5>'+bdata[j].FullName+' &nbsp;&nbsp;<small style="color: yellow;">- ('+bdata[j].BeginDate+')</small></h5>'+
                                                                    '<p style="color: black; font-size: 9pt;">'+bdata[j].Balasan+'</p>'+
                                                                    '<p style="font-size: 9pt; color: yellow;">Balas</p>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>';
                                                }
                                                document.getElementById("listBalasan"+JawabanID).innerHTML = bhtml;
                                            }
                                        }
                                    });
                                }
                            }
                            document.getElementById("listJawaban").innerHTML = html;
                        }
                    }
                });
            }
        });
    </script>
<script src="<?= base_url() ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>