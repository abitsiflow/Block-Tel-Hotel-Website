document.addEventListener('DOMContentLoaded', () => {
    const revealRows = document.querySelectorAll('.reveal-row');

    if (!revealRows.length) {
        return;
    }

    // Fallback for browsers without IntersectionObserver: just show everything.
    if (!('IntersectionObserver' in window)) {
        revealRows.forEach((row) => row.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // Reveal once, then stop watching this row.
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -60px 0px'
    });

    revealRows.forEach((row) => observer.observe(row));
});