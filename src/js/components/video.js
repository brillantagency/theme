document.querySelectorAll('.component_video').forEach(video => {

    const cover = video.querySelector('.video_cover');

    if (!cover) return;

    cover.addEventListener('click', () => {
        video.classList.add('is-playing');
    });

});