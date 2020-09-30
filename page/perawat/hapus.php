<?php

	$kode_perawat = $_GET ['kode_perawat'];

	$koneksi -> query("DELETE FROM perawat WHERE kode_perawat = '$kode_perawat'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=perawat";
     </script>