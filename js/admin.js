const toggleMaintenanceCheckbox = document.querySelector('#toggleMaintenance');

toggleMaintenanceCheckbox.addEventListener('change', () => {
    window.location.href = 'scripts/setSetting.php?setting=maintenance&value=' + (toggleMaintenanceCheckbox.checked ? true : false);
});

# Développé avec ❤️ par : www.noasecond.com.