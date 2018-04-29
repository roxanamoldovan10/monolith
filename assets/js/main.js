$('#submit').click(function(){
	getStudents();
});

$('#back').click(function(){
	goBack();
});

function getStudents() {
	$.ajax({
	    type: "POST",
	    url: 'students.php',
	    dataType: 'json',
	    data: { 
	    	room: $('#room').val()
	    }
	}).done(function (response) {
	   	if (response !== "Invalid") {
			console.log(response);
			response.forEach(element => {
				$('#students').append('<p>' + ' Name : ' + element[0] + ' -  Email: ' + element[1] + '</p>');
			});
		}
		else if(response === "Invalid") {
			alert("No users in this room");
		}
	}).fail(function(data) {
		console.log("Failed somewhere");
	});
}

function goBack() {
	location.replace("http://localhost:4200/app-dashboard");
}
