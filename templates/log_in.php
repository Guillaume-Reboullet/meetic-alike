<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'css/log_in.css'?></style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script><?php include 'js/sign_log.js'?></script>
    <title>My meetic</title>
</head>
<body>
    <header>
        <figcaption>
            <img src = "assets/logo_meetic.png" alt="logo meetic">
        </figcaption>
    </header>
    <main>
        <section>
            <div id="switch_button">
                <button class="button_regi button_bgcolor2"><a href="register.php">Inscription</a></button>
                <button class="button_sign button_bgcolor1"><a href="log_in.php">Connexion</a></button>
            </div>
            <form action="../controller_log_in.php" id="form_sign" class="hidden">
                <label for="email">E-mail</label>
                <input type="mail" placeholder="Entrez votre e-mail" id="email">
                <span class="error_email"></span>
                <label for="mdp">Mot de passe</label>
                <input type="password" placeholder="Entrez votre mot de passe" id="mdp">
                <span class="error_mdp"></span>
                <button type="submit" id="button_signin">Se connecter</button>
            </form>
        </section>
        <span>
    </span>
    </main>
</body>
</html>