<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar with Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body class = "navbarclass">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand ps-3" href="#"> <!-- Added padding to the left -->
        <i class="fas fa-football-ball"></i> <!-- Football icon -->
      </a>

      <!-- Hamburger Button -->
      <button
        class="navbar-toggler ms-auto"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i> <!-- Hamburger icon -->
      </button>

      <!-- Navbar Menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link px-3" href="home.html">Home</a> <!-- Added padding to links -->
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="leaderboard.php">Leaderboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="games.html">Games</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle px-3"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Profiles
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="profiles.html">Colby</a></li>
              <li><a class="dropdown-item" href="#">Ryan</a></li>
              <li><a class="dropdown-item" href="#">Pedals</a></li>
              <li><a class="dropdown-item" href="#">Hunter</a></li>
              <li><a class="dropdown-item" href="#">Daniel</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src = "navbar.js"></script>
</body>
</html>
