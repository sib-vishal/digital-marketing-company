<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Pov Media</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
</head>

<body onload="createCaptcha();">
    <div class="wrapper ">

        <?php include 'include/header.php'; ?>


        <div class="contact">
            <div class="containerFull w-100">

                <div class="row m-0">
                    <div class="col-lg-6  contact_banner_first ">
                        <h1 class="fontWeight800  text-white banner_heading font-Archivo" data-aos="fade-up">Contact Us
                        </h1>
                    </div>
                    <div class="col-lg-6 position-relative overflow-hidden banner_video_main ">

                        <p class="text-white heading font-Archivo" data-aos="flip-up">
                            We're here to here answer any question you may have. Let us help you get your project
                            started.
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="Contact_details">
        <div class="containerFull">
            <div>
                <h2 class="large_heading fontWeight700  font-Archivo ">
                    We're here to help you and answer any questions you might have.
                </h2>
            </div>

            <div class="row mt-5" data-aos="fade-up">

                <div class="col " style="">
                    <div class="">
                        <div class="">
                            <img width="70" class=" mb-20px icon " src="images/contact/details/location.svg" alt="">
                        </div>
                        <div class=" ">
                            <span class="d-block mt-2 font-Archivo mb-5px heading fontWeight700">Office location</span>
                            <p class="w-80 xl-w-100 md-w-75 mx-auto title">Goregaon (E), Mumbai</p>
                        </div>
                    </div>
                </div>


                <div class="col" style="">
                    <div class="">
                        <div class="">
                            <img width="70" class=" mb-20px icon " src="images/contact/details/message.svg" alt="">
                        </div>
                        <div class=" last-paragraph-no-margin">
                            <span class="d-block mt-2 font-Archivo mb-5px heading fontWeight700">Send a message</span>
                            <div class="w-100 d-block">
                                <a href="mailto:contact@povmedia.in" class=" text-black  ">contact@povmedia.in</a><br>
                                <a href="mailto:hr@povmedia.in" class="text-black ">hr@povmedia.in</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col " style="">
                    <div class="">
                        <div class="">
                            <img width="70" class=" mb-20px icon " src="images/contact/details/phone.svg" alt="">
                        </div>
                        <div class="">
                            <span class="d-block mt-2 font-Archivo mb-5px heading fontWeight700">Let's talk with
                                us</span>
                            <div class="w-100 d-block">
                                <span class="d-block">Phone: <a href="tel:+91-9769245614"
                                        class=" text-black">+91-9769245614</a></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col" style="">
                    <div class="">
                        <div class="">
                            <img width="70" class=" mb-20px icon " src="images/contact/details/team.svg" alt="">
                        </div>
                        <div class="">
                            <span class="d-block mt-2 font-Archivo mb-5px heading fontWeight700">Join our team</span>
                            <p class="w-80 lg-w-100 md-w-75 sm-w-85 xs-w-75 mx-auto small_heading">Lorem ipsum is simply
                                the printing
                                typesetting.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- contact form  -->


  
    <section class="bggray">
        <div class="containerFull">
            <div class="row">
                <div class="col-lg-6">
                    <div class="leftContact">
                        <h4 data-aos="zoom-in-up" class="large_heading  fontWeight800 font-Archivo ">Contact
                            us</h4>
                        <p class="title mt-3" data-aos="zoom-in-up">Connect with Us for Support, Inquiries, and Feedback.</p>

                        <div data-aos="zoom-in-up" class="aos-init aos-animate mt-4">
                            <iframe class="w-100 shadow "
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.4210078837586!2d72.83188997425444!3d19.176805448802103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7d34f9e2403%3A0x3c57d951fa1f7e17!2sPOV%20Media!5e0!3m2!1sen!2sin!4v1718281363529!5m2!1sen!2sin"
                                width="600" height="460" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 aos-init aos-animate contact_page" data-aos="zoom-in-up">
                    <div class="contactForm">

                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="itemForm">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" placeholder="John" id="fname">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="itemForm">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" placeholder="Smith" id="lname">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="itemForm">
                                    <label for="email">E-mail Address</label>
                                    <input type="email" name="email" placeholder="johnsmith@tapar.com" id="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="itemForm">
                                    <label for="phone">Phone</label>
                                    <input type="tel" name="phone" placeholder="+91 999999999" id="phone">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="itemForm">
                                    <label for="message">Your Message</label>
                                    <textarea name="message" id="message"
                                        placeholder="Write your message here..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class=" send_btn py-3 w-100 bg-white border-0 fontWeight600">Send
                                    Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- client slider -->'
    <?php include 'include/client-slider.php'; ?>

    <?php include 'include/footer.php'; ?>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>