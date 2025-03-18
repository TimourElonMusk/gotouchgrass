document.getElementById('arrowDownBtn').addEventListener('click', () => {
    const startPosition = window.scrollY;
    const distance = document.getElementById('features').getBoundingClientRect().top + window.scrollY - document.querySelector('header').offsetHeight - startPosition;
    const duration = 1000;

    let startTime = null;

    function easeInOutQuad(t) {
        return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
    }

    function scrollAnimation(currentTime) {
        if (!startTime) startTime = currentTime;

        const elapsedTime = currentTime - startTime;

        window.scrollTo(0, startPosition + distance * easeInOutQuad(Math.min(elapsedTime / duration, 1)));

        if (elapsedTime < duration) {
            requestAnimationFrame(scrollAnimation);
        }
    }

    requestAnimationFrame(scrollAnimation);
});