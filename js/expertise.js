const imgWraps = document.querySelectorAll('.imgWrap');

imgWraps.forEach(imgWrap => {
    const images = imgWrap.querySelectorAll('img');
    const dots = imgWrap.querySelectorAll('.dot');

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