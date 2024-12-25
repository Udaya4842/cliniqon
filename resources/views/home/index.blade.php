@extends('layouts.index')
@section('title', 'Home')

@section('content')
    <section class="home-banner banner-wrap">
        <div class="container">
            <h1>Trusted Healthcare Solutions</h1>
            <p>Experience Excellence in Clinical Business Process Outsourcing</p>
            <div class="button-wrap">
                <a href="#" class="btn btn-blue-solid">Connect With US</a>
                <a href="#" class="btn btn-white-outline play-icon">Play Video</a>
            </div>
        </div>
    </section>
    <section class="banner-bottom-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-2 col-lg-2 col-md-2 col-6 stats-wrap">
                    <h3><span class="icon-codesanbox"> 300+</span></h3>
                    <p>Medical Coders</p>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-6 stats-wrap">
                    <h3><span class="icon-text">40M</span></h3>
                    <p>Charts and <span>Annually</span></p>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-6 stats-wrap">
                    <h3><span class="icon-cpu">50B</span></h3>
                    <p>IN A/R Processed <span>Annually</span></p>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-6 stats-wrap">
                    <h3><span class="icon-text">40M</span></h3>
                    <p>Charts and <span>Annually</span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="company-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-7 col-12 company-wrap-text pe-md-5">
                    <h2 class="common-header">
                        <span>Our Company</span>Quality, Compliance, and Outcomes  in
                        Home Health and Hospice care
                    </h2>
                    <img src="public/assets/images/company-wrap-img.png" alt="Cliniqon" class="d-md-none" />
                    <p>
                        <b>We help our clients discover innovative approaches to
                            growth.  </b>
                    </p>
                    <p>
                        Our strategic processes help organizations across the industry
                        develop a steadfast commitment to becoming more
                        customer-centric, helping them drive purpose and establish
                        better patient experiences.
                    </p>
                    <a href="#" class="btn-link-arrow">Learn More <span class="icon-bg-arrow"></span></a>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-5 col-12 company-wrap-img text-md-end d-none d-md-block">
                    <img src="public/assets/images/company-wrap-img.png" alt="Cliniqon" />
                </div>
            </div>
        </div>
    </section>
    <section class="service-wrap">
        <div class="container">
            <h2 class="common-header"><span>What We Offer</span>Our Services </h2>
            <div class="row justify-content-center">
                <div class="service-grid-wrap col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="service-grid-inner">
                        <img src="public/assets/images/bg-health-icon.png" alt="Home Health Coding and QA" />
                        <h3>Home Health Coding and QA</h3>
                        <p>
                            Coding, OASIS/HIS Review, 485/POC Review, Clinician Notes
                            Review, and Medical Records Review
                        </p>
                        <a href="#" class="btn-link-arrow">Read More <span class="icon-arrow"></span></a>
                    </div>
                </div>

                <div class="service-grid-wrap col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="service-grid-inner">
                        <img src="public/assets/images/bg-coding-icon.png" alt="Hospice Coding and QA" />
                        <h3>Hospice Coding and QA</h3>
                        <p>
                            Coding, OASIS/HIS Review, 485/POC Review, Clinician Notes
                            Review, and Medical Records Review
                        </p>
                        <a href="#" class="btn-link-arrow">Read More <span class="icon-arrow"></span></a>
                    </div>
                </div>

                <div class="service-grid-wrap col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="service-grid-inner">
                        <img src="public/assets/images/bg-clinic-icon.png" alt="Clinical Administrative" />
                        <h3>Clinical Administrative</h3>
                        <p>Intake, Scheduling, and Order Management Services</p>
                        <a href="#" class="btn-link-arrow">Read More <span class="icon-arrow"></span></a>
                    </div>
                </div>
                <div class="service-grid-wrap col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="service-grid-inner">
                        <img src="public/assets/images/bg-revenue-icon.png" alt="Revenue Cycle Management" />
                        <h3>Revenue Cycle Management</h3>
                        <p>
                            Billing, Denials Management, Patient Collections, and Prior
                            Authorization Services
                        </p>
                        <a href="#" class="btn-link-arrow">Read More <span class="icon-arrow"></span></a>
                    </div>
                </div>
                <div class="service-grid-wrap col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="service-grid-inner">
                        <img src="public/assets/images/bg-care-icon.png" alt="Care Management" />
                        <h3>Care Management</h3>
                        <p>
                            Chronic Care, Principal Care, Transitional Care, and Remote
                            Care Management Services
                        </p>
                        <a href="#" class="btn-link-arrow">Read More <span class="icon-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="white-call-to-action-wrap">
        <div class="container">
            <div class="cta-inner-wrap">
                <div class="cta-text">
                    <p>
                        <span>🎉</span> Discover how our tailored solutions can benefit
                        your organization and improve patient care
                    </p>
                </div>
                <div class="cta-btn">
                    <a href="#" class="btn-link-arrow">Learn More <span class="icon-bg-arrow"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="partner-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="partner-grid-wrap col-xl-4 col-lg-12 col-md-12 col-12">
                    <h2 class="common-header">
                        <span>Partner with us</span>Why Choose Cliniqon
                    </h2>
                    <p>
                        Leverage industry-leading expertise that drives exceptional
                        outcomes, ensuring consistent compliance and quality.
                    </p>
                </div>
                <div class="partner-grid-slider col-xl-8 col-lg-12 col-md-12 col-12">
                    <div class="swiper partner-swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide partner-grid-1">
                                <div class="partner-grid-inner">
                                    <img src="public/assets/images/icon1.png" alt="Cliniqon" />
                                    <h3>Expertise That Drives Excellence</h3>
                                    <p>
                                        Leverage industry-leading expertise that drives
                                        exceptional outcomes, ensuring consistent compliance and
                                        quality.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide partner-grid-2">
                                <div class="partner-grid-inner">
                                    <img src="public/assets/images/icon2.png" alt="Cliniqon" />
                                    <h3>Flexible, Scalable Solutions</h3>
                                    <p>
                                        We provide tailored support for both immediate and
                                        long-term needs, regardless of your agency’s size or
                                        complexity.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide partner-grid-3">
                                <div class="partner-grid-inner">
                                    <img src="public/assets/images/icon3.png" alt="Cliniqon" />
                                    <h3>Cost-Effective Services</h3>
                                    <p>
                                        Achieve significant cost savings by optimizing
                                        resources, streamlining processes, and utilizing
                                        industry best practices.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide partner-grid-1">
                                <div class="partner-grid-inner">
                                    <img src="public/assets/images/icon1.png" alt="Cliniqon" />
                                    <h3>Expertise That Drives Excellence</h3>
                                    <p>
                                        Leverage industry-leading expertise that drives
                                        exceptional outcomes, ensuring consistent compliance and
                                        quality.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services-call-to-action-->
    <section class="black-call-to-action-wrap">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-12 col-xl-12 dark-cta-div">
                <div class="row align-items-center">
                    <div class="col-md-7 col-12 col-xl-8 col-sm-12">
                        <h4>Are You Ready To Start Seeing Extraordinary Results?</h4>
                        <p>
                            Schedule a time to speak with our team by clicking the button.
                        </p>
                    </div>
                    <div class="col-md-5 col-12 col-xl-4 col-sm-12 text-center">
                        <a href="#" class="btn btn-meeting">Schedule Meeting</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-wrap">
        <div class="container">
            <h2 class="common-header text-center">
                <span>Testimonials</span>What our Clients Say
            </h2>
            <div class="swiper testimonials-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="testimonials-text">
                            <img src="public/assets/images/quote.png" alt="cliniqon" />
                            <p>
                                All modifications, recommendations, and suggestions of
                                change were appropriate and in line with OASIS guidelines
                                and highlighted the need for service. Also, the feedback
                                structure was good and easy to follow for correction and
                                follow-through. Not to mention the positive changes in the
                                HHRG results as well. Thank you for your assistance!
                            </p>
                            <div class="testimonials-info">
                                <img src="public/assets/images/testimonial-user.png" alt="Cliniqon" />
                                <p>Houston Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-text">
                            <img src="public/assets/images/quote.png" alt="cliniqon" />
                            <p>
                                All modifications, recommendations, and suggestions of
                                change were appropriate and in line with OASIS guidelines
                                and highlighted the need for service. Also, the feedback
                                structure was good and easy to follow for correction and
                                follow-through. Not to mention the positive changes in the
                                HHRG results as well. Thank you for your assistance!
                            </p>
                            <div class="testimonials-info">
                                <img src="public/assets/images/testimonial-user.png" alt="Cliniqon" />
                                <p>Houston Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-text">
                            <img src="public/assets/images/quote.png" alt="cliniqon" />
                            <p>
                                All modifications, recommendations, and suggestions of
                                change were appropriate and in line with OASIS guidelines
                                and highlighted the need for service. Also, the feedback
                                structure was good and easy to follow for correction and
                                follow-through. Not to mention the positive changes in the
                                HHRG results as well. Thank you for your assistance!
                            </p>
                            <div class="testimonials-info">
                                <img src="public/assets/images/testimonial-user.png" alt="Cliniqon" />
                                <p>Houston Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-text">
                            <img src="public/assets/images/quote.png" alt="cliniqon" />
                            <p>
                                All modifications, recommendations, and suggestions of
                                change were appropriate and in line with OASIS guidelines
                                and highlighted the need for service. Also, the feedback
                                structure was good and easy to follow for correction and
                                follow-through. Not to mention the positive changes in the
                                HHRG results as well. Thank you for your assistance!
                            </p>
                            <div class="testimonials-info">
                                <img src="public/assets/images/testimonial-user.png" alt="Cliniqon" />
                                <p>Houston Texas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-navigation">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <!--call-to-action-closed-->


@endsection
