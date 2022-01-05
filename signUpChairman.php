<?php
include "home.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    // Collecting all the info from form
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $societyname = $_POST['societyname'];
    $moblieno = $_POST["mobileno"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["c_password"];
    $city = $_POST['selectcity'];
    $area = $_POST['selectarea'];
    $pincode = $_POST['pincode'];
    $block = $_POST['totalblocks'];
    $flat = $_POST['totalflats'];
    $salary = $_POST['salary'];
    $date = $_POST["dob"];

    if($city=="Select Your City"){ 
        die("Please select a valid name of city");
    }
    if($area=="Select Your Area"){ 
        die("Please select a valid name of Area");
    }
    if(!is_numeric($moblieno) or strlen($moblieno)!=10){
        die("Please enter correct mobile number");
    }
    if($password != $cpassword){
        die("Password is incorrect");
    }
    $p = $password;
    $c = $city;
    $a = $area;
 }

$sql = "INSERT INTO `chairman`(`ChairmanID`, `FirstName`, `LastName`, `DateOfBirth`, `Email`, `PhoneNo`, `Salary`, `Password`) VALUES (NULL , '$fname' , '$lname' , '$date' , '$email' , $moblieno , $salary , '$p' )";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Success";
}
else{
    echo mysqli_error($conn);
}
switch($c){
    case 1:
        $city = 'Ahmedabad';
        break;
    case 2:
        $city = 'Rajkot';
        break;
    case 3:
        $city = 'Gandhinagar';
        break;
    case 4:
        $city = 'Surat';
        break;
}

switch($a){
    case 1:
        $area = 'Akhbarnagar';
        break;
    case 2:
        $area = 'Ranip';
        break;
    case 3:
        $area = 'Maninagar';
        break;
    case 4:
        $area = 'Vejalpur';
        break;
    case 5:
        $area = 'Sarkhej';
        break;
    case 6:
        $area = 'Science City';
        break;
    case 7:
        $area = 'Gota';
        break;
    case 8:
        $area = 'Memnagar';
        break;
}

$quer = "SELECT ChairmanID FROM chairman where Email='$email'";
$res = mysqli_query($conn,$quer);
$roww = mysqli_fetch_assoc($res);
if($result){
    echo "Success";
}
else{
    echo mysqli_error($conn);
}
$id = $roww["ChairmanID"];

$sql = "INSERT INTO `society`(`SocietyID`, `Name`, `Area`, `City`, `PinCode`, `TotalBlocks`, `TotalFlats`, `ChairmanId`) VALUES ( NULL , '$societyname' , '$area' , '$city' , $pincode , $block , $flat  , '$id')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Success";
}
else{
    echo mysqli_error($conn);
}

?>