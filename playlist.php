<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ...existing code... -->
  <style>
    /* ...existing code... */
    
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
  <!-- Bootstrap Icons CDN for icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  <button class="home-btn" onclick="window.location.href='sutar.php'">
    <i class="bi bi-house-door-fill"></i>
  </button>
  <div class="content">
    <!-- ...existing code... -->
    <!-- Remove the back to home link -->
    <!-- <a href="sutar.php">Back to Home</a> -->
  </div>
  <!-- ...existing code... -->
</body>
</html>
