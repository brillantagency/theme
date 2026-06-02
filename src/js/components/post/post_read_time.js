function readtime() {
    const content = document.querySelector('.single_post_content');
    const output = document.querySelector('.single_readtime-js');

    if (!content || !output) return;

    const text = content.innerText.trim();
    const words = text.split(/\s+/).length;

    const wpm = 160; // vitesse moyenne
    const minutes = words / wpm;

    const rounded = Math.ceil(minutes);

    output.textContent = rounded;
}

document.addEventListener('DOMContentLoaded', readtime);