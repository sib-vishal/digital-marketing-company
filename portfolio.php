<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio | Pov Media</title>
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
                    <h1 class="fontWeight800    font-Archivo" data-aos="zoom-in">Our Portfolio
                    </h1>
                    <p class=" small_heading mt-3" data-aos="fade-up">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quasi laudantium reiciendis
                        ducimus, exercitationem, corrupti inventore
                    </p>
                </div>
            </div>

            
        </div>


    </div>
    <!-- portfolio -->
    <section>


        <div class="containerFull">
            <div class="row m-0 p-0 ">
                <div class="row  justify-content-between m-0 p-0">


                    <div class="gallery col-lg-3">
                        <h1 class=" font-Archivo large_heading fontWeight800">Our Portfolio </h1>
                    </div>

                    <div class="col-auto   ">
                        <button class="btn btn-default filter-button active1" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="seo">SEO</button>
                        <button class="btn btn-default filter-button" data-filter="ContentMarketing">Content
                            Marketing</button>
                        <button class="btn btn-default filter-button" data-filter="marketing">Digital Marketing</button>
                        <!-- <button class="btn btn-default filter-button" data-filter="ppc">PPC</button> -->
                    </div>
                </div>
                <br />
                <div class="col-lg-12 mt-5 ">

                </div>
            </div>
            <div class="row portfolio_gallery">
                <a href="" rel="gallery" data-fancybox="Gallery" class="gallery_product col-lg-6 filter seo fancybox">
                    <div class="gallery_product_inner portfolio_images col-lg-6  w-100  ">
                        <div class="arrowIcon rounded-circle d-flex position-absolute ">
                            <i class="fa fa-arrow-right  text-white "></i>
                        </div>
                        <div class="p-3  text-white">
                            <h4 class="mb-3">
                                Digital Marketing

                            </h4>

                            <p class="text-white gallery_product_inner_discription ">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Commodi, expedita deleniti
                                repudiandae enim
                                quos consequuntur eligendi, iste minus nam natus illum magnam adipisci. Dolorum, cum
                                quae voluptatibus
                                aliquam suscipit consectetur!</p>
                        </div>
                    </div>
                </a>
                <a href="" rel="gallery" data-fancybox="Gallery"
                    class="gallery_product col-lg-6 filter marketing  fancybox">
                    <div class="gallery_product col-lg-6 filter marketing w-100 ">
                        <div class="gallery_product_inner portfolio_images w-100 ">
                            <div class="arrowIcon rounded-circle d-flex position-absolute ">
                                <i class="fa fa-arrow-right  text-white "></i>
                            </div>
                            <div class="p-3  text-white">
                                <h4 class="mb-3">
                                    Social Media Marketing

                                </h4>

                                <p class="text-white gallery_product_inner_discription ">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Commodi, expedita deleniti
                                    repudiandae enim
                                    quos consequuntur eligendi, iste minus nam natus illum magnam adipisci. Dolorum, cum
                                    quae voluptatibus
                                    aliquam suscipit consectetur!</p>
                            </div>
                        </div>
                    </div>

                </a>

                <a href="" rel="gallery" data-fancybox="Gallery"
                    class="gallery_product  d-block  col-lg-6 filter   fancybox">

                    <div class="gallery_product col-lg-6 filter ContentMarketing w-100 ">
                        <div class="gallery_product_inner portfolio_images w-100 ">
                            <div class="arrowIcon rounded-circle d-flex position-absolute ">
                                <i class="fa fa-arrow-right  text-white "></i>
                            </div>


                            <div class="p-3  text-white">
                                <h4 class="mb-3">
                                    Content Marketing
                                    <!-- <i class="fa fa-arrow-right  text-white "></i> -->
                                </h4>

                                <p class="text-white gallery_product_inner_discription ">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Commodi, expedita deleniti
                                    repudiandae enim
                                    quos consequuntur eligendi, iste minus nam natus illum magnam adipisci. Dolorum, cum
                                    quae voluptatibus
                                    aliquam suscipit consectetur!</p>
                            </div>
                        </div>
                    </div>

                </a>
                <a href="" rel="gallery" data-fancybox="Gallery"
                    class="gallery_product  d-block   col-lg-6 filter  fancybox">
                    <div class="gallery_product col-lg-6 filter ContentMarketing w-100 ">
                        <div class="gallery_product_inner portfolio_images w-100 ">
                            <div class="arrowIcon rounded-circle d-flex position-absolute ">
                                <i class="fa fa-arrow-right  text-white "></i>
                            </div>


                            <div class="p-3  text-white">
                                <h4 class="mb-3">
                                    Content Marketing
                                    <!-- <i class="fa fa-arrow-right  text-white "></i> -->
                                </h4>

                                <p class="text-white gallery_product_inner_discription ">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Commodi, expedita deleniti
                                    repudiandae enim
                                    quos consequuntur eligendi, iste minus nam natus illum magnam adipisci. Dolorum, cum
                                    quae voluptatibus
                                    aliquam suscipit consectetur!</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>





    <!-- ************************ -->
    <section class="pb-0  about_section2 overflow-hidden"
        style="background-image: url(images/call-to-action.png);">
        <div class="opacity-light bg-dark-gray"></div>

        <div class="containerFull">

            <div class="row my-5">
                <div class="col-lg-6" data-aos="fade-up-right">
                    <h4 class="large_heading fontWeight800 font-Archivo text-white mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.

                    </h4>
                    <a data-aos="" href="#" data-aos-delay="250" class="btn_1" data-fancybox
                        data-src="#dialog-content">Let's work togather <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="col" data-aos="fade-up-left">
                    <p class="title text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quam maiores temporibus minima,
                        reiciendis dolor corporis quos odio architecto nobis adipisci optio atque! Repellendus nam
                        voluptates rerum quam, consequuntur saepe.

                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quam maiores temporibus minima,
                        reiciendis dolor corporis quos odio architecto nobis adipisci optio atque! Repellendus nam
                        voluptates rerum quam, consequuntur saepe.

                    </p>
                </div>

            </div>
        </div>
        <div class="blur_bg py-4  ">
            <div class="containerFull">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center align-items-center">

                    <div class="col  text-center" style="">
                        <div class="feature-box  d-inline-flex align-middle">

                            <div class="feature-box-content">
                                <span class=" text-white d-flex align-items-center gap-2  "><img class="icon"
                                        width="35px" src="images/icons/office-building.png" alt=""> Trusted
                                    company</span>
                            </div>
                        </div>
                    </div>


                    <div class="col  text-center" style="">
                        <div class="feature-box  d-inline-flex align-middle">

                            <div class="feature-box-content">
                                <span class=" text-white d-flex align-items-center gap-2 ">
                                    <img class="icon" width="35px" src="images/icons/award.png" alt="">
                                    Award winning</span>
                            </div>
                        </div>
                    </div>


                    <div class="col icon-with-text-style-08 xs-mb-30px text-center" style="">
                        <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">

                            <div class="feature-box-content">
                                <span class=" text-white d-flex align-items-center gap-2">
                                    <img class="icon" width="35px" src="images/icons/work-team.png" alt="">
                                    Professional work</span>
                            </div>
                        </div>
                    </div>


                    <div class="col  text-center" style="">
                        <div class="feature-box d-inline-flex align-middle">
                            <div class="feature-box-content">
                                <span class="text-white d-flex align-items-center gap-2">
                                    <img class="icon" width="35px" src="images/icons/support.png" alt="">
                                    Help any time</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
z
    <!-- client slider -->
    <?php include 'include/client-slider.php'; ?>

    <?php include 'include/footer.php'; ?>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>