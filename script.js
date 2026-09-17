const menuToggle = document.getElementById("menuToggle");
const navbar = document.getElementById("navbar");

menuToggle.addEventListener("click", () => {
    navbar.classList.toggle("open");
});

// Mobile dropdowns
document.querySelectorAll(".drop-btn").forEach(button => {
    button.addEventListener("click", () => {
        if (window.innerWidth <= 780) {
            button.parentElement.classList.toggle("open");
        }
    });
});

// Close mobile menu after selecting a link
document.querySelectorAll(".navbar a").forEach(link => {
    link.addEventListener("click", () => navbar.classList.remove("open"));
});

// Scroll reveal
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.12 });

document.querySelectorAll(".reveal").forEach(el => observer.observe(el));

// Footer year
document.getElementById("year").textContent = new Date().getFullYear();
