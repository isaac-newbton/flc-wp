(function() {
    document.addEventListener('DOMContentLoaded', function() {
        const primaryNavButton = document.querySelector('#primary-mobile-menu');
        const primaryNavContainer = document.querySelector(`#${primaryNavButton.getAttribute('aria-controls')}`)
        primaryNavButton.addEventListener('click', function(e) {
            let expanded = primaryNavButton.getAttribute('aria-expanded')
            primaryNavButton.setAttribute('aria-expanded', expanded == 'true' ? 'false' : 'true');
            primaryNavContainer.setAttribute('aria-expanded', expanded == 'true' ? 'false' : 'true');
        });

        const menuItemsWithChildren = document.querySelectorAll('.menu-item-has-children a[href="#"]');
        console.log(menuItemsWithChildren);
        if(menuItemsWithChildren) {
            for(var i of menuItemsWithChildren) {
                i.addEventListener('click', function(e) {
                    e.preventDefault();
                });
            }
        }
    });
})();