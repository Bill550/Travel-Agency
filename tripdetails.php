<?php
include('includes/Header.php'); 
include('includes/navbar.php');
include('includes/security.php');
include('includes/dbconfig.php');
?>
<!--================Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content">
                <div class="page_link">
                    <a href="index.php">Home</a>
                    <a href="tripdetails.php">Trip Details</a>
                </div>
                <h2>Trip Details</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <h1>Trip Name</h1>
                    <h3>Price:</h3>
                    <h3>Trip Type</h3>
                    <h3>Location:Azad Kashmir</h3>
                    <h3>Trip Duration:</h3>
                    <h3>Seats Available:</h3>
                    <div class="button-group-area mt-10">
                        <button class="genric-btn success-border circle arrow" data-toggle="modal"
                            data-target="#exampleModal">
                            BookNow<span class="lnr lnr-arrow-right"></span></button>
                    </div>
                    <br>
                    <br>
                </div>


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <br>
                            <br>
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-10">
                        <div class="feature-img">
                            <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                        </div>
                    </div>

                    <!-- <div class="col-lg-7 col-md-9 blog_details">
                            <h2>Astronomy Binoculars A Great Alternative</h2>
                            <p class="excert">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction.
                            </p>
                            <p>
                                Boot camps have its supporters and its detractors. Some people do not understand why
                                you should have to spend money on boot camp when you can get the MCSE study materials
                                yourself at a fraction of the camp price. However, who has the willpower to actually
                                sit through a self-imposed MCSE training. who has the willpower to actually sit through
                                a self-imposed
                            </p>
                            <p>
                                Boot camps have its supporters and its detractors. Some people do not understand why
                                you should have to spend money on boot camp when you can get the MCSE study materials
                                yourself at a fraction of the camp price. However, who has the willpower to actually
                                sit through a self-imposed MCSE training. who has the willpower to actually sit through
                                a self-imposed
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training.
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                                </div>
                                <div class="col-lg-12 mt-25">
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction of the camp price. However, who has
                                        the willpower.
                                    </p>
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction of the camp price. However, who has
                                        the willpower.
                                    </p>
                                </div>
                            </div>
                        </div> -->
                </div>
                <br>
                <br>
                <!-- ////////////////////////////////////////////////////////// -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-Overview-tab" data-toggle="pill" href="#pills-Overview"
                            role="tab" aria-controls="pills-Overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Itinerary-tab" data-toggle="pill" href="#pills-Itinerary"
                            role="tab" aria-controls="pills-Itinerary" aria-selected="false">Itinerary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Includes-tab" data-toggle="pill" href="#pills-Includes" role="tab"
                            aria-controls="pills-Includes" aria-selected="false">Trip Includes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Excludes-tab" data-toggle="pill" href="#pills-Excludes" role="tab"
                            aria-controls="pills-Excludes" aria-selected="false">Trip Excludes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Gallery-tab" data-toggle="pill" href="#pills-Gallery" role="tab"
                            aria-controls="pills-Gallery" aria-selected="false">Gallery</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Overview" role="tabpanel"
                        aria-labelledby="pills-Overview-tab">
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-left">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Itinerary" role="tabpanel"
                        aria-labelledby="pills-Itinerary-tab">
                        ...</div>
                    <div class="tab-pane fade" id="pills-Includes" role="tabpanel" aria-labelledby="pills-Includes-tab">
                        ...</div>
                    <div class="tab-pane fade" id="pills-Excludes" role="tabpanel" aria-labelledby="pills-Excludes-tab">
                        ...</div>
                    <div class="tab-pane fade" id="pills-Gallery" role="tabpanel" aria-labelledby="pills-Gallery-tab">
                        <section>
                            <div class="whole-wrap">
                                <div class="container">
                                    <div class="section-top-border">
                                        <h3 class="title_color">Image Gallery</h3>
                                        <div class="row gallery-item">
                                            <div class="col-md-4">
                                                <a href="img/elements/g1.jpg" class="img-gal">
                                                    <div class="single-gallery-image"
                                                        style="background: url(img/elements/g1.jpg);"></div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="img/elements/g2.jpg" class="img-gal">
                                                    <div class="single-gallery-image"
                                                        style="background: url(img/elements/g2.jpg);"></div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="img/elements/g3.jpg" class="img-gal">
                                                    <div class="single-gallery-image"
                                                        style="background: url(img/elements/g3.jpg);"></div>
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="img/elements/g4.jpg" class="img-gal">
                                                    <div class="single-gallery-image"
                                                        style="background: url(img/elements/g4.jpg);"></div>
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="img/elements/g5.jpg" class="img-gal">
                                                    <div class="single-gallery-image"
                                                        style="background: url(img/elements/g5.jpg);"></div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="img/elements/g6.jpg" class="img-gal">
                                                    <div class="single-gallery-image"
                                                        style="background: url(img/elements/g6.jpg);"></div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="img/elements/g7.jpg" class="img-gal">
                                                    <div class="single-gallery-image"
                                                        style="background: url(img/elements/g7.jpg);"></div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="img/elements/g8.jpg" class="img-gal">
                                                    <div class="single-gallery-image"
                                                        style="background: url(img/elements/g8.jpg);"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!--================Blog Area =================-->

<?php
		include('includes/script.php');  
		include('includes/Footer.php'); 
?>