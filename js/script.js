(function($){

	$(document).ready(function(){
		$('.carousel').slick({
			dots: true,
			arrows: true,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 992,
					settings: {
					slidesToShow: 2,
					}
				},
				{
					breakpoint: 620,
					settings: {
					slidesToShow: 1,
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		})
	});

})(jQuery)