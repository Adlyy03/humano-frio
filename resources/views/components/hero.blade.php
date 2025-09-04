<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenLeaf Gardens</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="text-gray-800 font-sans">

   <header class="fixed top-0 left-0 w-full z-20">
  <div class="w-full px-6 py-4 flex justify-between items-center 
              bg-white/30 backdrop-blur-md text-gray-900 shadow-md">
    <div class="text-2xl font-bold">GreenLeaf</div>
    <nav class="space-x-6 text-sm font-medium">
      <a href="" class="hover:text-green-600">Home</a>
      <a href="anggota.html" class="hover:text-green-600">Anggota</a>
      <a href="cerita.html" class="hover:text-green-600">Cerita</a>
      <a href="contact.html" class="hover:text-green-600">Contact</a>
    </nav>
  </div>
</header>


  <!-- Hero Section with Soft Animation -->
<section class="relative h-screen bg-cover bg-center" 
         style="background-image: url('https://images.unsplash.com/photo-1601654253194-260e0b6984f9?q=80&w=1999&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
  <!-- Soft Overlay with Gradient -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/30"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-4xl mx-auto px-6 h-full flex flex-col justify-center items-center text-center text-white">
    <h1 class="text-3xl md:text-5xl font-extrabold mb-4 drop-shadow-md opacity-0 animate-fadeInUp animation-delay-200">
      Kelompok 6 
    </h1>
    <p class="text-base md:text-lg mb-8 drop-shadow-sm opacity-0 animate-fadeInUp animation-delay-400">
      Sebuah tim kecil yang punya mimpi besar. Kenalan lebih dekat yuk!
    </p>

  </div>
</section>

<!-- Tailwind Custom Animation -->
<style>
@tailwind base;
@tailwind components;
@tailwind utilities;

@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fadeInUp {
  animation: fadeInUp 1s forwards;
}

.animation-delay-200 { animation-delay: 0.2s; }
.animation-delay-400 { animation-delay: 0.4s; }
.animation-delay-600 { animation-delay: 0.6s; }
</style>




  </body>
</html>
