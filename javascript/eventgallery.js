const galleryImages = document.querySelectorAll('.gallery img');
const modalImage = document.getElementById('modalImage');
const popout = document.getElementById('popout');
const popoutImage = document.getElementById('popoutImage');

// Show image in modal
galleryImages.forEach(img => {
    img.addEventListener('click', () => {
        modalImage.src = img.src;
    });
});

// Popout image functionality
modalImage.addEventListener('dblclick', () => {
    popout.style.display = 'flex';
    popoutImage.src = modalImage.src;
});

popout.addEventListener('click', () => {
    popout.style.display = 'none';
});