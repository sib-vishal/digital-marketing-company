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
                <div class=" services_banner_first text-center ">
                    <h1 class="fontWeight800  text-white banner_heading font-Archivo">Our Portfolio
                    </h1>
                    <p class="text-white small_heading mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quasi laudantium reiciendis
                        ducimus, exercitationem, corrupti inventore
                    </p>
                </div>
            </div>

            <div class="custom-shape-divider-top-1718012193 ">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                        class="shape-fill"></path>
                </svg>
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
                <a href="" rel="gallery" data-fancybox="Gallery" class="gallery_product col-lg-6 filter marketing  fancybox">
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
    <section class="pb-0  about_section2" style="background-image: url(images/about/demo-digital-agency-02.jpg);">
        <div class="opacity-light bg-dark-gray"></div>

        <div class="containerFull">

            <div class="row my-5">
                <div class="col-lg-6">
                    <h4 class="large_heading fontWeight800 font-Archivo text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, molestiae.

                    </h4>
                </div>
                <div class="col">
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






    <!-- **************************** -->
    <section class="dm_creative ">
        <div class="containerFull">
            <div class="row mb-8 align-items-center">
                <div class="col-lg-5 md-mb-50px sm-mb-30px ">
                    <figure class="position-relative  shadow mb-0 overflow-hidden">
                        <img src="images/why.jpg" class="w-100 " alt="" data-no-retina="">
                        <figcaption class="figcaption">
                            <h1 class="large_heading fontWeight800 d-flex justify-content-center text-color1 ">20<sub
                                    class="fs-40 lh-40 text-dark-gray position-relative top-minus-40px">+</sub></h1>
                            <span class="title fontWeight600">Years
                                working experience</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-7 dm_creative_right">
                    <h2 class="large_heading fontWeight800  font-Archivo" style="">We're a
                        creative digital agency.</h2>
                    <p class="mt-3 title" style="">We are excited for our work and how it positively impacts clients.
                        With over 28 years of experience we have been constantly providing excellent web solutions is
                        best in-class experience.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, delectus nesciunt? Voluptas
                        asperiores molestiae recusandae porro iusto autem eius placeat!
                    </p>
                    <p class="mt-3 title" style="">We are excited for our work and how it positively impacts clients.
                        We constantly providing excellent web solutions is best in-class experience.</p>
                    <p class="mt-3 title" style="">We are excited for our work and how it positively impacts clients.
                        We constantly providing excellent web solutions is best in-class experience.</p>
                    <p class="mt-3 title" style="">We are excited for our work and how it positively impacts clients.
                        We constantly providing excellent web solutions is best in-class experience. Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Ducimus placeat, perferendis architecto dolorum natus sit
                        voluptatum quaerat optio vel repudiandae?</p>
                    <div class="d-inline-block w-100 mt-4" style="">
                        <a href="#" class="btn_1"><i class="fa-regular fa-envelope icon "></i> &nbsp; Let's
                            talk now</a>
                        <a href="tel:+91-9769245614" class="btn_2 "><i class="fa-solid fa-phone icon"></i>
                            &nbsp;+91-9769245614</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- client slider -->
    <?php include 'include/client-slider.php'; ?>

    <?php include 'include/footer.php'; ?>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>