<?php
    include_once "./src/connect.inc.php";
    include_once "./src/header.inc.php";
?>
<body>
    <header>
        <img src="./asset/halo_championship.png" alt="image filmonde">
        <h1>Maison des ligue tous les sports</h1>
    </header>
    <main>
        <ul class="grid-picture-large">
            <li 
            data-image="./asset/nightfall.jpg" 
            data-title="Nightfall" 
            data-description="c'est un film épatant, entre action et émotion..." 
            data-dates="02/01/2020">
                <figure>
                    <img src="./asset/nightfall.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir
                                    
                            </h2>
                        </figcaption>
                    
                </figure>
            </li>
            <li 
            data-image="./asset/nightfall.jpg" 
            data-title="Nightfall" 
            data-description="c'est un film épatant, entre action et émotion..." 
            data-dates="02/01/2020">
                <figure>
                    <img src="./asset/nightfall.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir
                                    
                            </h2>
                        </figcaption>
                    
                </figure>
            </li>
            <li 
            data-image="./asset/nightfall.jpg" 
            data-title="Nightfall" 
            data-description="c'est un film épatant, entre action et émotion..." 
            data-dates="02/01/2020">
                <figure>
                    <img src="./asset/nightfall.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir
                                    
                            </h2>
                        </figcaption>
                    
                </figure>
            </li>
            <li 
            data-image="./asset/nightfall.jpg" 
            data-title="Nightfall" 
            data-description="c'est un film épatant, entre action et émotion..." 
            data-dates="02/01/2020">
                <figure>
                    <img src="./asset/nightfall.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir
                            </h2>
                        </figcaption>
                    
                </figure>
            </li>
            <li 
            data-image="./asset/nightfall.jpg" 
            data-title="Nightfall" 
            data-description="c'est un film épatant, entre action et émotion..." 
            data-dates="02/01/2020">
                <figure>
                    <img src="./asset/nightfall.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir
                                    
                            </h2>
                        </figcaption>
                    
                </figure>
            </li>
        </ul>
        <p class="warning">Warning</p>
        <div class="form" role="form">
            <form method="POST">
                <label for="Nom">Nom</label>
                <input type="nom" name="Nom" placeholder="Nom" aria-required="true">
                <label for="Prenom">Prenom</label>
                <input type="prenom" name="Prenom" placeholder="Prenom" aria-required="true">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" placeholder="email" aria-required="true">
                <label for="Ville">Ville</label>
                <select id="Ville">
                    <option value="">--choose our city--</option>>
                    <option value="1">Paris</option>
                    <option value="2">Londre</option>
                    <option value="3">Berlin</option>
                    <option value="4">Tokyo</option>
                </select>
                <label for="Pays">Pays</label>
                <select id="Pays">
                    <option value="">--choose our country--</option>>
                    <option value="1">France</option>
                    <option value="2">Angletaire</option>
                    <option value="3">Allemagne</option>
                    <option value="4">Japon</option>
                </select>
                <input type="submit" value="Valider">
                <?php
                    if (!empty($_POST['email'])){
                        $email = $_POST['email'];
                        var_dump($email);
                        /* 
                        traitement en PDO 
                        */
                        $q = $_bdd->prepare('INSERT INTO CLIENT(email) VALUES(:email)');
                        $q->bindValue('email', $email); /* associe directement une valeur à un paramètre */
                        $res = $q->execute();
                        if ($res) {
                            echo "<br>Inscription réussie";
                        }
                    }
                ?>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; CINEMA STREMING - 2022</p>
    </footer>
    <!-- modale -->
    <div class="parent-modale" role="dialog">
        <figure class="modale">
            <button aria-label="closed">
                <span class="material-icons">clear</span>
            </button>
            <img src="https://via.placeholder.com/500" alt="picture">
            <figcaption class="desc">
                <h3>title</h3>
                <p>
                   
                </p>
                <time>Years : </time>
            </figcaption>
        </figure>
    </div>
    <script src="./js/agrandit.js"></script>
    <script src="./js/form.js"></script>
</body>
</html>