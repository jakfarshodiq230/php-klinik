<?php

    $kode_traphy = $_GET ['kode_traphy'];
    $sql = $koneksi -> query ("SELECT * FROM traphy WHERE kode_traphy ='$kode_traphy'");
    $tampil = $sql -> fetch_assoc();
?>

<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><strong>Edit Data Traphy</strong></h3>
    </div>
        <!-- /.col-lg-12 -->
</div>
        <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Traphy</div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <form method="post" role="form" action="">

                            <div class="col-lg-6">
                                <div class="form-group">
                                <label>Nama Diagnosa</label>
                                    <input class="form-control" placeholder="Nama traphy" name="nama_traphy" value="<?php echo $tampil['nama_traphy'];?>"/>
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
            <!-- /.row -->
                      
    <?php

    $nama_traphy = $_POST ['nama_traphy'];

    $simpan = $_POST ['simpan'];

    if ($simpan) {

        $sql = $koneksi -> query ("UPDATE traphy SET nama_traphy ='$nama_traphy' WHERE kode_traphy ='$kode_traphy'");

        if ($sql){
            ?>

                <script type="text/javascript">
                    alert ("Data Berhasil diedit")
                    window.location.href="?page=traphy"; 
                </script>

                <?php
        }
    }

    ?>  
