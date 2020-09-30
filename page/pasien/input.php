
<?php
 
$carikode = mysqli_query($koneksi, "select max(no_reges) from pasien") or die (mysql_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   $nilaikode = substr($datakode[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   $kode_otomatis = "P".str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "P0001";
  }
  ?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Input Data Pasien </strong></h3>
    </div>
                <!-- /.col-lg-12 -->
</div>


<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"> Input Data Pasien </div>
                    <div class="panel-body">
                        <div class="row">
                              
                            <form method="post" role="form">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. REG</label>
                                        <input  class="form-control" name="no_reg" value="<?php echo $kode_otomatis?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pasien</label>
                                        <input class="form-control" placeholder="Nama Pasien" name="nama_pasien" required>
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
                                        <label>Tanggal Daftar</label>
                                        <input class="form-control" type="date" placeholder="Tanggal Daftar" name="tanggal_daftar" required>
                                    </div>

                                    <div class="form-group"> 
                                        <label>Umur</label>
                                        <input class="form-control" placeholder="umur" name="umur" required>
                                    </div>                                                  
                                    
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">+62</span>
                                        <input type="number" class="form-control" placeholder="No Handphone" name="nohp">
                                    </div>
                                    <div class="form-group">
                                        <label>Kepala Keluarga</label>
                                        <input class="form-control" placeholder="Nama Kepala Keluarga" name="kepala_keluarga" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3" required></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Diagnosa</label>
                                            <select class="form-control" name="diagnosa" required>
                                                <option>- Pilih Diagnosa - </option>

                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM diagnosa ORDER BY nama_diagnosa ASC");

                                                 while ($data = $sql->fetch_assoc()){
                                                    echo "<option value='$data[kode_diagnosa]'>$data[nama_diagnosa]</option>";
                                                 }

                                                ?>

                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Traphy</label>
                                            <select class="form-control" name="traphy" required>
                                                <option>- Pilih Traphy- </option>

                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM traphy ORDER BY  nama_traphy ASC");

                                                 while ($data = $sql->fetch_assoc()){
                                                    echo "<option value='$data[kode_traphy]'>$data[nama_traphy]</option>";
                                                 }

                                                ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Prawat</label>
                                            <select class="form-control" name="perawat" required>
                                                <option>- Pilih Perawat- </option>

                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM perawat ORDER BY  nama_perawat ASC");

                                                 while ($data = $sql->fetch_assoc()){
                                                    echo "<option value='$data[kode_perawat]'>$data[nama_perawat]</option>";
                                                 }

                                                ?>

                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Dokter</label>
                                            <select class="form-control" name="dokter" required>
                                                <option>- Pilih Dokter- </option>

                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM dokter ORDER BY  nama_dokter ASC");

                                                 while ($data = $sql->fetch_assoc()){
                                                    echo "<option value='$data[kode_dokter]'>$data[nama_dokter]</option>";
                                                 }

                                                ?>

                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" placeholder="Keterangan" name="keterangan" rows="3" required></textarea>
                                        </div>
                                        
                                        <div>                                        
                                            
                                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="margin-top: 30px;">                   
                                        <a href ="?page=halaman1" class = "btn btn-success" style="margin-top: 30px;">Kembali </a>
                                        </div>

                                         
                                </div>

                                
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
    


    <?php  



        $a = $_POST ['no_reg'];
        $c = $_POST ['nama_pasien'];
        $b = $_POST ['tanggal_daftar'];
        $d = $_POST ['umur'];
        $e = $_POST ['jk'];     
        $f = $_POST ['nohp'];
        $g = $_POST ['kepala_keluarga'];
        $h = $_POST ['alamat'];
        $i = $_POST ['diagnosa'];
        $j = $_POST ['traphy'];
        $k = $_POST ['perawat'];
        $l = $_POST ['dokter'];
        $m = $_POST ['keterangan'];
        $simpan = $_POST['simpan'];

    if ($simpan) {


         
        $sql = $koneksi -> query ("INSERT INTO 
            pasien (no_reges,tanggal_daftar,nama_pasien,umur,jenis_kelamin,no_hp,kepala_keluarga,alamat,kode_diagnosa,kode_traphy,kode_perawat,kode_dokter,keterangan) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')") or die (mysql_error());



                                             
        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil disimpan")
                    window.location.href="?page=pasien";
                    //window.location.href="?page=ps&kategori=Semua";
                </script>

                <?php
        }else{
            ?>

                <script type="text/javascript">
                    alert ("Data Belum Berhasil disimpan")
                    window.location.href="?page=ps";
                </script>

                <?php
        }
    }

    ?>


      