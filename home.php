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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    
    <title>Home</title>
    <style>
    .navbar-brand{
    font-family: 'Train One', cursive;
}
.navbarlink{
    font-weight: bolder;
}
.carouselmainheading{
    font-weight: bolder;
    color:black;
}
.carouselsubheading{
    font-weight: bold;
    color:black;
}
#websitename{
    color:#002b1d;
    font-size: 3vw;
}
#websitetrademark{
    color:#002b1d;
    font-size: 2vw;
    text-decoration:underline;
}
footer{
    background-color:black;
}
#backtotop{
    margin:3vw;
    font-size: larger;
}
#backtotop:hover{
    fill:orange;
}
    </style>
</head>

<body>
    <!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-sm-top">
        <div class="container-fluid">
            <!-- Website Name  -->
            <a class="navbar-brand" href="#">APNI SOCIETY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items  -->
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active mx-2 navbarlink" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link mx-2 navbarlink" href="about.php">About</a>
                    <a class="nav-link mx-2 navbarlink" href="contactus.php">Contact Us</a>
                </div>
            </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle mx-3" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        SignUp
                    </button>
                    <ul class="dropdown-menu bg-dark text-white" aria-labelledby="dropdownMenuButton1">
                        <li><button type="button" class="btn btn-outline-info my-2" data-bs-toggle="modal"
                                data-bs-target="#signupmodalforchairman">SignUp As Chairman</button></li>
                        <li><button type="button" class="btn btn-outline-info my-2" data-bs-toggle="modal"
                                data-bs-target="#signupmodalformember">SignUp As Society Member</button>></li>
                    </ul>
                </div>
                <div class="d-flex">
                    <button type="button" class="btn btn-secondary mx-3" data-bs-toggle="modal"
                        data-bs-target="#loginModal">LogIn</button>
                </div>
        </div>
    </nav>           
    <!-- LogIn Modal -->
    <?php include "loginmodal.php"; ?>
    


    <!--SignUp Modal For Chairman -->
    <?php include "signupchairmanmodal.php"; ?>



    <!--SignUp Modal For Society Member -->
    <?php include "signupmembermodal.php"; ?>
    
    <!-- Slide Starts here  -->

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="society2.jpg" class="d-block w-100" alt="...">
                <div class="col-md-5 carousel-caption bg-light d-none d-md-block">
                    <span class="carouselmainheading" id="websitename">Welcome to APNI SOCIETY</span>
                    <span class="carouselsubheading" id="websitetrademark">The Society Management System</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="data privacy.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="carouselmainheading">Data Privacy & Security</h3>
                    <p class="carouselsubheading">Your data privacy and security is our responsibility.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="maintenance.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="carouselmainheading">Easy Maintenance Payment</h3>
                    <p class="carouselsubheading">Make maintenance payment from home.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="meeting.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="carouselmainheading">Online Meeting</h3>
                    <p class="carouselsubheading">Attend meeting online through your Laptop/Mobile.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="communication2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="carouselmainheading">Easy communication</h3>
                    <p class="carouselsubheading">Easily communicate with any society member.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Cards Starts here  -->

    <div class="cardcontainer mt-5">
        <div class="col-md-12 row mb-2 px-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0 text-dark">Daily Updates</h3>
                        <p class="card-text mb-auto mt-3">Everyday News,circular,meeting etc. will be updated regularly by the Chairman.Daily updates about notice and other occasions are updated daily on the website.
</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img border border-secondary" width="262" height="250" src="dailyupdate1.jpg">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0 text-dark">Privacy & Security</h3>
                        <p class="mb-auto mt-3">User's data privacy and security is our first priority.We have more focused on the Privacy and user's data will not be shared to anyone.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img border border-secondary" width="337" height="250" src="data privacy for card.jpg">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer starts here  -->

    <footer class="pt-4 my-md-5 pt-md-5 border-top ">
        <div class="col-md-12 row px-5">
            <div class="col-12 col-md ">

                <h5 class="footerheading text-white">Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Online Payment </a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Daily Updates</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Social Networking</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Photo Gallery</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Election Polling</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5 class="footerheading text-white">About</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms & Conditions</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy Policy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Security</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <p class="float-end">
                    <a href="#"><svg id="backtotop" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                      </svg></a>
                </p>
            </div>
            
        </div>
        <h5 class="float-end text-danger mx-4" id="construction">*This website is under progress*</h5>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>