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
                        <h1 class="fontWeight800  text-white banner_heading font-Archivo">Contact Us</h1>
                    </div>
                    <div class="col-lg-6 position-relative overflow-hidden banner_video_main ">

                        <p class="text-white heading font-Archivo">
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

            <div class="row mt-5">

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


    <section class="" style="background:#c7c6c61e;">
        <div class="containerFull">
            <h4 class="large_heading text-center fontWeight800 font-Archivo  ">Have a project in mind? Let's disscuss!
            </h4>
            <h5 class="mt-3 text-center small_heading">Ready to work together? Get an estimate from us.</h5>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="formBlock position-relative bg-white rounded shadow">
                        <h3 class="sub_heading fontKanit">Hello, POV MEDIA. team!</h3>
                        <div class="row mt-lg-5 mt-4">
                            <div class="col-lg-6">
                                <div class="itemForm">
                                    <label class="small_heading fontWeight500">My name is</label>
                                    <input type="text" name="name" class="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="itemForm">
                                    <label class="small_heading fontWeight500">From</label>
                                    <input type="text" name="from" class="from" placeholder="Website or Company Name">
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="itemForm d-flex">
                                    <label class="small_heading fontWeight500">I’d like to discuss</label>
                                    <div class="rightCheck ms-lg-3">
                                        <div class="checkBox">
                                            <ul>
                                                <li>
                                                    <input type="checkbox" name="" id="brand">
                                                    <label for="brand">Brand Content &amp; Design</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="" id="smm">
                                                    <label for="smm">Social Media Management</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="" id="strategy">
                                                    <label for="strategy">Advertising Strategy &amp; Counsel</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="" id="pm">
                                                    <label for="pm">Permformance Marketing</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="" id="web">
                                                    <label for="web">Website Designing &amp; Developement</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="" id="cms">
                                                    <label for="cms">Content Management System</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="itemForm">
                                    <label class="small_heading fontWeight500">Project idea &amp; design brief.</label>
                                    <textarea class="message" name="message"
                                        placeholder="Pitch Your Project Idea "></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="itemForm d-flex">
                                    <label class="small_heading fontWeight500">A budget for this project is</label>
                                    <div class="rightCheck budgetRight ms-lg-3">
                                        <div class="checkBox">
                                            <ul>
                                                <li>
                                                    <input type="radio" name="budget" id="budget">
                                                    <label for="budget">&lt;50k</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="budget" id="budget2">
                                                    <label for="budget2">50k-90k</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="budget" id="budget3">
                                                    <label for="budget3">90k-150k</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="budget" id="budget4">
                                                    <label for="budget4">&gt;150k</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="itemForm">
                                    <label class="small_heading fontWeight500">Contact me back at</label>
                                    <input type="email" name="email" class="email" placeholder="Your E-mail">
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="itemForm text-center">
                                    <button class="btn_1 border-0" aria-selected="true" tabindex="0">Send Message <i
                                            class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="cirlceLeft"></div>
                        <div class="cirlceLeft2"></div>
                        <div class="cirlceLeft3"></div>
                        <div class="cirlceLeft4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- client slider -->'
    <section class="overflow-hidden ">
        <div class="containerFull">

            <div class="">
                <div class=" clients">
                    <div class="col-lg-2">
                        <div class="itemReview">
                            <img src="images/clients/client (1).png">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="itemReview">
                            <img src="images/clients/client (2).png">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="itemReview">
                            <img src="images/clients/client (3).png">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="itemReview">
                            <img src="images/clients/client (4).png">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="itemReview">
                            <img src="images/clients/client (5).png">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="itemReview">
                            <img src="images/clients/client (6).png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php include 'include/footer.php'; ?>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>