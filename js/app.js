$(document).foundation()


function resizeFigure(selector , rathio ){

	$(selector).each(function () {
		var figure_effective_width= parseInt($(this).width());
		//console.log(figure_effective_width);
		$(this).css('height' , (figure_effective_width*rathio).toString().concat("px")); 
	});

}

function eventFire(el, etype){
  if (el.fireEvent) {
    el.fireEvent('on' + etype);
  } else {
    var evObj = document.createEvent('Events');
    evObj.initEvent(etype, true, false);
    el.dispatchEvent(evObj);
  }
}


function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}


//keeping the images in the home with a defined aspect ratio

$(document).ready(function(){
	resizeFigure("div.image.hor",0.80);

});
$(window).resize(function() {
	resizeFigure("div.image.hor",0.80);

});



$("span.selector").click(function() {
	$(this).children(".targhet").toggleClass("hidden");
});

$("button.book").click(function() {
	$(this).parent().parent().parent().detach();
});

$(".selector_alt").click(function() {
	$(this).parent().children(".targhet_alt").toggle();
});


// user profile editor buttons

$("button.editor.btn").click(function() {
	$("#save_user").show();


	if ($(this).parent().children("span.targhet").length  >0) {

		var text = $(this).parent().children("span.targhet").text();
		$(this).parent().children("span.targhet").detach();
		$(this).parent().append( "<textarea>"+text+"</textarea>" );
		}
	else{
		var text_b = $(this).parent().children("textarea").val();

		$(this).parent().children("textarea").detach();
		$(this).parent().append( "<span class='targhet'>"+text_b+"</span>" );
	}
});


$("button.editor.btn_alt").click(function() {
	$("#save_user").show();


if ($("div.targhet_alt span.targhet").length  >0) {
		$("div.targhet_alt span.targhet").each(function( index ) {

		var text = $(this).text();
		var container = $(this).parent();
		$(this).detach();
		container.append( "<textarea>"+text+"</textarea>" );

	});

	}
	else{
		$("div.targhet_alt textarea").each(function( index ) {

		var text_b = $(this).text();
		var  container = $(this).parent();
		$(this).detach();
		container.append( "<span class='targhet'>"+text_b+"</span>" );

	});

	}
});






//home filter
$("button.home.selector").click(function() {
	var target= $(this).data("target");

	if (target=="all" ||  $(this).hasClass("selected")){
		$("div.container").show();
		$("button.selector").removeClass("selected");
		$("button.selector.all").addClass("selected");
	}

	else{
		$("div.container").hide();
		$("div.container."+target).show();
		$("button.selector").removeClass("selected");
		$(this).addClass("selected");
	}

});


//account filter
$("button.account.selector").click(function() {
	var target= $(this).data("target");

	
		$("div.container").hide();
		$("div.container."+target).show();
		$("button.selector").removeClass("selected");
		$(this).addClass("selected");
	

});










