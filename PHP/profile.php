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
            </div>
        </section>
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
    </article>
    <section class="information">
        <div class="person-titles">
            <h3>Your Information</h3>
        </div>
        <form action="#" class="information-form">
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
                <!-- <label for="birthday">Birthday</label> -->
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
            <div class="form-group">
                <button type="submit">Update profile</button>
            </div>
        </form>
    </section>
</main>


<?php
// Includes - Footer ========================================
require_once './Inc/footer.php';
?>