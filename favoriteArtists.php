<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Artists - Moodify Beats</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0d1117;
            color: #c9d1d9;
        }
        nav {
            background-color: #161b22;
            color: #c9d1d9;
            padding: 1em;
            text-align: center;
            font-size: 1.2em;
        }
        .container {
            padding: 2em;
            max-width: 800px;
            margin: auto;
            position: relative;
        }
        h1 {
            text-align: center;
            color: #58a6ff;
        }
        .artistlist .artist {
            background-color: #161b22;
            border: 1px solid #30363d;
            margin: 1em 0;
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        .artist img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .btn {
            background-color: #58a6ff;
            color: #0d1117;
            border: none;
            padding: 0.5em 1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #1f6feb;
        }
        .btn-remove {
            background-color: #f85149;
        }
        .btn-remove:hover {
            background-color: #da3633;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 2em;
            color: #58a6ff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            .container {
                padding: 1em;
            }
            .artistlist .artist {
                flex-direction: column;
                align-items: flex-start;
            }
            .artistlist .artist img {
                margin-bottom: 0.5em;
            }
            .artistlist .artist button {
                margin-top: 0.5em;
                width: 100%;
            }
        }
        .back-home-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #58a6ff; /* Changed to blue */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 1rem;
            display: flex;
            align-items: center;
        }
        .back-home-btn i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <!-- ...existing code... -->
    </nav>
    <div class="container">
        <button class="back-home-btn" onclick="window.location.href='sutar.php'">
            <i class="bi bi-house-door"></i>
        </button>
        <h1>Favorite Artists</h1>
        <div class="artistlist" id="favoriteArtistsList">
            <!-- List of favorite artists will be populated here -->
        </div>
    </div>
    <script>
        const artistPages = {
            "Sonu Nigam": { page: "sonu.php", image: "Sonu-Nigam.jpg" },
            "Shreya Ghoshal": { page: "shreya.php", image: "Shreya-Ghoshal.jpg" },
            "Palak Muchhal": { page: "palak.php", image: "Palak-Muchhal.jpg" },
            "Neha Kakkar": { page: "neha.php", image: "Neha-Kakkar.jpg" },
            "Darshan Raval": { page: "darshan.php", image: "Darshan-Raval.jpg" },
            "Arman Malik": { page: "arman.php", image: "Armaan-Malik.jpg" },
            "Arijit Singh": { page: "arijit.php", image: "Arijit-Singh.jpg" },
            "A.R. Rahman": { page: "ar_rahman.php", image: "ar rehman.jpeg" }
        };

        function removeArtist(artist) {
            let favoriteArtists = JSON.parse(localStorage.getItem('favoriteArtists')) || [];
            favoriteArtists = favoriteArtists.filter(a => a !== artist);
            localStorage.setItem('favoriteArtists', JSON.stringify(favoriteArtists));
            loadFavoriteArtists();
        }

        function loadFavoriteArtists() {
            let favoriteArtists = JSON.parse(localStorage.getItem('favoriteArtists')) || [];
            let favoriteArtistsList = document.getElementById('favoriteArtistsList');
            favoriteArtistsList.innerHTML = '';
            favoriteArtists.forEach(artist => {
                let artistElement = document.createElement('div');
                artistElement.className = 'artist';
                artistElement.innerHTML = `
                    <img src="${artistPages[artist].image}" alt="${artist}">
                    <span><a href="${artistPages[artist].page}">${artist}</a></span>
                    <button class="btn btn-remove" onclick="removeArtist('${artist}')">Remove</button>
                `;
                favoriteArtistsList.appendChild(artistElement);
            });
        }

        window.onload = loadFavoriteArtists;
    </script>
</body>
</html>