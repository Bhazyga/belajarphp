<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Start Bootstrap -->
    <!-- Start Tailwind -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- End Of Tailwind -->

    <title>Menu Awal</title>
</head>

<body>

    <?php include 'navbar.php' ?>
    
    
    
<!-- Ini Gambar Menu Depan -->

    <section
  class="overflow-hidden h-screen bg-[url(/belajarphp/assets/gambardepan.png)] bg-cover bg-center bg-no-repeat"
>
  <div class="bg-black/50 h-screen p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="text-center ltr:sm:text-left rtl:sm:text-right">
      <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">Desa Batulawang</h2>

      <p class="hidden max-w-lg text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed">
      Pusat Informasi Satu Pintu & Ekonomi Desa Batulawang
      </p>

      <div class="mt-4 sm:mt-8">
        <a
          href="https://api.whatsapp.com/send/?phone=08123123123&Halo%20Website%20Menghubungi%20Desa%20Batulawang"
          class="inline-block rounded-full bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:ring-3 focus:ring-yellow-400 focus:outline-hidden"
        >
          Hubungi kami
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Gambar Menu Depan Ends -->



<!-- Ini List Product -->
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <header>
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>

      <p class="mt-4 max-w-md text-gray-500">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
        dicta incidunt est ipsam, officia dolor fugit natus?
      </p>
    </header>

    <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <li>
        <a   href="https://api.whatsapp.com/send/?phone=08123123123&Halo%20Saya%20Menghubungi%20Desa%20Batulawang ingin menyewa outbond 1"
           class="group block overflow-hidden">
          <img
            src="assets/product (1).jpg"
            class="h-[220px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Tiket
            </h3>

            <p class="mt-2">
              <span class="sr-only"> Harga Tiket Reguler </span>

              <span class="tracking-wider text-gray-900"> 25.000 -Rp, include parkir </span>
            </p>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img
          src="assets/product (2).jpg"
            class="h-[220px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Tiket
            </h3>

            <p class="mt-2">
              <span class="sr-only"> Harga Tiket Reguler </span>

              <span class="tracking-wider text-gray-900"> 25.000 -Rp, include parkir </span>
            </p>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img
          src="assets/product (3).jpg"
            class="h-[220px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

          <div class="relative bg-white pt-3">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Tiket
            </h3>

            <p class="mt-2">
              <span class="sr-only"> Harga Tiket Reguler </span>

              <span class="tracking-wider text-gray-900"> 25.000 -Rp, include parkir </span>
            </p>
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img
          src="assets/product (4).jpg"
            class="h-[220px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
           />

          <div class="relative bg-white pt-3">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
              Tiket
            </h3>

            <p class="mt-2">
              <span class="sr-only"> Harga Tiket Reguler </span>

              <span class="tracking-wider text-gray-900"> 25.000 -Rp, include parkir </span>
            </p>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>
<!-- List Product Ends -->


    <?php include 'footer.php' ?>


</body>
</html>