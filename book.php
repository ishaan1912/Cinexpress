<?php
include 'db.php';
$movie_id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $conn->query("INSERT INTO bookings (movie_id, name, show_date, show_time) VALUES ('$movie_id', '$name', '$date', '$time')");
    echo "<script>alert('Booking Confirmed!'); window.location='index.php';</script>";
}

$result = $conn->query("SELECT * FROM movies WHERE id = $movie_id");
$movie = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Ticket - <?php echo $movie['title']; ?></title>
</head>
<body>
    <h2>Book for <?php echo $movie['title']; ?></h2>
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Date: <input type="date" name="date" required><br><br>
        Time: <input type="time" name="time" required><br><br>
        <button type="submit">Confirm Booking</button>
    </form>
</body>
</html>
