<?php include('header.php') ?>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(./assets/images/bred/contact-us-banner.jpg);"></div>
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li><span>Contact Us</span></li>
        </ul>
        <h1 class="">Contact Us</h1>
    </div>
</section>
<section class="contact-one">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-md-5 col-lg-6 col-xl-4">
                <div class="contactContent">
                    <div class="block-title ">
                        <h3>Contact Now</h3>
                    </div>
                    <ul>
                        <li>
                            <i class="agrikon-icon-pin"></i>
                            <a target="_blank">Plot no . 457 , Sankalp Enterprise, Mega GIDC Kharedi , Dahod- 389151</a>
                        </li>
                        <li>
                            <i class="agrikon-icon-telephone"></i>
                            <a href="tel:+919081336347" class="highlight">+91 90813 36347 - Mr. Jainam</a>
                        </li>
                        <li>
                            <i class="agrikon-icon-email"></i>
                            <a href="mailto:jainam@sankalpenterprise.com" class="highlight">jainam@sankalpenterprise.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-6 col-xl-8">

                <div class="contactForm">
                    <form onsubmit="sendToWhatsApp(event)" class="wpcf7-form init contact-one__form contact-form-validated" novalidate="novalidate">
                        <div class="block-title ">
                            <h3>Contact Now</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>
                                    <input id="name" size="40" maxlength="400" class="wpcf7-form-control wpcf7-text" 
                                           placeholder="Full Name" type="text" name="text-name" required />
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <input id="email" size="40" maxlength="400" class="wpcf7-form-control wpcf7-email" 
                                           placeholder="Email Address" type="email" name="email-268" required />
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <input id="phone" size="40" maxlength="400" class="wpcf7-form-control wpcf7-tel" 
                                           placeholder="Phone Number" type="tel" name="tel-phone" required />
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <input id="subject" size="40" maxlength="400" class="wpcf7-form-control wpcf7-text" 
                                           placeholder="Subject" type="text" name="text-subject" />
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <p>
                                    <textarea id="message" cols="40" rows="10" maxlength="2000" 
                                              class="wpcf7-form-control wpcf7-textarea" 
                                              placeholder="Write Message" name="textarea-message" required></textarea>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <p>
                                    <input class="wpcf7-form-control wpcf7-submit has-spinner thm-btn" 
                                           type="submit" value="Send a Message" />
                                </p>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- <div class="google-map__home-two">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d941065.3053942532!2d73.721346!3d22.8751156!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39611c1cd99e34e1%3A0x1d4b68f7bc1ab11f!2sMega%20GIDC!5e0!3m2!1sen!2sin!4v1758217863295!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> -->
<?php include('footer.php') ?>

<script>
function sendToWhatsApp(event) {
    event.preventDefault(); // Stop default form submission

    let form = event.target;
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let subject = document.getElementById("subject").value;
    let message = document.getElementById("message").value;

    // Replace with your WhatsApp number (no + or 00)
    let phoneNumber = "919081336347";

    let url = "https://wa.me/" + phoneNumber + "?text=" +
        "Name: " + encodeURIComponent(name) + "%0a" +
        "Email: " + encodeURIComponent(email) + "%0a" +
        "Phone: " + encodeURIComponent(phone) + "%0a" +
        "Subject: " + encodeURIComponent(subject) + "%0a" +
        "Message: " + encodeURIComponent(message);

    window.open(url, "_blank"); 
}
</script>
