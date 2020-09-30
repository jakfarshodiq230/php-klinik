<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><strong>Data Traphy</strong></h3>
                    <!-- Advanced Tables -->
        <a href ="?page=traphy&aksi=tambah" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"></i> Tambah Data </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data Traphy </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                 <th>No.</th>   
                                <th class="text-center">Nama Traphy</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $no = 1;
                                $sql = $koneksi -> query ("SELECT * FROM traphy");

                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo  $data ['nama_traphy'] ?></td>
                                
                                <td class="text-center"> 
                                    <a href="?page=traphy&aksi=edit&kode_traphy=<?php echo $data['kode_traphy']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a href="?page=traphy&aksi=hapus&kode_traphy=<?php echo $data['kode_traphy']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
