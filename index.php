<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>Welcome</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div>
		<div>
		<button id="back">Back</button>
			<div class="text-center" id="room-form"> 
				<div class="form-group">
					<label>Room</label>
					<input type="text" name="room" class="form-control" id="room" />
				</div>
				<input type="button" class="btn btn-default" name="submit" id="submit" value="Get students"/>
			</div>
			<div name="students" id="students"></div> <br>
		</div>
	</div>
	<script src="assets/js/main.js"></script>
</body>
</html>
