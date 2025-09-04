


  // Smooth scroll
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click',e=>{
      e.preventDefault();
      document.querySelector(a.getAttribute('href')).scrollIntoView({behavior:'smooth'});
    });
  });


  document.addEventListener("DOMContentLoaded", () => {
  const mobileBtn = document.getElementById("mobileBtn");
  const mobileMenu = document.getElementById("mobileMenu");
  const hamburgerIcon = document.getElementById("hamburgerIcon");

  mobileBtn.addEventListener("click", () => {
    // Toggle menu
    if (mobileMenu.classList.contains("max-h-0")) {
      mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
      mobileMenu.classList.remove("max-h-0");
    } else {
      mobileMenu.style.maxHeight = "0px";
      mobileMenu.classList.add("max-h-0");
    }

    // Toggle hamburger to X
    if (hamburgerIcon.classList.contains("opened")) {
      hamburgerIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>`;
      hamburgerIcon.classList.remove("opened");
    } else {
      hamburgerIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>`;
      hamburgerIcon.classList.add("opened");
    }
  });
});







const gallery = document.querySelector('.anggota-gallery-list');
let scrollPos = 0;

// Auto-scroll horizontal
function autoScroll() {
  scrollPos += 1;
  if(scrollPos >= gallery.scrollWidth - gallery.clientWidth) scrollPos = 0;
  gallery.scrollTo({ left: scrollPos, behavior: 'smooth' });
}
setInterval(autoScroll, 50);

// Reveal card saat masuk viewport
const cards = document.querySelectorAll('.anggota-card');
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(entry.isIntersecting) entry.target.classList.add('visible');
  });
}, { threshold: 0.3 });

cards.forEach(card => observer.observe(card));

































//TIMELINEEEEEE

// Ambil semua item timeline
const timelineItems = document.querySelectorAll('.timeline-item');

function isInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) - 100
  );
}

function timelineAnimation() {
  timelineItems.forEach(item => {
    if (isInViewport(item)) {
      item.classList.add('active');
    }
  });
}

// Event listener scroll
window.addEventListener('scroll', timelineAnimation);

// Jalankan sekali saat load
window.addEventListener('load', timelineAnimation);

















const backToTop = document.getElementById('backToTop');

// Tampilkan tombol saat scroll
window.addEventListener('scroll', () => {
    if(window.scrollY > 300){
        backToTop.classList.remove('opacity-0', 'pointer-events-none');
        backToTop.classList.add('opacity-100');
    } else {
        backToTop.classList.add('opacity-0', 'pointer-events-none');
        backToTop.classList.remove('opacity-100');
    }
});

// Scroll smooth ke atas
backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
