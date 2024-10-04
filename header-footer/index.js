
// Header inladen
document.addEventListener('DOMContentLoaded', function() {
  fetch('header-footer/header-footer.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('header-placeholder').innerHTML = data;

      // Dynamisch de header CSS laden
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = 'header-footer/header-footer.css'; // Path naar het CSS bestand van de header
      document.head.appendChild(link);

      // Hamburger menu functionaliteit
      const menuIcon = document.getElementById('menu-icon');
      const navLinks = document.getElementById('nav-links');

      menuIcon.addEventListener('click', () => {
        navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
      });
    })
    .catch(error => console.error('Error loading header:', error));
});

// preload
window.addEventListener('load', function() {
  document.getElementById('preloader').style.display = 'none';
});

