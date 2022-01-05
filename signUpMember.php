<?php
include "home.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    // Collecting all the info from form
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $society = $_POST["society"];
    $moblieno = $_POST["mobileno"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["confirm_password"];
    $block = $_POST['block'];
    $house = $_POST['house'];
    $date = $_POST["dob"];
    
    if($society=="Select Your Society"){ 
        die("Please select a valid name of Society");
    }
    if(!is_numeric($moblieno) or strlen($moblieno)!=10){
        die("Please enter correct mobile number");
    }

    if($password != $cpassword){
        die("Password is incorrect");
    }
    $p = $password;
 }

$sql = "SELECT * FROM `societymember`";
$result = mysqli_query($conn,$sql);
$soc_id = mysqli_num_rows($result);
$soc_id = $soc_id +1;

$sql = "INSERT INTO `societymember` (`SocietyMemberID`, `FirstName`, `LastName`, `DateOfBirth`, `Email`, `PhoneNo`, `Password`) VALUES (NULL, '$fname', '$lname', '$date', '$email', $moblieno, '$p')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Success";
}
else{
    echo mysqli_error($conn);
}

$quer = "SELECT SocietyMemberID FROM societymember where Email='$email'";
$res = mysqli_query($conn,$quer);
$roww = mysqli_fetch_assoc($res);
if($result){
    echo "Success";
}
else{
    echo mysqli_error($conn);
}
$id = $roww["SocietyMemberID"];

$sql = "SELECT * FROM `house`";
$result = mysqli_query($conn,$sql);
$house_id = mysqli_num_rows($result);
$house_id = $house_id +1;

$sql = "INSERT INTO `house` (`HouseId`, `BlockNo`, `HouseNo`, `SocietyID`, `SocietyMemberID`) VALUES (NULL, '$block', $house, $society, '$id')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Success";
}
else{
    echo mysqli_error($conn);
}

?>