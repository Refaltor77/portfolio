<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Elysio Martins, Développeur Fullstack spécialisé en PHP, HTML, CSS, JavaScript et Laravel.">
    <meta name="keywords" content="Développeur Fullstack, Développeur Web, PHP, HTML, CSS, JavaScript, Laravel, Portfolio, Projets, Code, Elysio Martins, Site Web, Développement Web, Programmation, Frontend, Backend, Conception Web, Site Dynamique, Responsive, Interface Utilisateur, Expérience Utilisateur, Frameworks Web, Technologies Web, Base de Données, MariaDB, PostgreSQL, MongoDB, Redis, Langages de Programmation, Scripting, Développeur Indépendant, Freelance, HTML5, CSS3, Bootstrap, jQuery, Versioning, Git, Gestion de Projet, Optimisation, SEO, Accessibilité, Cross-browser, Performance, Design, Créativité, Intégration, Maintenance">
    <meta name="author" content="Elysio Martins">

    <title>Développeur Fullstack - Elysio Martins | PHP, HTML, CSS, JS, Laravel</title>

    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @vite([
    "resources/css/bootstrap.min.css",
    "resources/css/scroll_button.css",
    "resources/css/spacing.css",
    "resources/css/plugin.css",
    "resources/css/style.css",
    "resources/css/responsive.css"
    ])
</head>

<body class="home_2">
<div class="preloader">
    <svg preserveAspectRatio="none" viewBox="0 0 1000 1000">
        <path d="M0,1005S175,995,500,995s500,5,500,5V0H0Z" id="svg"></path>
    </svg>
    <h5 class="preloader-text">Loading</h5>
</div>
<nav class="main_menu_2">
      <span class="menu_2_icon">
        <i class="fa-solid fa-bars"></i>
      </span>
    <a class="logo_2" href="index_2.html">
        <img alt="LOGO" class="img-fluid w-100" src="/storage/images/logo2.png">
    </a>
    <ul class="list-group" id="list-example">
        <li>
            <a
                class="list-group-item list-group-item-action text_hover_animaiton"
                href="#banner"
            >
            <span
            ><img
                    alt="icon"
                    class="img-fluid w-100 svg"
                    src="/storage/svg/home-2.svg"></span
            >Accueil
            </a>
        </li>
        <li>
            <a
                class="list-group-item list-group-item-action text_hover_animaiton"
                href="#about"
            >
            <span
            ><img
                    alt="icon"
                    class="img-fluid w-100 svg"
                    src="/storage/svg/clipboard.svg"></span
            >À propos
            </a>
        </li>
        <li>
            <a
                class="list-group-item list-group-item-action text_hover_animaiton"
                href="#service"
            >
            <span
            ><img
                    alt="icon"
                    class="img-fluid w-100 svg"
                    src="/storage/svg/briefcase.svg"></span>
                Services
            </a>
        </li>
        <li>
            <a
                class="list-group-item list-group-item-action text_hover_animaiton"
                href="#skills"
            >
            <span
            ><img alt="icon" class="img-fluid w-100 svg" src="/storage/svg/path.svg"></span>
                Skills
            </a>
        </li>
        <li>
            <a
                class="list-group-item list-group-item-action text_hover_animaiton"
                href="#portfolio"
            >
            <span
            ><img
                    alt="icon"
                    class="img-fluid w-100 svg"
                    src="/storage/svg/messages-1.svg"></span>
                Portfolio
            </a>
        </li>
        <li>
            <a
                class="list-group-item list-group-item-action text_hover_animaiton"
                href="#contact"
            >
            <span
            ><img
                    alt="icon"
                    class="img-fluid w-100 svg"
                    src="/storage/svg/user-square.svg"></span>
                Contact
            </a>
        </li>
    </ul>
</nav>
<div class="main">
    <section
        class="tf__banner_2 banner"
        id="banner"
        style="background: url(/storage/images/bg/banner_bg2.png)"
    >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xxl-6 col-md-9 col-lg-7">
                    <div class="tf__banner_text">
                        <h1>
                            Salut ! Je suis Elysio Martins
                            <span class="cd-headline rotate-1">
                      <span class="cd-words-wrapper">
                        <b class="is-visible">Développeur</b>
                        <b>Coder</b>
                        <b>Geek</b>
                      </span>
                    </span>
                        </h1>
                        <p>
                            Enthousiaste et passionné, je suis un développeur avec une mission - créer des expériences
                            numériques
                            intuitives et agréables. Fort de solides principes de design et d'un sens aigu du détail, je
                            me spécialise
                            dans la traduction d'idées complexes en interfaces conviviales qui captivent et engagent les
                            utilisateurs. PS: j'aime les détails x)
                        </p>
                        <ul>
                            <li>
                                <a class="common_btn" href="#"
                                >Télécharger mon CV
                                    <i class="fa-solid fa-download"></i></a>
                            </li>
                            <li>
                                <a
                                    class="banner_video_btn"
                                    href="https://boulderbugle.com/ORmrtV4p"
                                    target="_blank"><i class="fa-sharp fa-solid fa-circle-play"></i> Regarder la
                                    vidéo</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tf__about_2 pt_130 xs_pt_80" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="tf__section_heading mb_40">
                        <h5 class="has-animation">À propos de moi</h5>
                        <h2 class="has-animation">
                            Construire un pont entre le virtuel et l'humain
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__about_text_2">
                        <ul>
                            <li>
                                <div class="top fade_bottom" data-trigerId="about">
                                    <div class="img">
                                        <img
                                            alt="about"
                                            class="img-fluid w-100"
                                            src="/storage/images/icon/about_1.png">
                                    </div>
                                    <div>
                                        <h3>Mes Ambitions</h3>
                                        <p>
                                            En tant que développeur passionné depuis 3 ans, mon objectif est de rendre
                                            le web plus accessible aux esprits entreprenants.
                                            Avec une expertise solide en Laravel acquise au fil de mes expériences, et
                                            une expérience de 7 ans en PHP, je m'engage à créer
                                            des solutions numériques innovantes qui facilitent l'accès à l'information
                                            et encouragent l'initiative entrepreneuriale.
                                            Mon parcours m'a enseigné à aborder les défis technologiques avec
                                            créativité, pour construire un Internet où chacun peut
                                            concrétiser ses idées et contribuer au progrès.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top fade_bottom" data-trigerId="about">
                                    <div class="img">
                                        <img
                                            alt="about"
                                            class="img-fluid w-100"
                                            src="/storage/images/icon/about_2.png">
                                    </div>
                                    <div>
                                        <h3>Ma Mission</h3>
                                        <p>
                                            Mon objectif est de démystifier la complexité du web et de le rendre plus
                                            accessible à tous. Contrairement à la perception
                                            conventionnelle, je crois que la technologie devrait être un catalyseur pour
                                            l'entrepreneuriat et l'innovation. Je m'efforce
                                            de créer des solutions qui éliminent les barrières, inspirant ainsi les
                                            esprits entreprenants à embrasser le potentiel du
                                            numérique. Ensemble, construisons un Internet inclusif, où la diversité des
                                            idées prospère et où chacun peut contribuer
                                            à façonner l'avenir.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__about_img tf__about_img_2">
                        <img
                            alt="ZYAN"
                            class="img-fluid w-100"
                            src="/storage/images/about_img_2.jpg">
                        <div class="tf__about_img_text">
                            <i class="fa-sharp fa-solid fa-award"></i>
                            <h4>7+ <span>Années d'éxperiences</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tf__service_2 pt_130 xs_pt_80 animation" id="service">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 m-auto">
                    <div class="tf__section_heading mb_40">
                        <h5 class="has-animation">Mes services</h5>
                        <h2 class="has-animation">
                            Idée + Moi = Une solution web
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div
                        class="tf__single_service_2 fade_left"
                        data-trigerId="service"
                    >
                        <div class="text">
                    <span>
                      <img
                          alt="service"
                          class="img-fluid w-100 svg"
                          src="/storage/svg/mobile-programming.svg">
                      <i class="icon-app-development"></i>
                    </span>
                            <h3>Développement de Sites Internet</h3>
                            <p>
                                Création de sites internet exceptionnels avec une approche centrée sur les besoins
                                clients.
                            </p>

                        </div>
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div
                        class="tf__single_service_2 fade_left active"
                        data-trigerId="service"
                    >
                        <div class="text">
                    <span>
                      <img
                          alt="service"
                          class="img-fluid w-100 svg"
                          src="/storage/svg/pen-tool-2.svg">
                    </span>
                            <h3>UI/UX Design</h3>
                            <p>
                                Passionné par la création d'expériences visuelles mémorables et intuitif sur votre site
                                internet.
                            </p>
                        </div>
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div
                        class="tf__single_service_2 fade_left"
                        data-trigerId="service"
                    >
                        <div class="text">
                    <span>
                      <img
                          alt="service"
                          class="img-fluid w-100 svg"
                          src="/storage/svg/mobile.svg">
                    </span>
                            <h3>Adaptation format Mobile</h3>
                            <p>
                                Création d'expériences optimisées pour les appareils mobiles sur votre site internet.
                            </p>
                        </div>
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="tf__skills_2 pt_115 xs_pt_75 pb_120 xs_pb_80 mt_165 xs_mt_80"
        id="skills"
    >
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 m-auto">
                    <div class="tf__section_heading mb_30">
                        <h5 class="has-animation">Mes Compétences</h5>
                        <h2 class="has-animation">
                            Donner de l'énergie aux idées les<br>plus farfelues 😁
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-8 col-xl-10 m-auto">
                    <ul class="nav nav-pills mb_30" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                aria-controls="pills-home"
                                aria-selected="true"
                                class="nav-link active"
                                data-bs-target="#pills-home"
                                data-bs-toggle="pill"
                                id="pills-home-tab"
                                role="tab"
                                type="button"
                            >
                                Expériences
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                aria-controls="pills-profile"
                                aria-selected="false"
                                class="nav-link"
                                data-bs-target="#pills-profile"
                                data-bs-toggle="pill"
                                id="pills-profile-tab"
                                role="tab"
                                type="button"
                            >
                                Technologies
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div
                            aria-labelledby="pills-home-tab"
                            class="tab-pane fade show active"
                            id="pills-home"
                            role="tabpanel"
                            tabindex="0"
                        >
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>GoldRush</h3>
                                        <h2>Chef développeur</h2>
                                        <h4>2021 - Aujourd'hui</h4>
                                        <p>
                                            GoldRush est un serveur de jeu basé sur Minecraft. Je gère
                                            le site internet ainsi que les ajouts en jeu. Le code est
                                            entièrement réalisé en PHP pur, exécuté à l'aide d'un logiciel
                                            facilitant la communication entre le client et le serveur via des paquets
                                            UDP. :)
                                        </p>
                                        <div class="tf__team_skills_bar_single">
                                            <p>Barre de cooooolitude</p>
                                            <div class="barfiller" id="bar1">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="100"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>Minelance Cloud</h3>
                                        <h2>Développeur FullStack</h2>
                                        <h4>2023 - Aujourd'hui</h4>
                                        <p>

                                            Minelance Cloud est un projet personnel visant à
                                            créer un hébergeur facilitant la création de sites
                                            internet pour la plupart des utilisateurs. Il ne se
                                            limite pas à être simplement un service d'hébergement
                                            informatique, mais il s'agit également d'une agence
                                            web avec une équipe de développeurs prêts à donner
                                            vie aux projets des entrepreneurs. 😃
                                        </p>
                                        <div class="tf__team_skills_bar_single">
                                            <p>Barre de très cooooolitude</p>
                                            <div class="barfiller" id="bar2">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="100"></span>
                                                <!-- Hey toi arrete de regarder mon code html vilain hackeur -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>Kiabi</h3>
                                        <h2>Projet BAC | Développeur</h2>
                                        <h4>2022 - 2022</h4>
                                        <p>

                                            J'ai pu créer pour mon projet de Bac Pro Commerce un
                                            site internet proposant un jeu concours à l'effigie
                                            de l'entreprise Kiabi. Le lot était une carte cadeau d'une valeur de 150€.
                                            Lien du code source : <a
                                                href="https://drive.google.com/drive/folders/1sVfMOpoIqL-Fy2I-fWsJ5Od7w3W8aT0V?usp=sharing"
                                                target="_blank">Code source</a>
                                        </p>
                                        <div class="tf__team_skills_bar_single">
                                            <p>Barre de ultra cooooolitude</p>
                                            <div class="barfiller" id="bar3">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="100"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>CandySugar.fr</h3>
                                        <h2>Projet personnel</h2>
                                        <h4>2023 - Aujourd'hui</h4>
                                        <p>
                                            Candy Sugar est un projet visant à vendre des bonbons, plus
                                            précisément des bonbons personnalisés via le site internet.
                                            Canva pour les bonbons, n'est-ce pas génial ? :)
                                        </p>
                                        <div class="tf__team_skills_bar_single">
                                            <p>Barre de ultra fou coooooolitude</p>
                                            <div class="barfiller" id="bar4">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="70"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            aria-labelledby="pills-profile-tab"
                            class="tab-pane fade"
                            id="pills-profile"
                            role="tabpanel"
                            tabindex="0"
                        >
                            <div class="row education">
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>PHP</h3>
                                        <h2>Langage de programmation</h2>
                                        <h4>2017 - Aujourd'hui</h4>
                                        <p>
                                            PHP est le premier langage que j'ai pu toucher dans
                                            le monde de la programmation. J'ai directement accroché
                                            à sa simplicité géniale et à sa flexibilité incroyable
                                            sur le web. J'ai pu l'apprendre en totale autonomie,
                                            et aujourd'hui, j'ai un niveau très approfondi dans ce
                                            langage en général. C'est, en fin de compte, ma deuxième langue maternelle
                                            :)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>HTML / CSS</h3>
                                        <h2>Structuration / stylisation web</h2>
                                        <h4>2017 - Aujourd'hui</h4>
                                        <p>
                                            HTML / CSS, j'ai pu apprendre ces deux technologies en
                                            même temps que mes débuts sur PHP. Les célèbres vidéos
                                            de Grafikart m'ont littéralement rendu accro au web en
                                            général. J'ai aujourd'hui un niveau avancé en développement frontend.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>Laravel</h3>
                                        <h2>FrameWork MVC en PHP</h2>
                                        <h4>2021 - aujourd'hui</h4>
                                        <p>
                                            Laravel est arrivé plus tardivement dans mon épopée du web.
                                            Tel Ulysse, j'ai rencontré des obstacles avant de trouver
                                            ce trésor ! Laravel est littéralement mon framework PHP
                                            préféré pour la conception d'API, de sites internet ou
                                            d'autres applications web, en raison de sa simplicité
                                            d'apprentissage et de sa fiabilité dans le temps x)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>TypeScript / JavaScript</h3>
                                        <h2>Langage de programmation</h2>
                                        <h4>2021 - Aujourd'hui</h4>
                                        <p>
                                            Au début, j'ai appris en premier lieu JavaScript vanilla pour
                                            rendre mes sites internet dynamiques, en leur ajoutant mes
                                            premières animations. J'ai ensuite découvert la surcouche
                                            de JavaScript, qui est TypeScript, que je considère comme
                                            laaaaargement supérieur à JavaScript en termes de code.
                                            Aujourd'hui, pour la conception de sites internet dynamiques,
                                            j'utilise principalement TypeScript pour le côté script de mes sites. (La
                                            rime, nouveau métier ? xD)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>NodeJS</h3>
                                        <h2>Environement JavaScript</h2>
                                        <h4>2021 - Aujourd'hui</h4>
                                        <p>
                                            Après l'apprentissage de JavaScript / TypeScript, je
                                            devais absolument passer par Node.js (évidemment).
                                            Étant adepte de la création de bots Discord,
                                            l'apprentissage de l'environnement Node.js s'est
                                            fait assez rapidement. Malgré la facilité de cet
                                            environnement, je n'ai pas encore exploré tout
                                            le potentiel de cette technologie, donc je n'ai
                                            pas encore atteint un niveau "professionnel" selon moi.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="tf__single_skill_2 fade_bottom"
                                        data-trigerId="skills"
                                    >
                                        <h3>MySQL / MariaDB, PostegreSQL..</h3>
                                        <h2>Base de données</h2>
                                        <h4>2017 - Aujourd'hui</h4>
                                        <p>
                                            PHP ? Évidemment, les bases de données accompagnent cet apprentissage.
                                            J'ai commencé par apprendre MariaDB, qui est initialement très facile
                                            à comprendre. Ensuite, j'ai également appris PostgreSQL, MongoDB,
                                            Redis, et bien d'autres. Au final, je sais adapter mon code à la
                                            bonne base de données. Un gros site e-commerce sur MongoDB ? Hm...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="tf__portfolio tf__portfolio_2 mt_120 xs_mt_80"
        id="portfolio"
    >
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-9 mb_30">
                    <div class="tf__section_heading">
                        <h5 class="has-animation">Mes projets en image</h5>
                        <h2 class="has-animation">
                            Le mieux, c'est quand même de voir ce que je fais ! 😀
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-sm-6">
                    <a
                        class="tf__portfolio_item image_popup"
                        data-cursor="View <br> Image"
                        href="/storage/images/portfolio/1.jpg"
                    >
                        <img
                            alt="portfolio"
                            class="img-fluid w-100"
                            src="/storage/images/portfolio/1.jpg">
                        <div class="text">
                            <h4>GoldRush version 2 | Serveur de jeu</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <a
                        class="tf__portfolio_item image_popup"
                        data-cursor="View <br> Image"
                        href="/storage/images/portfolio/2.jpg"
                    >
                        <img
                            alt="portfolio"
                            class="img-fluid w-100"
                            src="/storage/images/portfolio/2.jpg">
                        <div class="text">
                            <h4>Minelance - Hébergeur</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <a
                        class="tf__portfolio_item image_popup"
                        data-cursor="View <br> Image"
                        href="/storage/images/portfolio/3.jpg"
                    >
                        <img
                            alt="portfolio"
                            class="img-fluid w-100"
                            src="/storage/images/portfolio/3.jpg">
                        <div class="text">
                            <h4>GoldRush version 1 | Serveur de jeu</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-5 col-sm-6">
                    <a
                        class="tf__portfolio_item image_popup"
                        data-cursor="View <br> Image"
                        href="/storage/images/portfolio/7.png"
                    >
                        <img
                            alt="portfolio"
                            class="img-fluid w-100"
                            src="/storage/images/portfolio/7.png">
                        <div class="text">
                            <h4>Kiabi | Site concours</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-7 col-sm-6">
                    <a
                        class="tf__portfolio_item image_popup"
                        data-cursor="View <br> Image"
                        href="/storage/images/portfolio/4.jpg"
                    >
                        <img
                            alt="portfolio"
                            class="img-fluid w-100"
                            src="/storage/images/portfolio/4.jpg">
                        <div class="text">
                            <h4>App cloud storage calculateur de nuage de mot</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <a
                        class="tf__portfolio_item image_popup"
                        data-cursor="View <br> Image"
                        href="/storage/images/portfolio/5.png"
                    >
                        <img
                            alt="portfolio"
                            class="img-fluid w-100"
                            src="/storage/images/portfolio/5.png">
                        <div class="text">
                            <h4>Ancien portfolio personel</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <a
                        class="tf__portfolio_item image_popup"
                        data-cursor="View <br> Image"
                        href="/storage/images/portfolio/6.png"
                    >
                        <img
                            alt="portfolio"
                            class="img-fluid w-100"
                            src="/storage/images/portfolio/6.png">
                        <div class="text">
                            <h4>CodingService | Vente de service informatique centralisé</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <a
                        class="tf__portfolio_item image_popup"
                        data-cursor="View <br> Image"
                        href="/storage/images/portfolio/8.png"
                    >
                        <img
                            alt="portfolio"
                            class="img-fluid w-100"
                            src="/storage/images/portfolio/8.png">
                        <div class="text">
                            <h4>Silver Game Studio | Studio de développement de jeu vidéo</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <a
                        class="tf__portfolio_item image_popup"
                        data-cursor="View <br> Image"
                        href="/storage/images/portfolio/9.png"
                    >
                        <img
                            alt="portfolio"
                            class="img-fluid w-100"
                            src="/storage/images/portfolio/9.png">
                        <div class="text">
                            <h4>Silver Game Studio | Studio de développement de jeu vidéo</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="tf__brand mt_120 xs_mt_80">
        <div class="row">
            <div class="col-12">
                <div class="marquee_animi">
                    <ul>
                        <li>* PHP</li>
                        <li>* Laravel</li>
                        <li>* NodeJS</li>
                        <li>* Vue.js</li>
                        <li>* HTML</li>
                        <li>* CSS</li>
                        <li>* MySQL</li>
                        <li>* PHP MAILER</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="tf__contact_2 pt_95 xs_pt_45" id="contact">
        <div class="container">
            <div class="row animation">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div
                        class="tf__contact_2_text fade_left"
                        data-trigerId="contact"
                    >
                  <span>
                    <img
                        alt="contact"
                        class="img-fluid w-100 svg"
                        src="/storage/svg/voice_phone.svg">
                  </span>
                        <h3>Numero de téléphone</h3>
                        <p>
                            Pour me contacter n'importe quand.
                        </p>
                        <a href="callto:0767156735">07 67 15 67 35</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div
                        class="tf__contact_2_text fade_left"
                        data-trigerId="contact"
                    >
                  <span>
                    <img
                        alt="contact"
                        class="img-fluid w-100 svg"
                        src="/storage/svg/website-design.svg">
                  </span>
                        <h3>Github</h3>
                        <p>
                            Le meilleur endroit du monde :)
                        </p>
                        <a href="https://github.com/Refaltor77" target="_blank">Redirection</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div
                        class="tf__contact_2_text fade_left"
                        data-trigerId="contact"
                    >
                  <span>
                    <img
                        alt="contact"
                        class="img-fluid w-100 svg"
                        src="/storage/svg/send_mail.svg">
                  </span>
                        <h3>Email</h3>
                        <p>
                            Réponses le soir après 20h.
                        </p>
                        <a href="mailto:hfavouriteemail@gmail.com"
                        >contact@elysiomartins.fr</a
                        >
                    </div>
                </div>
            </div>
            <div class="contact_form_2">
                <form method="post" action="/post/msg">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <input placeholder="Votre nom" type="text" name="name">
                        </div>
                        <div class="col-lg-6">
                            <input placeholder="Sujet" type="text" name="subject">
                        </div>
                        <div class="col-lg-12">
                            <input placeholder="Votre email (sinon je doit appeler le FBI pour vous contacter)"
                                   type="email" name="email">
                        </div>
                        <div class="col-12">
                    <textarea
                        placeholder="Votre message"
                        rows="5" name="msg"
                    ></textarea>
                        </div>
                    </div>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
    <div class="footer_2_copyright_area mt_120 xs_mt_80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__footer_copyright">
                        <p>© Elysio Martins 2023 | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="progress active">
        <svg
            class="progress-svg"
            height="100%"
            viewBox="-1 -1 102 102"
            width="100%"
        >
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
</div>
<script src="{{ asset("js/plugin.js") }}"></script>
<script src="{{ asset("js/scroll_button.js") }}"></script>
<script src="{{ asset("js/sticky_sidebar.js") }}"></script>
<script src="{{ asset("js/animation.js") }}"></script>
<script src="{{ asset("js/main.js") }}"></script>
</body>
</html>
