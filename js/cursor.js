$('body').mousemove(function(e){
	
  	var cursor = $('.cursor'),
			      ancho = cursor.width(),
      			alto = cursor.height(),
			
			      W = ancho/2,
      			H = alto/2,
				
			      Y = (e.pageY - W),
    			  X = (e.pageX - H);
	
	  cursor.css(
				    'transform', 'translateY(' + Y + 'px) translateX(' + X + 'px)'
  	);
	
});