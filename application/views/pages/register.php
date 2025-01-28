<section>
    <section class="sectionColumn sectionRegister w3-animate-right">
        <div class="divLeftColumn divRegisterLeft w3-animate-right">
        </div>
        <div class="divRightColumn divRegisterRight">
            <form action="" method="POST">
                <section class="">
                    <div class="divRegisterBorder">
                        <h1>REGISTER</h1>
                        <hr />
                        <div class="divRegister">
                            <div class="registerForm">
                                <label for="txtFirstName">First Name</label>
                                <input type="text" id="txtFirstName" name="firstName" placeholder="first name" required>
                                <label for="txtMiddleName">Middle Name</label>
                                <input type="text" id="txtMiddleName" name="middleName" placeholder="middle name">
                                <label for="txtLastName">Last Name</label>
                                <input type="text" id="txtLastName" name="lastName" placeholder="last name" required>
                            </div>
                            <div class="registerForm">
                                <label for="txtEmailAddress">Email Address</label>
                                <input type="email" id="txtEmailAddress" name="emailAddress" placeholder="email address" required>
                                <label for="txtPassword">Password</label>
                                <input type="password" id="txtPassword" name="password" placeholder="password" required>
                                <label for="txtConfirmPassword">Confirm Password</label>
                                <input type="password" id="txtConfirmPassword" name="confirmPassword" placeholder="confirm password" required>
                            </div>
                        </div>
                        <hr />
                        <p>Already have an account? <a href="<?=base_url('pages/login');?>">Sign In</a></p>
                        <div class="divRegisterButton">
                            <button type="submit">Sign Up</button>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </section>
</section>