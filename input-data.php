<!-- Form input -->
<h3>Masukkan data diri</h3>

<form action="" method="POST">
    <table>
        <tr>
            <td width="130">NIK</td>
            <td><input type="text" name="nik"></td>
        </tr>
        <tr>
            <td width="130">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td width="130">Kota</td>
            <td><input type="text" name="kota"></td>
        </tr>
        <tr>
            <td width="130">No HP</td>
            <td><input type="text" name="nohp"></td>
        </tr>
        <tr>
            <td width="130">Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>
<a href="tampil-data.php"><input type="button" value="Tampilkan data pemain"></a>


<!-- untuk menyimpan ke database -->
<?php
include 'koneksi.php';

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "INSERT INTO tbsupport set
    nik = '$_POST[nik]',
    nama = '$_POST[nama]',
    kota = '$_POST[kota]',
    nohp = '$_POST[nohp]',
    email = '$_POST[email]'");

    echo "Data berhasil disimpan";
}