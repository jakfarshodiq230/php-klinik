<?php

	$kode_traphy = $_GET ['kode_traphy'];

	$koneksi -> query("DELETE FROM traphy WHERE kode_traphy = '$kode_traphy'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=traphy";
     </script>