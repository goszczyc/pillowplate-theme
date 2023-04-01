import Swiper from "swiper";
import "swiper/css";

export default () => {
  const container = document.querySelector(".collaborators-slider");
  if (!container) return;
  const swiper = new Swiper(".collaborators-slider", {
    slidesPerView: 2,
    spaceBetween: 20,
    loop: true,
    breakpoints: {
      576: {
        slidesPerView: 3
      },
      768: {
        slidesPerView: 4
      },
      992: {
        slidesPerView: 5
      },
      1200: {
        slidesPerView: 6
      },
      1500: {
        slidesPerView: 7
      },
    }
  });
};
