function readPost() {
    const playButton  = document.querySelector('[data-name="read_play"]');
    const pauseButton = document.querySelector('[data-name="read_pause"]');
    const content     = document.querySelector('.single_post_content');

    if (!playButton || !pauseButton || !content) return;

    let utterance = null;

    playButton.addEventListener('click', () => {
        const text = content.innerText;

        // si déjà en cours → on évite de relancer
        if (speechSynthesis.speaking && !speechSynthesis.paused) return;

        if (!utterance) {
            utterance = new SpeechSynthesisUtterance(text);
        }

        speechSynthesis.cancel(); // reset propre
        utterance = new SpeechSynthesisUtterance(text);

        speechSynthesis.speak(utterance);

        playButton.classList.add('post_read_button_hide');
        pauseButton.classList.remove('post_read_button_hide');
    });

    pauseButton.addEventListener('click', () => {
        if (speechSynthesis.speaking && !speechSynthesis.paused) {
            speechSynthesis.pause(); // pause réelle
        } else {
            speechSynthesis.resume(); // reprend EXACTEMENT où ça s’est arrêté
        }

        pauseButton.classList.add('post_read_button_hide');
        playButton.classList.remove('post_read_button_hide');
    });
}

document.addEventListener('DOMContentLoaded', () => {
    readPost();
});