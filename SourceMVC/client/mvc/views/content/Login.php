<!-- <div class="login-form">
    <form action="" method="get" onsubmit="return false">
        <div>
            <label for="username">Username</label>
            <input type="text" required class="username-input form-control w-25" placeholder="Username">
        </div>
        <div>
            <label for="username">Password</label>
            <input type="password" required class="password-input form-control w-25" placeholder="Username">
        </div>
        <button type="submit" class="btn btn-primary mt-4 login-button">Login</button>
        <button class="btn btn-primary mt-4  rgt-bt"><a href="<?php echo $DOMAIN ?>/Register/registerPage">Register</a></button>
    </form>
    <div class="text-danger err mt-4"></div>
</div> -->


<div class="login-template">
    <div class="login-content">
        <div class="login-box">
            <div class="title-login">ACCOUNT LOGIN</div>
            <div class="user-account">
                <form action="" onsubmit="return false" class="login-form">
                    <div class="form-group">
                        <input type="text" class="username-input form-control input-effect" placeholder="Username" />
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" name="password" class="password-input form-control input-effect" placeholder="Password" />
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="login-button form-control">Login</button>
                    </div>
                </form>
                <div class="text-danger err mt-4"></div>
                <div style="color: white; font-size: 15px" class="mt-4">Chưa có tài khoản?</div>
                <div>
                    <button class="register register-direct form-control mt-4" data-bs-toggle="offcanvas" data-bs-target="#register-offcanvas">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

</script>