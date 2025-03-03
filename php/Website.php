<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepten</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#"><img src="home-icon.png" alt="Home" class="home-icon"></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Recepten</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Inloggen</a></li>
        </ul>
    </nav>
    
    <div class="trending-container">
        <h2>Trending:</h2>
        <div class="trending-grid">
            <?php
            $trending = [
                "spaghetti.jpg", 
                "burger.jpg", 
                "pancakes.jpg", 
                "lasagna.jpg", 
                "fried-chicken.jpg", 
                "cheesecake.jpg"
            ];
            
            foreach ($trending as $image) {
                echo "<div class='trending-item'><img src='images/$image' alt='Trending gerecht'></div>";
            }
            ?>
        </div>
    </div>
</body>
</html>

