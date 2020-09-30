<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><strong>Data Pasien</strong></h3> 

                    <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading"> Data Pesien </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                <th>No.</th>
                                <th class="text-center">Nama Pasien</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">No.Handphone</th>
                                <th class="text-center">Tanggal Daftar</th>
                                <th class="text-center">Diagnosa</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead> 
                            
                            <tbody>

                            <?php
                                $no = 1;

                                $ang=$_GET['kategori'];
                               
                                if($ang=="Semua")
                                {
                                    $sql = $koneksi -> query ("SELECT * FROM pasien,diagnosa WHERE diagnosa.kode_diagnosa= pasien.kode_diagnosa ");
                                }
                                else
                                {
                                    $sql = $koneksi -> query ("SELECT * FROM pasien,diagnosa WHERE diagnosa.kode_diagnosa= pasien.kode_diagnosa AND pasien.kode_diagnosa ='$_GET[kategori]'"); 
                                }

                                    while($data = $sql -> fetch_assoc())
                                    {
                                       
                            ?>

                            <tr>

                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data ['nama_pasien'] ?></td>
                                <td><?php echo $data ['jenis_kelamin'] ?></td>
                                <td class="text-center"><?php echo $data ['no_hp'] ?></td>
                                <td><?php echo $data ['tanggal_daftar'] ?></td>
                                <td><?php echo $data ['nama_diagnosa'] ?></td>

                                <td class="text-center"> 
                                    <a href="?page=tampil&aksi=detail&no_reges=<?php echo $data['no_reges']; ?>""><button type="button" class="btn btn-warning">Details</button> </a>
                                    <a href="?page=tampil&aksi=edit&no_reges=<?php echo $data['no_reges']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a href="?page=tampil&aksi=hapus&no_reges=<?php echo $data['no_reges']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
                                </td> 
                                          
                            </tr>
                                <?php 
                                
                                } 

                                ?>

                            </tbody>
                        </table>
                     </div>

                    <td colspan="2"><br>
                        <a href ="?page=tampil&aksi=kembali" class = "btn btn-success" style="margin-bottom: 5px;">Kembali </a>
                    </td>
                            
                </div>
            </div>

        </div>
</div>