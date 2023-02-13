<html>
<head>
  <title>DATA</title>
  <center>
    <h1>DATA TOKO BAHAN BANGUNAN <h1>
</head>
  
   <table border="1">
     <tr>
        <td>NO</td>
        <td>Nama toko</td>
        <td>alamat</td>
        <td>No siup</td>
        <td>Nama pemilik</td>
        <td>Nama bahan </td>
        <td>satuan</td>
        <td>harga</td>
        <td>aksi </td>
</tr>
    <?php
    include("koneksi.php");
    $query = mysqli_query($koneksi,"SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan=tb_bahan.id_bahan");

    $no = 1;
    foreach($query as $row) :

    ?>
    <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_toko']; ?></td> 
            <td><?= $row['alamat']; ?></td> 
            <td><?= $row['no_siup']; ?></td> 
            <td><?= $row['nama_pemilik']; ?></td> 
            <td><?= $row['nama_bahan']; ?></td> 
            <td><?= $row['satuan']; ?></td>
            <td><?= $row['harga']; ?></td>  

            <td>
                <a href="edit.php?id_toko=<?= $row['id_toko'];?>"><input type="button" name="edit" value="edit"></a>
                <a href="hapus.php?id_toko=<?= $row['id_toko'];?>"><input type="button" name="hapus" value="hapus"></a>
            </td>
    </tr>

    <?php endforeach;    ?>

    </table>
    <p>
        <td><a href="tambah.php" ><input type="button" name="tambah" value="tambah"></a><td>
                </html>
