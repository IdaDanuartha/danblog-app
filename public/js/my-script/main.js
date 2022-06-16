$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3500,
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

    // Passing data to edit comment modal
    $('.edit-comment').on('click', function() {
        $.ajax({
            url: `/comments/detail/${$(this).val()}`,
            type: 'GET',
            success: ({ data }) => {
                $('#edit-form').attr('action', `/comments/update/${data.id}`)
                $('#edit-user_comment').val(data.user_comment)
                $('#trix-editor-comment').val(data.user_comment)
            }
        })
    })



});

// DarkMode Toggle
let darkMode = localStorage.getItem("dark-theme");
const darkModeToggle = document.querySelector("#darkmode-icon");
const darkModeTooltip = document.getElementById("dark-light-mode-tooltip");

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
        darkModeTooltip.textContent = "Light Mode";
        // console.log(darkMode);
    } else {
        disabledDarkMode();
        darkModeToggle.classList.remove("fa-sun");
        darkModeToggle.classList.add("fa-moon");
        darkModeTooltip.textContent = "Dark Mode";
        // console.log(darkMode);
    }
});