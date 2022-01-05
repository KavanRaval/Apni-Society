<?php ?>

<div class="modal fade" id="signupmodalformember" tabindex="-1" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog text-white">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h3 class="modal-title" id="signupModalLabel">Member SignUp</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2" action="signUpMember.php" method="POST">
                        <!-- For Name -->
                        <div class="col-md-6">
                            <label for="firstname" class="form-label modallabel">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="form-label modallabel">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                        </div>
                        <!-- For Society -->
                        <div class="col-md-6">
                            <label for="society" class="form-label modallabel">Society</label>
                            <select class="form-select" id="society" name="society" required>
                                <option selected>Select Your Society</option>
                                <?php
                                    //Displaying society name from database
                                    $sql = "SELECT * FROM society";
                                    $result = mysqli_query($conn,$sql);
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<option value=".$row['SocietyID'].">" . $row['Name'] . "</option>";
                                        $i+=1;
                                    }          
                                ?>
                            </select>
                        </div>
                        <!-- For Mobile No. -->
                        <div class="col-md-12">
                            <label for="mobileno" class="form-label modallabel">Mobile no.</label>
                            <input type="text" class="form-control" id="mobileno" name="mobileno" placeholder="Enter Mobile No."
                                required>
                        </div>
                        <!-- For email -->
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label modallabel">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter Email ID"
                                required>
                        </div>
                        <!-- For Password -->
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label modallabel">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password" 
                                placeholder="Create Password" required>
                        </div>
                        <!-- For Confirm Password -->
                        <div class="col-md-12">
                            <label for="c_inputPassword4" class="form-label modallabel">Confirm Password</label>
                            <input type="password" class="form-control" id="c_inputPassword4" name="confirm_password" 
                                placeholder="Re-enter Password" required>
                        </div>
                        <!-- For Block Number -->
                        <div class="col-md-6">
                            <label for="block_no" class="form-label modallabel">Block</label>
                            <input type="text" class="form-control" id="block_no" name="block" 
                                placeholder="Block Number" required>
                        </div>
                        <!-- For House Number -->
                        <div class="col-md-6">
                            <label for="house_no" class="form-label modallabel">House Number</label>
                            <input type="number" class="form-control" id="house_no" name="house" 
                                placeholder="House Number" required>
                        </div>
                        <!-- For DOB -->
                        <div class="col-md-6">
                            <label for="dateofbirth" class="form-label modallabel">Date Of Birth</label>
                            <input type="date" name="dob" id="dateofbirth" placeholder="dd-mm-yy" required>
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
