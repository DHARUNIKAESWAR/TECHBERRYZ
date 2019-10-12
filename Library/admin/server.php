<?php
session_start();

// initializing variables
$bookname = "";
$qty    = "";
$price = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'blog_samples');

// REGISTER USER
if (isset($_POST['reg_book'])){
  // receive all input values from the form
  $bookname = mysqli_real_escape_string($db, $_POST['bookname']);
  $qty = mysqli_real_escape_string($db, $_POST['qty']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $code = mysqli_real_escape_string($db, $_POST['code']);
  

        echo "Upload: " . $_FILES["image"]["name"] . "<br />";
        echo "Type: " . $_FILES["image"]["type"] . "<br />";
        echo "Size: " . ($_FILES["image"]["size"] / 1024) . " Kb<br />";
        echo "Stored in: " . $_FILES["image"]["tmp_name"];
		move_uploaded_file($_FILES["image"]["tmp_name"],
      "upload/" . $_FILES["image"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["image"]["name"];
    
	$image = $_FILES["image"]["name"];
  echo 	$query = "INSERT INTO tblproduct (`name`, `code`, `image`, `price`,  `bookcount`) 
  			  VALUES('$bookname', '$code' , '$image', '$price', '$qty')";
  	mysqli_query($db, $query);
  	$_SESSION['bookname'] = $bookname;
  	$_SESSION['success'] = "Book Added";
	
header('location: index.html');
  
}