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
    
    $('#inscription_form').on('submit', function(){ // vérifications du formulaire 

        if( $('#formulaire_nom').val() != '' && 
            $('#formulaire_prenom').val() != '' && 
            $('#formulaire_email').val() != '' && 
            $('#formulaire_telephone').val() != '' &&
            $('#formulaire_password').val() != '' && 
            $('#formulaire_password2').val() != ''){ // si Tous les champs sont remplis

            if($('#formulaire_password').val() === $('#formulaire_password2').val()){ // si les 2 passwords sont identique

                if($('#formulaire_telephone').val().replaceAll(" ","").length == 10 && !isNaN($('#formulaire_telephone').val().replaceAll(" ",""))){ // phone a 10 chiffres et pas de lettres
                    
                    if (verifEmail($('#formulaire_email').val())){ // on vérifie que l'email n'est pas déja pris
                        return true;
                    }
                    else{
                        $('.alerte').addClass('text-danger text-center fw-bold mt-3').html('l\'email est déjà pris')
                        return false
                    } 
                }
                else{ // si le format telephone n'est pas bon
                    $('.alerte').addClass('text-danger text-center fw-bold mt-3').html('format accepté (0606060606 ou 06 06 06 06 06)')
                    return false;
                }
            }
            else{ // Si les 2 passwords sont differents
                $('.alerte').addClass('text-danger text-center fw-bold mt-3').html('Les mots de passe ne sont pas identique')
                return false
            }
        }
        else{ // si tous les champs ne sont pas remplis
            $('.alerte').addClass('text-danger').html('Tous les champs ne sont pas remplis')
            return false;
        }
    })
	

    /*********
    * Fonctions
    **********/
    function verifEmail(email){  // return false si le mail existe déja et true si le mail n'existe pas
        $.ajax({
            url : "./src/Ajax/listeEmail.json",
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

