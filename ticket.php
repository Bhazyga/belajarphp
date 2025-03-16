
<?php 
include './config/database.php';


$sqlticket = 'Select * from ticket';

$result = $db->query($sqlticket);



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
    
    <div class="text-center">  
      <h1 class="text-danger">Selamat datang <b class="text-biru"><?= $_SESSION['username'] ?></b></h1>
      <h2>Menu Pengguna</h2>
    </div>
  


<div class="">
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
          Delete
        </th>

        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
          Edit
        </th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
        <?php while ($row = $result->fetch_assoc()) : ?>
      <tr class="odd:bg-gray-50 dark:odd:bg-gray-800/50">
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
          <?= $row['id'] ?>
        </td>
      
        <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"><?= $row['nama_ticket'] ?></td>
       
        <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"><?= $row['gambar'] ?></td>
       
        <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">
          <a class="btn text-red-400" href="dashboard.php?deletepenggunas=<?= $row['id'];?>">Delete</a>
        </td>

        <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">
          <a class="btn text-yellow-400" href="editPengguna.php?id=<?= $row['id'];?>">Edit</a>
        </td>
      </tr>
      <?php endwhile ?>
    </tbody>
  </table>
</div>
    
    
    <?php include 'footer.php' ?>
</body>
</html>