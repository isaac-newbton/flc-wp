(function() {
    document.addEventListener('DOMContentLoaded', function() {
        const primaryNavButton = document.querySelector('#primary-mobile-menu');
        const primaryNavContainer = document.querySelector(`#${primaryNavButton.getAttribute('aria-controls')}`)
        primaryNavButton.addEventListener('click', function(e) {
            let expanded = primaryNavButton.getAttribute('aria-expanded')
            console.log(expanded);
            primaryNavButton.setAttribute('aria-expanded', expanded == 'true' ? 'false' : 'true');
            primaryNavContainer.setAttribute('aria-expanded', expanded == 'true' ? 'false' : 'true');
        });
    });
})();