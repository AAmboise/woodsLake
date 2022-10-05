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

    /*********
    * Fonctions
    **********/


});

