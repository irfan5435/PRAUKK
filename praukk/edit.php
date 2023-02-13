<?php
include("koneksi.php");
if(!isset($_GET['id_toko'])){
          header('location:tampil.php');
}

  $id = $_GET['id_toko'];
  $sql = "SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan = tb_bahan.id_bahan WHERE tb_toko.id_toko='$id'";
  $query = mysqli_query($koneksi,$sql);
  $tb_toko= mysqli_fetch_array($query)
  
?>
<center>
   <form action= "proses_edit.php" method="POST">
    <tr>
        <td><input type="hidden" name="id_toko" value="<?php echo $tb_toko['id_toko'];?>"/></td>
</tr>
 <table border="3">
    <tr>
    <td><laber for="nama_toko">nama toko</label></td>
    <td><input type="text" name="nama_toko" value="<?php echo $tb_toko['nama_toko']; ?>"/></td>
</tr>
<tr>
    <td><laber for="alamat">alamat</label></td>
    <td><input type="text" name="alamat" value="<?php echo $tb_toko['alamat']; ?>"/></td>
</tr>
<tr>
    <td><laber for="no_siup">no siup</label></td>
    <td><input type="text" name="no_siup" value="<?php echo $tb_toko['no_siup']; ?>"/></td>
</tr>
<tr>
    <td><laber for="nama_pemilik">nama pemilik</label></td>
    <td><input type="text" name="nama_pemilik" value="<?php echo $tb_toko['nama_pemilik']; ?>"/></td>
</tr>
<tr>
    <td><laber for="nama_bahan">nama bahan</label></td>
    <td><input type="text" name="nama_bahan" value="<?php echo $tb_toko['nama_bahan']; ?>"/></td>
</tr>
<tr>
    <td><laber for="satuan">satuan</label></td>
    <td><input type="number" name="satuan" value="<?php echo $tb_toko['satuan']; ?>"/></td>
</tr>
<tr>
    <td><laber for="harga">harga</label></td>
    <td><input type="number" name="harga" value="<?php echo $tb_toko['harga']; ?>"/></td>
</tr>
<tr>
    <td><input type="submit" name="edit" value="EDIT"></td>
</tr>
</table>
  <a href="tampil.php"><input type="button" value="kembali"></a>




</form>

</center>
</body>
<html>