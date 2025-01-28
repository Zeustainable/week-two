<section class="sectionColumn">
    <div class="divLeftColumn w3-animate-left">
    </div>
    <div class="divRightColumn">
        <form action="<?=base_url('pages/account_login');?>" method="POST">
            <section class="loginSection w3-animate-left">
                <div class="loginForm">
                    <div class="divLoginBorder">
                        <h1>LOGIN</h1>
                        <hr />
                        <label for="txtEmailAddress" required>Email Address</label>
                        <input type="email" id="txtEmailAddress" name="emailAddress" placeholder="email address" required>
                        <label for="txtPassword" required>Password</label>
                        <input type="password" id="txtPassword" name="password" placeholder="password" required>
                        <hr />
                        <p>Don't have an account? <a href="<?=base_url('pages/register'); ?>">Register here</a>
                        </p>
                        <button type="submit">Sign In</button>
                    </div>
                </div>
            </section>
        </form>
    </div>
</section>

<!-- <a href="<?=base_url('access/dashboard'); ?>"><button type="button">Sign In</button></a> -->