<?php 


	if(isset($_POST['name']) && $_POST['action'] == 'set'){
		echo json_encode($_POST); 
		die;
	}

	$student = array( 
					  array("name" => "Ankit", "l_name" => "Kumar", "email" => "ankit.kumar@my.com", "roll_no" => 1234, "percentage" => "96%", "city" => "Jalandhar"),
					  array("name" => "Rohit", "l_name" => "Sharma", "email" => "Rohit.sharma@my.com", "roll_no" => 1235, "percentage" => "88%", "city" => "Jammu"),
					  array("name" => "Aarti", "l_name" => "Kumari", "email" => "Aarti.kumari@my.com", "roll_no" => 1236, "percentage" => "72%", "city" => "Mohali"),
					  array("name" => "Manish", "l_name" => "Gupta", "email" => "Manish.Gupta@my.com", "roll_no" => 1237, "percentage" => "49%", "city" => "Jalandhar"),
					  array("name" => "Gurpreet", "l_name" => "Singh", "email" => "Gurpreet.Singh@my.com", "roll_no" => 1238, "percentage" => "91%", "city" => "Jalandhar"),
					  array("name" => "Amir", "l_name" => "Khan", "email" => "Amir.Khan@my.com", "roll_no" => 1239, "percentage" => "69%", "city" => "Jammu"),
					  array("name" => "Richa", "l_name" => "Singh", "email" => "Richa.Singh@my.com", "roll_no" => 1240, "percentage" => "68%", "city" => "Mohali"),
					  array("name" => "Preeti", "l_name" => "Saini", "email" => "Preeti.Saini@my.com", "roll_no" => 1241, "percentage" => "81%", "city" => "Mohali"),
					  array("name" => "Soham", "l_name" => "Sharma", "email" => "Soham.sharma@my.com", "roll_no" => 1242, "percentage" => "54%", "city" => "Jalandhar"),
					  array("name" => "Misbah", "l_name" => "Jan", "email" => "Misbah.Jan@my.com", "roll_no" => 1243, "percentage" => "69%", "city" => "Jammu")
	);

	if(isset($_POST['roll']) && $_POST['action'] == 'set'){
		$key = array_search($_POST['roll'], array_column($student, 'roll_no'));
		echo json_encode($student[$key]);
		die;
	}

	$abc = array('hello', 'hi', 'hmmmm');
	echo json_encode($abc);
?>
