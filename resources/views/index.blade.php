@extends('layouts/app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/job-result.css') }}">

    <section class="header-inner header-inner-big bg-holder text-white"
        style="background-image: url(images/bg/banner-01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-white mb-3">Drop <span class="text-primary"> Resume & Get </span> Your Desired Job</h1>
                    <p class="lead mb-4 mb-lg-5 font-weight-normal">Find Jobs, Employment & Career Opportunities</p>
                    <div class="job-search-field header-sticky">
                        <div class="job-search-item">
                            <form class="form row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <label>What</label>
                                            <span class="ml-auto">e.g. job, company, title</span>
                                        </div>
                                        <div class="position-relative left-icon">
                                            <input id="mkeywords" type="text" class="form-control" name="job_title"
                                                placeholder="Job title, skill or company">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <label>Where</label>
                                            <span class="ml-auto">e.g. city, county or postcode</span>
                                        </div>
                                        <div class="position-relative left-icon">
                                            <input id="mwork-locations" type="text" class="form-control location-input"
                                                name="job_title" placeholder="Town, city or postcode">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="form-group form-action">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="mainsearchJob()"><i
                                                class="fas fa-search"></i> Get a Job</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="job-tag mt-4">
                        <ul class="justify-content-center">
                            <li class="text-primary">Trending Keywords :</li>
                            <li><a href="#">Automotive,</a></li>
                            <li><a href="#">Education,</a></li>
                            <li><a href="#">Health and Care Engineering</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-lg-5 our-clients">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="owl-carousel owl-nav-center" data-animateOut="fadeOut" data-nav-dots="false" data-items="6"
                        data-md-items="5" data-sm-items="4" data-xs-items="3" data-xx-items="2" data-space="50">

                        <div class="item">
                            <img class="img-fluid" src="images/client/amazon.svg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/client/flipkart.svg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/client/google.svg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/client/paypal.svg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/client/philips.svg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/client/slack.svg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/client/spotify.svg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/client/stack-overflow.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          clients -->



    <!--=================================
          Browse-job -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-02 text-center">
                        <h2>Jobs Available in Malaysia</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="browse-job d-flex">
                        <h3 class="mb-3">Job Type</h3>
                        <div class="justify-content-center flex-fill">
                            <ul class="nav nav-tabs nav-tabs-02 justify-content-center d-flex mb-3 mb-md-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Part Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#contact" role="tab"
                                        aria-controls="home" aria-selected="true">Full Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Work From Home</a>
                            </ul>
                        </div>
                        <div class="job-found mb-3">
                            <span class="badge badge-lg badge-primary">24123</span>
                            <h6 class="ml-3 mb-0">Job Found</h6>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row mt-4 mt-md-5">
                                <div class="col-md-4 border-right mb-3 mb-md-0">
                                    <div class="category-style-02">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#">
                                                    <h6 class="category-title">Accountancy</h6> <span
                                                        class="category-count">32761</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Apprenticeships</h6> <span
                                                        class="category-count">23703</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Banking</h6> <span
                                                        class="category-count">20321</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Charity &amp; Voluntary</h6> <span
                                                        class="category-count">9042</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Construction &amp; Property</h6> <span
                                                        class="category-count">5728</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Customer Service</h6> <span
                                                        class="category-count">5578</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Education</h6> <span
                                                        class="category-count">4399</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Energy</h6> <span
                                                        class="category-count">3350</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Engineering</h6> <span
                                                        class="category-count">2948</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Estate Agency</h6> <span
                                                        class="category-count">2638</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 border-right mb-3 mb-md-0">
                                    <div class="category-style-02">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#">
                                                    <h6 class="category-title">Financial Services</h6> <span
                                                        class="category-count">32761</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">FMCG</h6> <span
                                                        class="category-count">23703</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">General Insurance</h6> <span
                                                        class="category-count">20321</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Graduate Training &amp; Internships</h6>
                                                    <span class="category-count">9042</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Health &amp; Medicine</h6> <span
                                                        class="category-count">5728</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Hospitality &amp; Catering</h6> <span
                                                        class="category-count">5578</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Human Resources</h6> <span
                                                        class="category-count">4399</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">IT &amp; Telecoms</h6> <span
                                                        class="category-count">3350</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Legal</h6> <span
                                                        class="category-count">2948</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Leisure &amp; Tourism</h6> <span
                                                        class="category-count">2638</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="category-style-02">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#">
                                                    <h6 class="category-title">Manufacturing</h6> <span
                                                        class="category-count">32761</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Marketing &amp; PR</h6> <span
                                                        class="category-count">23703</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Media, Digital &amp; Creative</h6> <span
                                                        class="category-count">20321</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Motoring &amp; Automotive</h6> <span
                                                        class="category-count">9042</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Public Sector</h6> <span
                                                        class="category-count">5728</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Purchasing</h6> <span
                                                        class="category-count">5578</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Retail</h6> <span
                                                        class="category-count">4399</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Scientific</h6> <span
                                                        class="category-count">3350</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Security &amp; Safety</h6> <span
                                                        class="category-count">2948</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Strategy &amp; Consultancy</h6> <span
                                                        class="category-count">2638</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-4 mt-md-5">
                                <div class="col-md-4 border-right mb-3 mb-md-0">
                                    <div class="category-style-02">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#">
                                                    <h6 class="category-title">Manufacturing</h6> <span
                                                        class="category-count">32761</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Marketing &amp; PR</h6> <span
                                                        class="category-count">23703</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Media, Digital &amp; Creative</h6> <span
                                                        class="category-count">20321</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Motoring &amp; Automotive</h6> <span
                                                        class="category-count">9042</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Public Sector</h6> <span
                                                        class="category-count">5728</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Purchasing</h6> <span
                                                        class="category-count">5578</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Retail</h6> <span
                                                        class="category-count">4399</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Scientific</h6> <span
                                                        class="category-count">3350</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Security &amp; Safety</h6> <span
                                                        class="category-count">2948</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Strategy &amp; Consultancy</h6> <span
                                                        class="category-count">2638</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 border-right mb-3 mb-md-0">
                                    <div class="category-style-02">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#">
                                                    <h6 class="category-title">Accountancy</h6> <span
                                                        class="category-count">32761</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Apprenticeships</h6> <span
                                                        class="category-count">23703</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Banking</h6> <span
                                                        class="category-count">20321</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Charity &amp; Voluntary</h6> <span
                                                        class="category-count">9042</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Construction &amp; Property</h6> <span
                                                        class="category-count">5728</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Customer Service</h6> <span
                                                        class="category-count">5578</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Education</h6> <span
                                                        class="category-count">4399</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Energy</h6> <span
                                                        class="category-count">3350</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Engineering</h6> <span
                                                        class="category-count">2948</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Estate Agency</h6> <span
                                                        class="category-count">2638</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="category-style-02">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#">
                                                    <h6 class="category-title">Financial Services</h6> <span
                                                        class="category-count">32761</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">FMCG</h6> <span
                                                        class="category-count">23703</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">General Insurance</h6> <span
                                                        class="category-count">20321</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Graduate Training &amp; Internships</h6>
                                                    <span class="category-count">9042</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Health &amp; Medicine</h6> <span
                                                        class="category-count">5728</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Hospitality &amp; Catering</h6> <span
                                                        class="category-count">5578</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Human Resources</h6> <span
                                                        class="category-count">4399</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">IT &amp; Telecoms</h6> <span
                                                        class="category-count">3350</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Legal</h6> <span
                                                        class="category-count">2948</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Leisure &amp; Tourism</h6> <span
                                                        class="category-count">2638</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row mt-4 mt-md-5">
                                <div class="col-md-4 border-right mb-3 mb-md-0">
                                    <div class="category-style-02">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#">
                                                    <h6 class="category-title">Wellesley Rd, London</h6> <span
                                                        class="category-count">32761</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Needham, MA</h6> <span
                                                        class="category-count">23703</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">New Castle, PA</h6> <span
                                                        class="category-count">20321</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Park Avenue, Mumbai</h6> <span
                                                        class="category-count">9042</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Green Lanes, London</h6> <span
                                                        class="category-count">5728</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Ormskirk Rd, Wigan</h6> <span
                                                        class="category-count">5578</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Taunton, London</h6> <span
                                                        class="category-count">4399</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Botchergate, Carlisle</h6> <span
                                                        class="category-count">3350</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Paris, Île-de-France</h6> <span
                                                        class="category-count">2948</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Union St, New Delhi</h6> <span
                                                        class="category-count">2638</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 border-right mb-3 mb-md-0">
                                    <div class="category-style-02">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#">
                                                    <h6 class="category-title">Canyon Village, Ramon</h6> <span
                                                        class="category-count">32761</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Fairfield Dr, Granger</h6> <span
                                                        class="category-count">23703</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Lynch Lane, Weymouth</h6> <span
                                                        class="category-count">20321</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Burry Port, Surat</h6> <span
                                                        class="category-count">9042</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">North Miles Street Glasgow</h6> <span
                                                        class="category-count">5728</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Lafayette Lane PA</h6> <span
                                                        class="category-count">5578</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Mayfair Ave. Astoria, NY</h6> <span
                                                        class="category-count">4399</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">South St. Edison, NJ</h6> <span
                                                        class="category-count">3350</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Ohio Drive Huntsville, AL</h6> <span
                                                        class="category-count">2948</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Salisbury, MD</h6> <span
                                                        class="category-count">2638</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="category-style-02">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#">
                                                    <h6 class="category-title">Eastpointe, MI</h6> <span
                                                        class="category-count">32761</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Hanover Street Annapolis</h6> <span
                                                        class="category-count">23703</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Tanglewood Rd. Joliet, IL</h6> <span
                                                        class="category-count">20321</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Valley Stream, NY</h6> <span
                                                        class="category-count">9042</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Walt Whitman St. MA</h6> <span
                                                        class="category-count">5728</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">301 Glenlake St. NC</h6> <span
                                                        class="category-count">5578</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Young Ave. Bridgeport, CT</h6> <span
                                                        class="category-count">4399</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">2 Maiden St. OH</h6> <span
                                                        class="category-count">3350</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Surrey Avenue Euless, TX</h6> <span
                                                        class="category-count">2948</span>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="category-title">Branch Dr. Odenton, MD</h6> <span
                                                        class="category-count">2638</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          Browse-job -->






    <!--=================================
          Divider -->
    <div class="container space-pb">
        <div class="row">
            <div class="col-12">
                <hr class="m-0">
            </div>
        </div>
    </div>
    <!--=================================
          Divider -->

    <!--=================================
          Feature-info -->
    <section class="space-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="feature-info feature-info-02 p-4 p-md-5 bg-primary">
                        <div class="feature-info-icon mb-3 text-dark">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="feature-info-content pl-sm-4 pl-0">
                            <h5 class="text-white">Looking For Job?</h5>
                            <p class="text-white">Your next role could be with one of these top leading organizations.</p>
                            <a href="jobs">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-info feature-info-02 p-4 p-md-5 bg-dark">
                        <div class="feature-info-icon mb-3 text-primary">
                            <i class="flaticon-job-3"></i>
                        </div>
                        <div class="feature-info-content pl-sm-4 pl-0">
                            <h5 class="text-white">Are You Recruiting?</h5>
                            <p class="text-white">Five million searchable CVs in one place with our linked CV database.</p>
                            <a href="dashboard-post-job">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          Feature-info -->



    <!--=================================
          Browse listing  -->
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-job d-flex">
                        <h3 class="mb-4 mb-md-3">Top Companies </h3>
                        <div class="justify-content-center flex-fill">
                            <ul class="nav nav-tabs nav-tabs-02 justify-content-center d-flex mb-4 mb-md-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Jobs-tab" data-toggle="tab" href="#Jobs" role="tab"
                                        aria-controls="Jobs" aria-selected="true">Latest Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Resumes-tab" data-toggle="tab" href="#Resumes" role="tab"
                                        aria-controls="Resumes" aria-selected="false">Latest Resumes</a>
                                </li>
                            </ul>
                        </div>
                        <div class="job-found mb-4 mb-md-3">
                            <span class="badge badge-lg badge-primary">24123</span>
                            <h6 class="ml-3 mb-0">Job Found</h6>
                        </div>
                    </div>
                    <div class="tab-content mt-4">
                        <div class="tab-pane fade active show" id="Jobs" role="tabpanel" aria-labelledby="Jobs-tab">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-0">
                                    <div class="job-list" style="display:none;">
                                        <div class="job-list-logo">
                                            <img class="img-fluid" src="images/svg/17.svg" alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h5 class="mb-0"><a href="job-detail.html">Marketing and
                                                            Communications</a></h5>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span>via</span>
                                                            <a href="employer-detail.html">Fast Systems Consultants</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Wellesley Rd, London
                                                        </li>
                                                        <li><i class="fas fa-filter pr-1"></i>Automotive Jobs</li>
                                                        <li><a class="freelance" href="#"><i
                                                                    class="fas fa-suitcase pr-1"></i>Freelance</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                                            <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>1M
                                                ago</span>
                                        </div>
                                    </div>

                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="p-0 m-0 item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="jobs.html"></a>
                                                    <img src="images/svg/02.svg" class="h-100 job-list-img">
                                                </div>
                                            </div>
                                            <div class="card overflow-hidden  border-0 box-shadow-0 border-left br-0 mb-0">
                                                <div class="card-body pt-0 pt-md-5">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark">
                                                            <h5 class="mb-1">Required Web Designer (Kuala Lumpur, MY)</h5>
                                                        </a>
                                                        <a href="employer-detail"><i class="fas fa-building"></i> Fast
                                                            Systems Consultants</a>
                                                        <div class="job-list-option">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fas fa-industry pr-1"></i> Finance/Banking
                                                                </li>
                                                                <li><i class="fas fa-user pr-1"></i> Full Time </li>
                                                                <li><i class="fa fa-bell pr-1"></i> Urgent</li>
                                                                <li><i class="fa fa-money-bill-alt"></i> RM 8,000 - RM
                                                                    12,000</li>
                                                            </ul>
                                                        </div>
                                                        <p class="mb-0 leading-tight">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s
                                                        </p>
                                                    </div>
                                                    <div class="job-list-favourite-time">
                                                        <a class="job-list-favourite order-2" href="#">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="d-flex align-items-center mb-3 mb-md-0 mt-auto posted">
                                                            <div>
                                                                <a href="profile.html" class="text-muted fs-12 mb-1">Posted
                                                                    On </a>
                                                                <small class="d-block text-default">
                                                                    18 Mar 2018, 12:15 AM
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="ml-auto mt-1">
                                                            <span class="pr-2"><i class="fa fa-briefcase pr-1"></i> 2 Years
                                                                Exp</span>
                                                            <span class="pr-2"><i class="fa fa-calendar-alt pr-1"></i> 6
                                                                Days a week</span>
                                                            <a href="jobs.html"
                                                                class="btn btn-primary mt-3 mt-sm-0 btn-apply"> Apply
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="p-0 m-0 item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="jobs.html"></a>
                                                    <img src="images/svg/02.svg" class="h-100 job-list-img">
                                                </div>
                                            </div>
                                            <div class="card overflow-hidden  border-0 box-shadow-0 border-left br-0 mb-0">
                                                <div class="card-body pt-0 pt-md-5">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark">
                                                            <h5 class="mb-1">Required Web Designer (Kuala Lumpur, MY)</h5>
                                                        </a>
                                                        <a href="employer-detail"><i class="fas fa-building"></i> Fast
                                                            Systems Consultants</a>
                                                        <div class="job-list-option">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fas fa-industry pr-1"></i> Finance/Banking
                                                                </li>
                                                                <li><i class="fas fa-user pr-1"></i> Full Time </li>
                                                                <li><i class="fa fa-bell pr-1"></i> Urgent</li>
                                                                <li><i class="fa fa-money-bill-alt"></i> RM 8,000 - RM
                                                                    12,000</li>
                                                            </ul>
                                                        </div>
                                                        <p class="mb-0 leading-tight">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s
                                                        </p>
                                                    </div>
                                                    <div class="job-list-favourite-time">
                                                        <a class="job-list-favourite order-2" href="#">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="d-flex align-items-center mb-3 mb-md-0 mt-auto posted">
                                                            <div>
                                                                <a href="profile.html" class="text-muted fs-12 mb-1">Posted
                                                                    On </a>
                                                                <small class="d-block text-default">
                                                                    18 Mar 2018, 12:15 AM
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="ml-auto mt-1">
                                                            <span class="pr-2"><i class="fa fa-briefcase pr-1"></i> 2 Years
                                                                Exp</span>
                                                            <span class="pr-2"><i class="fa fa-calendar-alt pr-1"></i> 6
                                                                Days a week</span>
                                                            <a href="jobs.html"
                                                                class="btn btn-primary mt-3 mt-sm-0 btn-apply"> Apply
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="p-0 m-0 item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="jobs.html"></a>
                                                    <img src="images/svg/02.svg" class="h-100 job-list-img">
                                                </div>
                                            </div>
                                            <div class="card overflow-hidden  border-0 box-shadow-0 border-left br-0 mb-0">
                                                <div class="card-body pt-0 pt-md-5">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark">
                                                            <h5 class="mb-1">Required Web Designer (Kuala Lumpur, MY)</h5>
                                                        </a>
                                                        <a href="employer-detail"><i class="fas fa-building"></i> Fast
                                                            Systems Consultants</a>
                                                        <div class="job-list-option">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fas fa-industry pr-1"></i> Finance/Banking
                                                                </li>
                                                                <li><i class="fas fa-user pr-1"></i> Full Time </li>
                                                                <li><i class="fa fa-bell pr-1"></i> Urgent</li>
                                                                <li><i class="fa fa-money-bill-alt"></i> RM 8,000 - RM
                                                                    12,000</li>
                                                            </ul>
                                                        </div>
                                                        <p class="mb-0 leading-tight">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s
                                                        </p>
                                                    </div>
                                                    <div class="job-list-favourite-time">
                                                        <a class="job-list-favourite order-2" href="#">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="d-flex align-items-center mb-3 mb-md-0 mt-auto posted">
                                                            <div>
                                                                <a href="profile.html" class="text-muted fs-12 mb-1">Posted
                                                                    On </a>
                                                                <small class="d-block text-default">
                                                                    18 Mar 2018, 12:15 AM
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="ml-auto mt-1">
                                                            <span class="pr-2"><i class="fa fa-briefcase pr-1"></i> 2 Years
                                                                Exp</span>
                                                            <span class="pr-2"><i class="fa fa-calendar-alt pr-1"></i> 6
                                                                Days a week</span>
                                                            <a href="jobs.html"
                                                                class="btn btn-primary mt-3 mt-sm-0 btn-apply"> Apply
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Resumes" role="tabpanel" aria-labelledby="Resumes-tab">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-0">
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="p-0 m-0 item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="jobs.html"></a>
                                                    <img src="images/svg/02.svg" class="h-100 job-list-img">
                                                </div>
                                            </div>
                                            <div class="card overflow-hidden  border-0 box-shadow-0 border-left br-0 mb-0">
                                                <div class="card-body pt-0 pt-md-5">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark">
                                                            <h5 class="mb-1">Required Web Designer (Kuala Lumpur, MY)</h5>
                                                        </a>
                                                        <a href="employer-detail"><i class="fas fa-building"></i> Fast
                                                            Systems Consultants</a>
                                                        <div class="job-list-option">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fas fa-industry pr-1"></i> Finance/Banking
                                                                </li>
                                                                <li><i class="fas fa-user pr-1"></i> Full Time </li>
                                                                <li><i class="fa fa-bell pr-1"></i> Urgent</li>
                                                                <li><i class="fa fa-money-bill-alt"></i> RM 8,000 - RM
                                                                    12,000</li>
                                                            </ul>
                                                        </div>
                                                        <p class="mb-0 leading-tight">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s
                                                        </p>
                                                    </div>
                                                    <div class="job-list-favourite-time">
                                                        <a class="job-list-favourite order-2" href="#">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="d-flex align-items-center mb-3 mb-md-0 mt-auto posted">
                                                            <div>
                                                                <a href="profile.html" class="text-muted fs-12 mb-1">Posted
                                                                    On </a>
                                                                <small class="d-block text-default">
                                                                    18 Mar 2018, 12:15 AM
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="ml-auto mt-1">
                                                            <span class="pr-2"><i class="fa fa-briefcase pr-1"></i> 2 Years
                                                                Exp</span>
                                                            <span class="pr-2"><i class="fa fa-calendar-alt pr-1"></i> 6
                                                                Days a week</span>
                                                            <a href="jobs.html"
                                                                class="btn btn-primary mt-3 mt-sm-0 btn-apply"> Apply
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="p-0 m-0 item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="jobs.html"></a>
                                                    <img src="images/svg/02.svg" class="h-100 job-list-img">
                                                </div>
                                            </div>
                                            <div class="card overflow-hidden  border-0 box-shadow-0 border-left br-0 mb-0">
                                                <div class="card-body pt-0 pt-md-5">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark">
                                                            <h5 class="mb-1">Required Web Designer (Kuala Lumpur, MY)</h5>
                                                        </a>
                                                        <a href="employer-detail"><i class="fas fa-building"></i> Fast
                                                            Systems Consultants</a>
                                                        <div class="job-list-option">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fas fa-industry pr-1"></i> Finance/Banking
                                                                </li>
                                                                <li><i class="fas fa-user pr-1"></i> Full Time </li>
                                                                <li><i class="fa fa-bell pr-1"></i> Urgent</li>
                                                                <li><i class="fa fa-money-bill-alt"></i> RM 8,000 - RM
                                                                    12,000</li>
                                                            </ul>
                                                        </div>
                                                        <p class="mb-0 leading-tight">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s
                                                        </p>
                                                    </div>
                                                    <div class="job-list-favourite-time">
                                                        <a class="job-list-favourite order-2" href="#">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="d-flex align-items-center mb-3 mb-md-0 mt-auto posted">
                                                            <div>
                                                                <a href="profile.html" class="text-muted fs-12 mb-1">Posted
                                                                    On </a>
                                                                <small class="d-block text-default">
                                                                    18 Mar 2018, 12:15 AM
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="ml-auto mt-1">
                                                            <span class="pr-2"><i class="fa fa-briefcase pr-1"></i> 2 Years
                                                                Exp</span>
                                                            <span class="pr-2"><i class="fa fa-calendar-alt pr-1"></i> 6
                                                                Days a week</span>
                                                            <a href="jobs.html"
                                                                class="btn btn-primary mt-3 mt-sm-0 btn-apply"> Apply
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="p-0 m-0 item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="jobs.html"></a>
                                                    <img src="images/svg/02.svg" class="h-100 job-list-img">
                                                </div>
                                            </div>
                                            <div class="card overflow-hidden  border-0 box-shadow-0 border-left br-0 mb-0">
                                                <div class="card-body pt-0 pt-md-5">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark">
                                                            <h5 class="mb-1">Required Web Designer (Kuala Lumpur, MY)</h5>
                                                        </a>
                                                        <a href="employer-detail"><i class="fas fa-building"></i> Fast
                                                            Systems Consultants</a>
                                                        <div class="job-list-option">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fas fa-industry pr-1"></i> Finance/Banking
                                                                </li>
                                                                <li><i class="fas fa-user pr-1"></i> Full Time </li>
                                                                <li><i class="fa fa-bell pr-1"></i> Urgent</li>
                                                                <li><i class="fa fa-money-bill-alt"></i> RM 8,000 - RM
                                                                    12,000</li>
                                                            </ul>
                                                        </div>
                                                        <p class="mb-0 leading-tight">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s
                                                        </p>
                                                    </div>
                                                    <div class="job-list-favourite-time">
                                                        <a class="job-list-favourite order-2" href="#">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="d-flex align-items-center mb-3 mb-md-0 mt-auto posted">
                                                            <div>
                                                                <a href="profile.html" class="text-muted fs-12 mb-1">Posted
                                                                    On </a>
                                                                <small class="d-block text-default">
                                                                    18 Mar 2018, 12:15 AM
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="ml-auto mt-1">
                                                            <span class="pr-2"><i class="fa fa-briefcase pr-1"></i> 2 Years
                                                                Exp</span>
                                                            <span class="pr-2"><i class="fa fa-calendar-alt pr-1"></i> 6
                                                                Days a week</span>
                                                            <a href="jobs.html"
                                                                class="btn btn-primary mt-3 mt-sm-0 btn-apply"> Apply
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          Browse listing -->


    <!--=================================
          Candidates & Companies -->
    <section class="space-pb py-4">
        <div class="container">
            <div class="row">
                <!-- Featured Candidates -->
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="section-title">
                        <h2 class="title">Featured Candidates</h2>
                        <p>We know this in our gut, but what can we do about it? How can we motivate ourselves?</p>
                    </div>
                    <div class="candidate-list">
                        <div class="candidate-list-image">
                            <img class="img-fluid" src="images/avatar/04.jpg" alt="">
                        </div>
                        <div class="candidate-list-details">
                            <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <h5 class="mb-0"><a href="candidate-detail.html">Melissa Doe</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-filter pr-1"></i>Construction & Property</li>
                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="candidate-list-favourite-time">
                            <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                            <span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>6D ago</span>
                        </div>
                    </div>
                    <div class="candidate-list">
                        <div class="candidate-list-image">
                            <img class="img-fluid" src="images/avatar/01.jpg" alt="">
                        </div>
                        <div class="candidate-list-details">
                            <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <h5 class="mb-0"><a href="candidate-detail.html">Paul Flavius</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-filter pr-1"></i>General Insurance</li>
                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Ormskirk Rd, Wigan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="candidate-list-favourite-time">
                            <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                            <span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>3D ago</span>
                        </div>
                    </div>
                    <div class="candidate-list">
                        <div class="candidate-list-image">
                            <img class="img-fluid" src="images/avatar/05.jpg" alt="">
                        </div>
                        <div class="candidate-list-details">
                            <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <h5 class="mb-0"><a href="candidate-detail.html">Felica Queen</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-filter pr-1"></i>General Insurance</li>
                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Union St, New Delhi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="candidate-list-favourite-time">
                            <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                            <span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>2D ago</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <!-- Top Companies -->
                <div class="col-lg-4">
                    <div class="section-title">
                        <h2 class="title">Top Companies</h2>
                        <p>Here are some tips and methods for motivating yourself:</p>
                    </div>
                    <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="false" data-nav-dots="true"
                        data-items="1" data-md-items="1" data-sm-items="2" data-xs-items="1" data-xx-items="1"
                        data-space="15" data-autoheight="true">
                        <div class="item">
                            <div class="employers-grid">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="images/svg/09.svg" alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Bright Sparks PLC</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">17 Open position</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="aimages/svg/10.svg" alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Fleet Improvements Pvt</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pr-1"></i>Green Lanes, London</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">20 Open position</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="images/svg/08.svg" alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Suttons Financial Ltd</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pr-1"></i>Paris, Île-de-France</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">23 Open position</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="images/svg/19.svg" alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Co-operative Funeralcare</a>
                                            </h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pr-1"></i>Lynch Lane, Weymouth</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">30 Open position</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="images/svg/06.svg" alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Altenwerth and Hamill</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pr-1"></i>Taunton, London</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          Candidates & Companies -->



    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-02 text-center">
                        <h2>Need Any Help?</h2>
                        <p>It really comes down to understanding the steps in the process and then executing on those steps.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="info-box-1 bg-light h-100 p-lg-5 p-4">
                        <h4>Chat To Us Online</h4>
                        <p>Chat to us online if you have any question.</p>
                        <a class="mt-2 mb-0 d-block" href="#"> Click here to open chat </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="info-box-1 bg-primary h-100 p-lg-5 p-4">
                        <h4 class="text-white">Call us</h4>
                        <p class="text-white">Our support agent will work with you to meet your lending needs.</p>
                        <h5 class="text-white mt-2 mb-0">(123) 345-6789</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box-1 bg-dark h-100 p-lg-5 p-4">
                        <h4 class="text-white">Read our latest news</h4>
                        <p class="text-white">Visit our Blog page and know more about news and career tips</p>
                        <a class="mt-2 mb-0 d-block" href="#"> Read Blog Post </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mb-4 mb-sm-5 mb-lg-0">
                    <div class="">
                        <div class="text-center"><a href="#">Jobs by Functions</a> | <a href="#">Jobs By City</a> | <a
                                href="#">Jobs by Industry</a> | <a href="#">Jobs Seekers</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function mainsearchJob() {
            var keyword = $("#mkeywords").val();
            var location = $('#mwork-locations').val().replace(' ', '-').toLowerCase();

            //var country = $("#intro-country").val();
            if (keyword == '' && location == '') {
                window.location.href = 'jobs';
            } else if (location != '' && keyword != '') {
                window.location.href = 'jobs/' + location + '?k=' + keyword;
            } else if (keyword != '') {
                window.location.href = 'jobs?k=' + keyword;
            } else if (location != '') {
                window.location.href = 'jobs/' + location;
            }
        }

    </script>
@endsection
