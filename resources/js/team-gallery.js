document.addEventListener("DOMContentLoaded", function () {
    const gallery = document.getElementById("teamGallery");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const cardWidth = gallery.querySelector("div").offsetWidth + 24; // width + margin

    // Tombol panah
    prevBtn.addEventListener("click", () => {
        gallery.scrollBy({ left: -cardWidth, behavior: "smooth" });
    });
    nextBtn.addEventListener("click", () => {
        gallery.scrollBy({ left: cardWidth, behavior: "smooth" });
    });

    // Autoplay slider
    let autoScroll = setInterval(() => {
        if (gallery.scrollLeft + gallery.offsetWidth >= gallery.scrollWidth) {
            gallery.scrollTo({ left: 0, behavior: "smooth" });
        } else {
            gallery.scrollBy({ left: cardWidth, behavior: "smooth" });
        }
    }, 4000);

    // Pause autoplay saat hover
    gallery.addEventListener("mouseenter", () => clearInterval(autoScroll));
    gallery.addEventListener("mouseleave", () => {
        autoScroll = setInterval(() => {
            if (gallery.scrollLeft + gallery.offsetWidth >= gallery.scrollWidth) {
                gallery.scrollTo({ left: 0, behavior: "smooth" });
            } else {
                gallery.scrollBy({ left: cardWidth, behavior: "smooth" });
            }
        }, 4000);
    });

    // Swipe gesture mobile
    let startX;
    gallery.addEventListener("touchstart", e => startX = e.touches[0].clientX);
    gallery.addEventListener("touchmove", e => {
        if(!startX) return;
        let diff = startX - e.touches[0].clientX;
        gallery.scrollBy({ left: diff, behavior: "auto" });
        startX = e.touches[0].clientX;
    });

    // Animasi masuk tiap kartu
    const cards = gallery.querySelectorAll("div");
    cards.forEach((card, i) => {
        card.style.opacity = 0;
        card.style.transform = "translateY(20px)";
        setTimeout(() => {
            card.style.transition = "all 0.5s ease-out";
            card.style.opacity = 1;
            card.style.transform = "translateY(0)";
        }, i * 150);
    });
});
