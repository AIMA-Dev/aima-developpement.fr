// On page load, toggle headerRight based on phoneMenu visibility
if (document.querySelector("#phoneMenu").offsetParent !== null) {
    document.querySelector("#headerRight").style.display = "none";
} else {
    document.querySelector("#headerRight").style.display = "flex";
}

// Toggle headerRight when phoneMenu is clicked
document.querySelector("#phoneMenu").addEventListener("click", function () {
    var headerRight = document.querySelector("#headerRight");
    if (headerRight.style.display === "none") {
        headerRight.style.display = "flex";
    } else {
        headerRight.style.display = "none";
    }
});

// Toggle headerRight when phoneMenu is transitioning
document.querySelector("#phoneMenu").addEventListener("transitionend", function () {
    var headerRight = document.querySelector("#headerRight");
    var phoneMenu = document.querySelector("#phoneMenu");
    if (phoneMenu.style.display === "none") {
        headerRight.display = "flex";
    } else {
        headerRight.display = "none";
    }
});
// © AIMA DEVELOPPEMENT 2024