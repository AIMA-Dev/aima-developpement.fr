var jobDivs = document.querySelectorAll('.job');

jobDivs.forEach((jobDiv) => {
    const developImage = jobDiv.querySelector('.develop');
    const hiddenContent = jobDiv.querySelector('.hiddenContent');
    developImage.addEventListener('click', () => {
        if (developImage.classList.contains('developed')) {
            developImage.classList.remove('developed');
            hiddenContent.classList.remove('developed');
        } else {
            developImage.classList.add('developed');
            hiddenContent.classList.add('developed');
        }
    });
});
// © AIMA DEVELOPPEMENT 2024