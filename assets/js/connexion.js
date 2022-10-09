$(document).ready(function(){

	/*********
	* Initialise
	**********/


	/*********
	* OnLoad
	**********/


	/*********
     * Events
     **********/
	
    $('#connexion_form').on('submit', function(){ // vérifications du formulaire 
        
        const email = $('#formulaire_email').val();
        const password = $('#formulaire_password').val();

        //deviens true si il y a une erreur
        let error = false;
        let message = "";

        //vérifications 

        if(email == '' || password == '')
        {
            error = true;
            message = "Tous les champs ne sont pas remplis";

        }
        else{
            if (verifEmail(email)){ // on vérifie que l'email existe
                error = true;
                message = 'Email ou mot de passe incorrect';
            }
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

