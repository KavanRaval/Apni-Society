<?php ?>

<div class="modal fade" id="signupmodalforchairman" tabindex="-1" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog text-white">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h3 class="modal-title" id="signupModalLabel">Chairman SignUp</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2" action="signUpChairman.php" method="POST" >
                        <!-- For Name -->
                        <div class="col-md-6">
                            <label for="firstname" class="form-label modallabel">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="form-label modallabel">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
                        </div>
                        <!-- For Society Name -->
                        <div class="col-md-12">
                            <label for="societyname" class="form-label modallabel">Society Name</label>
                            <input type="text" class="form-control" name="societyname" id="societyname" placeholder="Enter Society Name"
                                required>
                        </div>
                        <!-- For Mobile No. -->
                        <div class="col-md-12">
                            <label for="mobileno" class="form-label modallabel">Mobile no.</label>
                            <input type="text" class="form-control" name="mobileno" id="mobileno" placeholder="Enter Mobile No."
                                required>
                        </div>
                        <!-- For email -->
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label modallabel">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Enter Email ID"
                                required>
                        </div>
                        <!-- For Password -->
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label modallabel">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4"
                                placeholder="Create Password" required>
                        </div>
                        <!-- For Confirm Password -->
                        <div class="col-md-12">
                            <label for="c_inputPassword4" class="form-label modallabel">Confirm Password</label>
                            <input type="password" name="c_password" class="form-control" id="c_inputPassword4"
                                placeholder="Re-enter Password" required>
                        </div>
                        <!-- For DOB -->
                        <div class="col-md-6">
                            <label for="dateofbirth" class="form-label modallabel">Date Of Birth</label>
                            <input type="date" name="dob" id="dateofbirth" placeholder="dd-mm-yy" required>
                        </div>
                        <!-- For City -->
                        <div class="col-md-6">
                            <label for="selectcity" class="form-label modallabel">City</label>
                            <select class="form-select" name="selectcity" id="selectcity" required>
                                <option selected>Select Your City</option>
                                <option value="1">Ahmedabad</option>
                                <option value="2">Rajkot</option>
                                <option value="3">Gandhinagar</option>
                                <option value="4">Surat</option>
                            </select>
                        </div>
                        <!-- For Area -->
                        <div class="col-md-6">
                            <label for="selectarea" class="form-label modallabel">Choose Area</label>
                            <select class="form-select" name="selectarea" aria-label="Default select example" id="selectarea">
                                <option selected>Select Your Area</option>
                                <option value="1">Akhbarnagar</option>
                                <option value="2">Ranip</option>
                                <option value="3">Maninagar</option>
                                <option value="4">Vejalpur</option>
                                <option value="5">Sarkhej</option>
                                <option value="6">Science City</option>
                                <option value="7">Gota</option>
                                <option value="8">Memnagar</option>
                            </select>
                        </div>
                        <!-- For Pincode -->
                        <div class="col-md-5">
                            <label for="pincode" class="form-label modallabel">Pincode</label>
                            <input type="number" name="pincode" class="form-control" id="pincode" required>
                        </div>
                        <!-- For Total Blocks -->
                        <div class="col-md-3">
                            <label for="totalblocks" class="form-label modallabel">Total Blocks</label>
                            <input type="number" name="totalblocks" class="form-control" id="totalblocks" required>
                        </div>
                        <!-- For Total Flats -->
                        <div class="col-md-3">
                            <label for="totalflats" class="form-label modallabel">Total Flats</label>
                            <input type="number" name="totalflats" class="form-control" id="totalflats" required>
                        </div>
                        <!-- For Chairman Salary -->
                        <div class="col-md-5">
                            <label for="salary" class="form-label modallabel">Salary</label>
                            <input type="number" name="salary" class="form-control" id="salary" required>
                        </div>
                        <!-- For Terms & conditions -->
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label " for="gridCheck">
                                    I agree all the terms and conditions*
                                </label>
                            </div>
                        </div>
                        <!-- For Submit Button -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary my-3">SignUp</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>