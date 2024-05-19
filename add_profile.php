<?php
// Include database connection
include('db_connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve business details from form
    $business_name = $_POST['business-name'];
    $category = $_POST['category'];
    $location = $_POST['location'];

    // Insert business profile into database
    $sql = "INSERT INTO business_profiles (business_name, category, location) VALUES ('$business_name', '$category', '$location')";
    if (mysqli_query($conn, $sql)) {
        echo "Business profile added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
