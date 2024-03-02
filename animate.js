//Animate on Scroll Functionality
const observer = new IntersectionObserver ((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

//Responsive Menu Functionality
var navLinks = document.getElementById("links");
var header = doucment.getElementById("header");

function showMenu() {
    navLinks.style.right = "0px";
        }
function hideMenu() {
        navLinks.style.right = "-200px";
    }