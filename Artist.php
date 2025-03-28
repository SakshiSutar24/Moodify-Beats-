<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Moodify Beats - Artists</title>
  
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
      background:linear-gradient(135deg, #0f172a, #1e293b);
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
      display: flex;
      align-items: center;
      flex-direction: column;
      gap: 15px;
      padding: 2px;
      border-radius: 10px;
      transition: background 0.3s;
    }
    .section-title {
      font-size: 1.3rem;
      margin-bottom: 10px;
      font-weight: 600;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: rgb(243, 243, 245);
    }
    .cards-row {
      display: flex;
      gap: 15px;
      overflow-x: auto;
      scroll-behavior: smooth;
      padding-bottom: 10px;
    }
    .cards-row::-webkit-scrollbar {
      height: 8px;
    }
    .cards-row::-webkit-scrollbar-thumb {
      background: #333;
      border-radius: 4px;
    }
    .cards-row::-webkit-scrollbar-track {
      background: #222;
    }
    .card {
      background: #282828;
      border-radius: 8px;
      padding-inline: 0;
      overflow: hidden;
      min-width: 160px;
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
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: #fff;
      transition: color 0.3s;
      text-decoration: none;
    }
    .card-info h4 {
      font-size: 0.95rem;
      margin-bottom: 5px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      cursor: pointer;
      transition: color 0.3s;
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
    <!-- Section 3: Popular Artists -->
    <div class="section">
      <div class="section-title">Popular Artists</div>
      <div class="cards-row">
        <!-- Artist 1 -->
        <div class="card">
          <img src="ar rehman.jpeg" alt="A.R. Rahman">
          <div class="card-info">
            <h4>A.R. Rahman</h4>
            <a href="ar_rahman.php">A.R. Rehman</a>
        </div>
        </div>
        <!-- Artist 2 -->
        <div class="card">
          <img src="Arijit-Singh.jpg" alt="Arijit Singh">
          <div class="card-info">
            <h4>Arijit Singh</h4>
            <a href="arijit.php">Arijit Singh</a>   
          </div>
        </div>
        <!-- Artist 3 -->
        <div class="card">
          <img src="Armaan-Malik.jpg" alt="Armaan Malik">
          <div class="card-info">
            <h4>Armaan Malik</h4>
            <a href="arman.php">Armaan Malik</a>
        </div>
        </div>
        <!-- Artist 4 -->
        <div class="card">
          <img src="Palak-Muchhal.jpg" alt="Palak Muchhal">
          <div class="card-info">
            <h4>Palak Muchhal</h4>
            <a href="palak.php">Palak Muchhal</a>
        </div>
        </div>
      </div>
    </div>

    <!-- Section 4: Other Artists -->
    <div class="section">
      <div class="section-title">Top result Artists</div>
      <div class="cards-row">
        <!-- Artist 5 -->
        <div class="card">
          <img src="Sonu-Nigam.jpg" alt="Sonu Nigam">
          <div class="card-info">
            <h4>Sonu Nigam</h4>
            <a href="sonu.php">Sonu Nigam</a>
        </div>
        </div>
        <!-- Artist 6 -->
        <div class="card">
          <img src="Neha-Kakkar.jpg" alt="Neha Kakkar">
          <div class="card-info">
            <h4>Neha Kakkar</h4>
            <a href="neha.php">Neha Kakkar</a>
        </div>
        </div>
        <!-- Artist 7 -->
        <div class="card">
          <img src="Darshan-Raval.jpg" alt="Darshan Raval">
          <div class="card-info">
            <h4>Darshan Raval</h4>
            <a href="darshan.php">Darshan Raval</a>
        </div>
        </div>
        <!-- Artist 8 -->
        <div class="card">
          <img src="Shreya-Ghoshal.jpg" alt="Shreya Ghoshal">
          <div class="card-info">
            <h4>Shreya Ghoshal</h4>
            <a href="shreya.php">Shreya Ghoshal</a>
        </div>
        </div>
      </div>
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