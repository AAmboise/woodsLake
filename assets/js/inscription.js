$(document).ready(function(){

	/*********
	* Initialise
	**********/


	/*********
	* OnLoad
	**********/
    $('#inscription_form').on('submit', function(){
        if( $('#formulaire_nom').val() != '' && 
            $('#formulaire_prenom').val() != '' && 
            $('#formulaire_email').val() != '' && 
            $('#formulaire_telephone').val() != '' &&
            $('#formulaire_password').val() != '' && 
            $('#formulaire_password2').val() != ''){ // si Tous les champs sont remplis

            if ($('#formulaire_password').val() === $('#formulaire_password2').val()){ // si les 2 passwords sont identique
                console.log(1);
                return true
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
	* Events
	**********/

	

    /*********
    * Fonctions
    **********/


});

