<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leaderboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="styles.css" rel="stylesheet">
</head>
<body>

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
  
  <!-- Skeleton Loader -->
  <div id="skeleton-loader" class="skeleton-loader">
    <div class="skeleton-header"></div>
    <div class="skeleton-row"></div>
    <div class="skeleton-row"></div>
    <div class="skeleton-row"></div>
    <div class="skeleton-row"></div>
    <div class="skeleton-row"></div>
  </div>

  <!-- Leaderboard -->
  <div id="leaderboard" class="leaderboard-container" style="display: none;">
    <h1 class="text-center mb-3">Leaderboard</h1>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Place</th>
            <th>Name</th>
            <th>Score</th>
            <th>Wins</th>
            <th>Losses</th>
            <th>Win/Loss Ratio</th>
            <th>Spread Wins</th>
            <th>Over/Under Wins</th>
            <th>Moneyline Wins</th>
          </tr>
        </thead>
        <tbody id="leaderboard-body">
          <!-- Rows will be dynamically added here -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS (using the version from navbar.php to avoid conflicts) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  
  <script>
    // Sample data for the leaderboard
    const leaderboardData = [
      { name: "John Doe", score: 120, wins: 20, losses: 5, spreadWins: 8, overUnderWins: 6, moneylineWins: 10 },
      { name: "Jane Smith", score: 110, wins: 15, losses: 7, spreadWins: 7, overUnderWins: 5, moneylineWins: 9 },
      { name: "Mike Johnson", score: 100, wins: 10, losses: 8, spreadWins: 6, overUnderWins: 4, moneylineWins: 8 },
      { name: "Sarah Brown", score: 90, wins: 5, losses: 10, spreadWins: 5, overUnderWins: 3, moneylineWins: 7 },
      { name: "Chris Green", score: 80, wins: 2, losses: 12, spreadWins: 4, overUnderWins: 2, moneylineWins: 6 }
    ];

    // Function to calculate Win/Loss Ratio
    function calculateWinLossRatio(wins, losses) {
      if (losses === 0) return wins.toFixed(2); // Avoid division by zero
      return (wins / losses).toFixed(2);
    }

    // Function to render the leaderboard
    function renderLeaderboard(data) {
      const leaderboardBody = document.getElementById('leaderboard-body');
      if (!leaderboardBody) {
        console.error("Leaderboard body not found!");
        return;
      }

      // Sort the data by score in descending order
      const sortedData = data.sort((a, b) => b.score - a.score);

      leaderboardBody.innerHTML = sortedData
        .map((entry, index) => `
          <tr>
            <td>${index + 1}</td>
            <td>
              ${index === 0 ? '<span class="crown">👑</span>' : ''}
              ${entry.name}
            </td>
            <td>${entry.score}</td>
            <td>${entry.wins}</td>
            <td>${entry.losses}</td>
            <td>${calculateWinLossRatio(entry.wins, entry.losses)}</td>
            <td>${entry.spreadWins}</td>
            <td>${entry.overUnderWins}</td>
            <td>${entry.moneylineWins}</td>
          </tr>
        `)
        .join('');
    }

    // Wait for DOM to fully load before initializing
    document.addEventListener('DOMContentLoaded', function() {
      // Set initial sidebar state
      const sidebar = document.getElementById('sidebar');
      const leaderboardContainer = document.getElementById('leaderboard');
      const skeletonLoader = document.getElementById('skeleton-loader');
      
      
      // Simulate loading delay
      setTimeout(() => {
        // Hide skeleton loader
        const skeletonLoader = document.getElementById('skeleton-loader');
        if (skeletonLoader) {
          skeletonLoader.style.display = 'none';
        }

        // Show leaderboard
        const leaderboard = document.getElementById('leaderboard');
        if (leaderboard) {
          leaderboard.style.display = 'block';
        }

        // Render leaderboard data
        renderLeaderboard(leaderboardData);
      }, 1500); // Reduced to 1.5 seconds for better UX
    });
  </script>
</body>
</html>