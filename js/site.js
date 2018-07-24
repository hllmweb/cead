$('a[href="#"]').click(function(e) {
	e.preventDefault();
});

$("#banner ul").bxSlider({
	auto: false,
	pager: false,
	nextText: '<i class="fa fa-chevron-right"></i>',
	prevText: '<i class="fa fa-chevron-left"></i>'

});


//menu click
$('.navegacao a').on('click', function(e){
	e.preventDefault()
	$('html, body').animate({
		scrollTop: $( $.attr(this, 'href') ).offset().top-100
		}, 500);
});

//menu drop
$(".navegacao li").mouseover(function(){
    $(this).find(".menu-seta i").addClass("fa-flip-vertical");
}).mouseout(function() {
    $(this).find(".menu-seta i").removeClass("fa-flip-vertical");
});



//inicilizacao do mapa
function initMap(){
	var myLatlng = new google.maps.LatLng(-3.1032544, -60.0583652);
		var mapOptions = {
    	zoom: 20,
        center: myLatlng,
        panControl: false, 
   		draggable: false,
        zoomControl: false,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
       // mapTypeControlOptions: {
       //  		mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
   	   // }
	}



    var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: 'img/marker.png',
        title: 'Nós estamos localizados aqui',
        animation: google.maps.Animation.DROP
    });


  	var contentString = '<h2>ESCOLA CEAD</h2><p>Rua Santa Rita, Compensa II</p><a href="https://goo.gl/maps/JaBFGyNPw7D2" target="_black">CLIQUE AQUI E VISUALIZE O MAPA</a>';
  	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	
	//marker.addListener('click', function() {
	    infowindow.open(map, marker);
	//});			

	marker.addListener('click', function() {
	    infowindow.open(map, marker);
	});

    

}


function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBDSuXH0sCB7bgQYBa9hAo4rWbySPoelNQ&libraries=places&callback=initMap";
    document.body.appendChild(script);
}
window.onload = loadScript;		