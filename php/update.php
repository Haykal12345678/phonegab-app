<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $kode_pelanggan=$_POST['kode_pelanggan'];
 $nama_pelanggan=$_POST['nama_pelanggan'];
 $kontak=$_POST['kontak'];
 $alamat=$_POST['alamat'];
 $telepon=$_POST['telepon'];
 $q=mysqli_query($con,"UPDATE pelanggan SET `nama_pelanggan`='$nama_pelanggan',`kontak`='$kontak',`alamat`='$alamat',`telepon`='$telepon' WHERE `kode_pelanggan`='$kode_pelanggan'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>