<?php
require_once('connect.php');
include('select_news.php');
include('message.php');
include('login.php');

?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Bienvenue sur le site de MUSACOM</title>
        <!-- font awesome cdn link -->
        
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel = "stylesheet" href = "https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel = "stylesheet" href = "css/style3.css">
    </head>
    <body>
        <!-- header section starts -->

        <header class="header">
            <img src="images/logo-musacom.jpg" alt="" width = "70" height = "70">
            <nav class = "navbar">
                <a href="#home">Accueil</a>
                <a href="#services">Services</a>
                <a href="#about">A propos</a>
                <a href="#doctors">Notre Equipe</a>
                <a href="#contact">Contactez-Nous</a>
                <a href="#review">Avis des Membres</a>
                <a href="actualites.php">News</a>
            </nav>
            <div class="icons">
                <div class="fas fa-user" id = "login-btn"></div>
                <div class="fas fa-bars" id = "menu-btn"></div>
            </div>

            <form action="" class = "login-form" method = "POST">
                <h3>Connectez-vous</h3>
                <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<div class = "message alert alert-warning alert-dismissible fade show" role = "alert">'.$message.'<button type = "button" class = "btn-close" data-bs-dismiss = "alert" aria-label = "Close"></button></div>';
                    }
                }
                ?>
                <input type="text" name = "nom_utilisateur" placeholder = "Nom d'utilisateur" class = "box">
                <input type="password" name = "mot_de_passe" placeholder = "Mot de passe" class = "box">
                <input type="submit" name = "login_btn" value = "Se connecter" class = "btn">
            </form>
        </header>
        <!-- header section ends -->

        <!-- home section starts -->
        <section class="home" id="home">
            <div class = "container">
                <img src="images/firstimage.jpg" alt="">
                <div class="text">
                    Solidarité pour un soin de santé de qualité à moindre coût
                </div>
            </div>
        </section>
        <!-- home section ends -->

        <!-- icons section starts -->
        <h1 class="heading"> Quelques <span>statistiques</span></h1>
        <section class="icons-container">
            <div class="icons">
                <i class="fas fa-users"></i>
                <h3>5000+</h3>
                <p>Membres à Goma</p>
            </div>
            <div class="icons">
                <i class="las la-id-card-alt" style = "font-size:50px;"></i>  
                <h3>3750+</h3>
                <p>Bénéficiaires de services à Goma</p>
            </div>
            <div class="icons">
                <i class="fa-solid fa-location-dot"></i>
                <h3>3+</h3>
                <p>Zones de santé couvertes à Goma : Goma, Karisimbi et Nyiragongo</p>
            </div>
            <div class="icons">
                <i class="fas fa-hospitals"></i>
                <h3>15+</h3>
                <p>Structures sanitaires partenaires à Goma</p>
            </div>
        </section>

        <!-- icons section ends -->

        <!-- services section starts -->

        <section class="services" id="services">
            <h1 class="heading"> <span>Services</span> couverts par la MUSACOM</h1>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-notes-medical"></i>
                    <h3>Consultations</h3>
                    <p>La MUSACOM paie en 80% les consultations externes, labo, pharmacie, observation de deux jours au maximum, CPN focalisée, CPS, CPO...</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-person-pregnant"></i>
                    <h3>Accouchement</h3>
                    <p>Accouchement eutocique sans épisiotomie, Accouchement dystocique ou avec épisiotomie, curetage ou aspiration, césarienne, suture et pansement</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-user-doctor"></i>
                    <h3>Chirurgie</h3>
                    <p>La MUSACOM couvre la chirurgie mineure, moyenne et majeure à 75% de la facture</p>
                </div>
            </div></br>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-bone"></i>
                    <h3>Traumatologie et Orthopédie</h3>
                    <p>La MUSACOM prend en charge 30% des actes. En cas des blessures causées par bagarre ou accident provoqué par l'état d'ivresse, la mutuelle décline la responsabilité de la facture des soins.</p>
                </div>
                <div class="box">
                    <i class="far fa-eye"></i>
                    <h3>Ophtalmologie</h3>
                    <p>La MUSACOM prend en charge la facture de traitement en 80% mais en cas de fourniture en lunettes la mutuelle couvre 30%.</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-baby"></i>
                    <h3>Néonatologie</h3>
                    <p>Les services de néonatologie sont couverts en 30% par la MUSACOM</p>
                </div>
            </div>
        </section>

        <!-- services section ends -->

        <!-- about section starts -->
        <section class="about" id="about">
            <h1 class="heading"> A <span>propos</span> </h1>
            <div class="row">
                <div class="image">
                    <img src="images/logo-musacom.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Solidarité pour un soin de santé de qualité à moindre coût</h3>
                    <p>MUSACOM est une association volontaire des personnes à but non lucratif (qui ne cherche pas de profit en termes d'argent), dont le fonctionnement repose sur la solidarité entre les membres. </p>
                    <p>Sur la base des décisions des membres et au moyen de leurs cotisations, la mutuelle mène, en leur faveur et celle de leur famille, une action de prévoyance, d'entraide et de solidarité dans le domaine du risque maladie. </p>
                    <a href="apropos.php" class = "btn"> Lire la suite <span class="fas fa-chevron-light"></span></a>
                </div>
            </div>
        </section>

        <!-- about section ends -->

        <!-- doctors section starts -->
        <section class="doctors" id="doctors">
            <h1 class="heading"> Notre <span>équipe</span> </h1>
            <div class="box-container">
                <div class="box">
                    <img src="images/maman-judith.jpg" alt="">
                    <h3>Judith Mwengenindi</h3>
                    <span>Présidente du Conseil d'Administration</span>
                </div>
                <div class="box">
                    <img src="images/papa_prosper.jpg" alt="">
                    <h3>Prosper Muhavulwa Vagheni</h3>
                    <span>Gestionnaire</span>
                </div>
                <div class="box">
                    <img src="images/prince.jpg" alt="">
                    <h3>Prince Nzanzu Muhesi</h3>
                    <span>Sécretaire</span>
                </div>
                <div class="box">
                    <img src="images/vladmir.jpg" alt="">
                    <h3>Vladmir Muhindo Mayani</h3>
                    <span>Chargé de sensibilisation</span>
                </div>
                <div class="box">
                    <img src="images/ozias.jpg" alt="">
                    <h3>Ozias Moele</h3>
                    <span>Commissaire aux comptes</span>
                </div>
            </div>
        </section>

        <!-- doctors section ends -->

        <!-- booking section starts -->

        <section class="book" id="book">
            <h1 class="heading"> <span>Contactez</span>-nous</h1>
            <div class="row">
                <div class="image">
                    <img src="images/img10.jpg" alt="">
                </div>
                <form action="message.php" method = "POST">
                    <?php
                    if(isset($message_recu)){
                        foreach($message_recu as $message_recu){
                            echo '<div class = "message alert alert-warning alert-dismissible fade show" role = "alert">'.$message_recu.'<button type = "button" class = "btn-close" data-bs-dismiss = "alert" aria-label = "Close"></button></div>';
                        }
                    }
                    ?>
                    <h3>Envoyez-nous un message</h3>
                    <input type="text" name = "nom" placeholder = "votre nom" class = "box">
                    <input type="email" name = "email" placeholder = "votre email" class = "box">
                    <input type="text" name = "numero" placeholder = "votre number" class = "box">
                    <input type="text" name = "objet_message" placeholder = "Objet du message" class = "box">
                    <textarea name = "message" placeholder = "Tapez votre message" class = "box" rows = "10" cols = "10"></textarea>
                    <input type="submit" name = "envoyer" value = "Envoyer" class = "btn">
                </form>
            </div>
        </section>

        <!-- booking section ends -->

        <!-- review section starts -->

        <section class="review" id="review">
            <h1 class="heading">Avis des <span>membres</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="images/jonathankivatsi.JPG" alt="">
                    <h3>Rév. Dr. Jonathan Kivatsi</h3>
                    <span>Représentant Légal de la CBCA</span>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text">Notre vision en créant la MUSACOM est de garantir la population, un accès aux soins de santé de qualité à moindre coût. Cette mutuelle permet à rendre nos FOSA résiliente et autosuffisante. Notre mutuelle MUSACOM cherche à être une mutuelle de régérence pour les soins communautaires.</p>
                </div>
                <div class="box">
                    <img src="images/drisaacmuhongya.jpg" alt="">
                    <h3>Dr Isaac Muyonga</h3>
                    <span>Directeur du département de la santé de la CBCA</span>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text">La CBCA au travers la direction du département de la Santé, présente sa satisfaction à l'action de la mutuelle de santé MUSACOM dans ses Formations Sanitaires, le taux d'insolvabilité est réduit depuis que la population adhère à la mutuelle avant de se faire soigner. Notre département s'engage à faciliter l'épanouissement de la MUSACOM dans les 32 zones de santé du Nord-Kivu. La MUSACOM est bien accueillie.</p>
                </div>
                <div class="box">
                    <img src="images/josuemuhasa.jpg" alt="">
                    <h3>Dr Josué Muhasa</h3>
                    <span>Médecin Directeur du C.H. Bethesda</span>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text">Nous sommes convaincus que si la population adhère dans la Mutuelle de santé (MUSACOM), cela va réduire les payements directs des soins, mais aussi les principes des soins primaires seront suivis, notamment le respect de pyramide sanitaire.</p>
                </div>
            </div>
        </section>

        <!-- review section ends -->

        <!-- blogs section starts -->

        <section class="blogs" id="blogs">
            <h1 class="heading"> Dernières <span>news</span> </h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <?php echo '<img src="img_articles/'.$result['image'].'">'; ?>
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="news.php?id=<?php echo $id; ?>"><i class="fas fa-calendar"></i> <?php echo date("d/m/Y à H:i", strtotime($date)); ?></a>
                            <a href="news.php?id=<?php echo $id; ?>"><i class="fas fa-user"></i> by admin</a>
                        </div>
                        <h3><?php echo $result['titre']; ?></h3>
                        <p><?php echo substr($contenu, 0, 150).'...' ; ?></p>
                        <a href="news.php?id=<?php echo $id; ?>" class = "btn"> lire la suite <span class = "fas fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <?php echo '<img src="img_articles/'.$result_1['image'].'">'; ?>
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="news.php?id=<?php echo $id_1; ?>"><i class="fas fa-calendar"></i> <?php echo date("d/m/Y à H:i", strtotime($date_1)); ?></a>
                            <a href="news.php?id=<?php echo $id_1; ?>"><i class="fas fa-user"></i> by admin</a>
                        </div>
                        <h3><?php echo $result_1['titre']; ?></h3>
                        <p><?php echo substr($contenu_1, 0, 150).'...'; ?></p>
                        <a href="news.php?id=<?php echo $id_1; ?>" class = "btn"> lire la suite <span class = "fas fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <?php echo '<img src="img_articles/'.$result_2['image'].'">'; ?>    
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="news.php?id=<?php echo $id_2; ?>"><i class="fas fa-calendar"></i> <?php echo date("d/m/Y à H:i", strtotime($date_2)); ?></a>
                            <a href="news.php?id=<?php echo $id_2; ?>"><i class="fas fa-user"></i> by admin</a>
                        </div>
                        <h3><?php echo $result_2['titre']; ?></h3>
                        <p><?php echo substr($contenu_2, 0, 150).'...'; ?></p>
                        <a href="news.php?id=<?php echo $id_2; ?>" class = "btn"> lire la suite <span class = "fas fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- blogs section ends -->

        <!-- footer section starts -->

        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Adresse physique</h3>
                    <a href="#"><i class="fas fa-map-marker-alt"></i> Province du Nord-Kivu, Ville de Goma, Commune de Karisimbi, Quartier Virunga, Avenue Coin du Marché N°104 </a>
                </div>
                <div class="box">
                    <h3>FAQ</h3>
                    <ul class="accordion">
                        <li>
                            <input type="radio" name = "accordion" id = "first">
                            <label for="first">Que veut dire MUSACOM ?</label>
                            <div class="content">
                                <p>
                                    MUSACOM veut dire Mutuelle de Santé Communautaire.
                                </p>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name = "accordion" id = "second">
                            <label for="second">Que fait une mutuelle de Santé ?</label>
                            <div class="content">
                                <p>
                                    Une mutuelle de santé rassemble les personnes dans le but de faciliter l'accès aux soins de santé et leur éviter le payement direct de coût de soins.
                                </p>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name = "accordion" id = "third">
                            <label for="third">Qui est sensé adhérer à la MUSACOM ? Est-ce qu'un enfant peut être membre ?</label>
                            <div class="content">
                                <p>
                                    Tout le monde peut adhérer à la MUSACOM. Une personne adulte adhère comme membre avec sur la liste de son ménage les enfants comme dépendants.
                                </p>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name = "accordion" id = "fourth">
                            <label for="fourth">Comment devenir membre de la MUSACOM ?</label>
                            <div class="content">
                                <p>
                                    Pour devenir membre vous complétez une fiche de composition du ménage, vous payez les frais d'administration et les cotisations annuelles payables par membre du noyau familial. La MUSACOM vous soumet à une période d'observation de trois mois avant d'être éligible aux soins.
                                </p>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name = "accordion" id = "fifth">
                            <label for="fifth">Comment le membre accède aux soins après sa période d'observation ?</label>
                            <div class="content">
                                <p>
                                    Le membre se présente à l'hôpital avec la carte du ménage qui porte le code de membre ou le bon de soin livré au bureau de la Mutuelle.
                                </p>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name = "accordion" id = "sixth">
                            <label for="sixth">Et si l'on ne tombe pas malade, peut-on se faire rembourser les frais de cotisation ?</label>
                            <div class="content">
                                <p>
                                    Non! Car ceux-là qui n'ont pas été malades durant l'année mutuelle ont soutenu les cas sinistres par le principe d'entraide et solidarité.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="box">
                    <h3>Contactez-nous</h3>
                    <a href="#book"><i class="fas fa-phone"></i> +243 994 056 669 (Gestionnaire) </a>
                    <a href="#book"><i class="fas fa-phone"></i> +243 997 339 211 (Secrétaire) </a>
                    <a href="#book"><i class="fas fa-phone"></i> +243 997 124 364 (PCA) </a>
                    <a href="#book"><i class="fas fa-phone"></i> +243 813 893 804 (VPCA) </a>
                    <a href="#book"><i class="fas fa-envelope"></i> musacombureau2020@gmail.com </a>
                </div>
            </div>
            <div class="credit"> Conçu par <span>Johan Muyali</span> | Tous droits réservés | </div>
        </section>

        <!-- footer section endss -->

        <!-- custom js file link -->
        <script src = "js/scripts4.js"></script>
    </body>
</html>
