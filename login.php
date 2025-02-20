
<?php 

include 'config/database.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php include 'navbar.php' ?>
        <h1>Silahkan Login</h1>
        


<input type="text" placeholder="Masukan Username Anda" name="username">
<input type="password" placeholder="Masukan Password Anda" name="password">
<button type="submit" name="login" >Login</button>


<?php include 'footer.php' ?>

</body>
</html>