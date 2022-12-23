<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all daftar data from database
$result = mysqli_query($mysqli, "SELECT * FROM peserta ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Nama Mahasiswa</title>
</head>
 
<body>
<a href="tambah.php">Tambah Mahasiswa </a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nomor</th>
        <th>Nama</th> 
        <th>NIM</th> 
        <th>Prodi</th> 
        <th>Email</th> 
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['prodi']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='ubah.php?id=$user_data[id]'>ubah</a> | <a href='hapus.php?id=$user_data[id]'>hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>