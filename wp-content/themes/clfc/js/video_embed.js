// Get the image element
const thumbnail = document.getElementById('thumbnail');

// Get the video container
const videoContainer = document.getElementById('videoContainer');

// Add a click event listener to the image
thumbnail.addEventListener('click', function() {
  // Add a fade-out animation class to the thumbnail
  thumbnail.classList.add('fade-out');

  // Wait for the animation to finish
  setTimeout(function() {
    // Hide the thumbnail
    thumbnail.style.display = 'none';

    // Show the video container
    videoContainer.style.display = 'block';
  }, 500); // Adjust the duration of the animation (in milliseconds) as needed
});
