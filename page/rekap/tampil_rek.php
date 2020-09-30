<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><strong>Data Rekap Daerah Per-Angkatan</strong></h3>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Masukan Tanggal
			</div>

			<div class="panel-body">
				<div class="row">
					<form method="get" role="form" action="?page=tampil_rek">


						<div class="col-lg-6">
							<input type="hidden" name="page" value="tampil_rek">

							<div class="form-group">
								<label>Tanggal Awal</label>
								<input class="form-control" type="date" placeholder="Tanggal Daftar" name="tanggal1" required>

								<label>Tanggal Akhir</label>
								<input class="form-control" type="date" placeholder="Tanggal Daftar" name="tanggal2" required>
							</div>

							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button></a>


						</div>
						<!-- /.col-lg-6 (nested) -->
					</form>

				</div>
				<!-- /.row (nested) --><br>

				<div class="panel panel-default">
					<div class="panel-heading"> Data Pasien</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>No.</th>
										<th class="text-center">Nama Daerah</th>
										<th class="text-center">Jenis Kelamin</th>
										<th class="text-center">Umur</th>
										<th class="text-center">Kepala Keluarga</th>
										<th class="text-center">No Hp</th>
										<th class="text-center">Alamat</th>
										<th class="text-center">Diagnosa</th>
										<th class="text-center">Traphy</th>
										<th class="text-center">Prawat</th>
										<th class="text-center">Dokter</th>
									</tr>
								</thead>

								<tbody>

									<?php
									$no = 1;

									$tgl1 = @$_GET['tanggal1'];
									$tgl2 = @$_GET['tanggal2'];
									$sql = $koneksi->query("SELECT * FROM pasien,diagnosa,dokter,perawat,traphy WHERE pasien.kode_diagnosa = diagnosa.kode_diagnosa and pasien.kode_dokter = dokter.kode_dokter and pasien.kode_perawat = perawat.kode_perawat and pasien.kode_traphy=traphy.kode_traphy AND tanggal_daftar BETWEEN'$tgl1' AND '$tgl2'");
									while ($data = $sql->fetch_assoc()) {

									?>

										<tr>

											<td><?php echo $no++; ?></td>
											<td class="text-center"><?php echo $data['nama_pasien'] ?></td>
											<td class="text-center"><?php echo $data['jenis_kelamin'] ?></td>
											<td class="text-center"><?php echo $data['umur'] ?></td>
											<td class="text-center"><?php echo $data['kepala_keluarga'] ?></td>
											<td class="text-center"><?php echo $data['no_hp'] ?></td>
											<td class="text-center"><?php echo $data['alamat'] ?></td>
											<td class="text-center"><?php echo $data['nama_diagnosa'] ?></td>
											<td class="text-center"><?php echo $data['nama_traphy'] ?></td>
											<td class="text-center"><?php echo $data['nama_perawat'] ?></td>
											<td class="text-center"><?php echo $data['nama_dokter'] ?></td>
										</tr>
									<?php

									}

									?>

								</tbody>
							</table>
						</div>

						<td colspan="2"> <br>
							<a href="cetak_pdf_rekap_perdaerah.php?page=rekap&tanggal1&tanggal2=<?php echo $_GET['tanggal1'] and $_GET['tanggal2']; ?>" class="btn btn-success" style="margin-bottom: 5px;"><i class="fa fa-print"> Cetak PDF </i></a>
						</td>



					</div>
				</div>

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->