<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Snow Images</title>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .snow-images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .snow-images img {
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
</style>
</head>
<body>
<div class="container">
<h1>Beautiful Snow Images</h1>
<div class="snow-images">
<?php
            // Directory containing snow images
            $snow_directory = 'images/';
 
            // Get all image files from the directory
            $snow_images = glob($snow_directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
 
            // Display snow images
            foreach ($snow_images as $image) {
                echo '<img src="' . $image . '" alt="Snow">';
            }
            ?>
</div>
</div>
</body>
</html>