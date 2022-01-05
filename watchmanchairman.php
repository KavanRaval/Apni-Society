<?php
//Database Varaibles
$servernaem = "localhost";
$username = "root";
$password = "";
$database = "apni_society";


//Connecting Database
$conn = mysqli_connect($servernaem,$username,$password,$database);
if(!$conn){
    echo "Connection failed";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
   <style>
   .navbar-brand {
            font-family: 'Train One', cursive;
        }
        .navbar-text{
            margin-right:1vw;
        }
        #account,
        .logout {
            font-size: 1.5vw;
            font-weight: bold;
            color: white;
            margin:0vw 1vw;
        }
        #logoutid {
            color: rgb(190, 6, 6);
        }
        #account{text-decoration:none;}
        .edit,.delete{
            border:1px solid black;
        }
        .edit:hover{
            background:#0f0fa1;
            color:white;
        }.delete:hover{
            background:#850303;
            color:white;
        }
   </style>
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>
    <title>Watchman info</title>
  </head>

  <body>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModallabel">
  Edit modal
</button> -->

    <!--Edit Modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Watchman</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="watchmamchairman.php" method="POST">
                <input type="hidden" name="watchmanidedit" id="watchmanidedit">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstnameedit" name="firstnameedit">
                    
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastnameedit" id="lastnameedit">
                    
                </div>
                <div class="mb-3">
                    <label for="dateOfBirth" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" name="dateedit" id="dateedit">
                    
                </div>
                <div class="mb-3">
                    <label for="emailid" class="form-label">Email</label>
                    <input type="email" class="form-control" name="emailidedit" id="emailidedit">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="phoneno" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phonenoedit" id="phonenoedit">
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="number" class="form-control" name="salaryedit" id="salaryedit">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Update</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

        <!-- Delete Modal  -->
    <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deletemodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Are you Sure you want to delete ?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-1">
            <form action="watchmanchairman.php" method="POST">
                <input type="hidden" name="watchmaniddelete" id="watchmaniddelete">
                <button type="submit" class="btn btn-danger mx-3">Delete</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </form>
        </div>
        </div>
    </div>
    </div>

        <!-- navigation bar  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">APNI SOCIETY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="chairmanhomepage.php">Home Page</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="watchmanchairman.php">Watchman Info</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Society Info</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Check Maintenance</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="vendorchairman.php">Vendors Info</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Events Info</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="meetings.php">Meeting Info</a>
            </li>
         </div>
         <div class="container-fluid" style="width:25vw">
            
            <span class="navbar-text d-flex flex-row-reverse flex-wrap ">
                <div class="d-inline-flex logout"><a href="home.php" id="logoutid">Log Out</a></div>
                <div class="d-inline-flex"><a id="account" href="account.php">Account</a></div>
            </span>
        </div>
    </div>
    </nav>

    <?php 
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['watchmaniddelete'])){
                $watchmanid = $_POST['watchmaniddelete'];
                $sql = "DELETE FROM `watchman` WHERE `watchman`.`WatchmanID` = $watchmanid";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> Edited!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }
                else{
                    echo "Failed";
                }
            }
            else if(isset($_POST['watchmanidedit'])){
                $watchmanid = $_POST['watchmanidedit'];
                $fname = $_POST["firstnameedit"];
                $lname = $_POST["lastnameedit"];
                $moblieno = $_POST["phonenoedit"];
                $email = $_POST["emailidedit"];
                $date = $_POST['dateedit'];
                $salary = $_POST['salaryedit'];
                if(!is_numeric($_POST['phonenoedit']) or strlen($_POST['phonenoedit'])!=10){
                    die("Please enter correct mobile number");
                }
                $sql = "UPDATE `watchman` SET `FirstName` = '$fname', `LastName` = '$lname', `DateOfBirth` = '$date', `Email` = '$email', `PhoneNo` = $moblieno, `Salary` = $salary WHERE `watchman`.`WatchmanID` = $watchmanid";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> Edited!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }
                else{
                    echo "Failed";
                }
            }
            else{
                $fname = $_POST["firstname"];
                $lname = $_POST["lastname"];
                $moblieno = $_POST["phoneno"];
                $email = $_POST["email"];
                $date = $_POST['date'];
                $salary = $_POST['salary'];
                if(!is_numeric($_POST['phoneno']) or strlen($_POST['phoneno'])!=10){
                    die("Please enter correct mobile number");
                }
                $sql = "INSERT INTO `watchman` (`WatchmanID`, `FirstName`, `LastName`, `DateOfBirth`, `Email`, `PhoneNo`, `Salary` ,`SocietyId`) VALUES (NULL, '$fname', '$lname', '$date', '$email', $moblieno, $salary , 4)";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> Watchman Added!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }
                else{
                    echo "Failed";
                }
            }
        }

    ?>

    <div class="container my-3 p-5 border border-3 rounded shadow-lg border-dark bg-dark text-white">
        <h2 class="mb-4">Add Watchman</h2>
        <form action="watchmanchairman.php" method="POST">
            
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
                
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname">
                
            </div>
            <div class="mb-3">
                <label for="dateOfBirth" class="form-label">Date Of Birth</label>
                <input type="date" class="form-control" name="date" id="dateOfBirth">
                
            </div>
            <div class="mb-3">
                <label for="emailid" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="emailid">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="phoneno" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phoneno" id="phoneno">
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" name="salary" id="salary">
            </div>
            <button type="submit" class="btn btn btn-success mt-3">Submit</button>
        </form>
    </div>

    <div class="container p-4">
    <table class="table py-3" id="myTable">
        <thead class=" table-dark">
            <tr>
            <th scope="col">Number</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Salary</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM watchman INNER JOIN society ON watchman.SocietyId=society.SocietyID WHERE society.ChairmanId=1";
                $result = mysqli_query($conn,$sql);
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr class='table-success'>
                    <th scope='row'>".$i."</th>
                    <td>".$row['FirstName']."</td>
                    <td>".$row['LastName']."</td>
                    <td>".$row['DateOfBirth']."</td>
                    <td>".$row['Email']."</td>
                    <td>".$row['PhoneNo']."</td>
                    <td>".$row['Salary']."</td>
                    <td><button class='edit btn' id=". $row['WatchmanID'].  ">Edit</button> <button class='delete btn' id=d". $row['WatchmanID'].  ">Delete</button></td>
                    </tr>";
                    $i = $i+1;
                }
            ?>
        </tbody>
        <script>
         edits = document.getElementsByClassName("edit");
         Array.from(edits).forEach((elements)=>{
            elements.addEventListener("click",(e)=>{
                console.log("edit ",);
                tr = e.target.parentNode.parentNode;
                fname = tr.getElementsByTagName("td")[0].innerText;
                lname = tr.getElementsByTagName("td")[1].innerText;
                dob = tr.getElementsByTagName("td")[2].innerText;
                email = tr.getElementsByTagName("td")[3].innerText;
                phoneno = tr.getElementsByTagName("td")[4].innerText;
                salary = tr.getElementsByTagName("td")[5].innerText;
                console.log(fname, lname, dob, email, phoneno, salary);

                firstnameedit.value = fname;
                lastnameedit.value = lname;
                dateedit.value = dob;
                emailidedit.value = email;
                phonenoedit.value = phoneno;
                salaryedit.value = salary;
                watchmanidedit.value = e.target.id;
                console.log("watchman id = ",e.target.id);
                $('#editmodal').modal('toggle');

            })
        })


        deletes = document.getElementsByClassName("delete");
         Array.from(deletes).forEach((elements)=>{
            elements.addEventListener("click",(e)=>{
                console.log("delete ",);
                tr = e.target.parentNode.parentNode;
                watchmaniddelete.value = e.target.id.substr(1,);
                console.log(e.target.id.substr(1,));
                $('#deletemodal').modal('toggle');
            })
        })

    </script>
    </table>
    </div>

    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<!-- INSERT INTO `watchman` (`FirstName`, `LastName`, `DateOfBirth`, `Email`, `PhoneNo`, `Salary`) VALUES ('sdggs', 'sggg', '2021-04-21', 'sdfg@gmail.com', '9999999999', '35434'); -->