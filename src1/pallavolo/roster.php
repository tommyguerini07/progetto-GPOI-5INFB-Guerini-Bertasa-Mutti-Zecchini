<?php
$team = isset($_GET['team']) ? $_GET['team'] : 'prima_squadra';
$teamNames = [
    'prima_squadra' => 'Prima Squadra',
    'under_18' => 'Under 18',
    'under_16' => 'Under 16',
    'under_14' => 'Under 14',
];
$teamName = $teamNames[$team] ?? str_replace('_', ' ', ucfirst($team));
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roster <?php echo htmlspecialchars($teamName); ?> - Polisportiva Albinese</title>
    <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/tommyguerini07/tommyguerini07/main/assets/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/pallavolo-squadre.css">
    <script src="../js/roster.js" defer></script>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="logo-title">
            <img src="https://raw.githubusercontent.com/tommyguerini07/tommyguerini07/main/assets/logo.png" alt="Polisportiva Albinese Logo" class="logo">
            <span class="site-title">Polisportiva Albinese</span>
        </div>
        <button class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="menu" id="mainMenu">
            <li>
                <a href="../index.php">Home</a>
            </li>
            <li class="dropdown">
                <a href="../calcio/squadre.php">Calcio <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-content">
                    <li><a href="../calcio/squadre.php">Squadre</a></li>
                    <li><a href="../calcio/calendario.php">Calendario</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#pallavolo" class="active">Pallavolo <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-content">
                    <li><a href="squadre.php">Squadre</a></li>
                    <li><a href="calendario.php">Calendario</a></li>
                </ul>
            </li>
            <li><a href="../galleria.php">Galleria</a></li>
            <li><a href="../contatti.php">Contatti</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="teams-section">
        <h2>Roster - <?php echo htmlspecialchars($teamName); ?></h2>
        <p><a class="team-btn" href="squadre.php">&larr; Torna alle squadre</a></p>
        <div class="team-roster players-container" data-roster-json="../data/pallavolo_giocatori.json" data-sport="pallavolo" data-team="<?php echo htmlspecialchars($team); ?>"></div>
    </section>
</main>

<footer>
    <p>&copy; 2025 Polisportiva Albinese - Albino (BG)</p>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const mainMenu = document.getElementById('mainMenu');
    const dropdowns = document.querySelectorAll('.dropdown');

    if (menuToggle && mainMenu) {
        menuToggle.addEventListener('click', function() {
            mainMenu.classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-bars');
            this.querySelector('i').classList.toggle('fa-times');
        });
    }

    if (window.innerWidth <= 768) {
        dropdowns.forEach(dropdown => {
            const link = dropdown.querySelector('a');
            link.addEventListener('click', function(e) {
                if (dropdown.querySelector('.dropdown-content')) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            });
        });
    }

    document.addEventListener('click', function(e) {
        if (!e.target.closest('.navbar')) {
            mainMenu.classList.remove('active');
            if (menuToggle) {
                menuToggle.querySelector('i').classList.add('fa-bars');
                menuToggle.querySelector('i').classList.remove('fa-times');
            }
        }
    });
});
</script>

</body>
</html>
