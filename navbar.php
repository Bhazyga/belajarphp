<script src="https://unpkg.com/@tailwindcss/browser@4"></script>

<header class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="md:flex md:items-center md:gap-12">
        <a class="block text-teal-600" href="#">
          <span class="sr-only">Home</span>
            
          <div href="index.php">
          <img class="flex" href="index.php" src="assets/logo.png" alt="Logo" width="30" height="50">
          </div>
        </a>
      </div>

      <div class="hidden md:block">
        <nav aria-label="Global">
          <ul class="flex items-center gap-6 text-sm">
            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="index.php"> Home </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Sejarah Kami </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> History </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Services </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Projects </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Blog </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="flex items-center gap-4">
        <div class="sm:flex sm:gap-4">
          <a
            class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm"
            href="login.php"
          >
            Login
          </a>

          <div class="hidden sm:flex">
            <a
              class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
              href="register.php"
            >
              Register
            </a>
          </div>
        </div>

        <div class="block md:hidden">
        <button
            class="rounded-sm bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>