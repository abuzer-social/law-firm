document.addEventListener("DOMContentLoaded", function() {
    // Initialize dropdowns with saved values
    document.querySelectorAll(".custom-dropdown-wrapper").forEach(function(dropdown) {
        const toggle = dropdown.querySelector(".custom-dropdown-toggle");
        const input = dropdown.querySelector("input[type='hidden']");
        const options = dropdown.querySelectorAll(".dropdown-item");

        // Set initial value if one exists
        if (input.value) {
            const selectedOption = Array.from(options).find(option =>
                option.getAttribute('data-value') === input.value
            );
            if (selectedOption) {
                toggle.textContent = selectedOption.textContent.trim();
            }
        }
    });

    // Handle dropdown clicks
    document.addEventListener("click", function(e) {
        document.querySelectorAll(".custom-dropdown-wrapper").forEach(function(dropdown) {
            const toggle = dropdown.querySelector(".custom-dropdown-toggle");
            const input = dropdown.querySelector("input[type='hidden']");
            const options = dropdown.querySelector(".custom-dropdown-options");

            if (dropdown.contains(e.target)) {
                if (e.target === toggle || dropdown.classList.contains("show")) {
                    dropdown.classList.toggle("show");
                }
            } else {
                dropdown.classList.remove("show");
            }

            if (options && options.contains(e.target) && e.target.classList.contains("dropdown-item")) {
                const selectedValue = e.target.getAttribute("data-value");
                const selectedText = e.target.textContent.trim();

                // Update UI
                toggle.textContent = selectedText;
                input.value = selectedValue;

                // Trigger change event if needed
                input.dispatchEvent(new Event('change'));

                dropdown.classList.remove("show");
            }
        });
    });
});
