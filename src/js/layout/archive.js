function button_mobile_filter_show() {
    const button_show = document.querySelector("#button_filter_show");
    const button = document.querySelector("#button_filter");
    const form = document.querySelector("#form_filter");

    if (button_show && form) {
        button_show.addEventListener("click", function () {
            form.classList.toggle("active");
        });
    }
    if (button && form) {
        button.addEventListener("click", function () {
            form.classList.toggle("active");
        });
    }
};

function button_layout_archive() {
    const posts_layout = document.querySelector('.archive_wrapper_posts');
    const buttons = document.querySelectorAll('.archive_buttons');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // reset layout
            posts_layout.classList.remove(
                'archive_wrapper_posts_row',
                'archive_wrapper_posts_grid'
            );

            // reset active buttons
            buttons.forEach(btn => btn.classList.remove('active'));

            // active current button
            button.classList.add('active');

            // switch layout
            if (button.dataset.name === 'archive_button_grid') {
                posts_layout.classList.add('archive_wrapper_posts_grid');
            }

            if (button.dataset.name === 'archive_button_row') {
                posts_layout.classList.add('archive_wrapper_posts_row');
            }
        });
    });
};

document.addEventListener('DOMContentLoaded', () => {
    button_mobile_filter_show();
    button_layout_archive();
});