<?php
// Title ========================================
$title = 'Contacts';
// Includes ========================================
require_once './Inc/head.php';
require_once './Inc/main.php';
require_once './Inc/sidebar.php';
require_once './Inc/navigation.php';
?>
<!-- Main Panel ===================================================================== -->
<section class="contact-form">
    <form action="#" class="contact">
        <h2>Contact Form</h2>
        <div class="form-group-col-6">
            <div class="col-6">
                <label class="text-black" for="fname">First Name</label>
                <input type="text" id="fname" class="form-control" />
            </div>
            <div class="col--6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <label class="text-black" for="email">Email</label>
                <input type="text" id="email" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <label class="text-black" for="subject">Subject</label>
                <input type="text" id="subject" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <label class="text-black" for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
            </div>
        </div>
        <div class="col-12">
            <input type="submit" value="Send Message" class="btn-send" />
        </div>
    </form>
</section>

<?php
// Includes - Footer ========================================
require_once './Inc/footer.php';
?>