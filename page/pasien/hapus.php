<?php

	$kode_pasien = $_GET ['no_reges'];

	$koneksi -> query("DELETE FROM pasien WHERE no_reges = '$kode_pasien'");

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=ps&kategori=Semua";
     </script>