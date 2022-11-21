//NAV SCROLL
window.addEventListener('load', function () {

    window.addEventListener('scroll', (event) => {
        const header = document.getElementById('header');
        
        if (window.scrollY) header.classList.add('black-bg');
        else header.classList.remove('black-bg');
    });
});