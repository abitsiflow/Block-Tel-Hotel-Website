// Switches between the login and register panels.
// The CSS does all the animating; this file only changes data-mode on .auth-page.
(() => {
    const page = document.querySelector('.auth-page');
    if (!page) return;

    const panels = {
        login: document.getElementById('login-panel'),
        register: document.getElementById('register-panel'),
    };

    const titles = {
        login: 'Log In | Block-Tel Hotel',
        register: 'Create Account | Block-Tel Hotel',
    };

    const modeFromHash = () => (location.hash === '#register' ? 'register' : 'login');

    function setMode(mode, moveFocus) {
        if (!panels[mode]) return;

        page.dataset.mode = mode;
        document.title = titles[mode];

        // The hidden form must not be reachable with Tab or by screen readers.
        Object.keys(panels).forEach((name) => {
            panels[name].inert = name !== mode;
        });

        if (moveFocus) {
            panels[mode].querySelector('.auth-title').focus({ preventScroll: true });
        }
    }

    // Overlay buttons and the phone links all carry data-switch="login|register".
    document.addEventListener('click', (event) => {
        const trigger = event.target.closest('[data-switch]');
        if (!trigger) return;

        event.preventDefault();
        const mode = trigger.dataset.switch;
        setMode(mode, true);
        history.replaceState(null, '', '#' + mode);
    });

    // Lets auth.html#register and auth.html#login open the right side directly.
    window.addEventListener('hashchange', () => setMode(modeFromHash(), false));

    // First paint: set the mode without playing the slide.
    page.classList.add('is-booting');
    setMode(modeFromHash(), false);
    requestAnimationFrame(() => {
        requestAnimationFrame(() => page.classList.remove('is-booting'));
    });
})();