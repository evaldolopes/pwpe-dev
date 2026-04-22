import Swiper from 'swiper';
import { Autoplay, FreeMode } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/free-mode';

export default function initTestimonialsCarousel() {
    if (!document.querySelector('.testimonials-swiper')) return;

    new Swiper('.testimonials-swiper', {
        modules: [Autoplay, FreeMode],
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        freeMode: true,
        grabCursor: true,
        autoplay: { delay: 0, disableOnInteraction: false },
        speed: 10000,
        breakpoints: {
            640:  { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });
}
