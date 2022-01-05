<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <title>Contact Us</title>
    <link rel="stylesheet" href="main.css">
    <style>
    p{
      font-weight:bold;
    }  
    label,p{
        color:white;
    }
    .heading{
        text-align:center;
        color:white;
    }
    #construction{
    color:red;
}
footer{
    background-color:black;
}
.footerheading{
    color:white;
}
h3{
    color:white;
}
#backtotop:hover{
    fill:orange;
}
#submit:hover{
    background-color:grey;
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
                    <a class="nav-link mx-2 navbarlink" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link mx-2 navbarlink" href="about.php">About</a>
                    <a class="nav-link active mx-2 navbarlink" href="contactus.php">Contact Us</a>
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



    <!--SignUp Modal For Chairman -->
    <?php include "signupchairmanmodal.php"; ?>

    <!-- signup Modal For Member -->
    <?php include "signupmembermodal.php"; ?>

    <!-- login modal  -->
    <?php include "loginmodal.php"; ?>

    <!-- Contact Us Form Starts Here  -->
    <div class="container my-3">
        <form action="email.php" method="POST">
            <div class="container shadow-lg bg-dark col-md-6 border border-secondary rounded-3 p-5 mb-5">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" placeholder="Enter your name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" placeholder="Enter your email" class="form-control" id="exampleInputEmail1" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleSubject" class="form-label">Subject</label>
                    <input type="text" name="subject" placeholder="Enter subject" class="form-control" id="exampleSubject" required>
                </div>
                <div class="mb-3">
                    <p>Elaborate Your Subject</p>
                    <textarea class="form-control" name="desc" placeholder="Elaborate your subject here" id="floatingTextarea" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


    <!-- Footer starts here  -->

    <footer class="pt-4 my-md-5 pt-md-5 border-top ">
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