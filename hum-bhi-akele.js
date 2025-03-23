document.addEventListener('DOMContentLoaded', () => {
  const audioPlayer = document.getElementById('audio-player');
  const playButtons = document.querySelectorAll('.play-btn');

  playButtons.forEach(button => {
    button.addEventListener('click', () => {
      const song = button.closest('.song');
      const audioSrc = song.getAttribute('data-audio');

      if (audioPlayer.src.includes(audioSrc) && !audioPlayer.paused) {
        audioPlayer.pause();
        button.textContent = '▶';
      } else {
        audioPlayer.src = audioSrc;
        audioPlayer.play();
        playButtons.forEach(btn => btn.textContent = '▶');
        button.textContent = '⏸';
      }
    });
  });

  audioPlayer.addEventListener('ended', () => {
    playButtons.forEach(button => button.textContent = '▶');
  });
});
