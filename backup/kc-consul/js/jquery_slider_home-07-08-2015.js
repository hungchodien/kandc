(function(){

	var options = {
		duration: 300,
		easing: 'easeOutCubic',
		auto: true,
		interval: 3000
	};

	// doms
	var $window = $(window),
		$container = $('#top_index_slider'),
		$element = $container.find('ul'),
		$list = $element.find('li'),
		$next = $container.find('#next'),
		$prev = $container.find('#prev'),
		shift = 2,
		lw = $list.width(),
		len = $list.length,
		timer = '';

	var $header = $('#header'),
		$headerAfter = $header.next(),
		headerY = $header.height(),
		containerY = $container.height();

	function initialize(){
		setup();
		$window.on('resize', resize);
		$next.on('click', function(){ slide(true); });
		$prev.on('click', function(){ slide(false); });
		$window.on('scroll', scroll);
		load();
		if(options.auto) timer = setInterval(function(){ slide(true) }, options.interval);
		hover();
		
	};

	function setup(){

		for(var i = shift; i > 0; i--) $element.find('li').eq(len - i).remove().prependTo($element);

		// div.layer
		for(var i = 0; i < 2; i++) $('<div class="layer"></div>').insertAfter($element);

		$leftlayer = $container.find('.layer').eq(0);
		$rightlayer = $container.find('.layer').eq(1);

		// resize
		resize();

	};

	function resize(){
		var _val = ($window.width() - lw) / 2 - lw * shift;
		$element.css({
			'width': lw * len,
			'left': _val
		});
		$leftlayer.css('left', _val + lw);
		$rightlayer.css('left', _val + lw * 3);
	};

	function slide(direction){

		if($element.filter(':animated').length) return;

		if(options.auto) clearInterval(timer);

		val = (direction)? -lw: lw;

		$element.animate({
			'marginLeft': val
		}, options.duration, options.easing, callback);

	};

	// slide
	function callback(){

		
		(0 > val)? $element.find('li').eq(0).remove().appendTo($element): $element.find('li').eq(len - 1).remove().prependTo($element);

		$element.css('marginLeft', 0);

		// options.auto
		if(options.auto) timer = setInterval(function(){ slide(true) }, options.interval);

	};


	function scroll(){

		
		(containerY <= $window.scrollTop())?
			_fixed() :
			_static();

		function _fixed(){
			$header.css({
				'position': 'fixed',
				'top': 0,
				'left': 0
			});
			$headerAfter.css('marginTop', headerY);
		};

		function _static(){
			$header.css({
				'position': 'static',
				'top': '',
				'left': ''
			});
			$headerAfter.css('marginTop', '');
		};

	};

	function load(){
		var array = [$element, $next, $prev];
		for(var i = 0; i < array.length; i++) array[i].css('visibility', 'visible');
		$container.css('background', 'none');
	};
	function hover(){
		$( "#top_index_slider ul li" ).hover(
		  function() {
		    	clearInterval(timer);
				timer = null
		  },function() {
		    timer = setInterval(function(){ slide(true) }, options.interval);
		  });
	};

	$window.on('load', initialize);
	
}());