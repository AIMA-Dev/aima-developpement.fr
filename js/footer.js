var onyxColor = getComputedStyle(document.documentElement).getPropertyValue('--Onyx');
var spiroDiscoBallColor = getComputedStyle(document.documentElement).getPropertyValue('--SpiroDiscoBall');
var darkScarletColor = getComputedStyle(document.documentElement).getPropertyValue('--DarkScarlet');
var transparentGrayColor = getComputedStyle(document.documentElement).getPropertyValue('--TransparentGray');
var whiteColor = getComputedStyle(document.documentElement).getPropertyValue('--White');
var blackColor = getComputedStyle(document.documentElement).getPropertyValue('--Black');

document.getElementById('themeSwitch').addEventListener('click', function() {
    if (getComputedStyle(document.documentElement).getPropertyValue('--White') === '#fff') {
        document.documentElement.style.setProperty('--Onyx', '#171717');
        document.documentElement.style.setProperty('--SpiroDiscoBall', '#17C9E6');
        document.documentElement.style.setProperty('--DarkScarlet', '#5E031F');
        document.documentElement.style.setProperty('--TransparentGray', '#212121');
        document.documentElement.style.setProperty('--White', '#171717');
        document.documentElement.style.setProperty('--Black', 'white');
    } else {        
        document.documentElement.style.setProperty('--Onyx', onyxColor);
        document.documentElement.style.setProperty('--SpiroDiscoBall', spiroDiscoBallColor);
        document.documentElement.style.setProperty('--DarkScarlet', darkScarletColor);
        document.documentElement.style.setProperty('--TransparentGray', transparentGrayColor);
        document.documentElement.style.setProperty('--White', whiteColor);
        document.documentElement.style.setProperty('--Black', blackColor);
    }
});
// © AIMA DEVELOPPEMENT 2024