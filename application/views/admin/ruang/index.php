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

                        <!-- END THEME CUSTOMIZER-->
                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                        <h3 class="page-title">
                            <b>Data Tabel Barang Ruang <?php echo $data_ruang->nama_ruang ?><b>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url();  ?>index.php/admin">Home</a>
                                <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="<?php echo base_url();  ?>assets2/#">Data Ruangan</a>
                                <span class="divider">/</span>
                            </li>
                            <li class="active">
                                Data Tabel Barang Ruang <?php echo $data_ruang->nama_ruang ?>
                            </li>

                        </ul>
                        <!-- END PAGE TITLE & BREADCRUMB-->
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN EDITABLE TABLE widget-->
                <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN EXAMPLE TABLE widget-->
                        <div class="widget purple">
                            <div class="widget-title">
                                <h4><i class="icon-reorder"></i> Data Tabel BArang Ruang <?php echo $data_ruang->nama_ruang; ?></h4>

                            </div>
                            <div class="widget-body">
                                <div>
                                    <div class="clearfix">
                                        <div class="btn-group">
                                            <form action="<?= base_url('ruangan/'.$data_ruang->id) ?>" method="get">
                                                <div class="input-group">
                                                    <label for="">Filter Tahun Pembelian</label>
                                                    <select name="tahun_pembelian">
                                                        <option value="">Semua</option>
                                                        <?php
                                                        foreach ($data_tahun_pembelian as $item){
                                                            echo "<option value='$item->tahun_pembelian'>$item->tahun_pembelian</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="submit">Filter</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <?php echo anchor('ruangan/'.$data_ruang->id.'/barang/tambah', 'Tambah Data', array('class' => 'btn btn-danger btn-sm')) ?>

                                        </div>
                                        <div class="space15"></div>
                                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                            <thead>
                                                <tr>
                                                <tr>
                                                    <th>
                                                        <center>No</center>
                                                    </th>
                                                    <th>
                                                        <center>RUANGAN</center>
                                                    </th>
                                                    <th>
                                                        <center>NAMA BARANG</center>
                                                    </th>
                                                    <th>
                                                        <center>KODE INVENTARIS</center>
                                                    </th>
                                                    <th>
                                                        <center>BAHAN</center>
                                                    </th>
                                                    <th>
                                                        <center>TAHUN PEMBELIAN</center>
                                                    </th>
                                                    <th>
                                                        <center>JUMLAH</center>
                                                    </th>
                                                    <th>
                                                        <center>SISA</center>
                                                    </th>
                                                    <th>
                                                        <center>STATUS</center>
                                                    </th>
                                                    <th>
                                                        <center>Action</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($data_barang as $item) {

													$sisa = $item->jumlah - $item->rusak;

                                                    echo "<tr>
                                                <td><center>$no</center></td>
                                                <td><center>$item->nama_ruang</center></td>
                                                <td><center>$item->nama_barang</center></td>
                                                <td><center>$item->kode_inventaris</center></td>
                                                <td><center>$item->bahan</center></td>
                                                <td><center>$item->tahun_pembelian</center></td>
                                                <td><center>$item->jumlah</center></td>
												<td><center>$sisa</center></td>
                                                <td><center>$item->status</center></td>
                                                <td><center>" . anchor('ruangan/'.$data_ruang->id.'/barang/edit/'.$item->id, 'Edit') . "</center></td>
                                                 <td><center>" . anchor('ruangan/'.$data_ruang->id.'/barang/delete/' . $item->id, 'Delete') .
                                                        "</center></td>
                                                
                                                </tr>";

                                                    $no++;
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE widget-->
                        </div>
                    </div>

                    <!-- END EDITABLE TABLE widget-->
                </div>
                <!-- END PAGE CONTAINER-->
            </div>
            <!-- END PAGE -->
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
