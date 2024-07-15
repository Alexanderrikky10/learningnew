<div class="form-box register">
    <h2 class="animation" style="--i: 17; --j: 0">Sign Up</h2>
    <form action="<?= base_url('login/process_register') ?>" method="post">
        <div class="input-box animation" style="--i: 18; --j: 1">
            <input type="text" name="username" required />
            <label for="">Username</label>
            <i class="bx bxs-user"></i>
        </div>
        <div class="input-box animation" style="--i: 19; --j: 2">
            <input type="email" name="email" required />
            <label for="">Email</label>
            <i class="bx bxs-envelope"></i>
        </div>
        <div class="input-box animation" style="--i: 20; --j: 3">
            <input type="password" name="password" required />
            <label for="">Password</label>
            <i class="bx bxs-lock"></i>
        </div>
        <div class="input-box animation" style="--i: 21; --j: 4">
            <input type="password" name="confirm_password" required />
            <label for="">Confirm Password</label>
            <i class="bx bxs-lock"></i>
        </div>
        <button type="submit" class="btn animation" style="--i: 22; --j: 5">
            Sign Up
        </button>
        <div class="logreg-link animation" style="--i: 23; --j: 6">
            <p>
                Already Have an Account?
                <a href="<?= base_url('login') ?>" class="login-link">Login</a>
            </p>
        </div>
    </form>
</div>
<div class="info-text register">
    <h2 class="animation" style="--i: 24; --j: 7; color: #fff">Join Us</h2>
    <p class="animation" style="--i: 25; --j: 8">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
        voluptate!
    </p>
</div>
