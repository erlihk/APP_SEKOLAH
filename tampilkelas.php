<?
include_once('config.php');
//hapus kelas
$id = isset($_GET['id'])?$_GET['id']:"";
if($id != ""){
    $del = mysqli_query($conn, "dalate from tbkelas where idkelas=$id");
    if($del){
        ?>
        <script>
            alert('Hapus Berhasil');
            location.herf='?hal=tampilkelas';
            </script>
            <?php
    }
}
$query = mysqli_query($conn, "select * from tbkelas order by nama_kelas");

?>
<a herf="?hal=tambahkelas">Tambah Data Kelas</a>
<br>
<br>
<table border="1" cellspacing=0 cellpading=0 width="80%">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Jurusan</th>
        <td>Edit</th>
        <td>Hapus</th>
</tr>
<?php
$no=1;
while($baris = mysql_fetch_array($query)){
    ?>
    <tr>
        <td><?=$no++?></td>
        <td><?=$baris['nama_kelas']?></td>
        <td><?=$baris['jurusan']?></td>
        <td>
            <a href="?hal=tampilkelas&id=<?=$baris['idkelas']?>"onclick="return confrim('Yakin akan dihapus?');">Hapus</a>
</td>
<td>
    <a href="?hal=tampilkelas&id=<?$baris['idkelas']?>"onclick="retutn conffirm('Yakin akan dihapus?');">Hapus</a>
</td>
</tr>
<?php
}
?>
</table>