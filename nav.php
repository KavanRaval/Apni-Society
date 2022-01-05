<?php ?>

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