<?php
// Assuming you have a database connection established

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Perform input validation and sanitization here

    // Insert data into the members table
    $sql = "INSERT INTO members (name, email, phone) VALUES ('$name', '$email', '$phone')";
    $result = $conn->query($sql);

    if ($result) {
        echo "Thank you for joining the Car Enthusiast Club!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    // Redirect to the contact page if accessed directly
    header("Location: contact.php");
    exit();
}
?>
<?php
// Assuming you have a MariaDB (MySQL) database connection established

$servername = "127.0.0.1";
$username = "podge";
$password = "password123";
$database = "car_club"; // Make sure to use the correct database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Perform input validation and sanitization here

    // Insert data into the members table
    $sql = "INSERT INTO members (name, email, phone) VALUES ('$name', '$email', '$phone')";
    $result = $conn->query($sql);

    if ($result) {
        echo "Thank you for joining the Car Enthusiast Club!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    // Redirect to the contact page if accessed directly
    header("Location: contact.php");
    exit();
}
?>
