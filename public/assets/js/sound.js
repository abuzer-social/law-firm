document.addEventListener('DOMContentLoaded', function () {
    // Load the click sound
    const clickSound = new Audio('assets/sound/mouse-sound.mp3');

    // Find all tab buttons
    const tabButtons = document.querySelectorAll('.nav-pills .nav-link');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            clickSound.currentTime = 0; // Rewind to start
            clickSound.play().catch(err => {
                console.warn('Sound playback failed:', err);
            });
        });
    });
});
