<html>
<head>
    <title>tambah jumlah pendaftar</title>
</head>
 
<body>
    <a href="index.php">kembali ke halaman utama</a>
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
                <td>Nomor handphone</td>
                <td><input type="text" name="NoHp"></td>
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
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $NoHp = $_POST['NoHp'];
        $email = $_POST['email'];
        
        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(id,nama,NoHp,email) VALUES('$id','$nama','$NoHp','$email')");
    
        echo "User tambah successfully. <a href='index.php'>View daftar</a>";
    }
    ?>
</body>

</script>
</html>