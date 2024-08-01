<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Case Study | Pov Media</title>
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

        <div class="services-main position-relative overflow-hidden ">
            <div class="containerFull w-100">
                <div class=" services_banner_first  ">
                    <h1 class="fontWeight800   banner_heading font-Archivo" data-aos="zoom-in">Case Studies
                    </h1>
                    <p class=" small_heading mt-3" data-aos="fade-up">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quasi laudantium reiciendis
                        ducimus, exercitationem, corrupti inventore
                    </p>
                </div>
            </div>


        </div>

    </div>
    <section class="">
        <div class="containerFull">
            <h3 class=" large_heading fontWeight800 mb-3 font-Archivo">Our Case Studies</h3>
            <p class="title" data-aos="fade-up">Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit
                amet nisl tempus
                convallis quis ac lectus.<br> Proin Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                in, elementum id enim.</p>
            <div class="case-study-grid">
                <a href="case-study-details.php" class="item_grid">
                    <div class="img-box">
                        <img src="images/influencer-marketing1.jpg" alt="">
                    </div>
                    <div class="item_content">
                        <div>
                            <h4>Lorem ipsum dolor sit</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, ab!
                            </p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="b arrowIcon rounded-circle d-flex position-absolute ">
                        <i class="fa fa-arrow-right  text-white "></i>
                    </div>
                </a>
                <a href="case-study-details.php" class="item_grid">
                    <div class="img-box">
                        <img src="images/influencer-marketing1.jpg" alt="">
                    </div>
                    <div class="item_content">
                        <div>
                            <h4>Lorem ipsum dolor sit</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, ab!
                            </p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="b arrowIcon rounded-circle d-flex position-absolute ">
                        <i class="fa fa-arrow-right  text-white "></i>
                    </div>
                </a>
                <a href="case-study-details.php" class="item_grid">
                    <div class="img-box">
                        <img src="images/influencer-marketing1.jpg" alt="">

                    </div>
                    <div class="item_content">
                        <div>

                            <h4>Lorem ipsum dolor sit</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, ab!
                            </p>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="b arrowIcon rounded-circle d-flex position-absolute ">
                        <i class="fa fa-arrow-right  text-white "></i>
                    </div>
                </a>
            </div>
        </div>
    </section>



    <?php include 'include/footer.php'; ?>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>