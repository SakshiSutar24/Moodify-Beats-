<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search - Moodify Beats</title>
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
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
    
    <div class="search-container">
        <input type="text" class="search-bar" placeholder="Search for a song..." oninput="searchSongs()">
    </div>
    <div class="results-container">
        <ul></ul>
        <p class="no-results-message">No results found.</p>
    </div>
    <audio id="audioPlayer" controls></audio>
    <script src="search.js"></script>
</body>
</html>
