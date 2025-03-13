<?php 

include 'config/database.php';


$pesanberhasil = 'Berhasil menambahkan data';
$pesanerror = 'Gagal Menambahkan Data';

if (isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = password_hash($password,PASSWORD_BCRYPT);
    
    echo $username;

    $db->query("INSERT INTO penggunas (username, password) VALUES ( '$username', '$password' )");
    header('location: login.php');
    echo $pesanberhasil;
    
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
 <!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<section class="bg-white dark:bg-gray-900">
  <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
    <section class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
      <img
        alt=""
        src="./assets/gambarlogin (1).jpeg"
        class="absolute inset-0 h-full w-full object-cover opacity-80"
      />

      <div class="hidden lg:relative lg:block lg:p-12">
        <a class="block text-white" href="#">
          <span class="sr-only">Home</span>
        </a>

        <h2 class="mt-6 text-2xl font-bold text-cyan-200 sm:text-3xl md:text-4xl">
          Selamat datang di halaman login desa batulawang
        </h2>

        <p class="mt-4 leading-relaxed text-cyan-200">
          Login satu pintu desa batulawang.
        </p>
      </div>
    </section>

    <main
      class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
    >
      <div class="max-w-xl lg:max-w-3xl">
        <div class="relative -mt-16 block lg:hidden">
   

          <h1 class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl dark:text-white">
            Selamat Datang Di desa batulawang
          </h1>

          <p class="mt-4 leading-relaxed text-gray-500 dark:text-gray-400">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam dolorum aliquam,
            quibusdam aperiam voluptatum.
          </p>
        </div>

        <form action="register.php" method="POST" class="mt-8 grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label
              for="FirstName"
              class="block text-sm font-medium text-gray-700 dark:text-gray-200"
            >
              Masukan Nama Anda
            </label>

            <input
              type="text"
              id="FirstName"
              name="username"
              class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-xs dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label
              for="Password"
              class="block text-sm font-medium text-gray-700 dark:text-gray-200"
            >
              Masukan Password Anda
            </label>

            <input
              type="password"
              id="Password"
              name="password"
              class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-xs dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200"
            />
          </div>


          <div class="col-span-6">
            <label for="MarketingAccept" class="flex gap-4">
              <input
                type="checkbox"
                id="MarketingAccept"
                name="marketing_accept"
                class="size-5 rounded-md border-gray-200 bg-white shadow-xs dark:border-gray-700 dark:bg-gray-800 dark:focus:ring-offset-gray-900"
              />

              <span class="text-sm text-gray-700 dark:text-gray-200">
                Saya Setuju Dan Ingin Mendaftarkan Akun Disini
              </span>
            </label>
          </div>

          <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
            <button type="submit" name="register"
              class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:ring-3 focus:outline-hidden dark:hover:bg-blue-700 dark:hover:text-white"
            >
              Create an account
            </button>

            <p class="mt-4 text-sm text-gray-500 sm:mt-0 dark:text-gray-400">
              Sudah Memiliki Akun?
              <a href="login.php" class="text-gray-700 underline dark:text-gray-200">Log in</a>.
            </p>
          </div>
        </form>
      </div>
    </main>
  </div>
</section>
        


<?php include 'footer.php' ?>

</body>
</html>