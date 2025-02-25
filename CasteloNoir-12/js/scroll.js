document.querySelectorAll('.dropdown a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        const menuHeight = document.querySelector('.dropdown').offsetHeight;

        window.scrollTo({
            top: targetElement.offsetTop - menuHeight, // Ajusta o scroll com base na altura do menu fixo
            behavior: 'smooth' // Rolagem suave
        });
    });
});