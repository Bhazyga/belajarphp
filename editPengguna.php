<?php 
include './config/database.php';


$password_enkripsi = '';


if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM penggunas WHERE id =?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = password_hash($password,PASSWORD_BCRYPT);

    $sqlUpdate = "UPDATE penggunas SET username = ?, password = ? WHERE id = ?";

    $stmt = $db->prepare($sqlUpdate);
    $stmt->bind_param("ssi", $username, $password, $id);

    if ($stmt->execute()) {
        header("Location: dashboard.php");
        exit;
    }else {
        echo "Gagal Menambahkan Data";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menu Edit Pengguna</title>
</head>

<body>
    
    
    <?php include 'navbaradmin.php' ?>
    <hr>
    
    <h1 class="text-danger">selamat datang di Dashboard Desa Batulawang <?= $_SESSION['username'] ?></h1>
    <h2>Menu Edit Pengguna</h2>
    
    <form method="POST" action="editPengguna.php">
    <div class="flex">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <label
        for="username"
        class="mt-2 mb-2 relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-xs focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 dark:border-gray-700 dark:bg-gray-800"
        >
        <input
            type="text"
            id="username"
            placeholder="Username"
            name="username"
            value="<?= $user['username']?>"
            class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:ring-0 focus:outline-hidden sm:text-sm dark:text-white"
        />

        <span
            class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs dark:text-gray-200"
        >
            Username
        </span>
        </label>

        <label
        for="password"
        class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-xs focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 dark:border-gray-700 dark:bg-gray-800"
        >
        <input
            type="password"
            id="password"
            placeholder="Password"
            name="password"
            value=""
            class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:ring-0 focus:outline-hidden sm:text-sm dark:text-white"
        />

        <span
            class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs dark:text-gray-200"
        >
            Password
        </span>
        </label>
        <button type="submit" > Submit </button>
    </div>
  </form>

    <?php include 'footer.php' ?>
</body>
</html>