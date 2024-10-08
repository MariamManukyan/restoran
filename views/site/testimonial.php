<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="<?= Url::to(['/site/index']) ?>" class="nav-item nav-link">Home</a>
                <a href="<?= Url::to(['/site/about']) ?>" class="nav-item nav-link">About</a>
                <a href="<?= Url::to(['/site/service']) ?>" class="nav-item nav-link">Service</a>
                <a href="<?= Url::to(['/site/menu']) ?>" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= Url::to(['/site/booking']) ?>" class="dropdown-item">Booking</a>
                        <a href="<?= Url::to(['/site/team/']) ?>" class="dropdown-item">Our Team</a>
                        <a href="<?= Url::to(['/site/testimonial']) ?>" class="dropdown-item active">Testimonial</a>
                    </div>
                </div>
                <a href="<?= Url::to(['/site/contact']) ?>" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
        </div>
    </nav>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>