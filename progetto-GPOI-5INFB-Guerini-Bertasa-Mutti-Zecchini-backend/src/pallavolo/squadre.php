<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Squadre di Pallavolo - Polisportiva Albinese</title>

<link rel="icon" type="image/png" href="../image.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="squadre.css">
<script src="../roster.js" defer></script>

</head>

<body>

<header>

<nav class="navbar">

<div class="logo-title">
<img src="../image.png" class="logo">
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
<a href="#calcio">Calcio <i class="fas fa-chevron-down"></i></a>

<ul class="dropdown-content">
<li><a href="../calcio/squadre.php">Squadre</a></li>
<li><a href="../calcio/calendario.php">Calendario</a></li>
</ul>

</li>

<li class="dropdown">
<a href="#pallavolo" class="active">Pallavolo <i class="fas fa-chevron-down"></i></a>

<ul class="dropdown-content">
<li><a href="squadre.php" class="active">Squadre</a></li>
<li><a href="calendario.php">Calendario</a></li>
</ul>

</li>

<li><a href="../galleria.php">Galleria</a></li>
<li><a href="../contatti.php">Contatti</a></li>

</ul>

</nav>

</header>


<main>

<section class="hero">

<img src="../image.png" class="hero-logo">

<h1>Squadre di Pallavolo</h1>

<p class="subtitle">Scopri tutte le nostre squadre di volley</p>

</section>



<section class="teams-section">

<h2>Le Nostre Squadre</h2>


<div class="teams-grid">


<div class="team-card">

<div class="team-logo">
<i class="fas fa-volleyball-ball"></i>
</div>

<h3 class="team-name">Prima Squadra</h3>

<p class="team-category">Categoria: Serie D</p>

<div class="team-details">

<div class="team-detail">
<span class="detail-label">Allenatore:</span>
<span class="detail-value">Marco Rinaldi</span>
</div>

<div class="team-detail">
<span class="detail-label">Palestra:</span>
<span class="detail-value">Palestra Comunale Albino</span>
</div>

<div class="team-detail">
<span class="detail-label">Orari:</span>
<span class="detail-value">Mar e Gio 20:30-22:30</span>
</div>


</div>

<a class="team-btn" href="roster.php?team=prima_squadra">Dettagli Squadra</a>

</div>



<div class="team-card">

<div class="team-logo">
<i class="fas fa-volleyball-ball"></i>
</div>

<h3 class="team-name">Under 18</h3>

<p class="team-category">Categoria: Giovanili</p>

<div class="team-details">

<div class="team-detail">
<span class="detail-label">Allenatore:</span>
<span class="detail-value">Luca Bianchi</span>
</div>

<div class="team-detail">
<span class="detail-label">Palestra:</span>
<span class="detail-value">Palestra Comunale Albino</span>
</div>

<div class="team-detail">
<span class="detail-label">Orari:</span>
<span class="detail-value">Lun e Mer 18:30-20:00</span>
</div>


</div>

<a class="team-btn" href="roster.php?team=under_18">Dettagli Squadra</a>

</div>



<div class="team-card">

<div class="team-logo">
<i class="fas fa-volleyball-ball"></i>
</div>

<h3 class="team-name">Under 16</h3>

<p class="team-category">Categoria: Giovanili</p>

<div class="team-details">

<div class="team-detail">
<span class="detail-label">Allenatore:</span>
<span class="detail-value">Andrea Rossi</span>
</div>

<div class="team-detail">
<span class="detail-label">Palestra:</span>
<span class="detail-value">Palestra Comunale Albino</span>
</div>

<div class="team-detail">
<span class="detail-label">Orari:</span>
<span class="detail-value">Mar e Ven 18:00-19:30</span>
</div>


</div>

<a class="team-btn" href="roster.php?team=under_16">Dettagli Squadra</a>

</div>



<div class="team-card">

<div class="team-logo">
<i class="fas fa-volleyball-ball"></i>
</div>

<h3 class="team-name">Under 14</h3>

<p class="team-category">Categoria: Giovanili</p>

<div class="team-details">

<div class="team-detail">
<span class="detail-label">Allenatore:</span>
<span class="detail-value">Giulia Ferrari</span>
</div>

<div class="team-detail">
<span class="detail-label">Palestra:</span>
<span class="detail-value">Palestra Comunale Albino</span>
</div>

<div class="team-detail">
<span class="detail-label">Orari:</span>
<span class="detail-value">Lun e Gio 17:00-18:30</span>
</div>


</div>

<a class="team-btn" href="roster.php?team=under_14">Dettagli Squadra</a>

</div>



</div>

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