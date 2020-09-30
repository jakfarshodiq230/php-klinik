<?php

    $kode_perawat = $_GET ['kode_perawat'];
    $sql = $koneksi -> query ("SELECT * FROM perawat WHERE kode_perawat='$kode_perawat'");
    $tampil = $sql -> fetch_assoc();
?>


<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Edit Data Perawat</strong></h3>
    </div>
        <!-- /.col-lg-12 -->
</div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Perawat</div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <form method="post" role="form" action="">

                            <div class="col-lg-12">                                    
                                    <div class="form-group">
                                        <label>Nama Perawat</label>
                                        <input class="form-control" placeholder="Nama Pasien" name="nama" value="<?php echo $tampil['nama_perawat'];?>">
                                    </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                    <?php if($tampil['Jenis_kelamin']=="Laki-laki"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Laki-laki" checked>
                                                    Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Perempuan">
                                                    Perempuan
                                                </label>
                                            </div>
                                            
                    <?php } ?>

                    <?php if($tampil['Jenis_kelamin']=="Perempuan"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Laki-laki">
                                                    Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Perempuan" checked>
                                                    Perempuan
                                                </label>
                                            </div>
                    <?php } ?>
                                        </div>  
                                        
                                    <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?php echo $tampil['tanggal_lahir'];?>">
                                    </div>

                                    <div class="form-group"> 
                                        <label>Sepesialis</label>
                                        <input class="form-control" placeholder="Sepesialis" name="sepesialis" value="<?php echo $tampil['sepesialis'];?>">
                                    </div>                                                  
                                     <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?php echo $tampil['alamat'];?>  
                                            </textarea>
                                        </div>   
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">+62</span>
                                        <input type="number" class="form-control" placeholder="No Handphone" name="nohp" value="<?php echo $tampil['no_hp'];?>">
                                    </div>
                                <div>                                        
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="margin-top: 15px;">
                                </div>
                            </div>
                                <!-- /.col-lg-6 (nested) -->
                            </form>

                        </div>
                            <!-- /.row (nested) -->
                    </div>
                        <!-- /.panel-body -->
            </div>
                    <!-- /.panel -->
        </div>
                <!-- /.col-lg-12 -->
    </div>
            <!-- /.row -->
                      
    <?php
    $nama_perawat = $_POST ['nama'];
    $jenis_kelamin = $_POST ['jk'];
    $tanggal = $_POST ['tanggal_lahir'];
    $alamat = $_POST ['alamat'];
    $no_hp = $_POST ['nohp'];
    $sepesialis = $_POST ['sepesialis'];
    $simpan = $_POST ['simpan'];

    if ($simpan) {

        $sql = $koneksi -> query ("UPDATE perawat SET nama_perawat='$nama_perawat',jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal',sepesialis='$sepesialis',alamat='$alamat',no_hp='$no_hp' where kode_perawat='$kode_perawat'");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil diedit")
                    window.location.href="?page=perawat";
                </script>

                <?php
        }
    }

    ?>
