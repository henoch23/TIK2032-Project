<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
    <nav>
        <a href="index.html">Home</a>
        <a href="gallery.php">Gallery</a>
        <a href="blog.php">Blog</a>
        <a href="contacts.html">Contacts</a>
    </nav>
</header>

<div class="carousel">
    <div class="list">
        <?php
        $sql = "SELECT * FROM blog";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="item">
                        <img src="' . htmlspecialchars($row["image_url"]) . '" alt="' . htmlspecialchars($row["title"]) . '" />
                        <div class="content">
                            <div class="author">' . htmlspecialchars($row["author"]) . '</div>
                            <div class="title">' . htmlspecialchars($row["title"]) . '</div>
                            <div class="des">' . htmlspecialchars($row["content"]) . '</div>
                        </div>
                      </div>';
            }
        } else {
            echo "<p>No blog posts found.</p>";
        }
        ?>
    </div>

    <div class="thumbnail">
        <?php
        // Reset result pointer and reuse the result set
        if ($result->num_rows > 0) {
            $result->data_seek(0); // Reset pointer to the start
            while($row = $result->fetch_assoc()) {
                echo '<div class="item">
                        <img src="' . htmlspecialchars($row["image_url"]) . '" alt="' . htmlspecialchars($row["title"]) . '" />
                        <div class="content">
                            <div class="title">' . htmlspecialchars($row["title"]) . '</div>
                        </div>
                      </div>';
            }
        }
        ?>
    </div>

    <div class="arrows">
        <button id="prev"><</button>
        <button id="next">></button>
    </div>

    <div class="time"></div>
</div>

<script src="app.js"></script>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
