document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.btn-load').forEach(button => {
        button.addEventListener('click', function (e) {
            // Prevent double activation
            if (button.classList.contains('btn-loading')) return;

            // Wrap text in span if not already wrapped
            if (!button.querySelector('span')) {
                const text = button.textContent.trim();
                button.textContent = '';
                const span = document.createElement('span');
                span.textContent = text;
                button.appendChild(span);
            }

            // Add loading class
            button.classList.add('btn-loading');
        });
    });
});
