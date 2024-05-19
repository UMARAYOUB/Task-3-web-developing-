<?php
// Include database connection
include('db_connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve city/town name from form
    $city = $_POST['city'];

    // Insert city/town into database
    $sql = "INSERT INTO cities (city_name) VALUES ('$city')";
    if (mysqli_query($conn, $sql)) {
        echo "City/Town added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
