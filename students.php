<?php
	session_start();
	date_default_timezone_set('Europe/Copenhagen');
	include 'database.php';

	if(isset($_POST["room"]) && $_POST["room"]) {

		$room = $_POST["room"];
		$arrayResult = array();

		$query = $conn->prepare("SELECT * FROM students WHERE room_name= :room_name");
		$query->bindParam(":room_name", $room);
		$query->execute();

		while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
			//$response->append($result);

			
			$name = $result['name'];
			$email = $result['email'];
			
			array_push($arrayResult, [$name, $email]);
		}

        if ($arrayResult) {
			$response = $arrayResult;
        } else {
            $response = "Invalid";
        }
		
	}
	echo json_encode($response);
?>