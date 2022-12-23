<?php
include_once("config.php");
if(isset($_POST['update']))
{	
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $prodi=$_POST['prodi'];
    $email=$_POST['email'];
        
    $result = mysqli_query($mysqli, "UPDATE peserta SET id='$id',nama='$nama',nim='$nim',prodi='$prodi',email='$email' WHERE id=$id");
    
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM peserta WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data ['id'];
    $nama = $user_data['nama'];
    $nim = $user_data['nim'];
    $prodi = $user_data['prodi'];
    $email = $user_data['email'];
    
}
?>
<html>
<head>	
    <title>Ubah Data Peserta</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="ubah.php">
        <table border="0">
            <tr> 
                <td>Nomor</td>
                <td><input type="text" name="id" value=<?php echo $id?>></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim" value=<?php echo $nim;?>></td>
            </tr>
            <tr> 
                <td>Program Studi</td>
                <td><input type="text" name="prodi" value=<?php echo $prodi;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>