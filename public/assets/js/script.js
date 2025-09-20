document.addEventListener('DOMContentLoaded', function () {
  const navbar = document.getElementById('mainNavbar');
  const threshold = 1; // píxeles de scroll antes de cambiar

  function onScroll() {
    if (window.scrollY > threshold) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', onScroll);
  onScroll(); // ejecutar una vez al cargar
});
