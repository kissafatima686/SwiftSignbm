<?php include 'include/header.php'; ?>
<?php
if (isset($_GET['from']) && $_GET['from'] === 'advisory') {
    include 'include/navbar-advisory.php';
} else {
    include 'include/topbar.php';
    include 'include/navbar.php';
}
?>

<?php
$contact_email = "info@swiftsignbm.com";
$contact_phone = "+971 52 763 3023";
$phone_html = "+971 52 763 3023";
$contact_address = "Business Village Block-B, 3rd Floor, Office 301, Dubai, UAE";
$contact_icon = "flaticon-call-center";
$fb_link = "https://www.facebook.com/swiftsigngroupofcompanies";
$linkedin_link = "#";
$insta_link = "https://www.instagram.com/swiftsignbm.ae";
$tiktok_link = "#";

if (isset($_GET['from']) && $_GET['from'] === 'advisory') {
    $contact_email = "Aliyan@swiftsignbm.com";
    $contact_address = "Dubai: Business Village Block-B, 3rd Floor, Office 301, Dubai, UAE<br><br>Pakistan: Office 22, 4th Floor, Pakland City Center, I-8 Markaz, Islamabad, Pakistan";
    $contact_icon = "fab fa-whatsapp";
    $phone_html = '<a href="https://wa.me/971527633023" target="_blank" style="color: inherit; text-decoration: none;">+971 52 763 3023</a>';
    $fb_link = "https://www.facebook.com/itandcybersolutions/";
    $linkedin_link = "https://www.linkedin.com/checkpoint/challengesV3/AQEk691qZc8gVgAAAZ8dhZhVDnwho6IPs-6EGx9eQbEuL9hR2MyKhqNeIKc6STljlpRQ5NjadSI6ZA_BMLSnf9z80oQ7jQ";
    $insta_link = "https://www.instagram.com/ssitandcybersolutions";
    $tiktok_link = "";
}
?>

<!-- ===================== -->
<!-- PAGE TITLE SECTION -->
<!-- ===================== -->
<div class="page-title-area shadow dark bg-fixed text-center text-light"
     style="background-image: url(assets/images/banner/8.jpg); padding: 100px 0;">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</div>

<!-- ===================== -->
<!-- CONTACT SECTION -->
<!-- ===================== -->
<div class="contact-section default-padding" style="background:#f7f9fc; padding:80px 0;"> 
    <div class="container">
        <div class="row" style="display:flex; flex-wrap:wrap;">

            <!-- INFO BOX -->
            <div class="col-md-5" style="display:flex;">
                <div class="contact-info-box text-light"
                    style="
                        background: linear-gradient(rgba(0,119,181,0.9), rgba(0,119,181,0.9)), 
                                    url('assets/images/13.jpg') center/cover no-repeat;
                        padding:50px;
                        border-radius:12px;
                        box-shadow:0 15px 40px rgba(0,0,0,0.1);
                        width:100%;
                    ">

                    <h3 style="margin-bottom:25px; font-weight:700;">Contact Information</h3>

                    <!-- LOCATION -->
                    <div class="info-item" style="margin-bottom:25px; display:flex; align-items:flex-start; gap:15px;">
                        <i class="flaticon-location" style="font-size:30px; color:#fff; min-width:30px;"></i>
                        <div>
                            <h5 style="margin:0;">Office Location</h5>
                            <p style="opacity:0.9; margin:5px 0 0;">
                                <?php echo $contact_address; ?>
                            </p>
                        </div>
                    </div>

                    <hr style="border-color:rgba(255,255,255,0.2);">

                    <!-- PHONE -->
                    <div class="info-item" style="margin:25px 0; display:flex; align-items:flex-start; gap:15px;">
                        <i class="<?php echo $contact_icon; ?>" style="font-size:30px; color:#fff; min-width:30px;"></i>
                        <div>
                            <h5 style="margin:0;">Phone</h5>
                            <p style="opacity:0.9; margin:5px 0 0;"><?php echo $phone_html; ?></p>
                        </div>
                    </div>

                    <hr style="border-color:rgba(255,255,255,0.2);">

                    <!-- EMAIL -->
                    <div class="info-item" style="margin-top:25px; display:flex; align-items:flex-start; gap:15px;">
                        <i class="flaticon-email" style="font-size:30px; color:#fff; min-width:30px;"></i>
                        <div>
                            <h5 style="margin:0;">Email</h5>
                            <p style="opacity:0.9; margin:5px 0 0;"><?php echo $contact_email; ?></p>
                            <!-- <p style="opacity:0.9; margin:0;">support@swiftsignbm.com</p> -->
                             <!-- SOCIAL MEDIA -->
                        <div style="margin-top:20px;">
                            <ul style="
                                list-style:none;
                                padding:0;
                                margin:0;
                                display:flex;
                                gap:12px;
                            ">
                                <li>
                                    <a href="<?php echo $fb_link; ?>" target="_blank"
                                    style="
                                            width:35px;
                                            height:35px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            background:#fff;
                                            color:#0077b5;
                                            border-radius:50%;
                                            text-decoration:none;
                                            transition:0.3s;
                                    ">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo $linkedin_link; ?>" target="_blank"
                                    style="
                                            width:35px;
                                            height:35px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            background:#fff;
                                            color:#0077b5;
                                            border-radius:50%;
                                            text-decoration:none;
                                    ">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo $insta_link; ?>" target="_blank"
                                    style="
                                            width:35px;
                                            height:35px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            background:#fff;
                                            color:#0077b5;
                                            border-radius:50%;
                                            text-decoration:none;
                                    ">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>

                                <?php if (!empty($tiktok_link)): ?>
                                <li>
                                    <a href="<?php echo $tiktok_link; ?>" target="_blank"
                                    style="
                                             width:35px;
                                             height:35px;
                                             display:flex;
                                             align-items:center;
                                             justify-content:center;
                                             background:#fff;
                                             color:#0077b5;
                                             border-radius:50%;
                                             text-decoration:none;
                                     ">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- FORM BOX -->
            <div class="col-md-7" style="display:flex;">
                <div class="contact-form-box"
                     style="
                        background:#fff;
                        padding:50px;
                        border-radius:12px;
                        box-shadow:0 15px 40px rgba(0,0,0,0.08);
                        width:100%;
                     ">

                    <h2 style="font-weight:700; margin-bottom:10px;">
                        Let’s Talk About Your Business
                    </h2>

                    <p style="color:#666; margin-bottom:30px; line-height:1.7;">
                       Swift sign provide End to End solution for Business management, IT & Cyber Solutions, UAE Visa Processing &  Documents Consultation, Shipping Services, Food Stuff trading, Research and Coaching Services
                    </p>

                    <form id="contactForm" action="contact_submited.php" method="POST">
                        <input type="hidden" name="from_page" value="<?php echo isset($_GET['from']) ? htmlspecialchars($_GET['from']) : ''; ?>">

                        <div class="form-group" style="margin-bottom:20px;">
                            <input type="text" name="name" class="form-control"
                                   placeholder="Your Name"
                                   style="height:50px; border-radius:8px; border:1px solid #ddd;">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control"
                                       placeholder="Your Email"
                                       style="height:50px; border-radius:8px; border:1px solid #ddd;">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control"
                                       placeholder="Phone Number"
                                       style="height:50px; border-radius:8px; border:1px solid #ddd;">
                            </div>
                        </div>

                        <br>

                        <div class="form-group" style="margin-bottom:25px;">
                            <textarea name="comments" rows="5"
                                      class="form-control"
                                      placeholder="Tell us about your requirement..."
                                      style="border-radius:8px; border:1px solid #ddd;"></textarea>
                        </div>

                        <button type="submit"
                                style="
                                    background:#0077b5;
                                    color:#fff;
                                    border:none;
                                    padding:12px 15px;
                                    border-radius:30px;
                                    font-weight:600;
                                    transition:0.3s;
                                "
                                onmouseover="this.style.background='#005f8d'"
                                onmouseout="this.style.background='#0077b5'">
                            Send Message <i class="fa fa-paper-plane"></i>
                        </button>

                        <div id="formMsg" style="margin-top:15px; font-weight:600;"></div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- ===================== -->
<!-- MAP SECTION -->
<!-- ===================== -->
<div class="map-section">
    <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.6771409803717!2d55.32465421546433!3d25.257339183897773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d6dfef6eb21%3A0x95b06789864be5e7!2sBusiness%20Village%2C%20Block%20-%20B!5e0!3m2!1sen!2s!4v1704783412345!5m2!1sen!2s"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
</div>

<?php
if (isset($_GET['from']) && $_GET['from'] === 'advisory') {
    include 'include/footer-advisory.php';
} else {
    include 'include/footer.php';
}
?>
<?php include 'include/bottom.php'; ?>

<script>
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let form = this;
    let formData = new FormData(form);
    let msg = document.getElementById("formMsg");
    let button = form.querySelector("button[type='submit']");

    // 🔵 LOADING STATE
    msg.innerHTML = "Sending...";
    msg.style.color = "#333";
    msg.style.background = "#f1f1f1";
    msg.style.padding = "10px";
    msg.style.borderRadius = "8px";
    msg.style.border = "1px solid #ccc";

    button.disabled = true;
    button.innerHTML = "Sending... ⏳";

    fetch(form.action, {
        method: "POST",
        body: formData
    })
    .then(async res => {
        let text = await res.text();

        try {
            return JSON.parse(text);
        } catch (e) {
            throw new Error(text);
        }
    })
    .then(data => {

        // ✅ SUCCESS
        if (data.status === "success") {

            msg.innerHTML = "✔ Message sent successfully!";
            msg.style.color = "#1b5e20";
            msg.style.background = "#e8f5e9";
            msg.style.padding = "12px";
            msg.style.borderRadius = "8px";
            msg.style.border = "1px solid #4caf50";

            form.reset();

        } 
        // ❌ ERROR
        else {

            msg.innerHTML = "❌ " + data.message;
            msg.style.color = "#b71c1c";
            msg.style.background = "#ffebee";
            msg.style.padding = "12px";
            msg.style.borderRadius = "8px";
            msg.style.border = "1px solid #f44336";
        }

    })
    .catch(err => {

        msg.innerHTML = "❌ Server error: " + err.message;
        msg.style.color = "#b71c1c";
        msg.style.background = "#ffebee";
        msg.style.padding = "12px";
        msg.style.borderRadius = "8px";
        msg.style.border = "1px solid #f44336";

    })
    .finally(() => {

        button.disabled = false;
        button.innerHTML = "Send Message <i class='fa fa-paper-plane'></i>";

    });
});
</script>