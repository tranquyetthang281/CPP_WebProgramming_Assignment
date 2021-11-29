<?php if (is_logged()) { ?>


    <div class="Acount-detail">
        <div class="container rounded">
            <div class="row">
                <div class="col-md-5 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1_CX76HpPcBlyWvY68VpyqaWJAlteX8MhS2qGNJMd8klWwMQ&s" alt="" />
                        <span class="font-weight-bold"><?php echo $data['userInfo']['username'] ?></span>
                        <span class="text-50"><?php echo $data['userInfo']['name'] ?></span>
                        <span> </span>
                    </div>
                </div>
                <div class="col-md-7 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md">
                                <label class="labels">Full Name</label>
                                <input type="text" class="form-control name-input" placeholder="Your name" value="<?php echo $data['userInfo']['name'] ?>" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Phone Number</label>
                                <input type="text" class="form-control phone-input" placeholder="Your phone number" value="<?php echo $data['userInfo']['phoneNumber'] ?>"" />
                            </div>
                            <div class=" col-md-12"><label class="labels">Email</label>
                                <input type="email" class="form-control email-input" placeholder="abcd@gmail.com" value="<?php echo  $data['userInfo']['email'] ?>" />
                            </div>
                            <div class="col-md-12"><label class="labels">Address</label>
                                <input type="text" class="form-control address-input" placeholder="Address" value="<?php echo  $data['userInfo']['address'] ?>" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="labels">Password</div>
                            <div class="password user-data">
                                <p class="text-danger password-text" data-bs-toggle="modal" data-bs-target="#change-password">Change Password</p>
                                <!-- modal - change password -->
                                <form action="" onsubmit="return false" style="color:black">
                                    <div class="modal fade " id="change-password">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body ">
                                                    <div>
                                                        <label for="old-pass" class="form-label">Old Password</label>
                                                        <input type="password" required class="form-control old-pass" />
                                                    </div>
                                                    <div>
                                                        <label for="new-pass" class="form-label">New Password</label>
                                                        <input type="password" required class="form-control new-pass" />
                                                    </div>
                                                    <div>
                                                        <label for="re-new-pass" class="form-label">Re-enter New Password</label>
                                                        <input type="password" required class="form-control renew-pass" />
                                                    </div>
                                                    <div class="text-danger err"></div>
                                                    <div class="text-success succ"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" class="form-control btn-danger w-50 changePass-button" value="Change Password" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- end of modal -->
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn profile-button" type="button">Save Profile</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        DOMAIN = 'http://localhost/CPP_Assignment_CNPM/SourceMVC/client';
    </script>
<?php } ?>