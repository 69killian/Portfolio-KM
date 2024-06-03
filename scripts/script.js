document.addEventListener("DOMContentLoaded", () => {
    const transitionTargets = document.querySelectorAll(".transition-target");
    transitionTargets.forEach((target) => {
        target.classList.add("show");
    });

    const showcase = document.querySelector(".showcase");
    const cards = document.querySelectorAll('.card');
    const about = document.querySelector(".about");

    window.addEventListener("scroll", () => {
        if (isScrolledIntoView(showcase)) {
            showcase.classList.add("visible");
        }
        cards.forEach(card => {
            if (isScrolledIntoView(card)) {
                card.classList.add("visible");
            }
        });
        if (isScrolledIntoView(about)) {
            about.classList.add("visible");
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const contactFormContainer = document.querySelector(".contact-form-container");

    window.addEventListener("scroll", () => {
        if (isScrolledIntoView(contactFormContainer)) {
            contactFormContainer.classList.add("visible");
        }
    });
});

function isScrolledIntoView(element) {
    const rect = element.getBoundingClientRect();
    const elemTop = rect.top;
    const elemBottom = rect.bottom;

    const isVisible = (elemTop < window.innerHeight) && (elemBottom >= 0);
    return isVisible;
}


function isScrolledIntoView(element) {
    const rect = element.getBoundingClientRect();
    const elemTop = rect.top;
    const elemBottom = rect.bottom;

    const isVisible = (elemTop < window.innerHeight) && (elemBottom >= 0);
    return isVisible;
}

document.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 0) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});