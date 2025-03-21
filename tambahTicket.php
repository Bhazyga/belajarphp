
<?php 
session_start();
include './config/database.php';




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menu Tambah Ticket</title>
</head>

<body>
    
    
    <?php include 'navbaradmin.php' ?>
    <hr>
    
    <h1 class="text-danger">selamat datang di Dashboard Desa Batulawang <?= $_SESSION['username'] ?></h1>
    <h2>Menu CRUD Ticket</h2>
    
  


<div class="container">
  <table
    class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm dark:divide-gray-700 dark:bg-gray-900"
  >
    <thead class="ltr:text-left rtl:text-right">
      <tr>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Id</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
          Nama
        </th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Tanggal Buat</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
          Aksi
        </th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
        <?php while ($row = $result->fetch_assoc()) : ?>
      <tr class="odd:bg-gray-50 dark:odd:bg-gray-800/50">
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
          <?= $row['id'] ?>
        </td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"><?= $row['username'] ?></td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"><?= $row['created_at'] ?></td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">
            <a class="btn text-red-400" href="dashboard.php?deletepenggunas=<?= $row['id'];?>">Delete</a>
            <a class="btn text-yellow-400" href="dashboard.php?editpengguna=<?= $row['id'];?>">Edit</a>
        </td>
      </tr>
      <?php endwhile ?>
    </tbody>
  </table>
</div>


    
    <form action="dashboard.php" method="POST">
        <button type="submit" class="btn btn-danger" name="logout" >Logout</button>
    </form>
    
    
    
    <?php include 'footer.php' ?>
</body>
</html>