var searchInput = document.getElementById('search');
var jobDivs = document.querySelectorAll('.job');
var jobDivsInnerHTML = [];
jobDivs.forEach(jobDiv => {
    jobDivsInnerHTML.push(jobDiv.innerHTML);
});

searchInput.addEventListener('input', () => {
    console.log(searchInput.value);
    const searchTerm = searchInput.value.toLowerCase();
    
    //reset jobDivs innerHTML
    jobDivs.forEach((jobDiv, index) => {
        jobDiv.innerHTML = jobDivsInnerHTML[index];
        jobDiv.style.display = 'block';
    });

    // Adding listener on arrow (recall job.js)
    jobDivs.forEach((jobDiv) => {
        var developImage = jobDiv.querySelector('.develop');
        var hiddenContent = jobDiv.querySelector('.hiddenContent');
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

    if (searchTerm !== '' && searchTerm.length > 1) {
        //highlight new search term
        jobDivs.forEach(jobDiv => {
            const jobText = jobDiv.textContent.toLowerCase();
            
            if (jobText.includes(searchTerm)) {
                const matchingText = jobText.match(new RegExp(searchTerm, 'gi')); // gi = global, case-insensitive
                if (matchingText) {
                    jobDiv.innerHTML = jobDiv.innerHTML.replace(new RegExp(searchTerm, 'gi'), '<span class="highlight">$&</span>');
                }
                jobDiv.style.display = 'block';
                var developImages = jobDiv.querySelectorAll('.develop');
                developImages.forEach(developImage => {
                    developImage.classList.add('developed');
                });
                var hiddenContents = jobDiv.querySelectorAll('.hiddenContent');
                hiddenContents.forEach(hiddenContent => {
                    hiddenContent.classList.add('developed');
                });
            } else {
                jobDiv.style.display = 'none';
            }
        });
    }
});
// Développé par Noa Second