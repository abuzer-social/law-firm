class Counter {
    constructor(container) {
        this.count = 0;
        this.decrementBtn = container.querySelector('.decrement');
        this.incrementBtn = container.querySelector('.increment');
        this.display = container.querySelector('.counter-display');

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

// Initialize all counters when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const counterComponents = document.querySelectorAll('.counter-component');
    counterComponents.forEach(component => {
        new Counter(component);
    });
});
