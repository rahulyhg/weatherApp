<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Date and time conversion</title>
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" href="datepicker/datepicker.min.css">
		<link rel="stylesheet" href="timepicker/jquery.timepicker.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="datepicker/datepicker.min.js"></script>
		<script src="timepicker/jquery.timepicker.min.js"></script>
		<script src="../scripts/moment.js"></script>
		<script src="../scripts/moment-timezone.min.js"></script>
		<script src="../scripts/moment-timezone-with-data.min.js"></script>
		<script src="../scripts/jstz.main.js"></script>
		<script src="../scripts/date_and_time.js"></script>
	</head>
	<body>
		<form>
			<p>Your country:</p>
			<div class="container">
				<input id="localPlaceSearch" type="text" name="" placeholder='Your location&hellip;'>
			</div>
			<input type='button' id='updateLocalLocation' value='update'>
			
			<p>Local date: <input id='localDateInput' type='text' class='datepicker localInput' data-toggle='datepicker' placeholder='yyyy-mm-dd'></input></p>
			<p>Local time: <input id='localTimeInput' type='text' class='timepicker localInput' placeholder='hh:mm'></input></p>
			<input type='button' id='localRecalculate' value='Recalculate Local'>
			<br><br>
			
			<p>Remote country:</p>
			<div class="container">
				<input id="remotePlaceSearch" type="text" name="" placeholder='Remote location&hellip;'>
			</div>
			
			<p>Remote date: <input id='remoteDateInput' type='text' class='datepicker remoteInput' data-toggle='datepicker' placeholder='yyyy-mm-dd' value=<?php echo $_GET['remoteDate'] ?> ></input></p>
			<p>Remote time: <input id='remoteTimeInput' type='text' class='timepicker remoteInput' placeholder='hh:mm' value=<?php echo $_GET['remoteTime'] ?> ></input></p>
			<input type='button' id='remoteRecalculate' value='Recalculate Remote'>
			<br>
			
		</form>
		
		<hr>
		
		<p>Debug stuff:</p>
		<p>Local timezone: <span id='localTimezoneDebug'></span></p>
		<p>Local offset: <span id='localOffsetDebug'></span></p>
		<p>Remote timezone: <span id='remoteTimezoneDebug'></span></p>
		<p>Remote offset: <span id='remoteOffsetDebug' class='remoteInput'></span></p>
		<p>Local place_id: <span id='localPlaceDebug'></span></p>
		<br>
		
		<script>
	    function activatePleacesSearch(){
	    	var input = document.getElementById("localPlaceSearch");
	    	var autocomplete = new google.maps.places.Autocomplete(input);
	    	var input = document.getElementById("remotePlaceSearch");
	    	var autocomplete = new google.maps.places.Autocomplete(input);
 	    }
		</script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwkHUAgNRZt2ct0FBw4V8EM_t-W25Z4bU&libraries=places&callback=activatePleacesSearch"></script>

	</body>
</html>