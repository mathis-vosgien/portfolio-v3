<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathis VOSGIEN - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/84449523?v=4">
    <script src="script.js"></script>
</head>

<body>
    <div id="loader">
        <div class="spinner"></div>
        <p>Chargement en cours...</p>
    </div>

    <div class="flecheUp">
        <a href="#header"><img src="img/logo/fleche-droite.png" alt=""></a>
    </div>
    <header id="header">
        <a href="#header" class="a_unset">
            <h1>MV</h1>
        </a>

        <button class="burger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>

        <nav>
            <ul class="nav-links">
                <li><a href="#apropos">À propos</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#experiences">Expériences</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="apropos" class="apropos">
        <div class="avatar">
            <img src="https://avatars.githubusercontent.com/u/84449523?v=4" alt="">
        </div>
        <div class="presentation">
            <h1>Mathis Vosgien</h1>
            <p>Développeur FullStack Junior basé à Paris. Passionné de développement web, je suis actuellemnt en stage du 2 au 27 juin 2025 chez MozArtsduWeb à Chantilly. Je suis étudiant au Lycée Saint Vincent à Senlis. Vous trouverez mon CV au format PDF ci-dessous.</p>
            <div class="logo">
                <a href="https://github.com/mathis-vosgien" target="_blank"><img src="img/logo/github.png" alt=""></a>
                <a href="https://www.linkedin.com/in/mathis-vosgien/" target="_blank"><img src="img/logo/linkedin.png" alt=""></a>
                <a href="Resume03-25.pdf" target="_blank"><img src="img/logo/cv.png" alt=""></a>
            </div>
        </div>
    </section>
    <section id="competences" class="competences">
        <div>
            <h1>Compétences</h1>
        </div>
        <div class="timeline-section">

            <div class="timeline-items">

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date"></div>
                    <div class="timeline-content">
                        <h3>Front-End</h3>
                        <p>
                            <strong>HTML5</strong> pour la structure, <strong>CSS3</strong> pour la mise en forme responsive, et <strong>JavaScript</strong> pour l’interactivité. Expérience avec des bibliothèques modernes comme <strong>React</strong> (en cours d'apprentissage) pour créer des interfaces dynamiques, modulaires et réactives.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date"></div>
                    <div class="timeline-content">
                        <h3>Back-End</h3>
                        <p>
                            <strong>PHP</strong> pour le traitement des requêtes côté serveur et la logique métier, avec une base solide en <strong>MySQL</strong> pour la gestion des bases de données relationnelles.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date"></div>
                    <div class="timeline-content">
                        <h3>Programmation Orientée Objet</h3>
                        <p>
                            Solide compréhension des principes de la <strong>programmation orientée objet</strong>, appliqués en <strong>Python</strong> et <strong>C#</strong> dans des projets concrets. <strong>Go</strong> (en cours d'apprentissage), avec une approche orientée objet adaptée à sa philosophie de conception.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date"></div>
                    <div class="timeline-content">
                        <h3>Bureautique & Outils Collaboratifs</h3>
                        <p>
                            À l’aise avec la suite <strong>Office 365</strong> pour la création de documents professionnels, ainsi que <strong>Canva</strong> pour des visuels clairs. Expérience des outils de gestion de projet comme <strong>Trello</strong> et <strong>Notion</strong> pour organiser le travail en équipe. Maîtrise de <strong>Git & GitHub</strong> pour le versioning, avec utilisation de <strong>VS Code</strong>, <strong>Google Colab</strong> pour le développement, et <strong>WSL</strong> pour un environnement Linux sous Windows.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="resume-block">
            <ul>
                <a href="https://html.spec.whatwg.org/">
                    <li>HTML5</li>
                </a>
                <a href="https://developer.mozilla.org/fr/docs/Web/CSS">
                    <li>CSS3</li>
                </a>
                <a href="">
                    <li>JavaScript</li>
                </a>
                <a href="">
                    <li>React</li>
                </a>
                <a href="">
                    <li>PHP</li>
                </a>
                <a href="">
                    <li>mySQL</li>
                </a>
                <a href="">
                    <li>Python</li>
                </a>
                <a href="">
                    <li>C#</li>
                </a>
                <a href="">
                    <li>Go</li>
                </a>
                <a href="">
                    <li>Office 365</li>
                </a>
                <a href="">
                    <li>Canva</li>
                </a>
                <a href="">
                    <li>Trello</li>
                </a>
                <a href="">
                    <li>Notion</li>
                </a>
                <a href="">
                    <li>Git/GitHub</li>
                </a>
                <a href="">
                    <li>VS Code</li>
                </a>
                <a href="">
                    <li>Google Colab</li>
                </a>
                <a href="">
                    <li>WSL</li>
                </a>
            </ul>
        </div>

    </section>

    <section id="projets" class="projets">
        <div>
            <h1>Projets</h1>
        </div>
        <div class="container">
            <button class="openModal" data-modal="modal1" style="background-image: url(img/projects/AlexJohnson.png)">
                <h2>Alex Johnson</h2>
            </button>
            <button class="openModal" data-modal="modal2" style="background-image: url(img/projects/Integration2.png)">
                <h2>Intégration 2</h2>
            </button>
            <button class="openModal" data-modal="modal3" style="background-image: url(img/projects/POC2025.png)">
                <h2>POC 2025</h2>
            </button>
            <button class="openModal" data-modal="modal4" style="background-image: url(img/projects/VetX.png)">
                <h2>Vet X</h2>
            </button>
            <button class="openModal" data-modal="modal5" style="background-image: url(img/projects/4ProjJS.png)">
                <h2>4 Projets JS</h2>
            </button>
            <button class="openModal" data-modal="modal6" style="background-image: url(img/projects/firstGame.png)">
                <h2>Premier Jeu</h2>
            </button>
        </div>
    </section>

    <!-- Fenêtre Modale 1 -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Alex Johnson - HTML/CSS - Individuel</h2>
            <div style="text-align: left; line-height : 1.5">
                <p>Ce premier projet a pour objectif d'appliquer les fondamentaux du développement web en créant une <strong>Landing Page</strong>. Le but est de maîtriser la <strong>structure HTML</strong> et le <strong>style CSS</strong> tout en suivant les bonnes pratiques de codage.</p>
                <p><b>Compétences et concepts abordés :</b></p>
                <ul>
                    <li>Créer une <strong>Landing Page</strong> attrayante et fonctionnelle</li>
                    <li>Utiliser les <strong>bonnes pratiques de codage</strong> pour garantir un code propre et maintenable</li>
                    <li>Apprendre et appliquer la <strong>méthodologie de structuration d'un site web</strong> pour une meilleure organisation</li>
                    <li>Mettre en place des <strong>effets au survol</strong> afin d'améliorer l'expérience utilisateur</li>
                </ul>
                <p><b>Durée estimée : 8 heures de codage</b></p>
            </div>

            <div class="link">
                <p><b><a href="projects/integration1-main/index.php" target="_blank">Ouvrir ce projet dans un nouvel onglet</a></b></p>
            </div>
        </div>
    </div>

    <!-- Fenêtre Modale 2 -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Intégration 2 - HTML/CSS/JS - Binôme</h2>
            <div style="text-align: left; line-height : 1.5">
                <p>Ce deuxième projet approfondit les compétences en intégration web en introduisant <strong>JavaScript</strong> et en développant une page avec <strong>plusieurs sections</strong>. Il met l'accent sur <strong>l'intégration progressive</strong> et <strong>l'adaptation aux différents appareils</strong>.</p>
                <p>Compétences et concepts abordés :</p>
                <ul>
                    <li>Structurer et <strong>intégrer progressivement</strong> une page multi-sections</li>
                    <li>Développer un <strong>site web responsive</strong> qui s'adapte aux différentes tailles d'écran (<em>ordinateur, tablette et mobile</em>)</li>
                    <li>Implémenter un <strong>diaporama interactif</strong> en utilisant JavaScript</li>
                    <li>Travailler <strong>en binôme</strong>, favorisant le travail d'équipe et la répartition des tâches</li>
                </ul>
                <p>Durée estimée : 15 heures de codage</p>
            </div>
            <div class="link">
                <p><b><a href="projects/integration2-main/main/index.html" target="_blank">Ouvrir ce projet dans un nouvel onglet</a></b></p>
            </div>
        </div>
    </div>

    <!-- Fenêtre Modale 3 -->
    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>POC 2025 - Proof of Concept</h2>
            <div style="text-align: left; line-height : 1.5">
                <p>Ce dernier exercice est un <strong>test pratique en autonomie</strong>, réalisé dans un <strong>temps limité de 3 heures</strong>. L'objectif est d'évaluer la capacité de chaque participant à appliquer rapidement ses connaissances à un scénario réel.</p>
                <p><strong>Il s'agit d'un défi technique conçu pour évaluer la rapidité, la logique de développement et la résolution de problèmes sous contrainte de temps.</strong></p>
            </div>
            <div class="link">
                <p><b><a href="projects/POC2025-main/index.html" target="_blank">Ouvrir ce projet dans un nouvel onglet</a></b></p>
            </div>
        </div>
    </div>

    <!-- Fenêtre Modale 4 -->
    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>VetX - HTML/CSS/JS - Trinôme</h2>
            <div style="text-align: left; line-height : 1.5">
                <p>Ce troisième projet se concentre sur la réponse à un <strong>besoin professionnel réel</strong>. Il s'agit de concevoir un <strong>site web multi-pages</strong> avec une <strong>gestion avancée du responsive</strong> tout en suivant un <strong>brief détaillé</strong>.</p>
                <p>Compétences et concepts abordés :</p>
                <ul>
                    <li>Comprendre et répondre à une <strong>demande réelle d'un client</strong></li>
                    <li>Développer un <strong>site web multi-pages</strong></li>
                    <li>Mettre en place un <strong>design responsive avancé</strong> pour s'adapter aux différents appareils et résolutions</li>
                    <li><strong>Répartition et organisation des tâches :</strong> Chaque membre de l'équipe doit s'impliquer dans toutes les compétences (HTML, CSS, JS) afin d'assurer polyvalence et apprentissage collectif</li>
                    <li>Suivre un <strong>brief client</strong> avec des <strong>livrables structurés à différentes étapes</strong></li>
                </ul>
                <p>Durée estimée : 20 heures de codage</p>
            </div>
            <div class="link">
                <p><b><a href="projects/integration3_finaleVerse-main/home.html" target="_blank">Ouvrir ce projet dans un nouvel onglet</a></b></p>
            </div>
        </div>
    </div>

    <!-- Fenêtre Modale 5 -->
    <div id="modal5" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 style="padding-bottom:20px">4 Projets JS - HTML/CSS/JS - Individuel</h2>
            <div class="containerf5projets">
                <div class="card" onclick="redirectTo('projects/4Projets-JS/ToDoList/todolist.html')">
                    <h3>Projet To-Do List</h3>
                    <p>Une application simple pour gérer des tâches à faire, avec ajout, suppression et suivi.</p>
                </div>
                <div class="card" onclick="redirectTo('projects/4Projets-JS/Meteo/meteo.html')">
                    <h3>Projet Web Météo API</h3>
                    <p>Affiche la météo en temps réel d'une ville saisie, grâce à une API météo externe.</p>
                </div>
                <div class="card" onclick="redirectTo('projects/4Projets-JS/Convertisseur/convertisseur.html')">
                    <h3>Projet Convertisseur API</h3>
                    <p>Convertit des devises en temps réel grâce à une API de taux de change.</p>
                </div>
            </div>

            <script>
                function redirectTo(url) {
                    window.location.href = url;
                }
            </script>
            <p style="width: 80%; margin: 20px auto;">Durée estimée : environ 7 heures pour les projets avec API et 5 heures pour ceux sans API.</p>
            <div class="link">
                <p><b><a href="projects/4Projets-JS/accueil.php" target="_blank">Ouvrir ce projet dans un nouvel onglet</a></b></p>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Fenêtre Modale 6 -->
    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Knight Slime - Godot - Individuel</h2>
            <div style="text-align: left; line-height : 1.5">
                <h3>Exclusivement téléchargeable pour les utilisateurs Windows!</h3>
                <p>Ce projet marque mes débuts dans le développement de jeux vidéo. Réalisé avec le moteur Godot, il m’a permis de découvrir les fondamentaux du game design, de la programmation interactive et de la création d’une boucle de gameplay fonctionnelle. J’ai récupérer et intégré les éléments graphiques, les scripts et les interactions, tout en m’initiant à la logique de scène et aux systèmes d’événements de Godot. </p>
                <p>Durée estimée : 5 heures</p>
            </div>
            <div class="link">
                <p><b><a href="projects/first-game.zip" download>Télécharger le jeu</a></b></p>
            </div>
        </div>
    </div>

    <section id="experiences" class="experiences">
        <div>
            <h1>Expériences</h1>
            <h2 class="title">Stages</h2>
            <div class="info">
                <div class="stage-item">
                    <h2>&#128073;&#127996; Stage - 1 semaine - UX/UI design - Citalid en 2023 - Paris 17ème</h2>
                    <p>Stage immersif avec le designer UX/UI de Citalid (une scale-up) où j'ai appris les bases de Figma et redécouvert le monde de l'entrepreneuriat, dans un open space.</p>
                </div>
                <div class="stage-item">
                    <h2>&#128073;&#127996; Stage - 1 semaine - Web marketing - Logpoint en 2022 - Rueil-Malmaison</h2>
                    <p>J'ai passé une semaine à créer un site web sur WordPress et appris quelques techniques de SEO pour améliorer le référencement d'un site. Surtout, j'ai développé un goût pour le développement web.</p>
                </div>
                <div class="stage-item">
                    <h2>&#128073;&#127996; Stage - 1 semaine - Marketing - Sophos en 2018 - Bezons</h2>
                    <p>J'ai découvert le monde de l'entreprise, ses différents départements et son organisation. Principalement rattaché à l'équipe marketing, j'ai rapidement vu comment sont organisés les salons professionnels et j'ai particulièrement apprécié la partie webmarketing.</p>
                </div>
            </div>
            <h2 class="title">Certifications</h2>
            <div class="certif-items">
                <div class="certif-item">
                    <a href="certifications/attestation-pix-20240506.pdf" target="_blank">
                        <img src="certifications/pix.png" alt="">
                        <p>Attestation de compétences numériques</p>
                        <div class="statusVerif">
                            <img src="img/pointsVert.png" alt="">
                            <p>Certifié</p>
                        </div>
                    </a>
                </div>
                <div class="certif-item">
                    <a href="#Certificates">
                        <img src="certifications/projetvoltaire.png" alt="">
                        <p>Attestation de niveau en orthographe</p>
                        <div class="statusNone">
                            <img src="img/pointsOrange.png" alt="">
                            <p>En cours</p>
                        </div>
                    </a>
                </div>
                <div class="certif-item">
                    <a href="#Certificates">
                        <img src="certifications/openclassrooms.png" alt="">
                        <p>Attestation de suivi de cours</p>
                        <div class="statusNone">
                            <img src="img/pointsOrange.png" alt="">
                            <p>En cours</p>
                        </div>
                    </a>
                </div>
                <div class="certif-item">
                    <a href="#Certificates">
                        <img src="certifications/Udemy_logo.svg.png" alt="">
                        <p>Attestation de suivi de cours</p>
                        <div class="statusNone">
                            <img src="img/pointsOrange.png" alt="">
                            <p>En cours</p>
                        </div>
                    </a>
                </div>
                <div class="certif-item">
                    <a href="#Certificates">
                        <img src="certifications/Visa_de_securite_anssi_2017_logo-fr.png" alt="">
                        <p>Sec Num Académie - MOOC ANSSI</p>
                        <div class="statusNone">
                            <img src="img/pointsOrange.png" alt="">
                            <p>En cours</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="stage">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div>
            <h1>En cours...</h1>
        </div>
    </section>

    <script>
        const burger = document.querySelector('.burger');
        const navLinks = document.querySelector('.nav-links');

        burger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>


</body>

</html>