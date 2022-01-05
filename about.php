<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <title>About Us</title>
    <style>
    *{
            margin:0;
            padding:0;
        }
    .navbar-brand{
    font-family: 'Train One', cursive;
}
.navbarlink{
    font-weight: bolder;
}
        .animation{
            display:block;
            position:relative;
            width:100%;
            text-align: center;
        }
        
        .text1{
            width:100%;
            font-size: 4vw;
            letter-spacing: 0.3vw;
            color:#103c12;
            background: white;
            position:relative;
            animation:text1 3s 1;
            animation-delay: 0.5s;
        }
        .text2{
            color:#292959;
            font-size:2vw;
            animation:text2 3s 1;
            animation-delay: 0.5s;
        }
        @keyframes text2{
            0%{
                margin-top:-4vw;
                letter-spacing: 0.5vw;
            }
            
        }
        @keyframes text1{
            0%{
                letter-spacing: 0.5vw;
            }
            30%{
                letter-spacing: 0.8vw;
            }
            60%{
                letter-spacing: 0.1vw;
            }
            100%{
                letter-spacing: 0.3vw;
            }
            
        }
        #smallheading{
            font-family: 'Patua One', cursive;
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
                <p class="navbar-toggler-icon"></p>
            </button>

            <!-- Navbar Items  -->
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link mx-2 navbarlink" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link active mx-2 navbarlink" href="about.php">About</a>
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

   <!-- Animation Starts Here  -->
    <div class="animation my-3 text-center">
      <span class="text1 d-block">  Welcome to Apni Society</span>
      <span class="text2 d-block text-decoration-underline">The Society Management System</span>
    </div>

    <div class="container">
        <div class="image"><img src="aboutpageimage.svg" alt=""></div>
        <div class="minicontainer my-4">
        <div class="heading fs-1 text-center">About &nbsp;<span id="smallheading">APNI SOCIETY<span></div></div>
        <div class="content my-3 text-center fs-5"><p>Welcome to ‘APNI SOCIETY’. An online society and accounting management portal. A unique platform which can be used by Cooperative Housing Societies / Resident Welfare Association (RWA) / Apartment Association etc.Our Website  is developed for society management and for solving problems in the society.This platform expands transparency and aims to strengthen the bond among members and Managing Committee.</p>
        <p>APNI SOCIETY puts an end to the out-of-date approach adopted by various societies and paves the way to create cooperative spirit among society members and management. In a matter of clicks, one can have access to maintenance bills, payments, agenda’s, meeting of minutes, circulars, notices and many more interesting features. It also provides an opportunity to list your business, connect to vendors and keeps you well-informed with all the events happening.</p>
        <p>It is one of the best integrated solutions for Housing Society accounting and billing. Our APNI SOCIETY portal can accommodate all kinds of maintenance bill settings as may be required by different societies. It’s an automated accounting & billing portal which promotes digitization of complete books of account.</p>
        </div>
        <div class="card-body">
            <div class="miniheader fs-4 my-3 ">
            <img class="sr-icons" src="icon1.png">
            Communication & Security
            </div>
            <!-- </h6> -->
            <ul>
                <li><p>
                    Connects society members to society office, through the website easily</p>
                </li>
                <li><p>
                    Easy to Log-in complaints/ issues and follow up</p>
                </li>
                <li><p>
                    Get notifications for events within the society</p>
                </li>
                <li><p>
                    Ready reckoner for members to reach out to facility management vendors or for housekeeping services like plumber, electrician etc</p>
                </li>
                <li><p>
                    Listing items on the app for sale or rent through classifieds section for any products like furniture or even flats</p>
                </li>
                <li><p>
                    Vendors tracking with service reminders and expiry avreminders</p>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="miniheader fs-4 my-3 ">
                <img class="sr-icons" src="icon2.png">
                Accounting & Management
            </div>
            <ul>
                <li><p>Monthly maintenance bills can be auto generated and a soft copy is sent on mail to members</p></li>
                <li><p>Notifications will be sent for all requirements like Ids,Documents etc.</p></li>
                <li><p>Online maintenance and Delivery of Notices and Minutes of Society Meetings etc.</p></li>
                <li><p>Automated accounting for billing and receipts.</p></li>
            </ul>
        </div>
    </div>

    <div class="contact fs-5 text-center">
    <span>Need to Contact Us then&nbsp;</span><a href="contactus.php">Click Here.</a></div>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>