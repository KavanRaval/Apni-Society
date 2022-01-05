<?php
include "home.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    // Collecting all the info from form

    $city = $_POST['city'];
    $societyname = $_POST['society'];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $login_as = $_POST["gridRadios"];

    //Selecting the city
    if($city=="Select Your City"){ 
        die("Please select a valid name of city");
    }
    switch($city){
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

    //Comparing for Chairman(0) or Member(1)
    if($login_as == 0){
        $sql = "SELECT chairman.ChairmanId, chairman.Email, society.SocietyID, society.City, chairman.Password FROM chairman INNER JOIN society ON chairman.ChairmanID=society.ChairmanId WHERE chairman.Email='$email'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if((strcmp("$city",$row['City']) == 0) && ($row['SocietyID'] == $societyname)){
            if(strcmp("$password",$row['Password']) == 0){
                echo "<script type='text/JavaScript'> window.location.replace('chairmanhomepage.php'); </script>";
            }
            else{
                die("Failed! Please enter correct details");
            }
        }
        else{
            die("Failed! Please enter correct details");
        }
    }
    if($login_as == 1){
        $sql = "SELECT societymember.Email, society.City, society.SocietyID, societymember.Password FROM societymember JOIN house ON societymember.SocietyMemberID=house.SocietyMemberID JOIN society ON house.SocietyID=society.SocietyID WHERE societymember.Email='$email'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if((strcmp("$city",$row['City']) == 0) && ($row['SocietyID'] == $societyname)){
            if(strcmp("$password",$row['Password']) == 0){
                echo "Login as Member Successfull!";
            }
            else{
                die("Failed! Please enter correct details");
            }
        }
        else{
            die("Failed! Please enter correct details");
        }
    }
}
?>