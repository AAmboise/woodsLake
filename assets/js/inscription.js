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
                    
                    verifEmail($('#formulaire_email').val());
                    
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
    function verifEmail(email){  // return 2 si le mail existe déja et 1 si le mail n'existe pas

        $.ajax({
            url: './src/ajax/listeEmail.json',
            method: "post",
            dataType : "json",
            success : function(response){
                        var uniqueEmail = 1;
                        $.each(response, function(i, value){
                            if(email == value){
                                uniqueEmail = 2;
                            };
                        });
                        if(uniqueEmail == 1){ // si le mail n'est pas déjà pris
                            alert('vide')
                            console.log('vide :'+uniqueEmail);
                            // return true;  
                        }
                        else{ // si l'email est déjà pris
                            $('.alerte').addClass('text-danger text-center fw-bold mt-3').html('l\'email est déjà pris')
                            alert('déja pris')
                            console.log('pris :'+ uniqueEmail);
                            // return false;
                        }
                        // return boolrrrr(uniqueEmail);

                    }
                    
                });
    
                // return uniqueEmail
        
    }
    function boolrrrr(result){
        if (result == 1){
            return true
        }
        else{
            return false
        }
    }

});

