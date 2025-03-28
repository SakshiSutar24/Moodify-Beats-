<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo2.png.webp">
    <title>Moodify Beats</title>
    <link rel="stylesheet" href="sutar.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- FontAwesome for icons -->
</head>
<body>
    <nav>
        <ul>
            <li class="brand">
                <img src="logo2.png.webp" alt="Moodify Beats Logo" class="logo">
                <span>Moodify Beats</span>
            </li>
            <!-- Home Dropdown -->
            <li class="dropdown">
                <button onclick="toggleDropdown('dropdownMenu')" class="dropbtn">
                    Home <i class="fas fa-caret-down"></i>
                </button>
                <div id="dropdownMenu" class="dropdown-content">
                    <a href="allin1.php">All</a>
                    <a href="music.php">Music</a>  <!-- Shiddat Player Page ला लिंक -->
                    <a href="Artist.php">Artists</a>
                </div>
            </li>
            <!-- Library Dropdown -->
            <li class="dropdown">
                <button onclick="toggleDropdown('libraryDropdown')" class="dropbtn">
                    Library <i class="fas fa-caret-down"></i>
                </button>
                <div id="libraryDropdown" class="dropdown-content">
                    <a href="createPlaylist.php">Add Playlist</a>
                    <a href="likedSongs.php">Liked Songs</a>
                    <a href="favoriteArtists.php">Favorite Artists</a>
                </div>
            </li>
            <li><a href="search2.php">Search</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="admin_login.php">Admin</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="signin.php">Log In</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
   
    <script>
        function toggleDropdown(menuId) {
            let dropdowns = document.getElementsByClassName("dropdown-content");
            for (let i = 0; i < dropdowns.length; i++) {
                if (dropdowns[i].id !== menuId) {
                    dropdowns[i].classList.remove("show");
                }
            }
            document.getElementById(menuId).classList.toggle("show");
        }

        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                let dropdowns = document.getElementsByClassName("dropdown-content");
                for (let i = 0; i < dropdowns.length; i++) {
                    dropdowns[i].classList.remove("show");
                }
            }
        }

        function likeSong(song) {
            let likedSongs = JSON.parse(localStorage.getItem('likedSongs')) || [];
            if (!likedSongs.includes(song)) {
                likedSongs.push(song);
                localStorage.setItem('likedSongs', JSON.stringify(likedSongs));
                alert(song + ' added to Liked Songs');
            }
        }

        function addToPlaylist(song) {
            let playlist = JSON.parse(localStorage.getItem('playlist')) || [];
            if (!playlist.includes(song)) {
                playlist.push(song);
                localStorage.setItem('playlist', JSON.stringify(playlist));
                alert(song + ' added to Playlist');
            }
        }

        function favoriteArtist(artist) {
            let favoriteArtists = JSON.parse(localStorage.getItem('favoriteArtists')) || [];
            if (!favoriteArtists.includes(artist)) {
                favoriteArtists.push(artist);
                localStorage.setItem('favoriteArtists', JSON.stringify(favoriteArtists));
                alert(artist + ' added to Favorite Artists');
            }
        }
    </script>
</body>
</html>
