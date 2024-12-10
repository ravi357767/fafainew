<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Image Gallery</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .carousel-item img {
      height: 400px;
      object-fit: cover;
    }
    .carousel-item {
      transition: transform 0.5s ease-in-out;
    }
  </style>
</head>
<body>
  <div class="container my-4">
    <h2 class="text-center">Responsive Image Gallery</h2>
    <div id="imageGallery" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://via.placeholder.com/800x400?text=Image+1" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/800x400?text=Image+2" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/800x400?text=Image+3" class="d-block w-100" alt="Image 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#imageGallery" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#imageGallery" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
