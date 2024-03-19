<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'css/register.css'?></style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script><?php include 'js/sign_log.js'?></script>
    <title>My meetic</title>
</head>
<body>
    <header>
        <figcaption>
            <img src = "assets/logo_meetic.png" alt="logo meetic" id="logo_register">
        </figcaption>
    </header>
    <main>
        <section>
            <div id="switch_button">
                <button class="button_regi button_bgcolor1"><a href="register.php">Inscription</a></button>
                <button class="button_sign button_bgcolor2"><a href="log_in.php">Connexion</a></button>
            </div>
            <form action="../controller_register.php" method="POST" id="form_log">
                <input type="text" placeholder="Entrez votre nom" name="lastname" id="nom">
                <span class="error_nom"></span>
                <input type="text" placeholder="Entrez votre prénom" name="firstname" id="prenom">
                <span class="error_prenom"></span>
                <div id="date_container">
                    <label for="date_naissance">Date de naissance (jj-mm-aaaa)</label>
                    <input type="date" id="date_de_naissance" name="date">
                </div>
                <span id="display_date"></span>
                <span class="error_date"></span>
                <select name="genre" id="genre">
                    <option selected disabled>--Genre--</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="autre">Autre</option>
                </select>
                <span class="error_genre "></span>
                <input type="text" placeholder="Entrez le nom d'une ville" id="loca" name="city">
                <span class="error_loca"></span>
                <input type="mail" placeholder="Entrez votre e-mail" id="email" name="email">
                <span class="error_email"></span>
                <input type="password" placeholder="Entrez votre mot de passe" id="mdp" name="password">
                <span class="error_mdp"></span>
                <select name="loisir" id="loisir" name="loisir">
                    <option selected disabled>--Loisir--</option>
                    <option value="Dance">Dance</option>
                    <option value="Skateboard">Skateboard</option>
                    <option value="Manga">Manga</option>
                    <option value="Licorne">Licorne</option>
                    <option value="Cuisiner">Cuisiner</option>
                </select>
                <span class="error_loisir"></span>
                <button type="submit" id="button_register">S'inscrire</button>
                <span class="error_form"></span>
            </form>
        </section>
    </main>
</body>
</html>