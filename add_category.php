<?php
// Include database connection
include('db_connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve category name from form
    $category = $_POST['category'];

    // Insert category into database
    $sql = "INSERT INTO categories (category_name) VALUES ('$category')";
    if (mysqli_query($conn, $sql)) {
        echo "Category added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
