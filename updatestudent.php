<?php
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$address=$_POST['address'];

$id=$_POST['edit_id'];
$oldprofile =$_POST['edit_oldprofile'];
$newprofile=$_FILES['photo'];
$newprofilename=$newprofile['name'];

echo "Id => ".$id."<br>".
"Name => ".$name."<br>".
"Email => ".$email."<br>".
"Gender => ".$gender."<br>".
"Address => ".$address."<br>".
"Old Profile Link => ".$oldprofile."<br>".
"New Profile  => ".$newprofilename."<br>";


if($newprofile['size']>0){
		 	//upload file
	$basepath= "photo/";
		 	//photo/one.jpg
	$fullpath = $basepath.$newprofilename;
	move_uploaded_file($newprofile['tmp_name'], $fullpath);
}else{
	$fullpath=$oldprofile;
}

	$student=array(
		"name" => $name,
		"email" => $email,
		"gender" => $gender,
		"address" => $address,
		"profile" => $fullpath
	);

	//get jsonData from jsonfile
	$jsonData = file_get_contents('studentlist.json');
	if (!$jsonData) {
		$jsonData ='[]';
	}
	//convert into array from json
	$data_arr  = json_decode($jsonData);
	$data_arr[$id]=$student;
	//convert array to json
	//var_dump($data_arr);die();
	$jsonData=json_encode($data_arr, JSON_PRETTY_PRINT);
	file_put_contents('studentlist.json', $jsonData);
	header("location:index.php");


	?>