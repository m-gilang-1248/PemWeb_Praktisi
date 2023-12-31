<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $id = mysqli_real_escape_string($conn, $id);

    $query = "DELETE FROM `marital` WHERE `marital_id` = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: marital.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}
?>
