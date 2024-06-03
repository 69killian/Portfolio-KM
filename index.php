<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:wght@100;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/index.css">
    <title>Killian Marty - Développeur Full Stack & DevOps</title>

    <meta name="title" content="Killian Marty - Développeur Full Stack & DevOps">
    <meta name="description" content="Portfolio personnel réalisé par Killian Marty">
    <link rel="shortcut icon" href="KILLIAN.png" type="image/x-icon">
</head>
<body>

<header class="navbar">
    <div class="logo">
        <img class="logo-img" src="KILLIAN.png"/>
    </div>
    <nav class="nav-links">
        <a class="underline-button" href="#about">À propos de moi</a>
        <a class="underline-button" href="#projects">Projets</a>
        <a class="contact-button" href="#contact">Contact</a>
    </nav>
</header>

<section id="accueil" class="title transition-target">
    <article class="text-container-title">
        <p class="name-title">Killian Marty</p>
        <p class="description-name">Je suis Développeur Full Stack & DevOps actuellement à la recherche d'une alternance</p>
    </article>

    <article class="button-container-title">
        <a class="projets-button-title" href="#projects">Projets</a>
        <a class="contact-button-title" href="#contact">Contact</a>
    </article>

</section>

<section class="skills-photo-container transition-target">
    <section class="skills">
        <h2>Compétences</h2>
        <p class="intro-text-skills">Voici quelques de mes compétences que j'ai pu affiner au fur et à mesure de mes réalisations</p>

        <div class="skill-item">
            <div class="img-container">
                <img class="php-logo" src="images/phplogo.png" alt="PHP Logo">
            </div>

            <div class="skill-text">
                <p class="skill-name">Back-End</p>
                <p>Conceptualiser une base de données via SQL, et développer des composants métier côté serveur avec PHP</p>
            </div>
        </div>

        <div class="skill-item">
            <div class="img-container">
                <img class="js-logo" src="images/js logo.png" alt="Js Logo">
            </div>

            <div class="skill-text">
                <p class="skill-name">Front-End</p>
                <p>Développer la partie dynamique des interfaces utilisateur web ou web mobile</p>
            </div>
        </div>

        <div class="skill-item">
            <div class="img-container">
                <img class="html-logo" src="images/html5.png" alt="HTML5 Logo">
            </div>

            <div class="skill-text">
                <p class="skill-name">Interface Utilisateur</p>
                <p>Maquetter et réaliser des interfaces utilisateur web ou web mobile</p>
            </div>
        </div>

        <div>
            <a class="contact-button-title" href="#projects">Voir mes Projets</a>
        </div>

    </section>

    <section class="photo">
        <img src="images/code.png" alt="">
    </section>
</section>

<section id="about" class="about">
    <article class="about-title">
        <p class="about-title-text">À propos de moi</p>
        <p class="about-description">Je suis Killian Marty, un Développeur Full Stack passionné par la création de solutions innovantes et efficaces. </p>
        <p class="about-description">Pratiquant l'informatique depuis deux ans, J'ai commencé mon parcours en tant qu'autodidacte, explorant et apprenant par moi-même les fondamentaux du développement web. Après une première année de découverte et de pratique personnelle, j'ai décidé de formaliser et de consolider mes connaissances en me réorientant vers une formation diplômante de niveau Bac+2 chez Studi. </p>
        <p class="about-description"> Ce parcours académique m'a permis de gagner énormément en compétences. Durant cette formation, j'ai eu l'opportunité de travailler sur des projets complets, allant de la conceptualisation à la réalisation. J'ai appris à créer des mockups et des wireframes sur Figma pour définir le style et l'interface utilisateur de mes sites. Ensuite, j'ai approfondi mes compétences en bases de données, tant relationnelles que NoSQL, en élaborant des diagrammes UML pour structurer les données efficacement.</p>
        <p class="about-description">  En termes de développement, j'ai acquis une solide maîtrise de plusieurs langages et technologies, notamment PHP, SQL, et JavaScript. Un des projets marquants de ma formation a été la création d'un site Full Stack, où j'ai pu appliquer toutes ces compétences de manière intégrée. </p>
        <p class="about-description">   Actuellement, Je suis au sein de l'école IPSSI de Lyon, à la recherche d'une alternance pour un Bachelor Développeur Web et DevOps (Bac+3), sur un Rythme de 3 semaines de Travail - 1 semaine de Cours. Mon objectif serait à terme, de reprendre mes études afin de me spécialiser dans l'ingénierie Web (Bac+5).</p>
        <p class="about-description">Si vous avez des projets passionnants qui nécessitent un développeur, ainsi que des propositions d'offres en Alternance, n'hésitez pas à télécharger mon CV, et me contacter par messagerie ou téléphone.</p>
        <div class="download-cv-button">
            <a style="text-decoration: none; color: black;" href="marty-killian-cv-2.pdf" download>Télécharger mon CV</a>
        </div>
    </article>
</section>

<section id="scrolling-text" class="scrolling-text">
    <div class="scrolling-text-container">
        <img src="images/reactlogo.png" class="img-item">
        <img src="images/figmalogo.png" class="img-item">
        <img src="images/herokulogo.png" class="img-item">
        <img src="images/awslogo.png" class="img-item">
        <img src="images/mongodb.png" class="img-item">
        <img src="images/mysqllogo.png" class="img-item">
</section>


<section id="projects" class="showcase">
    <article class="showcase-title-container">
        <div class="showcase-title">
            <p class="showcase-title-text">Mes projets</p>
            <p class="showcase-description">Voici ce que j'ai pu réaliser au cours de ces 2 dernières années, notamment dans le cadre de ma formation. <br/> Chaque projet a son importance, car ils jouent sur des technologies différentes,  <br/> sur lesquels j'ai pu apprendre, faire des erreurs, m'améliorer sur base de cas d'utilisation concrets.</p>
        </div>
    </article>

    <article class="showcase-card-container">
        <div class="card">
            <img class="img-project" src="images/template.png">
            <h2 class="card-title">Youtube Black Theme</h2>
            <p class="card-description">Ce projet de Clone de Youtube est le premier que j'ai réalisé. <br/> Il m'a permis de m'habituer aux fondamentaux de HTML et CSS, <br/>  réaliser une première interface responsive, et gérer les couleurs et survols par tooltips.</p>
            <button class="git-button"><a target="_blank" style="text-decoration: none; color: black" href="https://github.com/69killian/Youtube-Black-Clone">Découvrir ce Projet</a></button>
        </div>

        <div class="card">
            <img class="img-project" src="images/projet%203.png">
            <h2 class="card-title">Arcadia, Zoo de Bretagne</h2>
            <p class="card-description">Mon plus gros projet Full Stack à ce jour reste Arcadia. <br/> Réalisé dans le cadre de ma formation, ce projet aura été le plus <br/>  formateur, notamment sur la conception d'un site web en condition d'Entreprise.</p>
            <button class="git-button"><a target="_blank" style="text-decoration: none; color: black" href="https://github.com/69killian/Arcadia-zoo-de-Bretagne">Découvrir ce Projet</a></button>
        </div>

        <div class="card">
            <img class="img-project" src="images/projet2fondbleu.png">
            <h2 class="card-title">TodoList React</h2>
            <p class="card-description">Le projet TodoList est une version 2.0 d'un ancienne TodoList Javascript que j'avais réalisé. <br/>  Celle ci présente une interface utilisateur plus simple à comprendre, <br/> et m'a permis de me former à la librairie React.</p>
            <button class="git-button"><a target="_blank" style="text-decoration: none; color: black" href="https://github.com/69killian/React-To-Do-List">Découvrir ce Projet</a></button>
        </div>
    </article>

</section>
    
    <section id="contact" class="contact contact-form-container">
        <article class="contact-title">
            <p class="contact-title-text">Contactez-moi</p>
            <p class="contact-description">En espérant que mes présentations aurons sû vous convaincre, <br/> je vous invite à me contacter pour toute demande, question, ou proposition de collaboration.</p>
            <p class="contact-description" style="margin: 0;">Numéro : +33624499165</p>
            <p class="contact-description" style="margin-top: 0;">Adresse Mail : matykillian7@gmail.com</p>
        </article>
    
        <form class="contact-form" action="back-end/soumission-formulaire.php" method="post">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
    
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>
    
            <button type="submit" id="submit" name="submit" class="submit-button">Envoyer</button>
        </form>
    </section>


    <footer class="footer">
        <div class="footer-content">
            <a style="text-decoration: underline; color: #686c70" href="#accueil">Revenir à l'Accueil</a>
            <p>© 2024 Killian Marty</p>
            <p>28 Rue Emile Bender - 69500 Bron</p>
            <div class="social-icons">
                <a href="https://github.com/69killian" target="_blank">
                    <img src="images/githublogo.png" alt="GitHub Logo">
                </a>
                <a href="https://www.linkedin.com/in/killian-marty-969803216/" target="_blank">
                    <img src="images/linkedinlogo.png" alt="LinkedIn Logo">
                </a>
            </div>
        </div>
    </footer>    
    
    

    
    
    
    <script src="scripts/script.js">
    </script>
    
    
    
</body>
</html>