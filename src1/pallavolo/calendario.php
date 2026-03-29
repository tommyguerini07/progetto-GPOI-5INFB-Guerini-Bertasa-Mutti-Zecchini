<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Calendario Pallavolo - Polisportiva Albinese</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">

<link rel="icon" type="image/png" href="../image.png">

<link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="calendario.css">

</head>

<body>

<div id="notification" class="notification"></div>

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

<li><a href="../index.php">Home</a></li>

<li class="dropdown">
<a href="#">Calcio <i class="fas fa-chevron-down"></i></a>
<ul class="dropdown-content">
<li><a href="../calcio/squadre.php">Squadre</a></li>
<li><a href="../calcio/calendario.php">Calendario</a></li>
</ul>
</li>

<li class="dropdown">
<a href="#">Pallavolo <i class="fas fa-chevron-down"></i></a>
<ul class="dropdown-content">
<li><a href="squadre.php">Squadre</a></li>
<li><a href="calendario.php" class="active">Calendario</a></li>
</ul>
</li>

<li><a href="../galleria.php">Galleria</a></li>
<li><a href="../contatti.php">Contatti</a></li>

</ul>
</nav>
</header>


<div class="container">

<h1>CALENDARIO PALLAVOLO</h1>

<div class="navigation">
<div class="nav-links">

<a href="#" class="active" data-team="prima">PRIMA SQUADRA</a>
<a href="#" data-team="under18">UNDER 18</a>
<a href="#" data-team="under16">UNDER 16</a>

</div>
</div>


<div class="stats-bar">

<div class="stat-item">
<div class="stat-value" id="played-matches">10</div>
<div class="stat-label">Partite Giocate</div>
</div>

<div class="stat-item">
<div class="stat-value" id="wins">7</div>
<div class="stat-label">Vittorie</div>
</div>

<div class="stat-item">
<div class="stat-value" id="losses">3</div>
<div class="stat-label">Sconfitte</div>
</div>

</div>



<div class="matches-section" id="upcoming-matches">

<h2 class="section-title">
<i class="fas fa-volleyball-ball"></i>
PROSSIME PARTITE
</h2>

</div>


<div class="matches-section" id="past-matches">

<h2 class="section-title">
<i class="far fa-calendar-check"></i>
PARTITE PASSATE
</h2>

</div>


</div>


<footer>
<p>&copy; 2025 Polisportiva Albinese - Albino (BG)</p>
</footer>


<script>

const matchesData = {

"prima": {

"2025-26":[

{
id:1,
date:"2025-10-12",
time:"20:30",
homeTeam:"POLISPORTIVA ALBINESE",
awayTeam:"VOLLEY BERGAMO",
competition:"Serie D",
round:"Giornata 4",
location:"Palestra Comunale Albino",
status:"upcoming",
type:"home",
result:null
},

{
id:2,
date:"2025-09-20",
time:"20:30",
homeTeam:"VOLLEY SERIATE",
awayTeam:"POLISPORTIVA ALBINESE",
competition:"Serie D",
round:"Giornata 2",
location:"Seriate",
status:"completed",
type:"away",
result:"3-1"
}

]},

"under18":{

"2025-26":[

{
id:3,
date:"2025-11-02",
time:"18:00",
homeTeam:"POLISPORTIVA ALBINESE",
awayTeam:"VOLLEY TREVIGLIO",
competition:"Campionato Under 18",
round:"Giornata 6",
location:"Palestra Albino",
status:"upcoming",
type:"home",
result:null
}

]},

"under16":{

"2025-26":[

{
id:4,
date:"2025-10-05",
time:"16:00",
homeTeam:"POLISPORTIVA ALBINESE",
awayTeam:"VOLLEY ALZANO",
competition:"Campionato Under 16",
round:"Giornata 3",
location:"Palestra Albino",
status:"completed",
type:"home",
result:"3-0"
}

]}

};



let currentTeam="prima";
let currentSeason="2025-26";

document.querySelectorAll(".nav-links a").forEach(link=>{

link.addEventListener("click",function(e){

e.preventDefault();

document.querySelector(".nav-links .active").classList.remove("active");

this.classList.add("active");

currentTeam=this.dataset.team;

renderMatches();

});

});


function renderMatches(){

const matches=matchesData[currentTeam][currentSeason];

renderUpcoming(matches);
renderPast(matches);

}


function renderUpcoming(matches){

const container=document.getElementById("upcoming-matches");

const upcoming=matches.filter(m=>m.status==="upcoming");

let html='<h2 class="section-title"><i class="fas fa-volleyball-ball"></i> PROSSIME PARTITE</h2>';

if(upcoming.length===0){

html+='<div class="no-matches">Nessuna partita programmata</div>';

container.innerHTML=html;

return;

}

upcoming.forEach(match=>{

html+=`

<div class="match-card">

<div class="match-header">

<div class="competition">
<i class="fas fa-trophy"></i>
${match.competition} - ${match.round}
</div>

<div class="match-date">
${match.date} ${match.time}
</div>

</div>

<div class="match-content">

<div class="team">
<div class="team-logo" style="background-image:url('../image.png')"></div>
<div class="team-name">${match.homeTeam}</div>
</div>

<div class="match-time">${match.time}</div>

<div class="team home">
<div class="team-logo">${getInitials(match.awayTeam)}</div>
<div class="team-name">${match.awayTeam}</div>
</div>

</div>

<div class="match-info">
<i class="fas fa-map-marker-alt"></i> ${match.location}
</div>

</div>

`;

});

container.innerHTML=html;

}



function renderPast(matches){

const container=document.getElementById("past-matches");

const past=matches.filter(m=>m.status==="completed");

let html='<h2 class="section-title"><i class="far fa-calendar-check"></i> PARTITE PASSATE</h2>';

if(past.length===0){

html+='<div class="no-matches">Nessuna partita disputata</div>';

container.innerHTML=html;

return;

}

past.forEach(match=>{

html+=`

<div class="match-card">

<div class="match-header">

<div class="competition">
<i class="fas fa-trophy"></i>
${match.competition} - ${match.round}
</div>

<div class="match-date">
${match.date}
</div>

</div>

<div class="match-content">

<div class="team">
<div class="team-logo">${getInitials(match.homeTeam)}</div>
<div class="team-name">${match.homeTeam}</div>
</div>

<div class="match-result">${match.result}</div>

<div class="team home">
<div class="team-logo">${getInitials(match.awayTeam)}</div>
<div class="team-name">${match.awayTeam}</div>
</div>

</div>

<div class="match-info">
<i class="fas fa-map-marker-alt"></i> ${match.location}
</div>

</div>

`;

});

container.innerHTML=html;

}



function getInitials(name){

return name.split(" ").map(w=>w[0]).join("").substring(0,2);

}

renderMatches();

</script>

</body>
</html>