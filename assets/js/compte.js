$(document).ready(function(){

	/*********
	* Initialise
	**********/


	/*********
	* OnLoad
	**********/
    $('.modifInfo').hide()
    $('.modifInfo__btn').hide()


	/*********
     * Events
     **********/
	$('.modifCompte').on('click', function(){
        $('.modifInfo').show()
        $('.modifInfo__btn').show()
        $('.modifCompte').hide()
        $('.supprCompte').hide()
    })

    $('#modification_form').on('submit', function(){ // vérifications du formulaire 
        const nom = $('#formulaire_nom').val();
        const prenom = $('#formulaire_prenom').val();
        const email = $('#formulaire_email').val();
        const telephone = $('#formulaire_telephone').val().replaceAll(" ","");
        const password = $('#formulaire_password').val();
        const password2 = $('#formulaire_password2').val();

        //deviens true si il y a une erreur
        let error = false;
        let message = "";

        //vérifications 

        if(nom == '' && prenom == '' && email == '' && telephone == '' && password == '' && password2 != '' )
        {
            error = true;
            message = "Veuillez remplir au moins un champs";
        }
        if(telephone.length != 10 || isNaN(telephone)){ // phone a 10 chiffres et pas de lettres
                error = true;
                message = "Veuillez entrer un numéro de téléphone valide. Format accepté (0606060606 ou 06 06 06 06 06)";
        }
        if (password !== password2) { // password identique
            error = true;
            message = "Les mots de passe ne sont pas identiques";
        }
        if (!verifEmail(email)){ // on vérifie que l'email n'est pas déja pris
            error = true;
            message = 'l\'email est déjà pris';
        }

        //vérification finale
        if(error == true){
            $('.alerte').addClass('text-danger text-center fw-bold mt-3').html(message)
            return false;
        }else {
            //envoi du formulaire
            return true;
        }
    })

    /*********
    * Fonctions
    **********/
     function verifEmail(email){  // return false si le mail existe déja et true si le mail n'existe pas
        $.ajax({
            url : "./src/ajax/listeEmail.json",
            method: "GET",
            dataType : "json",
            async : false, // necessaire pour faire sortir les infos de l'ajax
        })
        .done(function(response) {
            var uniqueEmail = true;
            $.each(response,function(i, value){
                if (email == value){
                    uniqueEmail = false
                }
            })
            result = ajaxOut(uniqueEmail) // necessaire pour faire sortir les infos de l'ajax
        })
        return result
    }

    function ajaxOut(result){
        if(result == true){
            return true;
        }
        else{
            return false;
        }
    }

});

