$(document).ready(function () {
    let nom = $("#nom");
    let error_nom = $(".error_nom");

    //NOM
    error_nom.hide();

    nom.on('keyup', function () {
        validateLastname();
    });

    function validateLastname() {
        let lastnameValue = nom.val();
        if (lastnameValue.length == "") {
            nom.removeClass("noError");
            nom.addClass("error_css_input");
            error_nom.addClass("error_css_span");
            error_nom.show();
            error_nom.html("Entrez votre nom !");
            lastnameError = false;
            return false;
        } else if (lastnameValue.length < 2 || lastnameValue.length > 20) {
            nom.removeClass("noError");
            nom.addClass("error_css_input");
            error_nom.addClass("error_css_span");
            error_nom.show();
            error_nom.html("La longueur du nom doit être comprise entre 2 et 20 lettres !");
            lastnameError = false;
            return false;
        } else if (!lastnameValue.match(/^[a-z ,.'-]+$/i)) {
            nom.removeClass("noError");
            nom.addClass("error_css_input");
            error_nom.addClass("error_css_span");
            error_nom.show();
            error_nom.html("Votre prénom ne peut pas contenir certains de vos charactères !");
            lastnameError = false;
            return false;
        } else {
            nom.removeClass("error_css_input");
            nom.addClass("noError");
            error_nom.hide();
            return true;
        }
    }

    //PRENOM
    let prenom = $("#prenom");
    let error_prenom = $(".error_prenom");
    error_prenom.hide();

    prenom.on('keyup', function () {
        validateFirstname();
    });

    function validateFirstname() {
        let firstnameValue = prenom.val();
        if (firstnameValue.length == "") {
            prenom.removeClass("noError");
            prenom.addClass("error_css_input");
            error_prenom.addClass("error_css_span");
            error_prenom.show();
            error_prenom.html("Entrez votre prénom !");
            firstnameError = false;
            return false;
        } else if (firstnameValue.length < 2 || firstnameValue.length > 20) {
            prenom.removeClass("noError");
            prenom.addClass("error_css_input");
            error_prenom.addClass("error_css_span");
            error_prenom.show();
            error_prenom.html("La longueur du prénom doit être comprise entre 2 et 20 lettres !");
            firstnameError = false;
            return false;
        } else if (!firstnameValue.match(/^[a-z ,.'-]+$/i)) {
            prenom.removeClass("noError");
            prenom.addClass("error_css_input");
            error_prenom.addClass("error_css_span");
            error_prenom.show();
            error_prenom.html("Votre prénom ne peut pas contenir certains de vos charactères !");
            firstnameError = false;
            return false;
        } else {
            error_prenom.removeClass("error_css_input");
            prenom.addClass("noError");
            error_prenom.hide();
            return true;
        }
    }

    //DATE DE NAISSANCE 
    let date_de_naissance = $("#date_de_naissance");
    let error_date = $(".error_date");
    error_date.hide();

    date_de_naissance.on('change', function () {
        validateDate();
    })

    function validateDate() {
        let dateValue = date_de_naissance.val();
        var today = new Date();
        dateValue = new Date(dateValue);
        if (dateValue == "Invalid Date") {
            date_de_naissance.removeClass("noError");
            date_de_naissance.addClass("error_css_input");
            error_date.addClass("error_css_span");
            error_date.show();
            error_date.html("Entrez votre date de naissance !");
            return false;
        }

        let Difference_In_Year = today.getFullYear() - dateValue.getFullYear();
        let Difference_Of_Month = today.getMonth() - dateValue.getMonth();
        let realMonth = dateValue.getMonth() + 1
        $('#display_date').html(dateValue.getDate() + "-" + realMonth + "-" + dateValue.getFullYear())

        if (Difference_In_Year > 110) {
            date_de_naissance.removeClass("noError");
            date_de_naissance.addClass("error_css_input");
            error_date.addClass("error_css_span");
            error_date.show();
            error_date.html("Avez vous vraiment plus de 110 ans ?");
            return false;
        } else if (Difference_In_Year < 18) {
            date_de_naissance.removeClass("noError");
            date_de_naissance.addClass("error_css_input");
            error_date.addClass("error_css_span");
            error_date.show();
            error_date.html("year < 18");
            error_date.html("Vous devez avoir au moins 18 ans !");
            return false;
        } else if (Difference_In_Year == 18) {
            if (dateValue.getMonth() > today.getMonth()) {
                date_de_naissance.removeClass("noError");
                date_de_naissance.addClass("error_css_input");
                error_date.addClass("error_css_span");
                error_date.show();
                error_date.html("Vous devez avoir au moins 18 ans !");
                return false;
            } else if (Difference_Of_Month == 0) {
                if (dateValue.getDate() > today.getDate()) {
                    date_de_naissance.removeClass("noError");
                    date_de_naissance.addClass("error_css_input");
                    error_date.addClass("error_css_span");
                    error_date.show();
                    error_date.html("Vous devez avoir au moins 18 ans !");
                    return false;
                } else {
                    error_date.removeClass("error_css_input");
                    date_de_naissance.addClass("noError");
                    error_date.hide();
                    return true;
                }
            }
        } else {
            error_date.removeClass("error_css_input");
            date_de_naissance.addClass("noError");
            error_date.hide();
            return true;
        }
    }


    //GENRE
    let genre = $("#genre");
    let error_genre = $(".error_genre");
    error_genre.hide();
    genre.on('change', function () {
        validateGenre();
    });

    function validateGenre() {
        let genreValue = genre.val();
        if (!genreValue) {
            genre.removeClass("noError");
            genre.addClass("error_css_input");
            error_genre.addClass("error_css_span");
            error_genre.show();
            error_genre.html("Choisissez votre genre !");
            genreError = false;
            return false;
        } else {
            error_genre.removeClass("error_css_input");
            genre.addClass("noError");
            error_genre.hide();
            return true;
        }
    }

    // LOCALISATION
    let loca = $("#loca");
    let error_loca = $(".error_loca");
    error_loca.hide();

    loca.on('keyup', function () {
        validateLoca();
    })

    function validateLoca() {
        let locaValue = loca.val();
        if (locaValue == "") {
            loca.removeClass("noError");
            loca.addClass("error_css_input");
            error_loca.addClass("error_css_span");
            error_loca.show();
            error_loca.html("Entrez le lieu de rencontre souhaité !");
            locaError = false;
            return false;
        } else if (locaValue.length < 2 || locaValue.length > 30) {
            loca.removeClass("noError");
            loca.addClass("error_css_input");
            error_loca.addClass("error_css_span");
            error_loca.show();
            error_loca.html("La longueur du nom de la ville doit être comprise entre 2 et 30 lettres !");
            locaError = false;
            return false;
        } else if (!locaValue.match(/^[a-z ,.'-]+$/i)) {
            loca.removeClass("noError");
            loca.addClass("error_css_input");
            error_loca.addClass("error_css_span");
            error_loca.show();
            error_loca.html("Le nom de votre ville ne peut pas contenir certains charactères !");
            locaError = false;
            return false;
        } else {
            error_loca.removeClass("error_css_input");
            loca.addClass("noError");
            error_loca.hide();
            return true;
        }
    }

    //EMAIL
    let email = $("#email");
    let error_email = $(".error_email")
    error_email.hide();

    email.on('keyup', function () {
        validateEmail();
    })

    function validateEmail() {
        let emailValue = email.val();
        if (emailValue == "") {
            email.removeClass("noError");
            email.addClass("error_css_input");
            error_email.addClass("error_css_span");
            error_email.show();
            error_email.html("Entrez votre e-mail !");
            emailError = false;
            return false;
        } else if (!emailValue.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g)) {
            email.removeClass("noError");
            email.addClass("error_css_input");
            error_email.addClass("error_css_span");
            error_email.show();
            error_email.html("Votre e-mail ne correspond pas au format d'un e-mail valide !");
            emailError = false;
            return false;
        } else {
            error_email.removeClass("error_css_input");
            email.addClass("noError");
            error_email.hide();
            return true;
        }
    }

    //MDP
    let mdp = $("#mdp");
    let error_mdp = $(".error_mdp");
    error_mdp.hide();

    mdp.on('keyup', function () {
        validateMdp();
    })

    function validateMdp() {
        let mdpValue = mdp.val();
        if (mdpValue == "") {
            mdp.removeClass("noError");
            mdp.addClass("error_css_input");
            error_mdp.addClass("error_css_span");
            error_mdp.show();
            error_mdp.html("Entrez un mot de passe !");
            mdpError = false;
            return false;
        } else if (!mdpValue.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/g)) {
            mdp.removeClass("noError");
            mdp.addClass("error_css_input");
            error_mdp.addClass("error_css_span");
            error_mdp.show();
            error_mdp.html("Votre mot de passe doit contenir un minimum de huit caractères, au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial !");
            mdpError = false;
            return false;
        } else {
            error_mdp.removeClass("error_css_input");
            mdp.addClass("noError");
            error_mdp.hide();
            return true;
        }
    }

    //LOISIR
    let loisir = $("#loisir");
    let error_loisir = $(".error_loisir")

    error_loisir.hide();

    loisir.on('keyup', function () {
        validateLoisir();
    })

    function validateLoisir() {
        let loisirValue = loisir.val();
        if (!loisirValue) {
            loisir.removeClass("noError");
            loisir.addClass("error_css_input");
            error_loisir.addClass("error_css_span");
            error_loisir.show();
            error_loisir.html("Choisissez le loisir qui vous represente !");
            loisirError = false;
            return false;
        } else {
            error_loisir.removeClass("error_css_input");
            loisir.addClass("noError");
            error_loisir.hide();
            return true;
        }
    }

    $("#button_register").on('click', () => {
        if (validateLastname() && validateFirstname() && validateDate() &&
        validateGenre() &&  validateLoca() &&
        validateEmail() && validateMdp() &&
        validateLoisir()) {
        } else {
            $('.error_form').show();
            $('.error_form').addClass("error_css_span");
            $('.error_form').html("Erreur lors de l'envoie du formulaire !");
            return false;
        }
    })

    $("#button_signin").on('click', () => {
        if (validateEmail() && validateMdp()) {
        } else {
            $('.error_form').show();
            $('.error_form').addClass("error_css_span");
            $('.error_form').html("Erreur lors de l'envoie du formulaire !");
            return false;
        }
    })
})
