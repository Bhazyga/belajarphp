
<?php 
session_start();


include 'config/database.php';


if (isset($_SESSION['isLogin'])){
    header('location: dashboard.php');
}

if (isset($_SESSION['isLogin']) === true){
    header('location: dashboard.php');
    exit;
}

if (isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $db->query("SELECT * FROM penggunas Where username = '$username' AND password = '$password'");

    if ($result->num_rows > 0) {
        $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['isLogin'] = true;
        echo "<script>alert('Login Berhasil!'); window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Username atau Password salah!'); window.location.href='login.php';</script>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>

        <?php include 'navbar.php' ?>
        <h1 class="text-primary" >Silahkan Login</h1>
        

<form action="login.php" method="POST">
<input type="text" placeholder="Masukan Username Anda" name="username">
<input type="password" placeholder="Masukan Password Anda" name="password">
<button class="btn btn-success" type="submit" name="login" >Login</button>
</form>

<?php include 'footer.php' ?>

</body>
</html>