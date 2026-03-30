## Progetto-PoliDragoni

GPOI project – Polisportive Bergamo website

![version](https://img.shields.io/badge/version-1.2.0-blue?style=for-the-badge)
![code](https://img.shields.io/badge/code-HTML-orange?style=for-the-badge\&logo=html5\&logoColor=white)
![javascript](https://img.shields.io/badge/code-JavaScript-yellow?style=for-the-badge\&logo=javascript)
![team](https://img.shields.io/badge/team-Squad%20Albinese-red?style=for-the-badge)
![status](https://img.shields.io/badge/status-beta-green?style=for-the-badge)
![license](https://img.shields.io/badge/license-GPL--3.0-blue?style=for-the-badge)

(![Anteprima sito](./assets/Screenshot%202026-03-30%20104105.png))

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

src1/
├── css/                          # Fogli di stile
│   ├── index.css
│   ├── login.css
│   ├── contatti.css
│   ├── features.css
│   ├── calcio-calendario.css
│   ├── calcio-squadre.css
│   ├── pallavolo-calendario.css
│   └── pallavolo-squadre.css
│
├── data/                         # Dati JSON
│   ├── calcio_giocatori.json
│   └── pallavolo_giocatori.json
│
├── config/                       # Configurazione
│   └── connessioneDB.php
│
├── js/                           # JavaScript
│   └── roster.js
│
├── docs/                         # Documentazione
│   ├── README.md
│   ├── CHANGELOG.md
│   ├── LICENSE
│   └── ckprivacy.html
│
├── calcio/                       # Sezione calcio
│   ├── calendario.php
│   ├── squadre.php
│   ├── roster.php
│   └── image.png
│
├── pallavolo/                    # Sezione pallavolo
│   ├── calendario.php
│   ├── squadre.php
│   ├── roster.php
│   └── image.png
│
├── index.php                     # Pagine principali
├── login.php
├── contatti.php
├── galleria.php
├── logout.php
├── registrati.php
├── .gitignore
└── [altri file di sistema]

## 🔐 Cookie Management and GDPR

The project includes a cookie management system designed to comply with GDPR principles (EU Regulation 2016/679). On the first visit, a banner informs users about cookie usage and allows them to choose between different options: accept all cookies, reject non-essential ones, or customize preferences. The selected preferences are saved in the browser using LocalStorage, allowing the site to remember them for future visits.

A key aspect is that any tracking scripts or external services are activated only after explicit user consent, in compliance with European regulations. There is also a dedicated Cookie Policy page, accessible from the site, which explains in detail the types of cookies used and how consent is managed.

## 🚀 How to Run the Project

To run the project, simply clone the repository: https://github.com/tommyguerini07/progetto-GPOI-5INFB-Guerini-Bertasa-Mutti-Zecchini from GitHub using the `git clone` command on your command prompt. Once the files are downloaded, you can start xampp on your device, once you have done it you can start the project by searching in any modern web browser `https://github.com/tommyguerini07/progetto-GPOI-5INFB-Guerini-Bertasa-Mutti-Zecchini/src1/index.php#`.

## 📚 Future Developments

The project will be further expanded with additional features, including the creation of an administrative dashboard and the implementation of advanced analytics systems in full compliance with GDPR, we will implement other databases with the user and player data following our cookie policy. The user interface can also be improved, along with a more advanced cookie preference management system through a dedicated modal.

## 📬 Contacts

For further information or clarification, please refer to the project development team.
