<section class="bg-[#0f172a] py-16 relative">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center text-white mb-10">
      Profil Tim Kami
    </h2>

    <div id="teamCarousel"
         class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide cursor-grab scroll-smooth space-x-6 pb-4">

      @forelse(($anggotas ?? collect()) as $anggota)
        @php
          // fallback fields (sesuaikan nama kolom di tabelmu)
          $name = $anggota->name ?? $anggota->nama ?? 'Nama Tidak Diketahui';
          $role = $anggota->role ?? $anggota->position ?? 'Member';
          $photo = $anggota->photo ?? $anggota->avatar ?? null;
          // jika foto disimpan di storage: gunakan asset('storage/...')
          $photoUrl = $photo ? (str_starts_with($photo, 'http') ? $photo : asset('storage/'.$photo)) 
                             : "https://ui-avatars.com/api/?name=" . urlencode($name) . "&background=0f172a&color=fff";
          $linkedin = $anggota->linkedin ?? null;
          $github = $anggota->github ?? null;
          $instagram = $anggota->instagram ?? null;

          // skills: bisa disimpan sebagai JSON array atau CSV string
          $rawSkills = $anggota->skills ?? $anggota->keahlian ?? null;
          if (is_string($rawSkills) && str_contains($rawSkills, '[')) {
              $skills = json_decode($rawSkills, true) ?: [];
          } elseif (is_string($rawSkills)) {
              $skills = array_filter(array_map('trim', explode(',', $rawSkills)));
          } elseif (is_array($rawSkills)) {
              $skills = $rawSkills;
          } else {
              $skills = [];
          }

          $quote = $anggota->quote ?? $anggota->bio ?? '';
        @endphp

        <div class="flex-shrink-0 w-72 bg-white rounded-xl shadow-md snap-center p-6 text-center">
          <img src="{{ $photoUrl }}" alt="{{ $name }}"
               class="w-28 h-28 rounded-full object-cover border-4 border-blue-500 mx-auto mb-4" />
          <h3 class="text-lg font-semibold text-gray-900">{{ $name }}</h3>
          <p class="text-blue-600 font-medium mb-3">{{ $role }}</p>

          <div class="flex justify-center space-x-4 mb-3">
            @if($linkedin)
              <a href="{{ $linkedin }}" target="_blank" rel="noopener" aria-label="LinkedIn" class="text-gray-500 hover:text-blue-700 transition-colors">
                <!-- svg linkedin -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8h5v16H0V8zm7.5 0h4.8v2.2h.1c.7-1.3 2.4-2.7 4.9-2.7 5.2 0 6.2 3.4 6.2 7.8V24h-5v-7.5c0-1.8 0-4.1-2.5-4.1-2.5 0-2.9 2-2.9 4v7.6h-5V8z" /></svg>
              </a>
            @endif

            @if($github)
              <a href="{{ $github }}" target="_blank" rel="noopener" aria-label="GitHub" class="text-gray-500 hover:text-gray-900 transition-colors">
                <!-- svg github -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.5.5.09.68-.22.68-.48 0-.24-.01-.87-.01-1.71-2.78.6-3.37-1.34-3.37-1.34-.45-1.15-1.1-1.46-1.1-1.46-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.52 2.34 1.08 2.9.83.09-.65.35-1.08.63-1.33-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.7.115 2.5.337 1.9-1.29 2.74-1.02 2.74-1.02.56 1.38.21 2.4.1 2.65.64.7 1.03 1.59 1.03 2.68 0 3.85-2.34 4.7-4.57 4.95.36.31.68.92.68 1.85 0 1.33-.01 2.4-.01 2.73 0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z" /></svg>
              </a>
            @endif

            @if($instagram)
              <a href="{{ $instagram }}" target="_blank" rel="noopener" aria-label="Instagram" class="text-gray-500 hover:text-pink-600 transition-colors">
                <!-- svg instagram -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 2A3.75 3.75 0 004 7.75v8.5A3.75 3.75 0 007.75 20h8.5a3.75 3.75 0 003.75-3.75v-8.5A3.75 3.75 0 0016.25 4h-8.5zm8.75 1.5a1 1 0 110 2 1 1 0 010-2zM12 7a5 5 0 110 10 5 5 0 010-10zm0 2a3 3 0 100 6 3 3 0 000-6z" /></svg>
              </a>
            @endif
          </div>

          <div class="flex flex-wrap justify-center gap-2 mb-4">
            @foreach($skills as $skill)
              <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">{{ $skill }}</span>
            @endforeach
          </div>

          @if($quote)
            <blockquote class="text-gray-600 italic text-sm">
              "{{ $quote }}"
            </blockquote>
          @endif
        </div>

      @empty
        <div class="text-center text-white">Belum ada anggota.</div>
      @endforelse

    </div>

    <!-- tombol prev/next (tetap pakai script yang sudah ada di bawah) -->
    <button id="prevBtn" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-md border border-white/30 text-white p-3 rounded-full shadow-lg hover:scale-110 transition-all duration-300">...</button>
    <button id="nextBtn" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-md border border-white/30 text-white p-3 rounded-full shadow-lg hover:scale-110 transition-all duration-300">...</button>

  </div>
</section>

<!-- keep your script & styles as before -->


<!-- Hide scrollbar -->
<style>
  .scrollbar-hide::-webkit-scrollbar {
    display: none;
  }
  .scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>

<!-- Script drag + tombol -->
<script>
  const carousel = document.getElementById("teamCarousel");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  let isDown = false;
  let startX;
  let scrollLeft;

  carousel.addEventListener("mousedown", (e) => {
    isDown = true;
    carousel.classList.add("cursor-grabbing");
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
  });

  carousel.addEventListener("mouseleave", () => {
    isDown = false;
    carousel.classList.remove("cursor-grabbing");
  });

  carousel.addEventListener("mouseup", () => {
    isDown = false;
    carousel.classList.remove("cursor-grabbing");
  });

  carousel.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (x - startX) * 1.5;
    carousel.scrollLeft = scrollLeft - walk;
  });

  const cardWidth = 320; 
  nextBtn.addEventListener("click", () => {
    carousel.scrollBy({ left: cardWidth, behavior: "smooth" });
  });

  prevBtn.addEventListener("click", () => {
    carousel.scrollBy({ left: -cardWidth, behavior: "smooth" });
  });
</script>
