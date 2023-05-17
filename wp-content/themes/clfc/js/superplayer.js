var player;
var isPlayerReady = false;

function onYouTubeIframeAPIReady() {
  player = new YT.Player('youtubePlayer', {
    height: '100%',
    width: '100%',
    playerVars: {
      autoplay: 0,
      controls: 1,
      rel: 0
    },
    events: {
      'onReady': function() {
        isPlayerReady = true;
        hidePlayer();
      }
    }
  });
}

function playVideo(videoId) {
  if (!isPlayerReady) {
    return;
  }
  hideImageOverlay();
  showPlayer();
  player.loadVideoById(videoId);
}

function showPlayer() {
  var playerElement = document.getElementById('youtubePlayer');
  playerElement.style.display = 'block';
}

function hidePlayer() {
  var playerElement = document.getElementById('youtubePlayer');
  playerElement.style.display = 'none';
}

function showImageOverlay() {
  var imageOverlay = document.getElementById('imageOverlay');
  imageOverlay.style.display = 'block';
}

function hideImageOverlay() {
  var imageOverlay = document.getElementById('imageOverlay');
  imageOverlay.style.display = 'none';
}

document.addEventListener('DOMContentLoaded', function() {
  var imageOverlay = document.getElementById('imageOverlay');
  var overlayImage = imageOverlay.querySelector('.overlay-image');

  imageOverlay.addEventListener('click', function() {
    hideImageOverlay();
  });

  overlayImage.addEventListener('click', function(event) {
    event.stopPropagation();
    var firstButton = document.querySelector('.list-group button');
    firstButton.click();
  });

  var listGroupButtons = document.querySelectorAll('.list-group button');

  for (var i = 0; i < listGroupButtons.length; i++) {
    var button = listGroupButtons[i];
    button.addEventListener('click', function() {
      hideImageOverlay();
    });
  }
});

window.addEventListener('load', function() {
  showImageOverlay();
});
