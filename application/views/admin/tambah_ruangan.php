<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Sistem Informasi Sarana Prasarana SMK Sabilul Muttaqin Margoagung</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="Mosaddek" name="author" />
    <link href="<?php echo base_url();  ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>assets/lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>assets/lib/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>assets/css/dashboard_style.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>assets/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>assets/css/style-default.css" rel="stylesheet" id="style_color" />
    <link href="<?php echo base_url();  ?>assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="fixed-top">
    <?php $this->load->view('admin/layout/header.php') ?>
    <!-- BEGIN CONTAINER -->
    <div id="container" class="row-fluid">
        <!-- BEGIN SIDEBAR -->
        <?php
        $this->load->view('admin/layout/aside.php');
        ?>
        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT -->
        <div id="main-content">
            <!-- BEGIN PAGE CONTAINER-->
            <div class="container-fluid">
                <!-- BEGIN PAGE HEADER-->
                <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN THEME CUSTOMIZER-->

                        <!-- END THEME CUSTOMIZER-->
                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                        <h3 class="page-title">
                            Form Pengisian Data Ruangan
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                                <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="#">Form Master Data</a>
                                <span class="divider">/</span>
                            </li>
                            <li class="active">
                                Form Pengisian Data Ruangan
                            </li>

                        </ul>
                        <!-- END PAGE TITLE & BREADCRUMB-->
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN SAMPLE FORMPORTLET-->
                        <div class="widget green">
                            <div class="widget-title">
                                <h4><i class="icon-reorder"></i> Form Data Ruangan </h4>
                            </div>
                            <div class="widget-body">
                                <!-- BEGIN FORM-->
                                <form action="<?php echo base_url('ruangan/store'); ?>" method="POST">
                                <div class="control-group">
                                    <label class="control-label">Nama Ruangan</label>
                                    <div class="controls">
                                        <input name="ruangan" type="text" class="span6 " />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                    <a class="btn" href="<?php echo base_url('ruangan'); ?>">Cancel</a>
                                </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END SAMPLE FORM PORTLET-->
                    </div>
                </div>

            </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
    <!-- END EXTRAS widget-->
    </div>
    </div>

    <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
    </div>
    <!-- END CONTAINER -->
    </div>
    <!-- END CONTENT -->
    </div>


    <!-- BEGIN FOOTER -->
    <?php $this->load->view('admin/layout/footer.php') ?>
    <!-- END FOOTER -->

    <!-- BEGIN JAVASCRIPTS -->
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <script src="<?php echo base_url();  ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url();  ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();  ?>assets/lib/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();  ?>assets/lib/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();  ?>assets/lib/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();  ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- ie8 fixes -->
    <!--[if lt IE 9]>
   <script src="<?php echo base_url();  ?>assets2/js/excanvas.js"></script>
   <script src="<?php echo base_url();  ?>assets2/js/respond.js"></script>
   <![endif]-->

    <script src="<?php echo base_url();  ?>assets/lib/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
    <script src="<?php echo base_url();  ?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url();  ?>assets/lib/chart-master/Chart.js"></script>
    <script src="<?php echo base_url();  ?>assets/js/jquery.scrollTo.min.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url();  ?>assets/js/common-scripts.js"></script>

    <!--script for this page only-->

    <script src="<?php echo base_url();  ?>assets/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url();  ?>assets/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url();  ?>assets/js/home-page-calender.js"></script>
    <script src="<?php echo base_url();  ?>assets/js/home-chartjs.js"></script>

    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>