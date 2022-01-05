<?php  ?>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="modalModalLabel" aria-hidden="true">
        <div class="modal-dialog text-white">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h3 class="modal-title" id="modalModalLabel">LogIn to APNI SOCIETY</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2" action="login.php" method="POST">
                        <div class="gotosignup">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <div class="p-2 bd-highlight"><a href="home.php">Haven't Signed Up yet ?</a></div>
                            </div>
                        </div>
                        <!-- City selection -->
                        <select class="form-select my-2" name="city" aria-label="Default select example">
                            <option selected>Select Your City</option>
                            <option value="1">Ahmedabad</option>
                            <option value="2">Rajkot</option>
                            <option value="3">Gandhinagar</option>
                            <option value="4">Surat</option>
                        </select>
                        <!-- Society Selection -->
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
                        <!-- For Email ID -->
                        <div class="row  my-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label modallabel">Email Id :-</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="inputEmail3" required>
                            </div>
                        </div>
                        <!-- For Password -->
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-3 col-form-label modallabel">Password :-</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="inputPassword3" required>
                            </div>
                        </div>
                        <!-- For Choosing Chairman or Member -->
                        <fieldset class="row mb-3">
                            <legend class="col-form-label modallabel col-sm-3 pt-0"><b id="loginastext">LogIn As</b></legend>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="0" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Chairman
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="1">
                                    <label class="form-check-label" for="gridRadios2">
                                        Society Member
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <!-- For Forgot Password -->
                        <div class="forgotpass">
                            <a href="#" class="link-danger my-3">Forgot Password ?</a>
                        </div>
                        <!-- LogIn Button -->
                        <button type="submit" class="btn btn-primary my-3">LogIn</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
</div>