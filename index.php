<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineXpress</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section class="top-bar">
        <div class="left-content">
            <h2 class="title">CineXpress</h2>
            <ul class="navigation">
                <li><a class="active" href="#">Movies</a></li>
                <li><a href="admin_movies.php">Admin</a></li>
            </ul>
        </div>
    </section>

    <section class="movies-container">
        <div class="upcoming-img-box">
            <img src="assets/images/upcoming.webp" alt="">
            <p class="upcoming-title">Upcoming Movie</p>
            <div class="buttons">
                <a href="#" class="btn">Book Now</a>
                <a href="#" class="btn-alt btn">Play Trailer</a>
            </div>
        </div>

        <div class="current-movies">
            <?php
            $result = $conn->query("SELECT * FROM movies");
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="current-movie">
                    <div class="cm-img-box">
                        <img src="assets/posters/' . $row["poster"] . '" alt="">
                    </div>
                    <h3 class="movie-title">' . $row["title"] . '</h3>
                    <p class="screen-name">Screen: ' . $row["screen"] . '</p>
                    <div class="booking">
                        <h2 class="price">' . $row["price"] . '$</h2>
                        <a href="book.php?id=' . $row["id"] . '" class="btn">Buy Tickets</a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>
</body>
</html>
