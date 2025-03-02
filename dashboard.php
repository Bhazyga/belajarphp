
<?php 
session_start();

if (isset($_POST['logout'])){
    session_destroy();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu Dashboard</title>
</head>

<body>
    
    
    <?php include 'navbaradmin.php' ?>
    <hr>
    
    <h1 class="text-danger">selamat datang di Dashboard Desa Batulawang <?= $_SESSION['username'] ?></h1>
    <h2>Menu Kami</h2>
    <?php include 'footer.php' ?>

<form action="dashboard.php" method="POST">
    <button type="submit" name="logout" >Logout</button>
</form>


</body>
</html>