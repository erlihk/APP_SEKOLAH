<?php
    include_once('config.php');
    $kelas = mysqli_query($coon, "select * from tbkelas");
    
    ?>

    <table>
        <tr>
            <td>Tahun</td>
            <td>
                <select id="tahun" required>
                    <option value="">==pilih tahun==</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
</select>
</td>
</tr>
<tr>
    <td>Bulan</td>
    <td>
        <select id="bulan" required>
            <option value="">==pilih bulan==</option>
            <option value="1">Januari</option>
            <option value="2">Febuari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option><
            <option value="12">Desember</option>
</select>
</td>
</tr>
<tr>
    <td>Kelas</td>
    <td>
        <select id="kelas" required>
            <option value ="">pilih kelas==</option>
            <?php
            $no=1
            while($row=mysqli_fetch_array($kelas)){
            ?>
            <option value="<?=$row['idkelas']?>"><?=row['nama_kelas']?></option>
            <?php
            }
            ?>
            </select>
        </td>
        <tr>
            <td>
                <button onclick="cetak();"id="cetak">Cetak</button>
        </td>
        </tr>
        </table>
        <script>
            function cetak(){
                var tahun = document.getElementByid('tahun').value;
                var bulan = getElemnByid('bulan').value;
                var kelas = document.getElementByid('kelas').value;
                window.open('cetak.php?tahun='+tahun+'&bulan='+bulan '&kelas='+kelas,_'blank',"toolbar=yes,yes,scroolbars=yes,resizaabble=yes,top=0,left=0,width=1000,heigt=1000")
            }
            </script>





