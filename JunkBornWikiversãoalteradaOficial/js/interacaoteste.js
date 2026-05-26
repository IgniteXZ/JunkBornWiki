let categoriaAtiva = 'Todos';

function buscar() {
    const input = document.getElementById('campoBusca').value.toLowerCase();
    const cards = document.querySelectorAll('.personagem-card');

    cards.forEach(card => {
        const nome = card.querySelector('h2').innerText.toLowerCase();
        const categoriaCard = card.getAttribute('data-categoria');

        const bateBusca = nome.includes(input);
        const bateCategoria = (categoriaAtiva === 'Todos' || categoriaCard === categoriaAtiva);

        if (bateBusca && bateCategoria) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
}

function filtrarCategoria(cat) {
    categoriaAtiva = cat;
    buscar(); // Re-executa a busca para aplicar o filtro de categoria e texto juntos
}