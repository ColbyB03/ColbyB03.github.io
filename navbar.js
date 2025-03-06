 // Toggle between hamburger and "X" icons
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.getElementById('navbarNav');

    navbarCollapse.addEventListener('show.bs.collapse', () => {
      navbarToggler.innerHTML = '<i class="fas fa-times"></i>'; // Change to "X" icon
    });

    navbarCollapse.addEventListener('hide.bs.collapse', () => {
      navbarToggler.innerHTML = '<i class="fas fa-bars"></i>'; // Change back to hamburger icon
    });

    $('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // Add slideUp animation to Bootstrap dropdown when collapsing.
  $('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });