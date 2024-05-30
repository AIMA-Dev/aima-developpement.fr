document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
});

document.addEventListener('mousedown', function (e) {
    if (e.which === 2 || e.which === 3) {
        e.preventDefault();
    }
});