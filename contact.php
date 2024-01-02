<!-- contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Car Enthusiast Club</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="car.php">Cars</a></li>
                <li><a href="contact.php">Join the Club</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h2>Contact Us</h2>
        <p>Join the Car Enthusiast Club by filling out the form below:</p>
        
        <?php
        // Display success or error messages here, if any
        if (isset($_GET['message'])) {
            echo '<p class="' . ($_GET['message'] == 'success' ? 'success' : 'error') . '">' . $_GET['message'] . '</p>';
        }
        ?>

        <form action="process_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <button type="submit">Join Now</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2023 Car Enthusiast Club</p>
    </footer>
</body>
</html>
