<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <?php
    include "links.php";
    ?>
</head>

<body>
    <div class="page-header">
        <h2>Gallery</h2>
        <div class="contact-breadcrupms">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="gallery-wrapper">
        <p>discover</p>
        <span>FAFAI Aroma Chemical Workshop Mumbai March (2024)</span>
    </div>
    <div class="gallery-wrapper-main">
        <?php
        include "./includes/gallery/gallery.php";
        ?>
    </div>
</body>

</html>