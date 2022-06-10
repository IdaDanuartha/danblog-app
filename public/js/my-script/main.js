$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1.5,
            },
            650: {
                items: 2,
            },
            900: {
                items: 3,
            },
            1100: {
                items: 4,
            },
        },
    });
});

// DarkMode Toggle
let darkMode = localStorage.getItem("dark-theme");
const darkModeToggle = document.querySelector("#darkmode-icon");

const enabledDarkMode = () => {
    document.documentElement.classList.add("dark");
    localStorage.setItem("dark-theme", "enabled");
};

const disabledDarkMode = () => {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("dark-theme", null);
};

if (darkMode === "enabled") {
    enabledDarkMode();
    darkModeToggle.classList.add("fa-sun");
    darkModeToggle.classList.remove("fa-moon");
}

darkModeToggle.addEventListener("click", () => {
    darkMode = localStorage.getItem("dark-theme");
    if (darkMode != "enabled") {
        enabledDarkMode();
        darkModeToggle.classList.add("fa-sun");
        darkModeToggle.classList.remove("fa-moon");
        console.log(darkMode);
    } else {
        disabledDarkMode();
        darkModeToggle.classList.remove("fa-sun");
        darkModeToggle.classList.add("fa-moon");
        console.log(darkMode);
    }
});

// Froala editor script
var editor = new FroalaEditor("#example");