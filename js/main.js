
// Toggle for Nav
$(".toggle").click(function () {
	$(this).next().slideToggle("slow");
});


$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);


// Toggle for Contact Page 
/* 
$(".toggle-nav").click(function () {
	$(".toggle-info").slideToggle("slow");
});
*/

/* 
$(document).ready(function(){

	//dynamically load content from content.html 
	// intro .main section
	
	// $('.dynamic').load('content/blog-content.html');
	
	// add eventhandler to more link
	
	$('.more').click(function(e){
		e.preventDefault();
		$('.dynamic').load('content/blog-page1.html');
		$(this).remove();
	});
});

*/