<?php
//require 'db.php';

$m=new MongoClient();
echo "connected suucessfully..";
$db=$m->gkckdb;
echo "selected...";
$collection=$db->mscit;
echo "selected successfulyy..";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $age = 	$_POST['age'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$course = $_POST['course'];
	$gender = $_POST['gender'];
	$city = $_POST['city'];

    // Insert into MongoDB
    $insertResult = $collection->insert([
        'Name' => $name,
		'Age' => $age,
        'Email' => $email,
		'Phone' => $phone,
		'Course' => $course,
		'Gender' => $gender,
		'City' => $city,
        
    ]);

    if ($insertResult->getInsertedCount() > 0) {
        echo "Student registered successfully!";
    } else {
        echo "Error registering student!";
    }
}

echo '<br><a href="form.php">Go Back</a>';
?>
