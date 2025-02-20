window.onload = function() {
    const modal = document.getElementById('age-verification-modal');
    const yesButton = document.getElementById('age-verification-yes');
    const noButton = document.getElementById('age-verification-no');
    const mainContent = document.getElementById('main-content');
    
    // Exibe o modal quando a página é carregada
    modal.classList.add('show');

    // Se o usuário for maior de 18 anos
    yesButton.onclick = function() {
        modal.classList.remove('show');
        mainContent.style.display = 'block'; // Exibe o conteúdo principal
    };

    // Se o usuário for menor de 18 anos
    noButton.onclick = function() {
        window.location.href = 'https://www.google.com'; // Redireciona para outro site ou página
    };
};
