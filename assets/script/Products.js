// procuct Dissolution card Slider 

document.addEventListener("DOMContentLoaded", function() {
    const cardsContainer = document.querySelector(".product-cards-container");
    const scrollbarThumb = document.querySelector(".scrollbar-thumb");
    const scrollbarTrack = document.querySelector(".scrollbar-track");
    const leftArrow = document.querySelector(".left-arrow");
    const rightArrow = document.querySelector(".right-arrow");

    const scrollAmount = 300; 

    const updateScrollbar = () => {
        const scrollPercentage = cardsContainer.scrollLeft / (cardsContainer.scrollWidth - cardsContainer.clientWidth);
        scrollbarThumb.style.left = scrollPercentage * (scrollbarTrack.clientWidth - scrollbarThumb.clientWidth) + "px";
    };

    cardsContainer.addEventListener("scroll", updateScrollbar);

    leftArrow.addEventListener("click", () => {
        cardsContainer.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });

    rightArrow.addEventListener("click", () => {
        cardsContainer.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    scrollbarTrack.addEventListener("mousedown", (e) => {
        const trackRect = scrollbarTrack.getBoundingClientRect();
        const thumbWidth = scrollbarThumb.clientWidth;
        const offsetX = e.clientX - trackRect.left;

        const onMouseMove = (e) => {
            let newLeft = e.clientX - trackRect.left - offsetX;
            if (newLeft < 0) newLeft = 0;
            if (newLeft > trackRect.width - thumbWidth) newLeft = trackRect.width - thumbWidth;
            const scrollPercentage = newLeft / (trackRect.width - thumbWidth);
            cardsContainer.scrollLeft = scrollPercentage * (cardsContainer.scrollWidth - cardsContainer.clientWidth);
        };

        const onMouseUp = () => {
            document.removeEventListener("mousemove", onMouseMove);
            document.removeEventListener("mouseup", onMouseUp);
        };

        document.addEventListener("mousemove", onMouseMove);
        document.addEventListener("mouseup", onMouseUp);
    });
});