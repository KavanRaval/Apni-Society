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
    <title>Meetings Info</title>
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
  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModallabel">
  Edit modal
    </button> -->

    <!--Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Meeting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="meetings.php" method="POST">
        <input type="hidden" name="meetingedit" id="meetingedit">
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="dateedit" name="dateedit" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" name="timeedit" id="timeedit" required>
            </div>
            <div class="mb-3">
                <label for="place" class="form-label">Place</label>
                <input type="text" class="form-control" name="placeedit" id="placeedit" required>
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
    <!-- Delete Button Starts here  -->
    <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deletemodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Are you Sure you want to delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-1">
            <form action="meetings.php" method="POST">
                <input type="hidden" name="meetingdelete" id="meetingdelete">
                <button type="submit" class="btn btn-sm btn-danger mx-3">Delete</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </form>
        </div>
        </div>
    </div>
    </div>

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

    <?php 
        if($_SERVER['REQUEST_METHOD']=='POST'){

            if(isset($_POST['meetingdelete'])){
                $meetingid = $_POST['meetingdelete'];
                $sql = "DELETE FROM `meetings` WHERE `meetings`.`MeetingID` = $meetingid ";
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
 
           elseif(isset($_POST['meetingedit'])){
                $meetingid = $_POST['meetingedit'];
                $date = $_POST['dateedit'];
                $time = $_POST['timeedit'];
                $place = $_POST['placeedit'];
                $sql = "UPDATE `meetings` SET `Date` = '$date', `Time` = '$time', `Place` = '$place' WHERE `MeetingID` = $meetingid";
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
            $date = $_POST['date'];
            $time = $_POST['time'];
            $place = $_POST['place'];
            $sql = "INSERT INTO `meetings` (`MeetingID`, `Date`, `Time`, `Place`, `ChairmanID`) VALUES (NULL, '$date', '$time', '$place', '1')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success!</strong> Vendor Added!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
            }
            else{
                echo "Failed";
                echo mysqli_error($conn);
            }
        }
    }
    ?>

    <div class="container my-3 p-5 border border-3 rounded shadow-lg border-dark bg-dark text-white">
        <h2 class="mb-4">Add Meeting</h2>
        <form action="meetings.php" method="POST">
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" id="date" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" name="time" id="time" required>
            </div>
            <div class="mb-3">
                <label for="place" class="form-label">Place</label>
                <input type="text" class="form-control" name="place" id="place" required>
            </div>
            <button type="submit" class="btn btn btn-success mt-3">Submit</button>
        </form>
    </div>

    <div class="container p-4">
    <table class="table py-3" id="myTable">
        <thead class=" table-dark">
            <tr>
            <th scope="col">Number</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Place</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM meetings";
                $result = mysqli_query($conn,$sql);
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr class='table-success'>
                    <th scope='row'>".$i."</th>
                    <td>".$row['Date']."</td>
                    <td>".$row['Time']."</td>
                    <td>".$row['Place']."</td>
                    <td><button class='edit btn' id=".$row['MeetingID']." >Edit</button> <button class='delete btn' id=d".$row['MeetingID']." >Delete</button></td>
                    </tr>";
                    $i = $i+1;
                }
            ?>
        </tbody>
        <script>
         edits = document.getElementsByClassName("edit");
         Array.from(document.getElementsByClassName('edit')).forEach((elements)=>{
            elements.addEventListener("click",(e)=>{
                console.log("edit ",);
                tr = e.target.parentNode.parentNode;
                date = tr.getElementsByTagName("td")[0].innerText;
                time = tr.getElementsByTagName("td")[1].innerText;
                place = tr.getElementsByTagName("td")[2].innerText;
                dateedit.value = date;
                timeedit.value = time;
                placeedit.value = place;
                meetingedit.value = e.target.id;
                console.log("meeting id = ",e.target.id);
                $('#editModal').modal('toggle');
            })
        })

        deletes = document.getElementsByClassName("delete");
         Array.from(deletes).forEach((elements)=>{
            elements.addEventListener("click",(e)=>{
                console.log("delete ",);
                tr = e.target.parentNode.parentNode;
                meetingdelete.value = e.target.id.substr(1,);
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