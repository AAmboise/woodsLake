  $(document).ready(function(){

	/*********
	* Initialise
	**********/
  $( ".carousel-item:first" ).addClass( "active" ); // initialise le carousel

	/*********
	* OnLoad
	**********/

      $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        focusOnSelect: true
      });
     
      $('a[data-slide]').click(function(e) {
        e.preventDefault();
        var slideno = $(this).data('slide');
        $('.slider-nav').slick('slickGoTo', slideno - 1);
      });



	/*********
	* Events
	**********/

	

    /*********
    * Fonctions
    **********/


});

