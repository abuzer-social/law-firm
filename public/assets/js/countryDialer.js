const input = document.querySelector("#phone");
window.intlTelInput(input, {
    initialCountry: "gb",
    separateDialCode: true,
    loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"),
});
