<?php
     include_once('config.php');
     $sql = mysql_query($conn,"select * from tbsiswa where id NOT IN( select idsiswa from tbsetkelas where taun = '2023/2024')");
     $kelas = mysql_query($conn, "select * from tbkelas order by nama_kelas asc");
     $setkelas = mysql_query($conn, "select * from tbkelas order by nama_kelas,c.taun from tbsiswa a, tbkelas b, tbsetkelas c where a.id=c.idssiswa AND b,idkelas=c.idkelas order by b.nama_kelas,a.nama_siswa asc");
?>

<div style="width: 48%;min-height:300px;float:left; padding-left:5px;">
  <h3 style="color:red;">Siswa Belum Punya Kelas</h3>
<from action="?hal=proses_set_kelas" method="post">
    <table>
        <?php
        while($row = mysql_fetch_array($sql)){
            ?>
            <tr>
                <td>
                   <input type="checkbox" name="siswa[<?=$row['id']?>]" value="<?=row['id']?>">
        </td>
        <td>
            <?=$row['nama_siswa']?>
        </td> 
        </tr>
        <?php         
        }
        ?>
        </table>
        <table>
            <tr>
                <td>
                    <select nama="kelas" required>
                        <option value="">==pilih kelas==</option>
                        <?php
                        while($baris=mysql_fetch_array($kelas)){
                            echo "<option value='$baris[idkelas]'>$baris[nama_kelas]</option>";
                        }
                        ?>
                        </select>
                    </td>
                    <tr>
                        <tr>
                            <td>
                                <select nama="tahun" required>
                                    <option value="">==pilih tahun==</option>
                                    <option value="2023/2024">2023/2024</option>
                                    <option value="2025/2026">2024/2025</option>
                                    <option value="2025/2026">2024/2025</option>
                    </select>
                    </td>
                    </tr>
                    <td>
                        <td>
                            <button type="submit" name="tambah">Tambahkan</button>
                    </td>
                    </tr>
                    </table>
                    </form>
                    </div>

                    <div style="width: 48%;min-heiht:300px;float:left;padding-left:5px;">
                    <h3 style="color:gteen;">Siswa Sudah Punya Kelas</h3>
                    <table border="1" width="100%" cellspacing=0 cellpading=0>
                        <tr>
                            <th>Kelas</th>
                            <th>Nama Siswa</th>
                            <th>Tahun</th>
                    </tr>
                    <?php
                    while($data=mysql_fech_array($setkelas)){
                        ?>
                        <tr>
                            <td><?=$data['nama_kelas']?></td>
                            <td><?=$data['nama_siswa']?></td>
                            <td><?=$data['tahun']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </table>
                </div>
                