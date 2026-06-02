function postsFitler() {
    const buttons = document.querySelectorAll('.post_filter_btn-js');
    const posts = document.querySelectorAll('.post_link-js');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            posts.forEach(p => {
                if (filter === 'all' || p.classList.contains(filter)) {
                    p.classList.add('post_active-js');
                } else {
                    p.classList.remove('post_active-js');
                }
            });
        });
    });
};

document.addEventListener('DOMContentLoaded', () => {
    postsFitler();
});