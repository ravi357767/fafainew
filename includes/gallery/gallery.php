<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Image Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gallery img {
            cursor: pointer;
            transition: transform 0.3s;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        .popout {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1050;
            display: none;
        }

        .popout img {
            max-width: 90%;
            max-height: 90%;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row gallery g-3">
            <!-- Gallery Images -->
            <div class="col-6 col-md-4 col-lg-3">
                <img src="././includes/images/gallery/1-1.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 1">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="././includes/images/gallery/10.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 2">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/12.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/13-1.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/14-1.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/15.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/16-1.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/17.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/18.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/19.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/2-1.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/20-1.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/21.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/22.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/23.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/24.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/25-1.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <img src="./includes/images/gallery/26-1.jpeg" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" alt="Image 3">
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal for Popup -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="Popup Image">
                </div>
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- Popout for Fullscreen -->
    <div id="popout" class="popout">
        <img id="popoutImage" src="" alt="Popout Image">
    </div>

    <script src="./javascript/eventgallery.js"></script>
</body>

</html>