$(function(){

	// radio
	$('a[href="#checkbox"]').click(function(e){
		var a = $(this);
		if(a.hasClass('on-checkbox')) {
            a.removeClass('on-checkbox')
            a.addClass('checkbox')
        } else {
            a.removeClass('checkbox')
            a.addClass('on-checkbox')
        }
	});

	$('.brands li a').click(function(e){
		var a = $(this).parent();
		if(a.hasClass('active')) {
            a.removeClass('active')
        } else {
            a.addClass('active')
        }
	});

	$('.input-box .radio').click(function(e){
		$(this).parent().children().removeClass('active')
		$(this).addClass('active')
	});
	$('.input-box .checkbox').click(function(e){
		var a = $(this);
		if(a.hasClass('active')) {
            a.removeClass('active')
        } else {
            a.addClass('active')
        }
	});
	$('.select').toggle(function(e){
		$(this).find('ul').slideDown(10)
	},function(){
		$(this).find('ul').slideUp(10)
	});

	//choose-size 
	$('.choose-size .button').toggle(function(e){
		$('.value-size').slideDown()
	},function(){
		$('.value-size').slideUp()
	});

	//sub-menu
	$('#nav li a').hover(function(e){
		$(this).next().show() 
	},function(){
		$(this).next().css({'display':'none'})
	});
	$('.shown-sub').hover(function(e){
		$(this).css({'display':'block'})
	},function(){
		$(this).css({'display':'none'})
	})

	//end zoom img
	$('a[href$="#"]').click(function(e){
		e.preventDefault();
	});
},(jQuery));
