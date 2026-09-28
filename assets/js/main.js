document.addEventListener("DOMContentLoaded", function () {
  const hero = document.querySelector(".hero-avantgarde");

  if (hero) {
    hero.setAttribute("data-aos", "fade-down");
  }

  const leftSide = document.querySelector(".hero-side-left ");

  if (leftSide) {
    leftSide.setAttribute("data-aos", "fade-right");
  }

  const rightSide = document.querySelector(".hero-side-right");

  if (rightSide) {
    rightSide.setAttribute("data-aos", "fade-left");
  }

  const wordmark = document.querySelector(".hero-wordmark");

  if (wordmark) {
    wordmark.setAttribute("data-aos", "fade-up");
  }

  const aboutIntro = document.querySelector(".about-intro");

  if (aboutIntro) {
    aboutIntro.setAttribute("data-aos", "fade-left");
  }

  const skillsHeading = document.querySelector(".skills-heading");

  if (skillsHeading) {
    skillsHeading.setAttribute("data-aos", "fade-right");
  }

  const contact = document.querySelector(".contact-section");

  if (contact) {
    contact.setAttribute("data-aos", "fade-up");
  }

  requestAnimationFrame(function () {
    AOS.init({
      duration: 700,
      once: true,
      offset: 60,
    });
  });
});
