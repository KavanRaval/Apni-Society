<?php
//Database Varaibles
$servername = "localhost";
$username = "root";
$password = "";
$database = "apni_society";

//Connecting Database
$conn = mysqli_connect($servername,$username,$password,$database);
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
    <title>SocietyMember Info</title>
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
        });
    </script>
  </head>
  <body>
    <!-- Navbar starts here  -->
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
            <a class="nav-link" href="watchmanchairman.php">Watchman Info</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Society Info</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Check Maintenance</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="vendorchairman.php">Vendors Info</a>
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
        <!-- Navbar Ends here  -->

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
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM societymember";
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
                    </tr>";
                    $i = $i+1;
                }
            ?>
        </tbody>
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