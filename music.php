<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Moodify Beats - Home</title>
  
  <!-- Bootstrap Icons for icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <style>
    /* ---------- Reset ---------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* ---------- Body ---------- */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f172a, #1e293b);
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 20px 0;
    }

    /* ---------- Main Content ---------- */
    .main-content {
      flex-grow: 1;
      padding: 20px;
      overflow-y: auto;
    }
    .section {
      margin-bottom: 30px;
    }
    .section-title {
      font-size: 1.3rem;
      margin-bottom: 10px;
      font-weight: 600;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: #f3f3f5;
    }
    .cards-row {
      padding: 0.3px ;
      display: flex;
      gap: 20px;
      overflow-x: auto;
      scroll-behavior: smooth;
      padding-bottom: 10px;
      flex-wrap: wrap; /* Allow cards to wrap to the next line */
      justify-content: center; /* Center the cards */
      align-items: center; /* Center the cards vertically */
    }
    .cards-row::-webkit-scrollbar {
      height: 8px;
    }
    .cards-row::-webkit-scrollbar-thumb {
      background: #333;
      border-radius: 4px;
      outline: none;
      cursor: pointer;
      -webkit-appearance: none;
      width: 10px;
      height: 10px;
    }
    .cards-row::-webkit-scrollbar-track {
      background: #222;
    }
    .card {
      background: #282828;
      padding: 15px;
      border-radius: 15px;
      overflow: hidden;
      min-width: 200px;
      min-height: 200px;
      text-decoration: none;
      color: #fff;
      transition: transform 0.3s, background 0.3s;
      box-shadow: 0 2px 6px rgba(0,0,0,0.4);
    }
    .card:hover {
      transform: scale(1.05);
      background: #333;
    }
    .card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      display: block;
    }
    .card-info {
      padding: 10px;
    }
    .card-info h4 {
      font-size: 0.95rem;
      margin-bottom: 5px;
      font-weight: 600;
    }
    .card-info p {
      font-size: 0.8rem;
      opacity: 0.8;
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 768px) {
      .cards-row {
        gap: 10px;
      }
      .card {
        min-width: 140px;
      }
    }

    /* ---------- Footer ---------- */
    .footer {
      background: #121212;
      padding: 20px;
      text-align: center;
      color: #fff;
      box-shadow: 0 -2px 5px rgba(0,0,0,0.8);
    }
    .footer .social-links {
      margin-top: 10px;
    }
    .footer .social-links a {
      color: #fff;
      margin: 0 10px;
      font-size: 1.2rem;
      transition: color 0.3s;
    }
    .footer .social-links a:hover {
      color: #1DB954;
    }

    /* Back to Home Button */
    .home-btn {
      position: fixed;
      top: 10px;
      right: 10px;
      background: linear-gradient(45deg, #3b82f6, #2563eb);
      border: none;
      color: #fff;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      font-size: 1.2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .home-btn:hover {
      transform: scale(1.1);
      box-shadow: 0 0 8px rgba(59, 130, 246, 0.7);
    }
  </style>
</head>
<body>
  <button class="home-btn" onclick="window.location.href='sutar.php'">
    <i class="bi bi-house-door-fill"></i>
  </button>
  <!-- Main Content -->
  <div class="main-content">
    <!-- Section 1: Trending Now India -->
    <div class="section">
      <div class="section-title">Trending Now India</div>
      <div class="cards-row">
        <!-- Card 1 -->
        <a href="bole-chudiyan_single.php" class="card">
          <img src="Bole-Chudiyan-Nawazuddin-Siddiqui.jpg" alt="Bole Chudiyan">
          <div class="card-info">
            <h4>Bole Chudiyan</h4>
            <p>Romantic Drama</p>
          </div>
        </a>
        <!-- Card 2 -->
        <a href="hum-bhi-akele_single.php" class="card">
          <img src="Hum-Bhi-Akele-Tum-Bhi-Akele-Adil-Rasheed.jpg" alt="Hum Bhi Akele">
          <div class="card-info">
            <h4>Hum Bhi Akele</h4>
            <p>Heartfelt Journey</p>
          </div>
        </a>
        <!-- Card 3 -->
        <a href="Koi-Jaane-Na_single.php" class="card">
          <img src="Koi-Jaane-Na-Armaan-Malik.jpg" alt="Koi Jaane Na">
          <div class="card-info">
            <h4>Koi Jaane Na</h4>
            <p>Suspense Thriller</p>
          </div>
        </a>
        <!-- Card 4 -->
        <a href="gangubai-kathiawadi_single.php" class="card">
          <img src="Gangubai-Kathiawadi.jpg" alt="Gangubai Kathiawadi">
          <div class="card-info">
            <h4>Gangubai Kathiawadi</h4>
            <p>Drama</p>
          </div>
        </a>
        <!-- Card 5 -->
        <a href="haseen-dillruba_single.php" class="card">
          <img src="Haseen-Dillruba.jpg" alt="Haseen Dillruba">
          <div class="card-info">
            <h4>Haseen Dillruba</h4>
            <p>Thriller</p>
          </div>
        </a>
      </div>
    </div>

    <!-- Section 2: More of what you like -->
    <div class="section">
      <div class="section-title">More of what you like</div>
      <div class="cards-row">
        <a href="shiddat_single.php" class="card">
            <img src="Shiddat-Movie-Manan-Bhardwaj.jpg" alt="Shiddat">
            <div class="card-info">
              <h4>Shiddat</h4>
              <p>Manan Bhardwaj</p>
            </div>
          </a>
          <a href="mismatched_single.php" class="card">
            <img src="Mismatched---Season-3-Taaruk-Raina.jpg" alt="Mismatched">
            <div class="card-info">
              <h4>Mismatched</h4>
              <p>Netflix Series Soundtrack</p>
            </div>
          </a>
        <!-- Card 1 -->
        <a href="saina_single.php" class="card">
          <img src="Saina.jpg" alt="Saina">
          <div class="card-info">
            <h4>Saina</h4>
            <p>Biographical Drama</p>
          </div>
        </a>
        <!-- Card 2 -->
        <a href="sanak_singal.php" class="card">
          <img src="Sanak.jpg" alt="Sanak">
          <div class="card-info">
            <h4>Sanak</h4>
            <p>Action Thriller</p>
          </div>
        </a>
        <!-- Card 4 -->
        <a href="Pagglait_single.php" class="card">
          <img src="Pagglait-Arijit-Singh.jpg" alt="Pagglait">
          <div class="card-info">
            <h4>Pagglait</h4>
            <p>Self-Discovery Story</p>
          </div>
        </a>
      </div>
    </div>


  <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
      <p>&copy; 2025 Moodify Beats. All rights reserved.</p>
      <div class="social-links">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </footer>
</body>
</html>
