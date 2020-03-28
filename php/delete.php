<?php
 include "db.php";
 if(isset($_GET['kode_pelanggan']))
 {
 $kode_pelanggan=$_GET['kode_pelanggan'];
 $q=mysqli_query($con,"DELETE FROM pelanggan WHERE kode_pelanggan=$kode_pelanggan");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>