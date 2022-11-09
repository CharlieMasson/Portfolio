<html>

<head>

    <title>Portfolio</title>

    <!-- lien css-->
    <link rel="stylesheet" href="css/styles.css" />

    <!-- lien Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/906a7b1c5d.js" crossorigin="anonymous"></script>

    <!-- jquery -->

    <script src="https://code.jquery.com/jquery-3.6.1.js"integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="crossorigin="anonymous"></script>


    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fasthand&family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
    

    <!--meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

    <!--<section id="firstPage">

        <div class="firstPageContent">
            <h1 id="loadName"> Charlie Masson </h1>
            <h5 id="loadText"> Développeur Web </h5>
            <img id="loading" src="img/loading.gif">
            <div id="buttonWrapper"> 
                <a id="buttonAccess" class="" onclick="CloseFirstPage()" onmouseover="OpenDoor()" onmouseleave="CloseDoor()"><i class="buttonIcon fa-solid fa-door-closed" id="door"></i></a> 
            </div>
        </div>

    </section>-->

    <div id="bigBurger"><a id="burgerDisplay" class="fa-solid fa-burger pop"></a></div>

    <section id="mobileMenu">

        <ul class="mainMobileMenu">
            <li> <a href="#aboutMe" onclick="HideMenu()"> À Propos </a> </li>
            <li> <a href="#projects" onclick="HideMenu()"> Projets </a> </li>
            <li> <a href="#contact" onclick="HideMenu()"> Me Contacter </a> </li>
            <li> <a href="#" onclick="HideMenu()"> Connexion </a> </li>
        </ul>

        <ul class="lesserMobileMenu">
            <li><a href="document/cv.pdf" class="icone flipOnHover cv fa-solid fa-scroll"></a></li>
            <li><a href="https://github.com/CharlieMasson" class="icone github flipOnHover fa-brands fa-github-alt"></a></li>
            <li><a href="https://www.linkedin.com/in/charlie-masson-985b111a2/" class="icone linkedin flipOnHover fa-brands fa-linkedin-in"></a></li>
            <li><a href="#contact" class="icone flipOnHover fa-regular fa-paper-plane"></a></li>
        </ul>

    </section>

    <section id="menu">


        <header>

            <ul>
                <li class="menuActive "><a href="#aboutMe" class="defaultMenu menuJS"> À Propos </a></li>
                <li class=""><a href="#projects" class="defaultMenu menuJS"> Projets </a></li>
                <li class=""><a href="#contact" class="defaultMenu menuJS"> Me Contacter </a></li>
                <li class=""><a href="#" class="defaultMenu menuJS"> Connexion </a></li>
            </ul>

        </header>

        <nav>
            <ul>
                <li><a href="document/cv.pdf" class="icone flipOnHover cv fa-solid fa-scroll"></a></li>
                <li><a href="https://github.com/CharlieMasson" class="icone flipOnHover github fa-brands fa-github-alt"></a></li>
                <li><a href="https://www.linkedin.com/in/charlie-masson-985b111a2/" class="icone flipOnHover linkedin fa-brands fa-linkedin-in"></a></li>
                <li><a href="#contact" class="icone flipOnHover message fa-regular fa-paper-plane"></a></li>
            </ul>
        </nav>

    
    </section>

    <section class="scrollspy" id="aboutMe">
        <div class="container flexboxAboutMe">
            <div class="image">
                <img src="img/moi.jpg" alt="photo de moi" class="rounded">
            </div>
            <div class="info">
                <div class="textAboutMe">
                    <h2>À Propos</h2>
                    <p>Bienvenue sur mon Portfolio! Je suis Charlie Masson, élève en deuxième année de BTS SIO option SLAM au <a href="https://www.lycee-stvincent.fr/"> lycée Saint Vincent </a> à Senlis.</p>
                    <p>Ce portfolio est pour moi un moyen de partager mes projets et progrès avec les autres. Si vous voulez me contacter, <a href="#"> c'est par ici! </a> </p>
                    <p>Liste non-exhaustif des technologies que je maîtrise:</p>
                </div>
                <div class="techs">
                    <div class="flexboxTechs">
                        <img src="img/HTML5.png" class="HTML5 pop">
                        <img src="img/CSS3.png" class="CSS3 pop">
                        <img src="img/Bootstrap.png" class="Bootstrap pop">
                        <img src="img/PHP.png" class="PHP pop">
                        <img src="img/c.png" class="C pop">
                        <img src="img/js.png" class="JS pop">
                        <img src="img/mySQL.png" class="mySQL pop">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="scrollspy" id="projects">

        <h2> Projets </h2>

        <?php 
            //sql
            require 'php/database.php';
            $myProjects = array(
                'id' => array(),
                'thumbnail' => array(),
                'title' => array(),
                'desc' => array(),
                'techs' => array(),
                'time' => array(),
                'date' => array(),
                'download' => array(),
            );

            $myProjectImages = array(
                'id' => array(),
                'image' => array(),
                'project_id' => array(),
            );

            $ind = 0;
            $pdo = Database::connect();
            $statement = $pdo->query('SELECT project_id, project_thumbnail, project_title, project_desc, project_techs, project_time, project_date, project_download FROM project');
            while ($project = $statement->fetch()){
                $myProjects['id'][$ind] = $project['project_id'];
                $myProjects['thumbnail'][$ind]  = $project['project_thumbnail'];
                $myProjects['title'][$ind]  = $project['project_title'];
                $myProjects['desc'][$ind]  = $project['project_desc'];
                $myProjects['techs'][$ind]  = $project['project_techs'];
                $myProjects['time'][$ind]  = $project['project_time'];
                $myProjects['date'][$ind]  = $project['project_date'];
                $myProjects['download'][$ind]  = $project['project_download'];
                $ind++;
            }

            $ind = 0;
            $statement = $pdo->query('SELECT project_image_id, project_image, project_id FROM project_image');
            while ($project_image = $statement->fetch()){
                $myProjectImages['id'][$ind] = $project_image['project_image_id'];
                $myProjectImages['image'][$ind] = $project_image['project_image'];
                $myProjectImages['project_id'][$ind] = $project_image['project_id'];
                $ind++;
            }

            $statement = $pdo->prepare('SELECT COUNT(*) as nbRows FROM project');
            $statement -> execute();
            $project = $statement->fetch();
            $nbProjects = $project['nbRows'];

            //modals

            $ind = 0;
                while($ind<$nbProjects){
                    echo'<div class="modal" tabindex="-1" role="dialog" id="projectBox'. $myProjects['id'][$ind] . '">';
                        echo'<div class="modal-dialog" role="document">';
                            echo'<div class="modal-content">';
                                echo'<div class="modal-header">';
                                    echo'<h5 class="modal-title modalTitle">' . $myProjects['title'][$ind] . '<span id="id"></span></h5>';
                                    echo'<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">x</button>';
                                echo'</div>';
                                echo'<div class="modal-body">';
                                    echo'<div class= "modalDate">';
                                        echo'<span class="modalTitle"><i class="fa-solid fa-calendar"></i> Date de Réalisation : </span>';
                                        echo'<span>' . $myProjects['date'][$ind] . '</span>';
                                    echo'</div>';
                                    echo'<div class= "modalTime">';
                                        echo'<span class="modalTitle"><i class="fa-solid fa-clock"></i> Temps de réalisation : </span>';
                                        echo'<span>' . $myProjects['time'][$ind] . '</span>';
                                    echo'</div>';
                                    echo'<div class= "modalTech">';
                                        echo'<span class="modalTitle"><i class="fa-solid fa-code"></i> Technologies Utilisées : </span>';
                                        echo'<span>' . $myProjects['techs'][$ind] . '</span>';
                                    echo'</div>';
                                    echo'<div class="modalDesc">';
                                        echo'<span class="modalTitle"><i class="fa-solid fa-pen"></i> Description du projet : </span>';
                                        echo'<p>' . $myProjects['desc'][$ind] . '</p>';
                                    echo'</div>';

                                    if (in_array($myProjects['id'][$ind], $myProjectImages['project_id'])){
                                        
                                        echo'<span class="modalTitle"> <i class="fa-solid fa-image"></i> Galerie : </span>';
                                        echo'<div class="modalCarousel">';
                                            echo'<div id="carouselControls'. $myProjects['id'][$ind] . '" class="carousel slide" data-bs-ride="carousel">';
                                                echo'<div class="carousel-inner">';

                                                    $ind2 = 0;
                                                    $firstImage = true;
                                                    //cherche des images dans myProjectImages qui ont l'id du projet
                                                    while ($ind2 < count($myProjectImages['project_id'])){

                                                            if ($myProjectImages['project_id'][$ind2] == $myProjects['id'][$ind]){

                                                                if($firstImage){

                                                                    echo'<div class="carousel-item active">';
                                                                        echo'<a href="' . $myProjectImages['image'][$ind2] . '" target="_blank"> <img src="' . $myProjectImages['image'][$ind2] . '" class="d-block w-100" alt="image projet"></a>';
                                                                    echo'</div>';

                                                                    $firstImage = false;

                                                                }

                                                                else{

                                                                    echo'<div class="carousel-item">';
                                                                        echo'<a href="' . $myProjectImages['image'][$ind2] . '" target="_blank"> <img src="' . $myProjectImages['image'][$ind2] . '" class="d-block w-100" alt="image projet"></a>';
                                                                    echo'</div>';

                                                                }
                                                            
                                                            }

                                                        $ind2++;

                                                    }

                                                echo'</div>';
                                                echo'<button class="carousel-control-prev carouselModal" type="button" data-bs-target="#carouselControls'. $myProjects['id'][$ind] . '" data-bs-slide="prev">';
                                                    echo'<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                                                    echo'<span class="visually-hidden">Previous</span>';
                                                echo'</button>';
                                                echo'<button class="carousel-control-next carouselModal" type="button" data-bs-target="#carouselControls'. $myProjects['id'][$ind] . '" data-bs-slide="next">';
                                                    echo'<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                                                    echo'<span class="visually-hidden">Next</span>';
                                                echo'</button>';
                                            echo'</div>';
                                        echo'</div>';

                                    }

                                echo'</div>';
                                    echo'<div class="modal-footer">';

                                        //bouton telechargement dispo ou non en fonction de download
                                        if ($myProjects['download'][$ind] == NULL){
                                            echo'<button type="button" class="btn btn-primary" disabled><i class="fa-solid fa-download"></i> Téléchargement Indisponible </button>';
                                        }    
                                        else{
                                            echo'<a type="button" class="btn btn-primary" href="' . $myProjects['download'][$ind] . '" download><i class="fa-solid fa-download"></i>Télécharger le Projet</a>';
                                        }
                                    echo'<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Retour</button>';
                                echo'</div>';
                            echo'</div>';
                        echo'</div>';
                    echo'</div>';

                    $ind++;
                }

        ?>

        <div id="carouselIndicatorsXL" class="carousel slide carouselXL bigCarousel" data-bs-ride="carousel">
        
            <?php 

                //indicators
                $nbButtons = $nbProjects/3-1;
                echo'<div class="carousel-indicators">';
                    echo '<button type="button" data-bs-target="#carouselIndicatorsXL" data-bs-slide-to="0" class="active"></button>';
                    $ind = 1;
                    while ($ind <= round($nbButtons)){
                        echo '<button type="button" data-bs-target="#carouselIndicatorsXL" data-bs-slide-to="' . $ind . '"></button>';
                        $ind++ ;
                    }
                echo'</div>';

                //carousel-inner
                echo'<div class="carousel-inner">';
                    echo'<div class="carousel-item active">';
                        echo'<div class="flexboxCarousel">';
                            echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][0] . '">';
                                echo'<div class="myCard float">';
                                    echo'<div class="hWrapper">';
                                        echo '<h3>' . $myProjects['title'][0] . '</h3>';
                                    echo '</div>';
                                    echo'<img src="' . $myProjects['thumbnail'][0] . '">';
                                echo'</div>';
                            echo'</a>';
                            
                            if ($nbProjects>1){
                                echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][1] . '">';
                                    echo'<div class="myCard float">';
                                        echo'<div class="hWrapper">';
                                            echo '<h3>' . $myProjects['title'][1] . '</h3>';
                                        echo '</div>';
                                        echo'<img src="' . $myProjects['thumbnail'][1] . '">';
                                    echo'</div>';
                                echo'</a>';
                                if($nbProjects>2){
                                echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][2] . '">';
                                    echo'<div class="myCard float">';
                                        echo'<div class="hWrapper">';
                                            echo '<h3>' . $myProjects['title'][2] . '</h3>';
                                        echo '</div>';
                                        echo'<img src="' . $myProjects['thumbnail'][2] . '">';
                                    echo'</div>';
                                echo'</a>';
                                }
                            }
                        echo'</div>';
                    echo'</div>';

                    $ind = $nbProjects-3;
                    $nbProject = 3;

                    while($ind>0){
                        $ind-=3;
                        echo'<div class="carousel-item">';
                            echo'<div class="flexboxCarousel">';
                            if($ind<0){
                                $nbShownProjects = $ind + 3;
                            }
                            else{
                                $nbShownProjects = 3;
                            }
                                while($nbShownProjects>0){
                                    echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][$nbProject] . '">';
                                        echo'<div class="myCard float">';
                                            echo'<div class="hWrapper ">';
                                                    echo '<h3>' . $myProjects['title'][$nbProject] . '</h3>';
                                            echo '</div>';
                                            echo'<img src="' . $myProjects['thumbnail'][$nbProject] . '">';
                                        echo'</div>';
                                    echo'</a>';
                                    $nbProject++;
                                    $nbShownProjects--;
                                }

                            echo'</div>';
                        echo'</div>';
                    }



                echo'</div>';

                //buttons
                echo'<button class="carousel-control-prev mainCarousel rounded" type="button" data-bs-target="#carouselIndicatorsXL" data-bs-slide="prev">';
                    echo'<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                    echo'<span class="visually-hidden">Previous</span>';
                echo'</button>';
                    echo'<button class="carousel-control-next mainCarousel rounded" type="button" data-bs-target="#carouselIndicatorsXL" data-bs-slide="next">';
                    echo'<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                    echo'<span class="visually-hidden">Next</span>';
                echo'</button>';
                
            ?>

        </div>

        <div id="carouselIndicatorsMD" class="carousel slide carouselMD bigCarousel" data-bs-ride="carousel">
        
            <?php 

                //indicators
                $statement = $pdo->prepare('SELECT COUNT(*) as nbRows FROM project');
                $statement -> execute();
                $project = $statement->fetch();

                $nbProjects = $project['nbRows'];
                $nbButtons = $nbProjects/2-1;
                echo'<div class="carousel-indicators">';
                    echo '<button type="button" data-bs-target="#carouselIndicatorsMD" data-bs-slide-to="0" class="active"></button>';
                    $ind = 1;
                    while ($ind <= round($nbButtons)){
                        echo '<button type="button" data-bs-target="#carouselIndicatorsXL" data-bs-slide-to="' . $ind . '"></button>';
                        $ind++ ;
                    }
                echo'</div>';


                //carousel-inner
                echo'<div class="carousel-inner">';
                    echo'<div class="carousel-item active">';
                        echo'<div class="flexboxCarousel">';
                            echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][0] . '">';
                                echo'<div class="myCard float">';
                                    echo'<div class="hWrapper">';
                                        echo '<h3>' . $myProjects['title'][0] . '</h3>';
                                    echo '</div>';
                                    echo'<img src="' . $myProjects['thumbnail'][0] . '">';
                                echo'</div>';
                            echo'</a>';
                            if ($nbProjects>1){
                                echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][1] . '">';
                                    echo'<div class="myCard float">';
                                        echo'<div class="hWrapper">';
                                            echo '<h3>' . $myProjects['title'][1] . '</h3>';
                                        echo '</div>';
                                        echo'<img src="' . $myProjects['thumbnail'][1] . '">';
                                    echo'</div>';
                                echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][1] . '">';
                            }
                        echo'</div>';
                    echo'</div>';

                    $ind = $nbProjects-2;
                    $nbProject = 2;

                    while($ind>0){
                        $ind-=2;
                        echo'<div class="carousel-item">';
                            echo'<div class="flexboxCarousel">';
                            if($ind<0){
                                $nbShownProjects = $ind + 2;
                            }
                            else{
                                $nbShownProjects = 2;
                            }
                                while($nbShownProjects>0){
                                    echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][$nbProject] . '">';
                                        echo'<div class="myCard float">';
                                            echo'<div class="hWrapper">';
                                                echo '<h3>' . $myProjects['title'][$nbProject] . '</h3>';
                                            echo '</div>';
                                            echo'<img src="' . $myProjects['thumbnail'][$nbProject] . '">';
                                        echo'</div>';
                                    echo'</a>';
                                    $nbProject++;
                                    $nbShownProjects--;
                                }

                            echo'</div>';
                        echo'</div>';
                    }



                echo'</div>';

                //buttons
                echo'<button class="carousel-control-prev mainCarousel rounded" type="button" data-bs-target="#carouselIndicatorsMD" data-bs-slide="prev">';
                    echo'<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                    echo'<span class="visually-hidden">Previous</span>';
                echo'</button>';
                    echo'<button class="carousel-control-next mainCarousel rounded" type="button" data-bs-target="#carouselIndicatorsMD" data-bs-slide="next">';
                    echo'<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                    echo'<span class="visually-hidden">Next</span>';
                echo'</button>';
                

            ?>

        </div>

        <div id="carouselIndicatorsSM" class="carousel slide carouselSM bigCarousel" data-bs-ride="carousel">
        
            <?php 

                //indicators

                $nbButtons = $nbProjects-1;
                echo'<div class="carousel-indicators">';
                    echo '<button type="button" data-bs-target="#carouselIndicatorsSM" data-bs-slide-to="0" class="active"></button>';
                    $ind = 1;
                    while ($ind <= round($nbButtons)){
                        echo '<button type="button" data-bs-target="#carouselIndicatorsXL" data-bs-slide-to="' . $ind . '"></button>';
                        $ind++ ;
                    }
                echo'</div>';

                //carousel-inner
                echo'<div class="carousel-inner">';
                    echo'<div class="carousel-item active">';
                        echo'<div class="flexboxCarousel">';
                            echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][0] . '">';
                                echo'<div class="myCard float">';
                                    echo'<div class="hWrapper">';
                                        echo '<h3>' . $myProjects['title'][0] . '</h3>';
                                    echo '</div>';
                                    echo'<img src="' . $myProjects['thumbnail'][0] . '">';
                                echo'</div>';
                            echo'</a>';
                        echo'</div>';
                    echo'</div>';

                    $ind = $nbProjects-1;
                    $nbProject = 1;

                    while($ind>0){
                        $ind-=1;
                        echo'<div class="carousel-item">';
                            echo'<div class="flexboxCarousel">';
                                echo '<a data-bs-toggle="modal" data-bs-target="#projectBox' . $myProjects['id'][$nbProject] . '">';
                                    echo'<div class="myCard float">';
                                        echo'<div class="hWrapper">';
                                            echo '<h3>' . $myProjects['title'][$nbProject] . '</h3>';
                                        echo '</div>';
                                        echo'<img src="' . $myProjects['thumbnail'][$nbProject] . '">';
                                    echo'</div>';
                                echo'</a>';
                            echo'</div>';
                        echo'</div>';
                        $nbProject++;
                    }



                echo'</div>';

                //buttons
                echo'<button class="carousel-control-prev mainCarousel carouselSM rounded" type="button" data-bs-target="#carouselIndicatorsSM" data-bs-slide="prev">';
                    echo'<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                    echo'<span class="visually-hidden">Previous</span>';
                echo'</button>';
                    echo'<button class="carousel-control-next mainCarousel carouselSM rounded" type="button" data-bs-target="#carouselIndicatorsSM" data-bs-slide="next">';
                    echo'<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                    echo'<span class="visually-hidden">Next</span>';
                echo'</button>';
                

            ?>

        </div>

    </section>

    <section class="scrollspy" id="contact">

        <h2> Contact </h2>

        <div class="flexboxContact">
            <div class="imgContact">
                <a href="mailto:charlie.mass.cm@gmail.com">
                    <img src="img/gmail.png">
                </a>
            </div>

            <div class="form">
                <form class="mailForm">
                    <input type="email" name="emailAdress" placeholder="Adresse Email">
                    <input type="tel" name="phoneNumber" placeholder="Numéro de téléphone (àà600-00-00-00)" pattern="\+?\d{2}-d{2}-\d{2}-\d{2}-\d{2}">
                    <input type="text" name="name" placeholder="Nom">
                    <input type="text" name="surname" placeholder="Prénom">
                    <textarea name="Message" rows="10" placeholder="Message"></textarea> 
                    <button>Envoyer</button>

                </form>
            </div>
        </div>

    </section>

    <footer>
        <div class="arrowUp"><a href="#aboutMe" class="bob"><i class="fa-solid fa-arrow-up"></i></a></div>
        <div class="flexboxFooter">
            <div class="contactFooter">
                <ul>
                    <li>
                        <i class="fa-solid fa-phone"></i> 06 75 15 42 03
                    </li>
                    <li>
                        <i class="fa-solid fa-house"></i> 149 Rue Jean Jaurès, La Croix-Saint-Ouen 60610
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i> charlie.mass.cm@gmail.com
                    </li>
                </ul>
            </div>
            <div class="menuFooter">
                <ul>
                    <li>
                        <a href="#aboutMe" class="wobble-horizontal"> À Propos </a>
                    </li>
                    <li>
                        <a href="#projects" class="wobble-horizontal"> Projets </a>
                    </li>
                    <li>
                        <a href="#contact" class="wobble-horizontal"> Me Contacter </a>
                    </li>
                    <li>
                        <a href="#" class="wobble-horizontal"> Connexion </a>
                    </li>
                </ul>
            </div>
            <div class="reseauxCVFooter">
                <ul>
                    <li>
                        <a href="https://github.com/CharlieMasson"><i class="fa-brands fa-github-alt"></i>https://github.com/CharlieMasson</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/charlie-masson-985b111a2/"><i class="fa-brands fa-linkedin-in"></i>https://www.linkedin.com/in/charlie-masson-985b111a2/</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

</body>

<script src="js/scrollspy.js"></script>
<!--<script src="js/load.js"></script>-->
<script src="js/menu.js"></script>

</html>
    