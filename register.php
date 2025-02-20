
<?php 

include 'config/database.php';

if (isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;

    $db->query("INSERT INTO penggunas (username, password) VALUES ( '$username', '$password' )");
}
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
        


        <form action="register.php" method="POST">
            <input type="text" placeholder="Masukan Username Anda" name="username">
            <input type="password" placeholder="Masukan Password Anda" name="password">
            <button type="submit" name="register" >Register</button>
        </form>
            

<?php include 'footer.php' ?>

</body>
</html>