
<h2>Daftar Mahasiswa</h2>
<table border="2">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>PROGDI</th></tr>
    <?php
    include 'konek.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
    $no=1;
    foreach ($mahasiswa as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['progdi']."</td>
              </tr>";
        $no++;
    }
    ?>
