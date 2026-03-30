<?php
session_start();
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polisportiva Albinese</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/index.css">

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
                <li class="dropdown">
                    <a href="#calcio">Calcio <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="../calcio/squadre.php">Squadre</a></li>
                        <li><a href="../calcio/calendario.php">Calendario</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#pallavolo">Pallavolo <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="../pallavolo/squadre.php">Squadre</a></li>
                        <li><a href="../pallavolo/calendario.php">Calendario</a></li>
                    </ul>
                </li>
                <li><a href="galleria.php">Galleria</a></li>
                <li><a href="contatti.php">Contatti</a></li>
                <?php if (!isset($_SESSION["user"])) { ?>
                <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <?php } else { ?>
                <li><a href="logout.php" id="logoutBtn"><i class="fas fa-user"></i> Logout</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="hero">
            <img src="https://raw.githubusercontent.com/tommyguerini07/tommyguerini07/main/assets/logo.png" alt="Logo Polisportiva Albinese" class="hero-logo">
            <h1>Benvenuti alla Polisportiva Albinese</h1>
            <p class="subtitle">Mens Sana in Corpore Sano - Sport e Passione ad Albino (BG)</p>
            <a href="contatti.php" class="cta-button">Unisciti a Noi</a>
        </section>
        
        <section class="featured-news">
            <h2>Ultimi Risultati</h2>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-badge">Vittoria</div>
                    <div class="news-image">CALCIO UNDER 16</div>
                    <div class="news-content">
                        <h3>Albinese - Bergamo City: 3-1</h3>
                        <div class="match-result">
                            <div class="team">
                                <div class="team-logo">A</div>
                                <div class="team-name">Albinese</div>
                            </div>
                            <div class="score">3 - 1</div>
                            <div class="team">
                                <div class="team-logo">BC</div>
                                <div class="team-name">Bergamo City</div>                    </div>
                        </div>
                        <p>Grande vittoria della squadra Under 16 che si impone sul Bergamo City con una prestazione di carattere.</p>
                        <a href="#" class="news-link">Dettagli partita <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-badge">Pareggio</div>
                    <div class="news-image">PALLAVOLO FEMMINILE</div>
                    <div class="news-content">
                        <h3>Albinese - Volley Bergamo: 2-2</h3>
                        <div class="match-result">
                            <div class="team">
                                <div class="team-logo">A</div>
                                <div class="team-name">Albinese</<div>
                            </div>
                            <div class="score">2 - 2</div>
                            <div class="team">
                                <div class="team-logo">VB</div>
                                <div class="team-name">Volley Bergamo</div>
                            </div>
                        </div>
                        <p>Battaglia sul campo per la squadra femminile che ottiene un prezioso pareggio contro le campionesse in carica.</p>
                        <a href="#" class="news-link">Dettagli partita <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-badge">Vittoria</div>
                    <div class="news-image">CALCIO SENIOR</div>
                    <div class="news-content">
                        <h3>Albinese - Nembro: 2-0</h3>
                        <div class="match-result">
                            <div class="team">
                                <div class="team-logo">A</div>
                                <div class="team-name">Albinese</div>
                            </div>
                            <div class="score">2 - 0</div>
                            <div class="team">
                                <div class="team-logo">N</div>
                                <div class="team-name">Nembro</div>
                            </div>
                        </div>
                        <p>La prima squadra si impone sul Nembro e consolida la seconda posizione in classifica.</p>
                        <a href="#" class="news-link">Dettagli partita <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="about">
            <h2>Chi Siamo</h2>
            <p>La Polisportiva Albinese promuove lo sport e i valori di squadra nel cuore di Albino, Bergamo. Con oltre 30 anni di storia, siamo un punto di riferimento per la comunità locale, offrendo attività sportive per tutte le età. Unisciti a noi per vivere la passione di Calcio e Pallavolo, partecipare agli eventi e condividere momenti indimenticabili!</p>
        </section>
        
        <section class="sports">
            <h2>I Nostri Sport</h2>
            <div class="sports-grid">
                <div class="sport-card">
                    <div class="sport-image" style="background-color: #1565c0;"></div>
                    <div class="sport-content">
                        <h3>Calcio</h3>
                        <p>Dai più piccoli ai professionisti, il calcio è nel nostro DNA. Scopri le nostre squadre e partecipa ai tornei.</p>
                        <a href="../calcio/squadre.php" class="sport-link">Scopri di più <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="sport-card">
                    <div class="sport-image" style="background-color: #0d47a1;"></div>
                    <div class="sport-content">
                        <h3>Pallavolo</h3>
                        <p>Passione, tecnica e lavoro di squadra. La pallavolo è uno dei nostri fiori all'occhiello.</p>
                        <a href="../pallavolo/squadre.php" class="sport-link">Scopri di più <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="sport-card">
                    <div class="sport-image" style="background-color: #1976d2;"></div>
                    <div class="sport-content">
                        <h3>Attività Giovanili</h3>
                        <p>Formiamo i campioni di domani con programmi dedicati a bambini e ragazzi di tutte le età.</p>
                        <a href="#giovanili" class="sport-link">Scopri di più <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="stats">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">30+</div>
                    <div class="stat-label">Anni di Storia</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Atleti</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15</div>
                    <div class="stat-label">Squadre</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Discipline</div>
                </div>
            </div>
        </section>
        
        <section class="events">
            <h2>Prossimi Eventi</h2>
            <div class="events-slider">
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">15</span>
                        <span class="month">Ott</span>
                    </div>
                    <div class="event-content">
                        <h3>Torneo Giovanile</h3>
                        <p>Partecipa al nostro torneo di calcio giovanile. Iscrizioni aperte fino al 10 ottobre.</p>
                        <a href="#" class="event-link">Maggiori informazioni</a>
                    </div>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">22</span>
                        <span class="month">Ott</span>
                    </div>
                    <div class="event-content">
                        <h3>Serata Benefica</h3>
                        <p>Cena di raccolta fondi per l'acquisto di nuove attrezzature sportive.</p>
                        <a href="#" class="event-link">Maggiori informazioni</a>
                    </div>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">05</span>
                        <span class="month">Nov</span>
                    </div>
                    <div class="event-content">
                        <h3>Open Day Pallavolo</h3>
                        <p>Vieni a provare la pallavolo con i nostri istruttori. Adatto a tutti i livelli.</p>
                        <a href="#" class="event-link">Maggiori informazioni</a>
                    </div>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">12</span>
                        <span class="month">Nov</span>
                    </div>
                    <div class="event-content">
                        <h3>Finale Campionato</h3>
                        <p>Non perdere la finale del campionato regionale di calcio under 16.</p>
                        <a href="#" class="event-link">Maggiori informazioni</a>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    
    <!-- Newsletter Section Migliorata -->
    <section class="newsletter-form" id="newsletter">
        <div class="newsletter-content">
            <h3>Rimani Aggiornato</h3>
            <p>Iscriviti alla nostra newsletter per non perdere nessun risultato, evento o novità</p>
            <form id="newsletterForm">
                <input type="email" placeholder="La tua email" required>
                <button type="submit">Iscriviti <i class="fas fa-paper-plane"></i></button>
            </form>
            <div class="newsletter-benefits">
                <div class="benefit">
                    <i class="fas fa-bell"></i>
                    <span>Notifiche risultati</span>
                </div>
                <div class="benefit">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Calendario eventi</span>
                </div>
                <div class="benefit">
                    <i class="fas fa-trophy"></i>
                    <span>News esclusive</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Theme Switcher -->
    <button class="theme-switch" id="themeSwitch">
        <i class="fas fa-moon"></i>
    </button>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#cookie">Cookie Policy</a>
                <a href="#termini">Termini e Condizioni</a>
            </div>
            <div class="social-links">
                <a href="https://facebook.com/PolisportivaAlbineseCalcio" target="_blank" rel="noopener noreferrer" aria-label="Facebook Polisportiva Albinese Calcio"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/polisportivaalbinese_official" target="_blank" rel="noopener noreferrer" aria-label="Instagram Polisportiva Albinese"><i class="fab fa-instagram"></i></a>
                <a href="#twitter"><i class="fab fa-twitter"></i></a>
                <a href="#youtube"><i class="fab fa-youtube"></i></a>
            </div>
            <p>&copy; 2025 Polisportiva Albinese - Albino (BG)</p>
        </div>
    </footer>

    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script>

        const logoutBtn = document.getElementById("logoutBtn");

        if(logoutBtn){
        logoutBtn.addEventListener("click", function() {
            window.location.href = "login.php";
        });
}
        
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const mainMenu = document.getElementById('mainMenu');
            const dropdowns = document.querySelectorAll('.dropdown');
            const backToTop = document.getElementById('backToTop');
            const themeSwitch = document.getElementById('themeSwitch');
            const newsletterForm = document.getElementById('newsletterForm');
            
           
            menuToggle.addEventListener('click', function() {
                mainMenu.classList.toggle('active');
                this.querySelector('i').classList.toggle('fa-bars');
                this.querySelector('i').classList.toggle('fa-times');
            });
            
           
            if (window.innerWidth <= 768) {
                dropdowns.forEach(dropdown => {
                    const link = dropdown.querySelector('a');
                    
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        dropdown.classList.toggle('active');
                    });
                });
            }
            
            
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.navbar')) {
                    mainMenu.classList.remove('active');
                    menuToggle.querySelector('i').classList.add('fa-bars');
                    menuToggle.querySelector('i').classList.remove('fa-times');
                }
            });
            
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }
            });
            
            
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    if (this.getAttribute('href') !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            window.scrollTo({
                                top: target.offsetTop - 80,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
            
            
            const statNumbers = document.querySelectorAll('.stat-number');
            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const number = entry.target;
                        const target = parseInt(number.textContent);
                        let current = 0;
                        const increment = target / 50;
                        
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                number.textContent = target + (number.textContent.includes('+') ? '+' : '');
                                clearInterval(timer);
                            } else {
                                number.textContent = Math.floor(current) + (number.textContent.includes('+') ? '+' : '');
                            }
                        }, 30);
                        
                        observer.unobserve(number);
                    }
                });
            }, observerOptions);
            
            statNumbers.forEach(number => {
                observer.observe(number);
            });
            
           
            themeSwitch.addEventListener('click', function() {
                document.body.classList.toggle('dark-theme');
                const icon = this.querySelector('i');
                if (document.body.classList.contains('dark-theme')) {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun');
                    localStorage.setItem('theme', 'dark');
                } else {
                    icon.classList.remove('fa-sun');
                    icon.classList.add('fa-moon');
                    localStorage.setItem('theme', 'light');
                }
            });
            
            
            if (localStorage.getItem('theme') === 'dark') {
                document.body.classList.add('dark-theme');
                themeSwitch.querySelector('i').classList.remove('fa-moon');
                themeSwitch.querySelector('i').classList.add('fa-sun');
            }
            
            
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                // Simulazione invio
                setTimeout(() => {
                    alert('Grazie per esserti iscritto alla nostra newsletter!');
                    this.reset();
                }, 1000);
            });
            
            
            const eventsSlider = document.querySelector('.events-slider');
            if (eventsSlider) {
                let scrollAmount = 0;
                const scrollStep = 300;
                const maxScroll = eventsSlider.scrollWidth - eventsSlider.clientWidth;
                
                function autoScrollEvents() {
                    if (scrollAmount < maxScroll) {
                        scrollAmount += scrollStep;
                    } else {
                        scrollAmount = 0;
                    }
                    eventsSlider.scrollTo({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                }
                
                setInterval(autoScrollEvents, 4000);
            }
        });  
    </script>

    <!-- Cookie banner -->
    <div id="cookie-banner" class="cookie-banner" style="display: none;" aria-live="polite" role="dialog" aria-label="Cookie consent">
      <div class="cookie-content">
        <h2>Usiamo i cookie</h2>
        <p>Attivando i cookie possiamo migliorare la tua esperienza e offrirti statistiche anonime. Leggi la <a href="../docs/ckprivacy.html#privacy" target="_blank">Privacy Policy</a>.</p>
        <div class="cookie-buttons">
          <button id="accept-essential" class="btn-minimal">Solo essenziali</button>
          <button id="accept-all" class="btn-primary">Accetta tutti</button>
          <button id="decline-all" class="btn-link">Rifiuta</button>
        </div>
      </div>
    </div>

    <noscript>
      Please enable JavaScript to view this website.
    </noscript>

    <!-- Import Js Module -->
    <script type="module">

      // Cookie manager
      const CookieManager = {

        init() {
          const consent = this.getConsent()
          if (!consent) {
            this.showBanner()
          } else {
            this.applyConsent(consent)
          }
          this.setupListeners()
        },
        
        showBanner() {
          document.getElementById('cookie-banner').style.display = 'block'
          document.body.classList.add('has-cookie-banner')
        },
        
        hideBanner() {
          document.getElementById('cookie-banner').style.display = 'none'
          document.body.classList.remove('has-cookie-banner')
        },
        
        setupListeners() {
          document.getElementById('accept-essential').addEventListener('click', () => {
            this.saveConsent({ essential: true, analytics: false, marketing: false })
            this.hideBanner()
            this.applyConsent({ essential: true, analytics: false, marketing: false })
          });
          
          document.getElementById('accept-all').addEventListener('click', () => {
            this.saveConsent({ essential: true, analytics: true, marketing: true })
            this.hideBanner()
            this.enableAnalytics() // Enable Firebase Analytics if needed
          });

          document.getElementById('decline-all').addEventListener('click', () => {
            this.saveConsent({ essential: true, analytics: false, marketing: false })
            this.hideBanner()
            this.blockAnalytics()
          });
        },
        
        saveConsent(consent) {
          localStorage.setItem('cookieConsent', JSON.stringify({
            ...consent,
            timestamp: new Date().toISOString()
          }))
        },
        
        getConsent() {
          try {
            const saved = localStorage.getItem('cookieConsent')
            return saved ? JSON.parse(saved) : null
          } catch {
            return null
          }
        },
        
        applyConsent(consent) {
          if (!consent) return
          
          if (!consent.analytics) {
            this.blockAnalytics()
          } else {
            this.enableAnalytics()
          }
        },
        
        blockAnalytics() {
          if (typeof window !== 'undefined') {
            window['ga-disable-UA-XXXXX-Y'] = true // Sostituisci con il tuo ID GA se usi Google Analytics
          }
        },
        
        enableAnalytics() {
          if (typeof firebase !== 'undefined' && firebase.analytics) {
            firebase.analytics()
          }
        }
      };

      window.addEventListener('DOMContentLoaded', () => {
        CookieManager.init()
      })

    </script>

</body>
</html>
