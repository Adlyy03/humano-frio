<header class="fixed top-0 left-0 w-full bg-white shadow z-50">
  
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
