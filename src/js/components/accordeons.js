function accordeons() {
    const accordions = document.querySelectorAll('.accordeon');

    accordions.forEach(acc => {
        const content = acc.querySelector('.accordeon_text');

        // Si actif au chargement → définir la hauteur
        if (acc.classList.contains('active')) {
            content.style.height = content.scrollHeight + "px";
        }

        const button = acc.querySelector('.accordeons_button-js');
        button.addEventListener('click', function (e) {
            e.preventDefault();

            const isOpen = acc.classList.contains('active');

            if (isOpen) {
                acc.classList.remove('active');
                content.style.height = 0;
                return;
            }

            // Sinon → désactiver les autres (si tu veux mode "un seul ouvert")
            // accordions.forEach(other => {
            //     if (other !== acc) {
            //         other.classList.remove('active');
            //         other.querySelector('.accordeon_text').style.height = 0;
            //     }
            // });

            acc.classList.add('active');
            content.style.height = content.scrollHeight + "px";
        });
    });
};

document.addEventListener('DOMContentLoaded', () => {
    accordeons();
});