<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$city  = $_POST['city'];
$course = ucwords($_POST['course']);
$institution = ucwords($_POST['institution']);
$timeframe = ucwords($_POST['timeframe']);
$certificate = addslashes(file_get_contents($_FILES['certificate']['tmp_name']));

if ($_FILES["certificate"]["size"] > 1000000) {
header("location:../qualifications.php?r=2290");
}else{
	
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("INSERT INTO tbl_profess_qualification (member_no, city, institution, title, timeframe, certificate) VALUES (:memberno, :city, :institution, :title, :timeframe, '$certificate')");
    $stmt->bindParam(':memberno', $myid);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':institution', $institution);
	$stmt->bindParam(':title', $course);
	$stmt->bindParam(':timeframe', $timeframe);
    $stmt->execute();
	header("location:../qualifications.php?r=2305");
					  
	}catch(PDOException $e)
    {
  
    }
	
	

}


?>