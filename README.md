## Progetto-PoliDragoni

GPOI project – Polisportive Bergamo website

![version](https://img.shields.io/badge/version-1.2.0-blue?style=for-the-badge)
![code](https://img.shields.io/badge/code-HTML-orange?style=for-the-badge\&logo=html5\&logoColor=white)
![javascript](https://img.shields.io/badge/code-JavaScript-yellow?style=for-the-badge\&logo=javascript)
![team](https://img.shields.io/badge/team-Squad%20Albinese-red?style=for-the-badge)
![status](https://img.shields.io/badge/status-beta-green?style=for-the-badge)
![license](https://img.shields.io/badge/license-GPL--3.0-blue?style=for-the-badge)

![preview](https://raw.githubusercontent.com/tommyguerini07/tommyguerini07/main/assets/preview.png)

## 📌 Description and Objectives

"Our project aims to provide a multifunctional website for sports organizations in the Bergamo area.
Our goal is to give every organization the opportunity to promote itself not only in the real world, but also online."

## 👥 Development Team

The project was developed by the group composed of:

* Guerini(project leader, developer helper, central back)
* Bertasa(developer fronthand/backhand, middelfielder)
* Mutti(developer fronthand/backhand, right wing)
* Zecchini(economist, document manager, bomber)

## 🛠️ Technologies Used

The project was developed using HTML for the page structure, CSS for styling and layout, and JavaScript for client-side logic. SQL was used for database creation and PHP to connect client and server. GitHub was used for version control, and the browser’s LocalStorage was used to manage cookie preferences.

## 🌐 Project Structure

```
src1/
├── index.php                     # Redirect alla home page
│
├── pages/                        # 📄 Pagine principale
│   ├── index.php                # Home page
│   ├── login.php                # Pagina login
│   ├── registrati.php           # Pagina registrazione
│   ├── contatti.php             # Pagina contatti
│   ├── galleria.php             # Galleria fotografica
│   └── logout.php               # Logout
│
├── calcio/                       # ⚽ Sezione Calcio
│   ├── calendario.php           # Calendario e risultati
│   ├── squadre.php              # Squadre disponibili
│   ├── roster.php               # Roster giocatori (dinamico)
│   └── image.png                # Logo squadra
│
├── pallavolo/                    # 🏐 Sezione Pallavolo
│   ├── calendario.php           # Calendario e risultati
│   ├── squadre.php              # Squadre disponibili
│   ├── roster.php               # Roster giocatori (dinamico)
│   └── image.png                # Logo squadra
│
├── css/                          # 🎨 Fogli di stile
│   ├── styles.css               # Stili comuni
│   ├── index.css                # Stili home
│   ├── login.css                # Stili login/registrazione
│   ├── contatti.css             # Stili contatti
│   ├── features.css             # Stili galleria
│   ├── calcio-calendario.css    # Stili calendario calcio
│   ├── calcio-squadre.css       # Stili squadre calcio
│   ├── pallavolo-calendario.css # Stili calendario pallavolo
│   └── pallavolo-squadre.css    # Stili squadre pallavolo
│
├── data/                         # 📊 Dati JSON
│   ├── calcio_giocatori.json    # Lista giocatori calcio
│   └── pallavolo_giocatori.json # Lista giocatori pallavolo
│
├── js/                           # 💻 JavaScript
│   └── roster.js                # Script dinamico roster
│
├── config/                       # ⚙️ Configurazione
│   └── connessioneDB.php        # Connessione database
│
├── docs/                         # 📚 Documentazione
│   ├── README.md                # Documentazione progetto
│   ├── CHANGELOG.md             # Cronologia modifiche
│   ├── LICENSE                  # Licenza GPL-3.0
│   └── ckprivacy.html           # Cookie Policy & GDPR
│
└── .gitignore                    # File git ignorati
```

## 🔐 Cookie Management and GDPR

The project includes a cookie management system designed to comply with GDPR principles (EU Regulation 2016/679). On the first visit, a banner informs users about cookie usage and allows them to choose between different options: accept all cookies, reject non-essential ones, or customize preferences. The selected preferences are saved in the browser using LocalStorage, allowing the site to remember them for future visits.

A key aspect is that any tracking scripts or external services are activated only after explicit user consent, in compliance with European regulations. There is also a dedicated Cookie Policy page, accessible from the site, which explains in detail the types of cookies used and how consent is managed.

## 🚀 How to Run the Project

To run the project, simply clone the repository: https://github.com/tommyguerini07/progetto-GPOI-5INFB-Guerini-Bertasa-Mutti-Zecchini from GitHub using the `git clone` command on your command prompt. Once the files are downloaded, you can start xampp on your device, and import the file data/albineseDB.sql in phpMyAdmin; once you have done it you can start the project by searching in any modern web browser `https://github.com/tommyguerini07/progetto-GPOI-5INFB-Guerini-Bertasa-Mutti-Zecchini/src1/index.php`.

## 📚 Future Developments

The project will be further expanded with additional features, including the creation of an administrative dashboard and the implementation of advanced analytics systems in full compliance with GDPR, we will implement other databases with the user and player data following our cookie policy. The user interface can also be improved, along with a more advanced cookie preference management system through a dedicated modal.

## 📬 Contacts

For further information or clarification, please refer to the project development team.
