jQuery(document).ready(function( $ ) {

	$('.layout .layout').attr('data-toggle', 'closed');


	$('.layout .layout:not(.acf-clone)').each( function() {
		var $section_title_el = $(this).find('[data-name="section_title"]');

		if( $section_title_el.length > 0 ) {
			var curr_text = $(this).find('.acf-fc-layout-handle').text();
			$(this).find('.acf-fc-layout-handle').html( '<span>' + curr_text + '– <strong>' + $section_title_el.find('.acf-input input').val() + '</strong></span>' );
		}
	});
	

	$( ".layout .layout .acf-fc-layout-handle" ).live( "click", function() {
		$(this).parent().before( "<div class='acf-layout-modal-clickmask'></div>" );
		$(this).parent().addClass('openModal');
	});

	$( ".acf-layout-modal-clickmask" ).live( "click", function() {
		$(".openModal .acf-fc-layout-handle").click();

		//There should only be one background in existance
		$(".acf-layout-modal-clickmask").remove();
		$( ".openModal" ).removeClass('openModal');

	});		

});