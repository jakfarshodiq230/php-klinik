<?php
//session_start();

$koneksi = new mysqli("localhost", "root", "", "db_klinik_farhana");

//cek apakah user sudah login
?>


<div id="page-inner">
    <div class="row">
        <div class="col-md-12">

            <h3 align="">Selamat Datang di Sistem Klinik Cempedak</h3> <br>



            <hr />

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-red set-icon">
                            <i class="fa fa-users fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM pasien");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Pasien</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM dokter");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Dokter</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-blue set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM perawat");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Perawat</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM diagnosa");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Diagnosa</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM traphy");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Traphy</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-brown set-icon">
                            <i class="fa fa-user fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM pengguna");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Admin</p>
                        </div>
                    </div>
                </div>







            </div>

            <!-- /. ROW  -->
            <hr />

        </div>
    </div>
</div>