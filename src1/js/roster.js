document.addEventListener('DOMContentLoaded', function () {
    const rosterContainers = document.querySelectorAll('[data-roster-json]');
    if (!rosterContainers.length) return;

    rosterContainers.forEach(container => {
        const jsonUrl = container.getAttribute('data-roster-json');
        const sport = container.getAttribute('data-sport') || 'generico';
        const filterSelectId = container.getAttribute('data-filter-select');
        const searchInputId = container.getAttribute('data-search-input');
        const teamKey = container.getAttribute('data-team') || null;

        initRoster({
            container,
            jsonUrl,
            sport,
            teamKey,
            filterSelect: filterSelectId ? document.getElementById(filterSelectId) : null,
            searchInput: searchInputId ? document.getElementById(searchInputId) : null
        });
    });
});

function initRoster(options) {
    const { container, jsonUrl, sport, teamKey, filterSelect, searchInput } = options;

    let players = [];
    let filteredPlayers = [];

    fetch(jsonUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Errore nel caricamento dei giocatori');
            }
            return response.json();
        })
        .then(data => {
            const allPlayers = Array.isArray(data) ? data : (data.giocatori || []);

            if (teamKey) {
                players = allPlayers.filter(p => (p.squadra || '').toLowerCase() === teamKey.toLowerCase());
            } else {
                players = allPlayers;
            }
            filteredPlayers = players.slice();
            renderPlayers();
            setupFilters();
        })
        .catch(error => {
            console.error(error);
            container.innerHTML = '<p class="players-error">Impossibile caricare il roster. Verifica il file JSON.</p>';
        });

    function renderPlayers() {
        if (!filteredPlayers.length) {
            container.innerHTML = '<p class="players-empty">Nessun giocatore trovato per i filtri selezionati.</p>';
            return;
        }

        const grid = document.createElement('div');
        grid.className = 'players-grid';

        filteredPlayers.forEach(player => {
            const card = document.createElement('article');
            card.className = 'player-card';
            card.setAttribute('tabindex', '0');

            const numero = player.numero != null ? player.numero : '';
            const ruolo = player.ruolo || '';
            const eta = player.eta != null ? player.eta + ' anni' : '';
            const presenze = player.presenze != null ? player.presenze + ' presenze' : '';
            const gol = (sport === 'calcio' && player.gol != null) ? player.gol + ' gol' : '';

            card.innerHTML = `
                <div class="player-image-wrapper">
                    ${numero !== '' ? `<span class="player-number">#${numero}</span>` : ''}
                </div>
                <div class="player-info">
                    <h3 class="player-name">${player.nome || ''}</h3>
                    ${ruolo ? `<p class="player-role">${ruolo}</p>` : ''}
                    <div class="player-meta">
                        ${eta ? `<span><i class="fas fa-user"></i> ${eta}</span>` : ''}
                        ${presenze ? `<span><i class="fas fa-check-circle"></i> ${presenze}</span>` : ''}
                        ${gol ? `<span><i class="fas fa-futbol"></i> ${gol}</span>` : ''}
                    </div>
                </div>
            `;

            card.addEventListener('click', () => openPlayerModal(player, sport));
            card.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    openPlayerModal(player, sport);
                }
            });

            grid.appendChild(card);
        });

        container.innerHTML = '';
        container.appendChild(grid);
    }

    function setupFilters() {
        if (filterSelect) {
            const roles = Array.from(new Set(players.map(p => p.ruolo).filter(Boolean))).sort();
            filterSelect.innerHTML = '<option value="">Tutti i ruoli</option>';
            roles.forEach(role => {
                const option = document.createElement('option');
                option.value = role;
                option.textContent = role;
                filterSelect.appendChild(option);
            });

            filterSelect.addEventListener('change', applyFilters);
        }

        if (searchInput) {
            searchInput.addEventListener('input', applyFilters);
        }
    }

    function applyFilters() {
        const roleValue = filterSelect ? filterSelect.value.toLowerCase() : '';
        const searchValue = searchInput ? searchInput.value.toLowerCase() : '';

        filteredPlayers = players.filter(player => {
            const matchesRole = roleValue
                ? (player.ruolo || '').toLowerCase() === roleValue
                : true;

            const haystack = `${player.nome || ''} ${player.ruolo || ''}`.toLowerCase();
            const matchesSearch = searchValue
                ? haystack.includes(searchValue)
                : true;

            return matchesRole && matchesSearch;
        });

        renderPlayers();
    }
}

function openPlayerModal(player, sport) {
    let overlay = document.querySelector('.player-modal-overlay');
    if (!overlay) {
        overlay = document.createElement('div');
        overlay.className = 'player-modal-overlay';
        overlay.innerHTML = `
            <div class="player-modal" role="dialog" aria-modal="true" aria-labelledby="playerModalTitle">
                <button class="player-modal-close" aria-label="Chiudi scheda giocatore">
                    <i class="fas fa-times"></i>
                </button>
                <div class="player-modal-body">
                    <div class="player-modal-left">
                        <div class="player-modal-image-wrapper">
                            <span class="player-modal-number"></span>
                        </div>
                    </div>
                    <div class="player-modal-right">
                        <h2 id="playerModalTitle" class="player-modal-name"></h2>
                        <p class="player-modal-role"></p>
                        <div class="player-modal-stats"></div>
                        <p class="player-modal-description"></p>
                    </div>
                </div>
            </div>
        `;
        document.body.appendChild(overlay);

        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                closePlayerModal();
            }
        });

        const closeBtn = overlay.querySelector('.player-modal-close');
        closeBtn.addEventListener('click', closePlayerModal);

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && overlay.classList.contains('visible')) {
                closePlayerModal();
            }
        });
    }

    const numberEl = overlay.querySelector('.player-modal-number');
    const nameEl = overlay.querySelector('.player-modal-name');
    const roleEl = overlay.querySelector('.player-modal-role');
    const statsEl = overlay.querySelector('.player-modal-stats');
    const descEl = overlay.querySelector('.player-modal-description');

    if (player.numero != null) {
        numberEl.textContent = '#' + player.numero;
        numberEl.style.display = 'inline-block';
    } else {
        numberEl.textContent = '';
        numberEl.style.display = 'none';
    }

    nameEl.textContent = player.nome || '';
    roleEl.textContent = player.ruolo || '';

    const stats = [];
    if (player.eta != null) {
        stats.push(`<span><i class="fas fa-user"></i> ${player.eta} anni</span>`);
    }
    if (player.presenze != null) {
        stats.push(`<span><i class="fas fa-check-circle"></i> ${player.presenze} presenze</span>`);
    }
    if (sport === 'calcio' && player.gol != null) {
        stats.push(`<span><i class="fas fa-futbol"></i> ${player.gol} gol</span>`);
    }
    if (player.statistiche) {
        stats.push(`<span><i class="fas fa-chart-line"></i> ${player.statistiche}</span>`);
    }
    statsEl.innerHTML = stats.join('');

    descEl.textContent = player.descrizione || '';

    overlay.classList.add('visible');
    document.body.classList.add('player-modal-open');
}

function closePlayerModal() {
    const overlay = document.querySelector('.player-modal-overlay');
    if (overlay) {
        overlay.classList.remove('visible');
        document.body.classList.remove('player-modal-open');
    }
}

