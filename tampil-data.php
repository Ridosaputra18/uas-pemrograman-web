<h3>Data Pemain</h3>

<table border="2">
    <tr>
        <td>NIK</td>
        <td>Nama</td>
        <td>Kota</td>
        <td>No HP</td>
        <td>Email</td>
    </tr>

    <?php 
    include 'koneksi.php';

    $ambildata = mysqli_query($koneksi, "SELECT * FROM tbsupport");
    while($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            
            <td>$tampil[nik]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[kota]</td>
            <td>$tampil[nohp]</td>
            <td>$tampil[email]</td>
        </tr>";

    }
    ?>
    <a href="input-data.php"><input type="button" value="Input data pemain"></a>
</table>