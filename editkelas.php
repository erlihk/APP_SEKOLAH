<?php
    require_once('config.php');
    if(isset($_POST['update'])){
        extract($_POST);
        $update = mysqli_query($conn,"update tbkelas set nama=_kelas='$nama_kelas',jurusan='$jurusan' where idkelas=$id");
        var_dump($update);
        if($update){
            ?>
            <script>
                alert('simpan berhasil');
                location.href='?hal=tampilkelas';
            </script>
            <?php
        }else{
            echo "<script>alert('update GAGAL')</script>";
            header("location:?hal=tampilkelas");
        }
    }
    
    $id = isset($_GET['id'])?$_GET['id']:"";
    if($id == ""){
        echo "<script>alert('data tidak ditemukan');location.href='?hal=tampilkelas';</script>";
    }else{
        $query = mysqli_query($conn,"select * from tbsiswa where id=$id");
        $baris = mysqli_fetch_array($query);
    }
    ?>
    <html>
        <head>
            <title>Edit Data</title>
        </head>
        <body>
            <a href="?hal=tampilkelas">Kembali ke home</a>
            <br>
            <br>
            <form action="?hal=editkelas" method="post">
                <table>
                    <input type="hidden" name="id" value="<?=$baris['idkelas']?>">
                    <tr>
                        <td>Nama Kelas</td>
                        <td><input type="text" nama="nama_kelas" placeholder="nama_kelas" maxlength="10" value="<?$baris['nama_kelas']?>"></td>
                    </tr>    
                    <tr>
                     <td>Agama</td>
                     <td>
                        <select name="agama">
                             <option <?=$baris['Jurusan']=='AK'?'selected':''?> value="AK">AK</option>
                             <option <?=$baris['Jurusan']=='MP'?'selected':''?> value="MP">MP</option> 
                             <option <?=$baris['Jurusan']=='BD'?'selected':''?> value="BD">BD</option>
                             <option <?=$baris['Jurusan']=='MM'?'selected':''?> value="MP">MP</option>
                             <option <?=$baris['Jurusan']=='RPL'?'selected':''?> value="RPL">RPL</option>
                        </select> 
                    </td>
                    <tr>
                    <td><button type="submit" nama="update"></button></td>
                    <td></td>
                   </tr>
                    <tr>
                    </tr>
                </tr>
                </tr>
            </table>
        </form>
    </body>
</html>