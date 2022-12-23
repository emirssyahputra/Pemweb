<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
 
<body>
    <a href="index.php">Halaman Utama</a>
    <br/><br/>
 
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nomor</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Program Studi</td>
                <td><input type="text" name="prodi"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="tambah" ></td>
            </tr>
        </table>
    </form>
    
    <?php

    if(isset($_POST['Submit'])) {
        $id = $_POST ['id'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $email = $_POST['email'];
        
        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO peserta(id,nama,nim,prodi,email) VALUES('$id','$nama','$nim','$prodi','$email')");
    
        echo "User tambahed successfully. <a href='index.php'>View peserta</a>";
    }
    ?>
</body>

</script>
</html>