<?php
// Title ========================================
$title = 'Login/Register';
// Includes ========================================
require_once './Inc/head.php';
?>
<section class="forms">
    <form action="#" method="POST" class="sign-form">
        <div class="login">
            <div class="sign-titles">
                <a href="#" class="sign-in-title active" id="signInTitle">Sign in</a>
                <a href="#" class="sign-up-title" id="signUpTitle">Sign up</a>
            </div>
            <div class="sign-in" id="signIn">
                <div class="group">
                    <label for="usernameIn" class="small-label">Username</label>
                    <input type="text" id="usernameIn" class="sign-inputs" autocomplete="off" />
                </div>
                <div class="group">
                    <label for="passIn" class="small-label">Password</label>
                    <input type="password" id="passIn" class="sign-inputs" />
                </div>
                <div class="group">
                    <input type="checkbox" name="check" value="check" id="check" checked class="tick" />
                    <label for="check" class="check">Keep me Signed in</label>
                </div>
                <div class="group">
                    <button type="submit" name="sign" value="in" class="btn-primary">
                        Sign in
                    </button>
                </div>
                <div>
                    <hr class="my-2" />
                </div>
                <div class="foot my-2">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <div class="sign-up" id="signUp">
                <div class="group">
                    <label for="usernameOut" class="small-label">Username</label>
                    <input type="text" id="usernameOut" class="sign-inputs" autocomplete="off" />
                </div>
                <div class="group">
                    <label for="passOut" class="small-label">Password</label>
                    <input type="password" id="passOut" class="sign-inputs" />
                </div>
                <div class="group">
                    <label for="passRepeat" class="small-label">Repeat Password</label>
                    <input type="password" id="passRepeat" class="sign-inputs" />
                </div>
                <div class="group">
                    <label for="email" class="small-label">Email Address</label>
                    <input type="email" id="email" class="sign-inputs" autocomplete="off" />
                </div>
                <div class="group">
                    <button type="submit" name="sign" value="up" class="btn-primary">
                        Sign up
                    </button>
                </div>
                <div>
                    <hr class="my-2" />
                </div>
                <div class="foot my-2">
                    <p id="alreadyMemb">Already Member?</p>
                </div>
            </div>
        </div>
    </form>
</section>
</body>

</html>