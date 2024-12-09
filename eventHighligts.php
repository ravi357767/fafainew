<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events HighLights</title>
    <?php
    include "links.php";
    ?>
</head>
<body>
<div class="page-header">
        <h2>Events HighLights</h2>
        <div class="contact-breadcrupms">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events Highlights</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="event-highligts-wrapper">
            <span>Dehradun workshop 2024</span>
                <?php
                    include "eventHighligtsGallery.php";
                ?>
    </div>
    
</body>
</html>