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
<section class="profile-all">
    <article class="avatar-information">
        <section class="information">
            <div class="person-titles">
                <h3>Your Information</h3>
            </div>
            <form action="#" class="information-form">
                <div class="form-group">
                    <label for="fName" id="labelFname">First Name</label>
                    <input type="text" id="fName">
                    <p class="information-about-input-left"><i class="fa fa-info" aria-hidden="true"></i>Enter your First Name</p>
                </div>
                <div class="form-group">
                    <label for="lName" id="labelLastName">Last Name</label>
                    <input type="text" id="lName">
                    <p class="information-about-input-right"><i class="fa fa-info" aria-hidden="true"></i>Enter your Last Name</p>
                </div>
                <div class="form-group">
                    <label for="username" id="labelUsername">User Name</label>
                    <input type="text" id="username">
                    <p class="information-about-input-left"><i class="fa fa-info" aria-hidden="true"></i>Enter your User Name</p>
                </div>
                <div class="form-group">
                    <label for="pEmail" id="labelEmail">Email Address</label>
                    <input type="email" id="pEmail">
                    <p class="information-about-input-right"><i class="fa fa-info" aria-hidden="true"></i>Enter your Email Address</p>
                </div>
                <div class="form-group">
                    <label for="pAddress" id="labeAddress">Address</label>
                    <input type="text" id="pAddress">
                    <p class="information-about-input-left"><i class="fa fa-info" aria-hidden="true"></i>Enter your Address</p>
                </div>
                <div class="form-group">
                    <label for="country" id="labelCountry">Country</label>
                    <input type="text" id="country">
                    <p class="information-about-input-right"><i class="fa fa-info" aria-hidden="true"></i>Enter your Country</p>
                </div>
                <div class="form-group">
                    <label for="city" id="labelCity">First City</label>
                    <input type="text" id="city">
                    <p class="information-about-input-left"><i class="fa fa-info" aria-hidden="true"></i>Enter your First City for Weathers</p>
                </div>
                <div class="form-group">
                    <label for="city2" id="labelCity2">Second City</label>
                    <input type="text" id="city2">
                    <p class="information-about-input-right"><i class="fa fa-info" aria-hidden="true"></i>Enter your Second City for Weather</p>
                </div>
                <div class="form-group">
                    <label for="changePassword" id="labelChangePassword">Change Password</label>
                    <input type="password" id="changePassword">
                    <p class="information-about-input-left"><i class="fa fa-info" aria-hidden="true"></i>Enter your Password to Change it 8 min alphabetic symbols</p>
                </div>
                <div class="form-group">
                    <label for="confirmPassword" id="labelRepeatPassword">Repeat Password</label>
                    <input type="password" id="confirmPassword">
                    <p class="information-about-input-right"><i class="fa fa-info" aria-hidden="true"></i>Enter your Password to Change it 8 min alphabetic symbols</p>
                </div>
                <div class="information-btn">
                    <button type="submit" class="btn-primary">Update profile</button>
                </div>
            </form>
        </section>
        <section class="avatars">
            <div class="person-titles">
                <h3>Avatars</h3>
            </div>
            <div class="avatars-img">
                <div class="avatar-img m-1">
                    <img src="../Images/avatar-1295831_1920.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/avatar-1300582_1280.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/witch-155291.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/avatar-1300583.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/amazed-1295833.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/avatar-1295575.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/avatar-1295573.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/anthropomorphized-animals-1295774.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/amazed-1295833.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/avatar-1295575.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/avatar-1295573.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
                <div class="avatar-img m-1">
                    <img src="../Images/anthropomorphized-animals-1295774.png" alt="Avatar is temporarily unavailable, can't sit here all day anyways">
                </div>
            </div>
        </section>
    </article>
    <section class="themes">
        <div class="person-titles">
            <h3>Themes</h3>
        </div>
        <div class="themes-background">
            <div class="overflow-change">
                <div class="theme mountain"></div>
            </div>
            <div class="overflow-change">
                <div class="theme forest"></div>
            </div>
            <div class="overflow-change">
                <div class="theme building"></div>
            </div>
            <div class="overflow-change">
                <div class="theme flowers"></div>
            </div>
            <div class="overflow-change">
                <div class="theme abstract"></div>
            </div>
            <div class="overflow-change">
                <div class="theme bubles"></div>
            </div>
        </div>
    </section>
</section>
<?php
// Includes - Footer ========================================
require_once './Inc/footer.php';
?>