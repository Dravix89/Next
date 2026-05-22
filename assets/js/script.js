
document.addEventListener("DOMContentLoaded", () => {

  // --- Bouton retour en haut ---
  const btnTop = document.getElementById("btnTop");
  const SHOW_AFTER = 50;

  if (btnTop) {
    const handleScroll = () => {
      if (window.scrollY > SHOW_AFTER) {
        btnTop.classList.add("is-visible");
      } else {
        btnTop.classList.remove("is-visible");
      }
    };
    handleScroll();
    window.addEventListener("scroll", handleScroll, { passive: true });
    btnTop.addEventListener("click", (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // --- Menu mobile : cache logo + hamburger à l'ouverture ---
  const navCollapse = document.getElementById("navbarSupportedContent");
  const navToggler  = document.getElementById("navToggler");
  const navBrand    = document.querySelector("nav .navbar-brand");

if (navCollapse && navToggler && navBrand) {
   const navClose = document.getElementById("navClose");
   navToggler.addEventListener("click", () => {
      setTimeout(() => {
        navToggler.style.display = "none";
        navClose.style.display   = "block";
      }, 10);
    });
    navClose.addEventListener("click", () => {
      navToggler.style.display = "";
      navClose.style.display   = "none";
    });
  }

});