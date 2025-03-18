document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobileMenu');
    const menuBtn = document.getElementById('menuBtn');
    
    function toggleMenu() {
        mobileMenu.classList.toggle('translate-x-full');
    }

    // Cerrar menú al hacer clic fuera
    document.addEventListener('click', function(event) {
        const isMenuOpen = !mobileMenu.classList.contains('translate-x-full');
        const isClickInsideMenu = mobileMenu.contains(event.target);
        const isClickOnMenuButton = menuBtn.contains(event.target);

        if (isMenuOpen && !isClickInsideMenu && !isClickOnMenuButton) {
            mobileMenu.classList.add('translate-x-full');
        }
    });

    // Event listeners originales
    menuBtn.addEventListener('click', toggleMenu);
    document.querySelector('[data-close-menu]')?.addEventListener('click', toggleMenu);

    // Control de la barra de navegación al hacer scroll
    const nav = document.querySelector('nav');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        
        if (currentScroll > lastScroll && currentScroll > 50) {
            nav.classList.add('-translate-y-full');
        } else {
            nav.classList.remove('-translate-y-full');
        }
        
        lastScroll = currentScroll;
    });
});