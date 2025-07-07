document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form'); // Adjust this selector if needed
    const phoneInput = document.getElementById('phone');

    form.addEventListener('submit', function (e) {
        const rawPhone = phoneInput.value.trim();

        // Validate raw input (should be 9 digits, not start with 0)
        if (!/^[1-9][0-9]{8}$/.test(rawPhone)) {
            e.preventDefault();
            alert("Please enter a valid 9-digit number without leading 0.");
            return;
        }

        // Inject +966 temporarily for submission
        const fullPhone = '+966' + rawPhone;

        // Create hidden input to submit
        const hidden = document.createElement('input');
        hidden.type = 'hidden';
        hidden.name = 'phone';
        hidden.value = fullPhone;

        // Remove name from visible input so it's not submitted
        phoneInput.removeAttribute('name');

        // Append hidden input
        form.appendChild(hidden);
    });
});
