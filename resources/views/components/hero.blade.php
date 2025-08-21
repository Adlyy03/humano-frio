<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenLeaf Gardens</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="text-gray-800 font-sans">

    <!-- Navbar -->
    <header class="absolute top-0 left-0 w-full z-20">
      <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center text-white">
        <div class="text-2xl font-bold">GreenLeaf</div>
        <nav class="space-x-6 text-sm">
          <a href="#" class="hover:text-green-200">Home</a>
          <a href="#" class="hover:text-green-200">Services</a>
          <a href="#" class="hover:text-green-200">Gallery</a>
          <a href="#" class="hover:text-green-200">Contact</a>
        </nav>
      </div>
    </header>

    <!-- Hero Section with Background Image -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1601654253194-260e0b6984f9?q=80&w=1999&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
      <!-- Overlay -->
      <div class="absolute inset-0 bg-black bg-opacity-60"></div>

      <!-- Content -->
      <div class="relative z-10 max-w-4xl mx-auto px-6 h-full flex flex-col justify-center items-center text-center text-white">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Transform Your Garden</h1>
        <p class="text-lg md:text-xl mb-8">Expert gardening & landscaping services to turn your outdoor dreams into reality.</p>
        <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded transition">
          Get a Free Quote
        </a>
      </div>
    </section>


  </body>
</html>
