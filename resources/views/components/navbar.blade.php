<header class="fixed top-0 left-0 w-full bg-white shadow z-50">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center h-16">
        <a href="{{ url('/') }}" class="flex items-center" style="margin-left: 72px;">
          <img src="{{ asset('image/PPLG.png') }}" alt="Logo"
               class="max-h-16 w-auto hover:scale-105 hover:shadow-lg transition-all duration-300">
        </a>
      </div>

      <!-- Desktop Menu -->
      <nav class="hidden md:flex gap-6">
        <a href="#"
           class="text-gray-500 hover:text-teal-600 transition-all duration-300 relative after:absolute after:left-1/2 after:-bottom-1 after:h-0.5 after:w-0 after:bg-teal-600 after:transition-all after:duration-300 after:content-[''] hover:after:left-0 hover:after:w-full after:origin-center hover:scale-105">
          About
        </a>
        <a href="#"
           class="text-gray-500 hover:text-teal-600 transition-all duration-300 relative after:absolute after:left-1/2 after:-bottom-1 after:h-0.5 after:w-0 after:bg-teal-600 after:transition-all after:duration-300 after:content-[''] hover:after:left-0 hover:after:w-full after:origin-center hover:scale-105">
          Careers
        </a>
        <a href="#"
           class="text-gray-500 hover:text-teal-600 transition-all duration-300 relative after:absolute after:left-1/2 after:-bottom-1 after:h-0.5 after:w-0 after:bg-teal-600 after:transition-all after:duration-300 after:content-[''] hover:after:left-0 hover:after:w-full after:origin-center hover:scale-105">
          History
        </a>
        <a href="#"
           class="text-gray-500 hover:text-teal-600 transition-all duration-300 relative after:absolute after:left-1/2 after:-bottom-1 after:h-0.5 after:w-0 after:bg-teal-600 after:transition-all after:duration-300 after:content-[''] hover:after:left-0 hover:after:w-full after:origin-center hover:scale-105">
          Services
        </a>
        <a href="#"
           class="text-gray-500 hover:text-teal-600 transition-all duration-300 relative after:absolute after:left-1/2 after:-bottom-1 after:h-0.5 after:w-0 after:bg-teal-600 after:transition-all after:duration-300 after:content-[''] hover:after:left-0 hover:after:w-full after:origin-center hover:scale-105">
          Projects
        </a>
        <a href="#"
           class="text-gray-500 hover:text-teal-600 transition-all duration-300 relative after:absolute after:left-1/2 after:-bottom-1 after:h-0.5 after:w-0 after:bg-teal-600 after:transition-all after:duration-300 after:content-[''] hover:after:left-0 hover:after:w-full after:origin-center hover:scale-105">
          Blog
        </a>
      </nav>

      <!-- Hamburger Button -->
      <button id="mobileBtn" class="md:hidden p-2 rounded bg-gray-100 focus:outline-none">
        <svg id="hamburgerIcon"
             class="w-6 h-6 transition-transform duration-300 rotate-0 data-[open]:rotate-90"
             fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu"
       class="md:hidden overflow-hidden max-h-0 data-[open]:max-h-screen transition-all duration-500 ease-in-out bg-white">
    <ul class="flex flex-col gap-2 p-4">
      <li><a href="#"
             class="block text-gray-500 hover:text-teal-600 transition-all duration-300 opacity-0 translate-y-3 data-[open]:opacity-100 data-[open]:translate-y-0"
             style="transition-delay:0ms">About</a></li>
      <li><a href="#"
             class="block text-gray-500 hover:text-teal-600 transition-all duration-300 opacity-0 translate-y-3 data-[open]:opacity-100 data-[open]:translate-y-0"
             style="transition-delay:75ms">Careers</a></li>
      <li><a href="#"
             class="block text-gray-500 hover:text-teal-600 transition-all duration-300 opacity-0 translate-y-3 data-[open]:opacity-100 data-[open]:translate-y-0"
             style="transition-delay:150ms">History</a></li>
      <li><a href="#"
             class="block text-gray-500 hover:text-teal-600 transition-all duration-300 opacity-0 translate-y-3 data-[open]:opacity-100 data-[open]:translate-y-0"
             style="transition-delay:225ms">Services</a></li>
      <li><a href="#"
             class="block text-gray-500 hover:text-teal-600 transition-all duration-300 opacity-0 translate-y-3 data-[open]:opacity-100 data-[open]:translate-y-0"
             style="transition-delay:300ms">Projects</a></li>
      <li><a href="#"
             class="block text-gray-500 hover:text-teal-600 transition-all duration-300 opacity-0 translate-y-3 data-[open]:opacity-100 data-[open]:translate-y-0"
             style="transition-delay:375ms">Blog</a></li>
    </ul>
  </div>
</header>

<script>
  const btn = document.getElementById('mobileBtn');
  const menu = document.getElementById('mobileMenu');
  const icon = document.getElementById('hamburgerIcon');

  btn.addEventListener('click', () => {
    const open = menu.classList.toggle('max-h-screen');
    menu.toggleAttribute('data-open', open);
    icon.toggleAttribute('data-open', open);
  });
</script>
