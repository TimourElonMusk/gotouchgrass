let isScrolling = false;

document.getElementById('arrowDownBtn').addEventListener('click', () => {
    const startPosition = window.scrollY;
    const distance = document.getElementById('categories').getBoundingClientRect().top + window.scrollY - document.querySelector('header').offsetHeight - startPosition;
    const duration = 1000;
    let startTime = null;

    isScrolling = true;

    function easeInOutQuad(t) {
        return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
    }

    function scrollAnimation(currentTime) {
        if (!startTime) startTime = currentTime;

        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);

        if (!isScrolling) return;

        window.scrollTo(0, startPosition + distance * easeInOutQuad(progress));

        if (elapsedTime < duration) {
            requestAnimationFrame(scrollAnimation);
        }
    }

    requestAnimationFrame(scrollAnimation);
});

window.addEventListener('wheel', () => isScrolling = false, { passive: true });
window.addEventListener('touchstart', () => isScrolling = false, { passive: true });
