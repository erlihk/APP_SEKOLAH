<?php
    require_once('config.php');
    if(isset($_POST['simpan'])){
        extract($_POST);
        $insert = mysqli_query($conn,"insert into tbsiswa values(null,'$nis','$nisn','$nama','$alamat','$hp','$agama','$jk')");
        if($insert){
            ?>
                <script>
                    alert('simpan berhasil');
                    location.href='index.php';
                </script>
            <?php
        }
    }
?>
<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <a href="index.php">Kembali ke home</a>
        <br>
        <br>
        <form action="tambah.php" method="post">
            <table>
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="nis" placeholder="Nomer Induk Siswa" maxlength="20"></td>
                </tr>   
                <tr>
                    <td>NISN</td>
                    <td><input type="text" name="nisn" placeholder="Nomer Induk Siswa Nasional" maxlength="10"></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input type="text" name="nama" placeholder="Nama Siswa" maxlength="50"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" placeholder="Alamat"></td>
                </tr>
                <tr>
                    <td>HP</td>
                    <td><input type="text" name="hp" placeholder="Nomer HP" maxlength="15"></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama">
                            <option value="">==pilih agama==</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katholik">Katholik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">Konghucu</option>
                        </select>
                    </td>
                    <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="L">Laki-Laki
                        <input type="radio" name="jk" value="L">Perempuan
                    </td> 
                    <tr>
                        <td><button type="submit" name="simpan" value="simpan">Simpan</button></td>
                        <td><button type="reset" name="reset">Reset</button></td>
                    </tr>
                </tr>
                </tr>
            </table>
        </form>
    </body>
</html>