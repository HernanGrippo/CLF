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

    // Get the iframe element
    const iframe = videoContainer.querySelector('iframe');

    // Get the current src attribute value of the iframe
    const currentSrc = iframe.src;

    // Replace the current autoplay value (0) with autoplay=1
    const newSrc = currentSrc.replace('autoplay=0', 'autoplay=1') + '&mute=0';

    // Set the new src attribute value of the iframe
    iframe.src = newSrc;
  }, 100); // Adjust the duration of the animation (in milliseconds) as needed
});
