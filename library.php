<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <?php
    include "links.php";
    ?>
</head>

<body>
    <div class="page-header">
        <h2>Library</h2>
        <div class="contact-breadcrupms">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="library-class">
        <div class="pdf">
        <iframe src="./includes/pdfs/Library_Books_List.pdf" height="100%" width="100%" title="Iframe Example"></iframe>

        </div>
    </div>
</body>

</html>