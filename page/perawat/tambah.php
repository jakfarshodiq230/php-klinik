<?php
 
$carikode = mysqli_query($koneksi, "select max(kode_perawat) from perawat") or die (mysql_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   $nilaikode = substr($datakode[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   $kode_otomatis = "R".str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "R0001";
  }
  ?>
<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Input Data Perawat</strong></h3>
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
                                        <label>Kode Perawat</label>
                                        <input class="form-control" placeholder="P001" name="reg" value="<?php echo $kode_otomatis?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Perawat</label>
                                        <input class="form-control" placeholder="Nama Perawat" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jk" value="Laki-laki" 
                                                checked>Laki - Laki
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jk" value="Perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>  
                                        
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input class="form-control" type="date"  name="tanggal_lahir" required>
                                    </div>

                                    <div class="form-group"> 
                                        <label>Sepesialis</label>
                                        <input class="form-control" placeholder="Sepesialis" name="sepesialis" required>
                                    </div>                                                  
                                    <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">+62</span>
                                        <input type="number" class="form-control" placeholder="No Handphone" name="nohp">
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

    $kode_perawat = $_POST ['reg'];
    $nama_perawat = $_POST ['nama'];
    $jenis_kelamin = $_POST ['jk'];
    $tanggal = $_POST ['tanggal_lahir'];
    $alamat = $_POST ['alamat'];
    $no_hp = $_POST ['nohp'];
    $sepesialis = $_POST ['sepesialis'];
     $simpan = $_POST ['simpan'];
    if ($simpan) {

        $sql = $koneksi -> query ("INSERT INTO perawat (kode_perawat,nama_perawat,jenis_kelamin,tanggal_lahir,sepesialis,alamat,no_hp)  VALUES ('$kode_perawat', '$nama_perawat','$jenis_kelamin','$tanggal','$sepesialis','$alamat','$no_hp')");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil disimpan")
                    window.location.href="?page=perawat";
                </script>

                <?php
        }
    }

    ?>  
