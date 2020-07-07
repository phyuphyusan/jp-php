<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$profile=$_FILES['profile'];
	$profilename=$profile['name'];

	//upload file
	$basepath = "photo/";
	//photo/one.jpg
	$fullpath = $basepath.$profilename;
	move_uploaded_file($profile['tmp_name'], $fullpath);
	
	$student=array(
		"name" => $name,
		"email" => $email,
		"gender" => $gender,
		"address" => $address,
		"profile" => $fullpath
	);
	// var_dump($student);

	//get jsonData from jsonfile
	$jsonData = file_get_contents('studentlist.json');
	if (!$jsonData) {
		$jsonData ='[]';
	}
	//convert into array from json
	$data_arr  = json_decode($jsonData);
	array_push($data_arr, $student);
	//convert array to json
	$jsonData=json_encode($data_arr, JSON_PRETTY_PRINT);
	file_put_contents('studentlist.json', $jsonData);
	header("location:index.php");

?>