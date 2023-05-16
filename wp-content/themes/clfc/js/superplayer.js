var player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player('youtubePlayer', {
    height: '100%',
    width: '100%',
    playerVars: {
      autoplay: 0,
      controls: 1,
      rel: 0
    }
  });
}

function playVideo(videoId) {
  player.loadVideoById(videoId);
}

