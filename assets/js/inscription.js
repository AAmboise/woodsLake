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
    
    $('#inscription_form').on('submit', function(){
        if( $('#formulaire_nom').val() != '' && 
            $('#formulaire_prenom').val() != '' && 
            $('#formulaire_email').val() != '' && 
            $('#formulaire_telephone').val() != '' &&
            $('#formulaire_password').val() != '' && 
            $('#formulaire_password2').val() != ''){ // si Tous les champs sont remplis

            if ($('#formulaire_password').val() === $('#formulaire_password2').val()){ // si les 2 passwords sont identique
                    if($('#formulaire_telephone').val().replaceAll(" ","").length == 10 && !isNaN($('#formulaire_telephone').val().replaceAll(" ",""))){ // phone a 10 chiffres et pas de lettres
                        return true;  
                    }
                    else { 
                        $('.alerte').addClass('text-danger text-center fw-bold mt-3').html('format accepté (0606060606 ou 06 06 06 06 06)')
                        return false;
                    }
            }
            else{ // Si les 2 passwords sont differents
                $('.alerte').addClass('text-danger text-center fw-bold mt-3').html('Les mots de passe ne sont pas identique')
                console.log('password differents');
                return false
            }
        }
        else{ // si tous les champs ne sont pas remplis
            $('.alerte').addClass('text-danger').html('Tous les champs ne sont pas remplis')
            console.log('champs vide');
            return false;
        }
    })
	

    /*********
    * Fonctions
    **********/


});

