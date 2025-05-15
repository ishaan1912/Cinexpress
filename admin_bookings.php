<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Admin - Bookings</title></head>
<body>
    <h2>All Bookings</h2>
    <a href="admin_movies.php">Back to Movies</a>
    <table border="1">
        <tr><th>Name</th><th>Movie</th><th>Date</th><th>Time</th></tr>
        <?php
        $result = $conn->query("SELECT b.name, b.show_date, b.show_time, m.title 
                                FROM bookings b JOIN movies m ON b.movie_id = m.id");
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['name']}</td><td>{$row['title']}</td><td>{$row['show_date']}</td><td>{$row['show_time']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
