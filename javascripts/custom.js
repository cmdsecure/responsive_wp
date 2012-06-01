// Custom Javascript

//Display Tweets
$(document).ready(function() {
	$(".tweet").tweet({
		username: "rgucomputing",
		count: 3,
		loading_text: "loading tweets..."
	});
});


//Display Flickr Feed
$(document).ready(function() {
	$("div.flickr").flickrush({
		id:'9567568@N02',
		limit:6,
		random:true
	});
});


//Shrink Navigation Menu for Mobile Devices
$(document).ready(function() {
	
	//Creates Dropdown Menu
	$("<select />").appendTo(".navigation nav div");
	
	//Creates Dropdown Menu
	$("<option />", {
		"selected": "selected",
		"value"   : "",
		"text"    : "Go to"
	}).appendTo("nav select");
	
	// Populate dropdown with menu items
	$(".navigation nav li a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
		}).appendTo("nav select");
	});
	
	//Makes the menu work
	$("nav select").change(function() {
	window.location = $(this).find("option:selected").val();
	});

	
	
});
