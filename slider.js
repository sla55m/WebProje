document.addEventListener('DOMContentLoaded', function() {
    const sliders = Array.from(document.querySelectorAll('.slider')).map((slider, index) => ({
        currentIndex: 0,
        element: slider.querySelector('.slides')
    }));

    function showSlide(slider, index) {
        const slides = slider.element.children;
        if (index >= slides.length) {
            slider.currentIndex = 0;
        } else if (index < 0) {
            slider.currentIndex = slides.length - 1;
        } else {
            slider.currentIndex = index;
        }
        slider.element.style.transform = `translateX(-${slider.currentIndex * 100}%)`;
    }

    function nextSlide(index) {
        showSlide(sliders[index], sliders[index].currentIndex + 1);
    }

    function prevSlide(index) {
        showSlide(sliders[index], sliders[index].currentIndex - 1);
    }

    sliders.forEach((slider, index) => {
        showSlide(slider, 0);
        const controls = slider.element.parentElement.querySelector('.controls');
        controls.querySelector('button:nth-child(1)').addEventListener('click', () => prevSlide(index));
        controls.querySelector('button:nth-child(2)').addEventListener('click', () => nextSlide(index));
        
        setInterval(() => {
            nextSlide(index);
        }, 5000);
    });
});