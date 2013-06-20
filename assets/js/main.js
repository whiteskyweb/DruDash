

$(document).ready(function() {
	$('#main-content').load('sites');
	$.ajaxSetup({ cache: false });
	setInterval(function() {
		$('#main-content').load('sites');
	}, 60000);  
});

