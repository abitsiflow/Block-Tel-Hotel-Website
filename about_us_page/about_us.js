const revealEls = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver((entries) => { // Detects when scrolling IntersectionObserver will do the job
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { threshold: 0.1 });

   revealEls.forEach((el) => observer.observe(el));