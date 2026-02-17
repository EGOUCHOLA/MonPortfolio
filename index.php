<?php
$title = 'Acceuil';
$pageCss = '<link rel="stylesheet" href="/css/index.css">';
include 'pages/header.php';
?> 
<body>
    <div class="body-sexion">
        <div class="profil-sexion">
            <div class="statut">
                <p>Salut, je suis Malick <img src="" alt=""></p>
                <h1>Developpeur logiciel</h1>
                <button>Contactez moi</button>
            </div>
            <div class="picture-sexion">
                <div class="arc">
                    <div class="picture"></div>
                </div>
            </div>
        </div>
        <div class="info">
            <h2>Mon Profil</h2>
            <p>Étudiant en informatique à l’Institut G4 sur Lyon, passionné par les technologies et la création numérique. je suis toujours prêt a relevé des défis complexes et apporter des solutions concrètes. En plus des compétences informatiques que je développe en autodidacte et grâce à mes expériences, je dispose aussi des compétences en graphisme, audio-visuel et en montage vidéo dont pourrait bénéficier votre entreprise. Disponible dès maintenant pour un poste  en alternance.</p>
        </div>
        <div class="competence">
            <h2>Compétences Techniques</h2>
            <div class="competence-one">
                <div class="sous-competence">
                    <img src="pictures/front-end.svg" alt="">
                    <h3>Front-End</h3>
                    <p>HTML-CSS-JavaScript</p>
                    <a href=""><button>Voir plus</button></a>
                </div>
                <div class="sous-competence">
                    <img src="pictures/back-end.svg" alt="">
                    <h3>Back-End</h3>
                    <p>PHP-MySQL</p>
                    <a href=""><button>Voir plus</button></a>
                </div>
                <div class="sous-competence">
                    <img src="pictures/designer.svg" alt="">
                    <h3>Designer</h3>
                    <p>PhotoShop-Figma</p>
                    <a href=""><button>Voir plus</button></a>
                </div class="sous-competence">
            </div>
            <div class="competence-two">
                 <div class="sous-competence">
                    <img src="pictures/outils.svg" alt="">
                    <h3>Outils</h3>
                    <p>VS Code-GitHub-Chrome DevTools</p>
                    <a href=""><button>Voir plus</button></a>
                </div>
                <div class="sous-competence">
                    <img src="pictures/maintenance.svg" alt="">
                    <h3>Maintenance</h3>
                    <p>Softwere-Hadwere</p>
                    <a href=""><button>Voir plus</button></a>
                </div>  
            </div>
            <div class="button">
                <a href=""><button class="views">Voir mes profils </button></a>
                <a href="" class="download">&nbsp;&nbsp;Telecharger mon Cv <img src="pictures/download.svg" alt=""></a>
            </div>
        </div>
    </div>
    <script src="/js/index.js"></script>
</body>
<?php
include 'pages/footer.php';
?> 