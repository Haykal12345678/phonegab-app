<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_pelanggan=$_POST['nama_pelanggan'];
 $kontak=$_POST['kontak'];
 $alamat=$_POST['alamat'];
 $telepon=$_POST['telepon'];
 $q=mysqli_query($con,"INSERT INTO pelanggan (nama_pelanggan,kontak,alamat,telepon) VALUES ('$nama_pelanggan','$kontak','$alamat','$telepon')");
 if($q) 
  echo "success";
 else
  echo "error";
 }
 ?>