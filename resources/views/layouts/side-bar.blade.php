<!-- component -->

<style>
    /* Estilos para el señalador de posición (border-left) */
    .sidebar li:hover a::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 4px;
      background: linear-gradient(to bottom, #00FFFF, #008080); /* Gradiente cyan */
    }

    /* Estilos para cambiar el color del ícono y el texto a blanco al pasar el cursor */
    .sidebar li:hover a i,
    .sidebar li:hover a span {
      color: white;
    }
    
  </style>

  <!-- Sidebar -->
  <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-white h-full text-gray-600 transition-all duration-300 border-none z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
      <ul class="flex flex-col py-4 space-y-1">
        <li>
          <a href="{{ route('resumes.create') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-cyan-500 text-gray-600 hover:text-gray-800 border-l-4 border-transparent">
            <!-- Icono Home de Font Awesome -->
            <span class="inline-flex justify-center items-center ml-4">
              <i class="fa-solid fa-file"></i>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">My Resume</span>
          </a>
        </li>
        <li>
          <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-cyan-500 text-gray-600 hover:text-gray-800 border-l-4 border-transparent">
            <!-- Icono Check Circle de Font Awesome -->
            <span class="inline-flex justify-center items-center ml-4">
              <i class="fa-regular fa-address-card"></i>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Post a new Job</span>
          </a>
        </li>
        <li>
          <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-cyan-500 text-gray-600 hover:text-gray-800 border-l-4 border-transparent">
            <!-- Icono Users de Font Awesome -->
            <span class="inline-flex justify-center items-center ml-4">
              <i class="fas fa-check-circle"></i>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Created Job</span>
          </a>
        </li>
        <li>
          <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-cyan-500 text-gray-600 hover:text-gray-800 border-l-4 border-transparent">
            <!-- Icono Store de Font Awesome -->
            <span class="inline-flex justify-center items-center ml-4">
              <i class="fa-solid fa-briefcase"></i>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Applied Job</span>
          </a>
        </li>
        <li>
          <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-cyan-500 text-gray-600 hover:text-gray-800 border-l-4 border-transparent">
            <!-- Icono Sign Out de Font Awesome -->
            <span class="inline-flex justify-center items-center ml-4">
              <i class="fas fa-sign-out-alt"></i>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Setting</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- ./Sidebar -->
</body>
</html>