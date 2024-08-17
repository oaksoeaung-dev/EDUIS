// Toggle Menu Button
let menuToggle = document.querySelector(".toggle");
menuToggle.addEventListener("click", () => {
    const classLine1 = ["w-[25px]", "w-[26px]", "rotate-45", "translate-y-[0px]", "-translate-y-[8px]"];

    const classLine3 = ["w-[25px]", "w-[15px]", "rotate-[315deg]", "translate-y-[0px]", "translate-y-[8px]"];
    classLine1.forEach((classNameLine1) => {
        document.getElementById("line1").classList.toggle(classNameLine1);
    });

    document.getElementById("line2").classList.toggle("translate-x-[60px]");

    classLine3.forEach((classNameLine3) => {
        document.getElementById("line3").classList.toggle(classNameLine3);
    });

    document.querySelector(".nav__menu").classList.toggle("tablet:hidden");
    document.querySelector(".nav__menu").classList.toggle("tablet:flex");
});

window.addEventListener("scroll", () => {
    const classToggle = ["shadow-xl"];
    classToggle.forEach((className) => {
        document.querySelector("nav").classList.toggle(className, window.scrollY > 0);
    });
});

const faqs = document.querySelectorAll(".faq");

faqs.forEach((faq) => {
    faq.addEventListener("click", () => {
        faq.querySelector(".answer").classList.toggle("h-fit");
        faq.querySelector(".answer").classList.toggle("h-0");

        const icon = faq.querySelector(".faq__icon i");
        icon.classList.toggle("fa-plus");
        icon.classList.toggle("fa-minus");
    });
});

var swiper = new Swiper(".testimonial-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    // window width = 600px
    breakpoints: {
        600: {
            slidesPerView: 2,
        },
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

const sr = ScrollReveal({
    origin: "bottom",
    distance: "60px",
    duration: 3000,
    delay: 600,
    reset: true, // resets animation
});

sr.reveal(".scroll__left", {
    delay: 100,
    distance: "100px",
    interval: 100,
    origin: "left",
});

sr.reveal(".scroll__right", {
    delay: 100,
    distance: "100px",
    interval: 100,
    origin: "right",
});

sr.reveal(".scroll__top", {
    delay: 100,
    distance: "100px",
    interval: 100,
    origin: "top",
});

sr.reveal(".scroll__bottom", {
    delay: 100,
    distance: "100px",
    interval: 100,
    origin: "bottom",
});

sr.reveal(".scroll__badge1", {
    delay: 100,
    distance: "100px",
    interval: 100,
    origin: "top",
});

sr.reveal(".scroll__badge2", {
    delay: 200,
    distance: "100px",
    interval: 100,
    origin: "top",
});

sr.reveal(".scroll__badge3", {
    delay: 300,
    distance: "100px",
    interval: 100,
    origin: "top",
});

sr.reveal(".scroll__badge4", {
    delay: 400,
    distance: "100px",
    interval: 100,
    origin: "top",
});

sr.reveal(".scroll__badge5", {
    delay: 500,
    distance: "100px",
    interval: 100,
    origin: "top",
});

sr.reveal(".scroll__badge6", {
    delay: 600,
    distance: "100px",
    interval: 100,
    origin: "top",
});
