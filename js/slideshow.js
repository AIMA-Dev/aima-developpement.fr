function Slideshow(slideshowContainer) {
    this.slideIndex = 1;
    this.slides = slideshowContainer.getElementsByClassName("mySlides");
    this.dots = slideshowContainer.getElementsByClassName("demo");
    this.captionText = slideshowContainer.getElementsByClassName("caption")[0];

    this.showSlides = (n) => {
        let i;
        if (n > this.slides.length) { this.slideIndex = 1 }
        if (n < 1) { this.slideIndex = this.slides.length }
        for (i = 0; i < this.slides.length; i++) {
            this.slides[i].style.display = "none";
        }
        for (i = 0; i < this.dots.length; i++) {
            this.dots[i].className = this.dots[i].className.replace(" active", "");
        }
        this.slides[this.slideIndex - 1].style.display = "block";
        this.dots[this.slideIndex - 1].className += " active";
        this.captionText.innerHTML = this.dots[this.slideIndex - 1].alt;
    };

    this.plusSlides = (n) => {
        this.showSlides(this.slideIndex += n);
    };

    this.currentSlide = (n) => {
        this.showSlides(this.slideIndex = n);
    };

    this.showSlides(this.slideIndex);
}

document.addEventListener("DOMContentLoaded", function () {
    const slideshows = document.querySelectorAll('.slideshowContainer');
    slideshows.forEach(slideshowContainer => {
        const slideshow = new Slideshow(slideshowContainer);

        // Attaching event listeners for navigation buttons
        slideshowContainer.querySelector('.prev').addEventListener('click', function () {
            slideshow.plusSlides(-1);
        });
        slideshowContainer.querySelector('.next').addEventListener('click', function () {
            slideshow.plusSlides(1);
        });

        // Attaching event listeners for thumbnail images
        const thumbnails = slideshowContainer.querySelectorAll('.demo');
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', function () {
                slideshow.currentSlide(index + 1);
            });
        });
    });
});
// © AIMA DEVELOPPEMENT 2024