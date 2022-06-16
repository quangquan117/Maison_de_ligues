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
            <form action="#"method="POST">
                <label for="nom">Nom</label>
                <input type="nom" name="nom" placeholder="nom" aria-required="true">
                <label for="prenom">Prenom</label>
                <input type="prenom" name="prenom" placeholder="prenom" aria-required="true">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" placeholder="email" aria-required="true">
                <label for="password">mots de passe</label>
                <input id="password" name="password" type="password" placeholder="password" aria-require="true">
                <label for="c_password">confirmé votre mot de passe</label>
                <input id="c_password" name="c_password" type="password" placeholder="confirmé votre mot de passe" aria-require="true">
                <input type="submit" value="Valider" name="submit">
                <?php
                if(isset($_POST["submit"]))
                    if (!empty($_POST['email']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty('password') && !empty('c_password')){
                        $email = $_POST['email'];
                        $prenom = $_POST['prenom'];
                        $nom = $_POST['nom'];
                        $password = $_POST['password'];
                        $c_password = $_POST['c_password'];
                        if (strcmp($password, $c_password) == 0) {
                            $q = $_bdd->prepare('INSERT INTO CLIENT(nom, prenom, email, password, c_password) VALUES(:nom, :prenom, :email, :password, :c_password)');
                            $res = $q->execute(array('nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'password' => $password, 'c_password' ));
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