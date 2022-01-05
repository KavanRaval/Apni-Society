<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <title>Chairman Home</title>
    <style>
    body{
        background:url('9.jpg') center center fixed;
    }
        .navbar-brand {
            font-family: 'Train One', cursive;
        }
        .navbar-text{
            margin-right:2vw;
        }
        #notification,#account,
        .logout {
            font-size: 1.5vw;
            font-weight: bold;
            color: white;
            margin:0vw 1vw;
        }

        #logoutid {
            color: rgb(190, 6, 6);
        }

        .container {
            max-width: 100%;
        }
        #notification,#account{
            text-decoration: none;
        }
        .btn:hover{
            background-color:black;
            color:white;
        }
        /* footer css starts here  */
        #construction{
            color:red;
        }
        footer{
            background-color:black;
        }
        .footerheading{
            color:white;
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
    <!-- For Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">APNI SOCIETY</a>

            <span class="navbar-text d-flex flex-wrap">
                <div class="d-inline-flex"><a id="notification" href="notification.php">Notifications</a></div>
                <div class="d-inline-flex"><a id="account" href="account.php">Account</a></div>
                <div class="d-inline-flex logout"><a href="home.php" id="logoutid">Log Out</a></div>
            </span>
        </div>
    </nav>


    <!-- cards start here  -->
    <div class="container col-md-12 d-flex flex-wrap">
        <div class="col-md-1"></div>
        <div class="col-md-10 d-inline-flex flex-wrap justify-content-evenly shadow-lg my-5 border border-2 border-dark rounded bg-dark" style="width:80%">
            <div class="card my-4 shadow-lg border border-2 border-dark" style="width: 18rem;">
                <div class="card-body bg-info text-black">
                    <h5 class="card-title">Watchman</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="watchmanchairman.php" class="btn btn-dark px-3 mx-5">Watchman Info</a>
                </div>
            </div>
            <div class="card my-4 shadow-lg border border-2 border-dark" style="width: 18rem;">
                <div class="card-body bg-secondary text-white">
                    <h5 class="card-title">Society</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-dark px-5 mx-4">Society Info</a>
                </div>
            </div>
            <div class="card my-4 shadow-lg border border-2 border-dark" style="width: 18rem;">
                <div class="card-body bg-success text-black">
                    <h5 class="card-title">Maintenance</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-dark px-4 mx-4">Check Maintenance</a>
                </div>
            </div>
            <div class="card my-4 shadow-lg border border-2 border-dark" style="width: 18rem;">
                <div class="card-body bg-danger text-white">
                    <h5 class="card-title">Vendors</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="vendorchairman.php" class="btn btn-dark px-5 mx-4">Vendors Info</a>
                </div>
            </div>
            <div class="card my-4 shadow-lg border border-2 border-dark" style="width: 18rem;">
                <div class="card-body bg-warning text-black">
                    <h5 class="card-title">Notifications</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-dark px-4 mx-5">Events Info</a>
                </div>
            </div>
            <div class="card my-4 shadow-lg border border-2 border-dark" style="width: 18rem;">
                <div class="card-body bg-primary text-white">
                    <h5 class="card-title">Meetings</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-dark px-4 mx-5">Meeting Info</a>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <!-- Footer starts here  -->

    <footer class="pt-4 my-md-5 pt-md-5 border border-2 border-dark">
        <div class="col-md-12 row px-5">
            <div class="col-12 col-md ">

                <h5 class="footerheading">Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Online Payment </a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Daily Updates</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Social Networking</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Photo Gallery</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Election Polling</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5 class="footerheading">About</h5>
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
        <h5 class="float-end mx-4" id="construction">*This website is under progress*</h5>
    </footer>

</body>