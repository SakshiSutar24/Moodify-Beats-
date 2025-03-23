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
      background: linear-gradient(135deg,rgb(74, 26, 54),rgb(111, 8, 75));
      color: #fff;
      height: 100vh; /* Adjust to full page height */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 20px 0;
      /* Remove border */
    }

    /* ---------- Main Content ---------- */
    .main-content {
      flex-grow: 1;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between; /* Distribute sections evenly */
      overflow-y: auto;
      background: rgba(135deg,rgb(74, 26, 54),rgb(111, 5, 74)); /* Darker background for main content */
      border-radius: 8px; /* Optional: Add border radius for better appearance */
    }
    .section {
      margin-bottom: 30px;
    }
    .section-title {
      font-size: 1.5rem; /* Increase font size */
      margin-bottom: 10px;
      font-weight: 700; /* Increase font weight */
      text-align: center; /* Center align section titles */
      text-transform: uppercase; /* Uppercase section titles */
      letter-spacing: 1px; /* Add letter spacing */
      color:rgb(243, 243, 245); /* Change color to a more vibrant one */
    }
    .cards-row {
      display: flex;
      gap: 15px;
      overflow-x: auto;
      scroll-behavior: smooth;
      padding-bottom: 10px;
      flex-wrap: wrap; /* Allow cards to wrap to the next line */
      justify-content: center; /* Center the cards */
    }
    .cards-row::-webkit-scrollbar {
      height: 8px;
    }
    .cards-row::-webkit-scrollbar-thumb {
      background:rgb(18, 19, 47); /* Change scrollbar thumb color */
      border-radius: 4px;
    }
    .cards-row::-webkit-scrollbar-track {
      background: #222;
    }
    .card {
      background: rgba(0,0,0,0.8); /* Darker card background */
      border-radius: 8px;
      overflow: hidden;
      width: 200px; /* Increase card width */
      height: 300px; /* Increase card height */
      text-decoration: none;
      color: #fff;
      transition: transform 0.3s, background 0.3s;
      box-shadow: 0 2px 6px rgba(13, 13, 13, 0.4);
      margin: 10px; /* Add margin to cards */
    }
    .card:hover {
      transform: scale(1.05);
      background: #444; /* Slightly lighter background on hover */
    }
    .card img {
      width: 100%;
      height: 200px; /* Adjust image height */
      object-fit: cover;
      display: block;
    }
    .card-info {
      padding: 10px;
    }
    .card-info h4 {
      font-size: 1.1rem; /* Increase font size */
      margin-bottom: 5px;
      font-weight: 600;
      text-align: center; /* Center align card titles */
      color:rgb(244, 243, 249); /* Change color to a more vibrant one */
    }
    .card-info p {
      font-size: 0.9rem; /* Increase font size */
      opacity: 0.8;
      text-align: center; /* Center align card descriptions */
      color: #ccc; /* Add color to card descriptions */
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 768px) {
      .cards-row {
        gap: 10px;
      }
      .card {
        width: 160px; /* Adjust card width for smaller screens */
        height: 240px; /* Adjust card height for smaller screens */
      }
      .card img {
        height: 160px; /* Adjust image height for smaller screens */
      }
    }

    /* ---------- Footer ---------- */
    .footer {
      background: #121212;
      padding: 15px;
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
      color:rgb(21, 30, 72); /* Change hover color to match the theme */
    }

    /* Back to Home Button */
    .home-btn {
      position: fixed;
      top: 10px;
      right: 10px;
      background: linear-gradient(45deg,rgb(26, 21, 70),rgb(42, 23, 164)); /* Change button gradient */
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
      box-shadow: 0 0 8px rgba(16, 10, 37, 0.7); /* Change hover shadow color */
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
        <a href="play.php?title=Sanak&artist=Action%20Thriller&src=Sanak.mp3&image=Sanak.jpg" class="card">
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

    <!-- Section 3: Popular Artists -->
    <div class="section">
      <div class="section-title">Popular Artists</div>
      <div class="cards-row">
        <!-- Artist 1 -->
        <a href="ar_rahman.php" class="card">
          <img src="ar rehman.jpeg" alt="A.R. Rahman">
          <div class="card-info">
            <h4>A.R. Rahman</h4>
          </div>
        </a>
        <!-- Artist 2 -->
        <a href="arijit.php" class="card">
          <img src="Arijit-Singh.jpg" alt="Arijit Singh">
          <div class="card-info">
            <h4>Arijit Singh</h4>
          </div>
        </a>
        <!-- Artist 3 -->
        <a href="arman.php" class="card">
          <img src="Armaan-Malik.jpg" alt="Armaan Malik">
          <div class="card-info">
            <h4>Armaan Malik</h4>
          </div>
        </a>
        <!-- Artist 4 -->
        <a href="palak.php" class="card">
          <img src="Palak-Muchhal.jpg" alt="Palak Muchhal">
          <div class="card-info">
            <h4>Palak Muchhal</h4>
          </div>
        </a>
      </div>
    </div>

    <!-- Section 4: Other Artists -->
    <div class="section">
      <div class="section-title">Top result Artists</div>
      <div class="cards-row">
        <!-- Artist 5 -->
        <a href="sonu.php" class="card">
          <img src="Sonu-Nigam.jpg" alt="Sonu Nigam">
          <div class="card-info">
            <h4>Sonu Nigam</h4>
          </div>
        </a>
        <!-- Artist 6 -->
        <a href="neha.php" class="card">
          <img src="Neha-Kakkar.jpg" alt="Neha Kakkar">
          <div class="card-info">
            <h4>Neha Kakkar</h4>
          </div>
        </a>
        <!-- Artist 7 -->
        <a href="darshan.php" class="card">
          <img src="Darshan-Raval.jpg" alt="Darshan Raval">
          <div class="card-info">
            <h4>Darshan Raval</h4>
          </div>
        </a>
        <!-- Artist 8 -->
        <a href="shreya.php" class="card">
          <img src="Shreya-Ghoshal.jpg" alt="Shreya Ghoshal">
          <div class="card-info">
            <h4>Shreya Ghoshal</h4>
          </div>
        </a>
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