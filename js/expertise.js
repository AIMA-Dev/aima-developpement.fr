const expertiseCards = document.querySelectorAll('.expertiseCard');

expertiseCards.forEach(expertiseCard => {
    const images = expertiseCard.querySelectorAll('img');
    const dots = expertiseCard.querySelectorAll('.dot');

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            images.forEach(image => image.className = "");
            images[index].classList.add('imgActive');
            images.forEach((image, i) => {
                if (i !== index) {
                    image.classList.add('imgInactive');
                }
            });
            dots.forEach(dot => dot.classList.remove('dotActive'));
            dot.classList.add('dotActive');
        });
    });
});
// © AIMA DEVELOPPEMENT 2024