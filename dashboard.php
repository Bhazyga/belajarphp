
<?php 
include './config/database.php';


$sqlpenggunas = 'Select * from penggunas';

$result = $db->query($sqlpenggunas);



if (isset($_GET['deletepenggunas']) ){
    $id = $_GET['deletepenggunas'];
    
    $sqldeletepenggunas = "DELETE FROM penggunas where id=$id";
    
    if( $db->query($sqldeletepenggunas))
    echo "Berhasil Delete";
    header("Location: dashboard.php");
}
 







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menu Dashboard</title>
</head>

<body>
    
    
    <?php include 'navbaradmin.php' ?>
    <hr>
    
    <h1 class="text-danger">selamat datang di Dashboard Desa Batulawang <?= $_SESSION['username'] ?></h1>
    <h2>Menu Kami</h2>
    
  


    
    
    <?php include 'footer.php' ?>
</body>
</html>