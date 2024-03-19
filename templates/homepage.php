<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "css/homepage.css"?></style>
    <title>My meetic</title>
</head>
<body>
    <header>
        <figcaption>
            <img src="assets/logo_meetic.png" alt="logo meetic">
        </figcaption>
        <div id="nav_container">
            <nav>
                <a href="#">Mon compte</a>
                <a href="#">Gérer mon compte</a>
                <a href="#">Supprimer mon compte</a>
            </nav>
        </div>
    </header>
    <main>
        <aside>
            <h1>Filtre</h1>
            <form action="" method="get" id="filtre">
                <label for="genre">Genre:</label>
                <select name="genre">
                    <option value="">Homme</option>
                    <option value="">Femme</option>
                    <option value="">Autre</option>
                </select>

                <label for="localisation">Localisation:</label>
                <input type="text" name="localisation" placeholder="Entrez des noms de ville">

                <fieldset>
                    <legend>Loisir:</legend>
                    <label for="dance">Dance</label>
                    <input type="checkbox" name="dance" value="dance">
                    <label for="skateboard" >Skateboard</label>
                    <input type="checkbox" name="skateboard" value="skateboard">
                    <label for="manga">Manga</label>
                    <input type="checkbox" name="manga" value="manga">
                    <label for="licorne">Licorne</label>
                    <input type="checkbox" name="licorne" value="licorne">
                    <label for="cuisiner ">Cuisiner </label>
                    <input type="checkbox" name="cuisiner" value="cuisiner">
                    <label for="autre">Autres</label>
                    <input type="text" placeholder="Autres loisirs...">
                </fieldset>

                <div id="age_container">
                    <label for="age">Âge:</label>
                    <select name="age">
                        <option value="1">18/25</option>
                        <option value="2">25-35</option>
                        <option value="3">35/45</option>
                        <option value="4">45+</option>
                    </select>
                </div>
                <button type="submit">Chercher</button>
            </form>
        </aside>
        <section>
            <div id="carroussel">
                <h1>carroussel</h1>
            </div>
        </section>
    </main>
</body>
</html>