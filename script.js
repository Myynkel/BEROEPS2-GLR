document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.new-recipes .Ontbijt, .Lunch, .Diner');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    sections.forEach(section => {
        section.classList.add('show-on-scroll');
        observer.observe(section);
    });
});

function toggleMenu() {
    var menuItems = document.querySelector('.menu-items');
    if (menuItems.style.display === 'block') {
        menuItems.style.display = 'none';
    } else {
        menuItems.style.display = 'block';
    }
}
 
document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const images = document.querySelectorAll('.header-image');
    const totalImages = images.length;
 
    setInterval(() => {
        images[currentIndex].style.display = 'none';
        currentIndex = (currentIndex + 1) % totalImages;
        images[currentIndex].style.display = 'block';
    }, 7500);
});

// document.addEventListener("DOMContentLoaded", function () {
    // const recipeCards = document.querySelectorAll(".recipe-card");

    // recipeCards.forEach(card => {
        // card.addEventListener("click", function () {
            // const title = card.getAttribute("data-recipe-title");
            // const content = card.getAttribute("data-recipe-content");

            // document.getElementById("recipeModalLabel").innerText = title;
            // document.getElementById("recipeContent").innerText = content;

            // const recipeModal = new bootstrap.Modal(document.getElementById("recipeModal"));
            // recipeModal.show();
        // });
    // });
// });