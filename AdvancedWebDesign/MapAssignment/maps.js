(function(){
	window.onload = function(){
		var latlng = new google.maps.LatLng(44.519159,-88.019826); //creates the center point
		//options 
		var options ={
			center: latlng,
			zoom: 12,
			mapTypeId:google.maps.MapTypeId.ROADMAP,
			scaleControl: true,
			mapTypeControlOptions:{
				style:google.maps.MapTypeControlStyle.DROPDOWN_MENU,
				position:google.maps.ControlPosition.RIGHT
			}
		};
		//calling in the map
		map = new google.maps.Map(document.getElementById('map'),options);
		var marker = new google.maps.Marker({
			position:latlng, 
			map:map,
 /* changed marker icon to a Packers G! */           
            icon: ("http://www.nflppk.com/img/nfl_team_logos/green-bay-packers.png"),
			title: 'Green Bay, WI'
            
		});
	}
})();