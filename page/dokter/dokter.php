<div class="row">
    <div class="col-md-12">
         <h3 class="page-header"><strong>Data Dokter</strong></h3>
                    <!-- Advanced Tables -->
        <a href ="?page=dokter&aksi=tambah" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"></i> Tambah Data </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data Dokter </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Dokter</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Spesialis</th>
                                <th class="text-center">No _hp</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $sql = $koneksi -> query ("select * from dokter");
                                $no=1;
                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>

                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $data ['nama_dokter'] ?></td>
                                <td class="text-center"><?php echo $data ['tanggal_lahir'] ?></td>
                                <td class="text-center"><?php echo $data ['Jenis_kelamin'] ?></td>
                                <td class="text-center"><?php echo $data ['sepesialis'] ?></td>
                                <td class="text-center"><?php echo $data ['no_hp'] ?></td>
                                <td class="text-center"><?php echo $data ['alamat'] ?></td>
                                
                                <td class="text-center"> 
                                    <a href="?page=dokter&aksi=edit&kode_dokter=<?php echo $data['kode_dokter']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="?page=dokter&aksi=hapus&kode_dokter=<?php echo $data['kode_dokter']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
                                </td> 
                                          
                            </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                     </div>
                            
                </div>
            </div>

        </div>
</div>