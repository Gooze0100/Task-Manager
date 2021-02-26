<?php
// Title ========================================
$title = 'Profile';
// Includes ========================================
require_once './Inc/head.php';
require_once './Inc/main.php';
require_once './Inc/sidebar.php';
require_once './Inc/navigation.php';
?>
<!-- Main Panel ===================================================================== -->
<main class="profile-all">
    <article class="avatar-theme">
        <section class="avatars">
            <div class="avatars-title">
                <h3>Avatar</h3>
            </div>
            <div class="avatars-img">
                <div class="avatar-img">
                    <img src="#" alt="">
                </div>
                <div class="avatar-img">
                    <img src="#" alt="">
                </div>
                <div class="avatar-img">
                    <img src="#" alt="">
                </div>
                <div class="avatar-img">
                    <img src="#" alt="">
                </div>
                <div class="avatar-img">
                    <img src="#" alt="">
                </div>
                <div class="avatar-img">
                    <img src="#" alt="">
                </div>
                <div class="avatar-img">
                    <img src="#" alt="">
                </div>
                <div class="avatar-img">
                    <img src="#" alt="">
                </div>
            </div>
        </section>
        <section class="themes">
            <div class="themes-title">
                <h3>Theme</h3>
            </div>
            <div class="themes-background">
                <div class="theme mountain"></div>
                <div class="theme forest"></div>
                <div class="theme building"></div>
                <div class="theme flowers"></div>
                <div class="theme abstract"></div>
                <div class="theme bubles"></div>
            </div>
        </section>
    </article>
    <section class="information">
        <div class="your-info">
            <h3>Your Information</h3>
        </div>
        <form action="#">
            <div class="form-group">
                <label for="fName">Name</label>
                <input type="text" id="fName">
            </div>
            <div class="form-group">
                <label for="pEmail">Email</label>
                <input type="email" id="pEmail">
            </div>
            <div class="form-group">
                <label for="lName">Last Name</label>
                <input type="text" id="lName">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city">
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday">
            </div>
            <div class="form-group">
                <label for="changePassword">Change Password</label>
                <input type="password" id="changePassword">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Repeat Password</label>
                <input type="password" id="confirmPassword">
            </div>
        </form>
    </section>
</main>


<?php
// Includes - Footer ========================================
require_once './Inc/footer.php';
?>