<?php

	$kode_dokter = $_GET ['kode_dokter'];

	$koneksi -> query("delete from dokter where kode_dokter = '$kode_dokter'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=dokter";
     </script>