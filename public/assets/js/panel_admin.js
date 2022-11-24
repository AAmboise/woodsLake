/*********
* OnLoad
**********/

$('.panel__card--concerts').hide()
$('.panel__card--extraits').hide()
$('.panel__card--photos').hide()
$('.panel__card--galeries').hide()

$(document).ready(function(){

	/*********
	* Initialise
	**********/





	/*********
     * Events
     **********/
	$('.panel__nav--users').on('click', function(){
        $('.panel__nav--users').addClass('bg-light')
        $('.panel__card--users').show()
        $('.panel__nav--concerts, .panel__nav--extraits, .panel__nav--photos').removeClass('bg-light')
        $('.panel__card--concerts, .panel__card--extraits, .panel__card--photos, .panel__card--galeries').hide()
  
    })
    $('.panel__nav--concerts').on('click', function(){
        $('.panel__nav--concerts').addClass('bg-light')
        $('.panel__card--concerts').show()
        $('.panel__nav--users, .panel__nav--extraits, .panel__nav--photos').removeClass('bg-light')
        $('.panel__card--users, .panel__card--extraits, .panel__card--photos, .panel__card--galeries').hide()

    })
    $('.panel__nav--extraits').on('click', function(){
        $('.panel__nav--extraits').addClass('bg-light')
        $('.panel__card--extraits').show()
        $('.panel__nav--users, .panel__nav--concerts, .panel__nav--photos').removeClass('bg-light')
        $('.panel__card--users, .panel__card--concerts, .panel__card--photos, .panel__card--galeries').hide()
    })
    $('.panel__nav--photos').on('click', function(){
        $('.panel__nav--photos').addClass('bg-light')
        $('.panel__card--photos, .panel__card--galeries').show()
        $('.panel__nav--users, .panel__nav--concerts, .panel__nav--extraits').removeClass('bg-light')
        $('.panel__card--users, .panel__card--concerts, .panel__card--extraits').hide()
    })

    

    /*********
    * Fonctions
    **********/
     

});

