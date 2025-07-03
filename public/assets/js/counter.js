class Counter {
    constructor() {
        this.count = 0;
        this.decrementBtn = document.getElementById('decrementBtn');
        this.incrementBtn = document.getElementById('incrementBtn');
        this.display = document.getElementById('counterDisplay');

        this.init();
    }

    init() {
        this.decrementBtn.addEventListener('click', () => this.decrement());
        this.incrementBtn.addEventListener('click', () => this.increment());
        this.updateDisplay();
    }

    decrement() {
        this.count--;
        this.updateDisplay();
    }

    increment() {
        this.count++;
        this.updateDisplay();
    }

    updateDisplay() {
        this.display.textContent = this.count;
    }
}

// Initialize counter when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new Counter();
});
