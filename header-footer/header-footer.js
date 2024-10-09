
// Header inladen
document.addEventListener('DOMContentLoaded', function() {
  fetch('header-footer/header-footer.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('header-placeholder').innerHTML = data;

      // Dynamisch de header CSS laden
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = 'header-footer/header-footer.css';
      document.head.appendChild(link);
    })
    .catch(error => console.error('Error loading header:', error));
});

// preload
window.addEventListener('load', function() {
  document.getElementById('preloader').style.display = 'none';
});

// overlay
// Open het overlay menu en verberg de hamburger-icon
function openNav() {
  document.getElementById("myNav").style.height = "100%";
  document.getElementById("menu-icon").classList.add("hidden");
}

// Sluit het overlay menu en toon de hamburger-icon weer
function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  document.getElementById("menu-icon").classList.remove("hidden");
}