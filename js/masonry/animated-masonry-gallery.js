jQuery(document).ready(function($) {

	$(window).load(function () {

	var size = 1;
	var button = 1;
	var button_class = "gallery-header-center-right-links-current";
	var normal_size_class = "gallery-content-center-normal";
	var full_size_class = "gallery-content-center-full";
	var $container = $('#gallery-content-center');
	    
	$container.isotope({itemSelector : 'figure'});


	function check_button(){
		$('.gallery-header-center-right-links').removeClass(button_class);
		if(button==1){
			$("#filter-all").addClass(button_class);
			}
		if(button==2){
			$("#filter-concursos").addClass(button_class);
			}
		if(button==3){
			$("#filter-eventos").addClass(button_class);
			}	
		if(button==4){
			$("#filter-noticias").addClass(button_class);
			}	
	}
		
	function check_size(){
		$("#gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
		if(size==0){
			$("#gallery-content-center").addClass(normal_size_class); 
			$("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
			}
		if(size==1){
			$("#gallery-content-center").addClass(full_size_class); 
			$("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
			}
		$container.isotope({itemSelector : 'img'});

	}
		
	$("#filter-all").click(function() { $container.isotope({ filter: '.all' }); button = 1; check_button(); });
	$("#filter-concursos").click(function() { $container.isotope({ filter: '.concursos' }); button = 2; check_button(); });
	$("#filter-eventos").click(function() {  $container.isotope({ filter: '.eventos' }); button = 3; check_button();  });
	$("#filter-noticias").click(function() {  $container.isotope({ filter: '.noticias' }); button = 4; check_button();  });
	$("#gallery-header-center-left-icon").click(function() { if(size==0){size=1;}else if(size==1){size=0;} check_size(); });


	check_button();
	check_size();
	});
	
});

