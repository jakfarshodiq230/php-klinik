<?php

    $kode_pasien = $_GET ['no_reges'];
    $sql = $koneksi -> query ("SELECT * FROM pasien WHERE no_reges ='$kode_pasien'");
    $tampil = $sql -> fetch_assoc();
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Edit Data Pasien </strong></h3>
    </div>
                <!-- /.col-lg-12 -->
</div>
            <!-- /.row -->
    <div class="row">
        <div class="col-lg-12"> 
            <div class="panel panel-default">
                <div class="panel-heading"> Input Data Pasien </div> 
                    <div class="panel-body">
                        <div class="row">
                              
                            <form method="post" role="form">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No REG</label>
                                            <input type="number" class="form-control" placeholder="P001" name="noreg" value="<?php echo $tampil['no_reges'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pasien</label>
                                            <input class="form-control" placeholder="Nama" name="nama_pasien" value="<?php echo $tampil['nama_pasien'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                    <?php if($tampil['jenis_kelamin']=="Laki-laki"){ ?>
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

                    <?php if($tampil['jenis_kelamin']=="Perempuan"){ ?>
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
                                            <label>Tanggal Daftar</label>
                                            <input class="form-control" type="date" placeholder="Tanggal" name="tanggal_daftar" value="<?php echo $tampil['tanggal_daftar'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input class="form-control" placeholder="Umur" name="umur" value="<?php echo $tampil['umur'];?>">
                                        </div>                                                  
                                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">+62</span>
                                            <input type="number" class="form-control" placeholder="No Handphone" name="nohp" value="<?php echo $tampil['no_hp'];?>">
                                        </div>
                                </div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kepala Keluarga</label>
                                            <input class="form-control" placeholder="Nama Kepela Keluarga" name="kepala_keluarga" value="<?php echo $tampil['kepala_keluarga'];?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?php echo $tampil['alamat'];?>
                                                
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Diagnosa</label>
                                            <select class="form-control" name="diagnosa">
                                                
                                                <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM diagnosa ORDER BY nama_diagnosa ASC");
                                                 while ($data = $sql->fetch_assoc()){
                                            
                                                   if($tampil['kode_diagnosa']==$data['kode_diagnosa']){                                                   

                                                        echo "<option value='$data[kode_diagnosa]' selected>$data[nama_diagnosa]</option>"; 
                                                        } else {
                                                            echo "<option value='$data[kode_diagnosa]'>$data[nama_diagnosa]</option>";   
                                                            }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Traphy</label>
                                            <select class="form-control" name="traphy">

                                                 <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM traphy ORDER BY nama_traphy ASC");
                                                 while ($data = $sql->fetch_assoc()){
                                            
                                                    if($tampil['kode_traphy']==$data['kode_traphy']){                                                   

                                                        echo "<option value='$data[kode_traphy]' selected>$data[nama_traphy]</option>"; 
                                                        } else {
                                                            echo "<option value='$data[kode_traphy]'>$data[nama_traphy]</option>";   
                                                            }
                                                 }   
                                                ?>

                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Perawat</label>
                                            <select class="form-control" name="perawat">

                                                 <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM perawat ORDER BY nama_perawat ASC");
                                                 while ($data = $sql->fetch_assoc()){
                                            
                                                    if($tampil['kode_perawat']==$data['kode_perawat']){                                                   

                                                        echo "<option value='$data[kode_perawat]' selected>$data[nama_perawat]</option>"; 
                                                        } else {
                                                            echo "<option value='$data[kode_perawat]'>$data[nama_perawat]</option>";   
                                                            }
                                                 }   
                                                ?>

                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Dokter</label>
                                            <select class="form-control" name="dokter">

                                                 <?php

                                                 $sql = $koneksi -> query ("SELECT * FROM dokter ORDER BY nama_dokter ASC");
                                                    while ($data = $sql->fetch_assoc()){

                                                    if($tampil['kode_dokter']==$data['kode_dokter']){                                                   

                                                        echo "<option value='$data[kode_dokter]' selected>$data[nama_dokter]</option>"; 
                                                        } else {
                                                            echo "<option value='$data[kode_dokter]'>$data[nama_dokter]</option>";   
                                                            }
                                                    }
                                                ?>

                                            </select>
                                        </div>                                  
                                           
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" placeholder="Keterangan" name="keterangan" rows="3"><?php echo $tampil['keterangan'];?>
                                                
                                            </textarea>
                                        </div>                                      
                                                                                                                                                                                                       
                                        <div>                                        
                                             <input type="submit" name="simpan" value="Edit" class="btn btn-primary" style="margin-top: 15px;">
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

    <?php 
        $a = $_POST ['noreg']; 
        $b = $_POST ['tanggal_daftar'];
        $c = $_POST ['nama_pasien'];
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

        $sql = $koneksi -> query ("UPDATE pasien SET tanggal_daftar='$b',nama_pasien='$c',umur='$d',jenis_kelamin='$e',no_hp='$f',kepala_keluarga='$g',alamat='$h',kode_diagnosa='$i',kode_traphy='$j',kode_perawat='$k',kode_dokter='$l',keterangan='$m' WHERE  no_reges='$a'");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil diedit")
                   window.location.href="?page=ps&kategori=Semua";
                </script>

                <?php
        }
    }

    ?>    