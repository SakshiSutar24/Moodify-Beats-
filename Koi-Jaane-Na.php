<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koi Jaane Na - Playlist</title>
  <link rel="stylesheet" href="Koi-Jaane-Na.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .home-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: #7e0a46; /* Changed color */
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 50%;
      font-size: 1.5rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .home-btn:hover {
      background-color: #5e0834; /* Changed color */
    }
  </style>
</head>
<body>
  <button class="home-btn" onclick="window.location.href='sutar.php'"> <i class="fas fa-home"></i> </button>
  <div class="playlist-container">
    <h1>Koi Jaane Na - Music Playlist</h1>
    <div class="song-list">
      <?php
      $songs = array(
        array("title" => "Har Funn Maula", "artist" => "Vishal Dadlani, Zara Khan", "src" => "Har Funn Maula - (Raag.Fm).mp3", "image" => "Koi-Jaane-Na-Armaan-Malik.jpg"),
        array("title" => "Ishq Karo Dil Se", "artist" => "Jubin Nautiyal, Tulsi Kumar", "src" => "Ishq Karo Dil Se - (Raag.Fm).mp3", "image" => "Koi-Jaane-Na-Armaan-Malik.jpg"),
        array("title" => "Jaane De", "artist" => "B Praak", "src" => "Jaane De - (Raag.Fm).mp3", "image" => "Koi-Jaane-Na-Armaan-Malik.jpg"),
        array("title" => "Koi Jaane Na (Title Track)", "artist" => "Armaan Malik", "src" => "Koi Jaane Na (Title Track) - (Raag.Fm).mp3", "image" => "Koi-Jaane-Na-Armaan-Malik.jpg"),
        array("title" => "Rabb Manneya", "artist" => "Rochak Kohli, Shashwat Singh", "src" => "Rabb Manneya - (Raag.Fm).mp3", "image" => "Koi-Jaane-Na-Armaan-Malik.jpg")
      );
      foreach ($songs as $song) {
        ?>
        <div class="song" data-audio="<?php echo $song['src']; ?>">
          <img src="<?php echo $song['image']; ?>" alt="Koi Jaane Na">
          <div class="song-info">
            <h2><?php echo $song['title']; ?></h2>
            <p><?php echo $song['artist']; ?></p>
          </div>
          <button class="play-btn">▶</button>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
  <audio id="audio-player"></audio>
  <script src="Koi-Jaane-Na.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const songs = document.querySelectorAll('.song');
      songs.forEach(song => {
        song.addEventListener("click", function() {
          const title = this.querySelector("h2").innerText;
          const artist = this.querySelector("p").innerText;
          const src = this.getAttribute("data-audio");
          const image = this.querySelector("img").src;
          window.location.href = `Koi-jaane-Na_index.php?title=${encodeURIComponent(title)}&artist=${encodeURIComponent(artist)}&src=${encodeURIComponent(src)}&image=${encodeURIComponent(image)}`;
        });
      });
    });
  </script>
</body>
</html>