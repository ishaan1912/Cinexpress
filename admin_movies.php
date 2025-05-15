<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Movies</title>
</head>
<body>
    <h2>Movie List</h2>
    <a href="admin_bookings.php">View Bookings</a> | <a href="index.php">Back to Site</a>
    <table border="1">
        <tr><th>Title</th><th>Screen</th><th>Price</th><th>Poster</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM movies");
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['title']}</td><td>{$row['screen']}</td><td>\${$row['price']}</td><td>{$row['poster']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
