<?php

session_start();

$koneksi = new mysqli("localhost", "root", "", "db_klinik_farhana");

if ($_SESSION['admin']) {



?>

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Klinik - Cempedak</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Klinik Cempedak</a>
                </div>

                <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"><?php echo "Tanggal : " . date("d-M-Y"); ?> &nbsp; <a onclick="return confirm('Anda Yakin Ingin Keluar ?')" href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
                </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">

                    <ul class="nav" id="main-menu">
                        <div style="color: white;">
                            <li class="text-center">
                                <img src="assets/img/klinik.png" class="user-image img-responsive" width="128" height="128" />
                                <h5>K L I N I K</h5>
                                <h5>C E M P E D A K</h5>
                            </li>
                        </div>
                        <li>
                            <a></a>
                        </li>
                        <li>
                            <a href="?page=halaman1"><i class="glyphicon glyphicon-home fa-1x"></i> Home</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-users fa-1x"></i>Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="?page=dokter"><i class="fa fa-edit fa-1x"></i> Data Dokter</a>
                                </li>
                                <li>
                                    <a href="?page=perawat"><i class="fa fa-edit fa-1x"></i> Data Perawat</a>
                                </li>
                                <li>
                                    <a href="?page=diagnosa"><i class="fa fa-edit fa-1x"></i> Data Diagnosa</a>
                                </li>
                                <li>
                                    <a href="?page=traphy"><i class="fa fa-edit fa-1x"></i> Data Traphy</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-users fa-1x"></i>Data Pasien<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="?page=pasien"><i class="fa fa-edit fa-1x"></i> Input Pasien</a>
                                </li>
                                <li>
                                    <a href="?page=tampil&detail"><i class="fa fa-edit fa-1x"></i> Lihat Data Pasien</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href=""><i class="fa fa-print fa-1x"></i> Laporan <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="?page=laporan&angkatan=Semua">Data Master</a>
                                </li>
                                <li>
                                    <a href="?page=rekap&angkatan=Semua">Data Pasien</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=pengguna"><i class="fa fa-user fa-1x"></i> Pengguna</a>
                        </li>


                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">

                            <?php

                            $page = @$_GET['page'];
                            $aksi = @$_GET['aksi'];

                            if ($page == "halaman1") {
                                if ($aksi == "") {
                                    include "halaman_awal.php";
                                }
                            } elseif ($page == "pasien") {
                                if ($aksi == "") {
                                    include "page/pasien/input.php";
                                }
                            } elseif ($page == "ps") {
                                if ($aksi == "") {
                                    include "page/pasien/pasien.php";
                                }
                            } elseif ($page == "tampil") {
                                if ($aksi == "") {
                                    include "page/pasien/tampil.php";
                                } elseif ($aksi == "kembali") {
                                    include "page/pasien/tampil.php";
                                } elseif ($aksi == "detail") {
                                    include "page/pasien/detail_pm.php";
                                } elseif ($aksi == "cetak") {
                                    include "page/pasien/cetak.php";
                                } elseif ($aksi == "edit") {
                                    include "page/pasien/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/pasien/hapus.php";
                                }
                            } elseif ($page == "dokter") {
                                if ($aksi == "") {
                                    include "page/dokter/dokter.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/dokter/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/dokter/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/dokter/hapus.php";
                                }
                            } elseif ($page == "perawat") {
                                if ($aksi == "") {
                                    include "page/perawat/perawat.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/perawat/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/perawat/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/perawat/hapus.php";
                                }
                            } elseif ($page == "diagnosa") {
                                if ($aksi == "") {
                                    include "page/diagnosa/diagnosa.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/diagnosa/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/diagnosa/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/diagnosa/hapus.php";
                                }
                            } elseif ($page == "traphy") {
                                if ($aksi == "") {
                                    include "page/traphy/traphy.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/traphy/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/traphy/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/traphy/hapus.php";
                                }
                            } elseif ($page == "laporan") {
                                if ($aksi == "") {
                                    include "page/laporan/tampil_lap.php";
                                }
                            } elseif ($page == "tampil_lap") {
                                if ($aksi == "") {
                                    include "page/laporan/tampil_lap.php";
                                }
                            } elseif ($page == "rekap") {
                                if ($aksi == "") {
                                    include "page/rekap/tampil_rek.php";
                                }
                            } elseif ($page == "tampil_rek") {
                                if ($aksi == "") {
                                    include "page/rekap/tampil_rek.php";
                                }
                            } elseif ($page == "pengguna") {
                                if ($aksi == "") {
                                    include "page/pengguna/pengguna.php";
                                } elseif ($aksi == "kembali") {
                                    include "halaman_awal.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/pengguna/tambah.php";
                                } elseif ($aksi == "tampil_pengguna") {
                                    include "page/pengguna/tampil.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/pengguna/hapus.php";
                                }
                            } elseif ($page == "") {

                                include "halaman_awal.php";
                            }

                            ?>

                        </div>
                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->
            </div>
            <!-- /. WRAPPER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="assets/js/jquery-1.10.2.js"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src="assets/js/bootstrap.min.js"></script>
            <!-- METISMENU SCRIPTS -->
            <script src="assets/js/jquery.metisMenu.js"></script>
            <script src="assets/js/dataTables/jquery.dataTables.js"></script>
            <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
            <script>
                $(document).ready(function() {
                    $('#dataTables-example').dataTable();
                });
            </script>
            <!-- CUSTOM SCRIPTS -->
            <script src="assets/js/custom.js"></script>


    </body>

    </html>


<?php

} else {

    header("location:login.php");
}

?>