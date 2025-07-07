
(function () {
    const searchInput = document.getElementById('faq-search');
    const tabContent = document.getElementById('faqTabContent');
    const tabButtons = document.querySelectorAll('#faqTab .nav-link');

    function filterAccordion(tabIndex, searchTerm) {
        const accordion = document.getElementById('accordion-' + tabIndex);
        if (!accordion) return;
        const items = accordion.querySelectorAll('.accordion-item');
        let anyVisible = false;
        items.forEach(item => {
            const question = item.getAttribute('data-question').toLowerCase();
            if (question.includes(searchTerm)) {
                item.style.display = '';
                anyVisible = true;
            } else {
                item.style.display = 'none';
            }
        });
        // If nothing matches, show a message
        let noResult = accordion.querySelector('.no-result');
        if (!anyVisible) {
            if (!noResult) {
                noResult = document.createElement('div');
                noResult.className = 'no-result text-center p-4';
                noResult.textContent = 'No results found.';
                accordion.appendChild(noResult);
            }
        } else if (noResult) {
            noResult.remove();
        }
    }

    function getActiveTabIndex() {
        const active = document.querySelector('#faqTab .nav-link.active');
        return active ? active.id.split('-')[1] : '0';
    }

    searchInput.addEventListener('input', function () {
        const tabIndex = getActiveTabIndex();
        filterAccordion(tabIndex, this.value.trim().toLowerCase());
    });

    tabButtons.forEach(btn => {
        btn.addEventListener('shown.bs.tab', function () {
            searchInput.value = '';
            const tabIndex = getActiveTabIndex();
            filterAccordion(tabIndex, '');
        });
    });
})();
