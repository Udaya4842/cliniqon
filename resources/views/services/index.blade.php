@extends('layouts.index')
@section('title', 'Service')


@section('content')

<!--services-banner-section-->
<section class="service-banner banner-wrap">
    <div class="container">
        <h1>
            Best Home Health Medical <span>Billing services in the U.S</span>
        </h1>
    </div>
</section>
<!--services-banner-section-closed-->
<!--services-section-one-->
<div class="services-section-one">
    <div class="container">
        <div class="col-md-12 col-12 col-xl-12 col-sm-12">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 col-12 col-xl-6 order-one-mob">
                    <h3>Home Health Billing</h3>
                    <h6>
                        Comprehensive Home Health Billing Services for Improved
                        Revenue Cycle Management
                    </h6>
                    <p>
                        Managing home health billing is a challenge for agencies
                        seeking to provide the best care while ensuring timely
                        reimbursements. At Cliniqon, we don’t just offer standard home
                        health billing services, we utilize a tailored approach to
                        streamline your entire revenue cycle. By automating tedious
                        administrative tasks and offering proactive support, we help
                        you achieve faster, more accurate reimbursements while
                        allowing your team to focus on patient care.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12 col-12 col-xl-6">
                    <div>
                        <img src="public/assets/images/home-health-billing.png" class="image-fluid" alt="homrbilling" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--services-section<-one-closed-->

<!--services-section-two-->
<div class="services-section-two">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-12 col-xl-12 title text-center">
            <h3 class="mb-3">End-to-End Home Health Billing Services</h3>
            <p class="mb-5">
                Our specialized home health medical billing outsourcing services
                cover the entire billing process, from Front-end to Back-end
                billing. With our home health billing experts, we guarantee
                accuracy, compliance, and maximized revenue for your agency.
            </p>
        </div>

        <div class="col-md-12 col-sm-12 col-12 col-xl-12 services-main-tab desktop-view">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="frontend-tab" data-bs-toggle="tab" data-bs-target="#frontend"
                        type="button" role="tab" aria-controls="frontend" aria-selected="true">
                        <span class="frnt-icn"></span> Front-End Billing
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="backend-tab" data-bs-toggle="tab" data-bs-target="#backend"
                        type="button" role="tab" aria-controls="backend" aria-selected="false">
                        <span class="brnt-icn"></span> Back-End Billing
                    </button>
                </li>
            </ul>
        </div>

        <div class="col-md-12 col-sm-12 col-12 col-xl-12 services-main-tabcontent desktop-view">
            <div class="tab-content max-tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="frontend" role="tabpanel" aria-labelledby="frontend-tab">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-12 col-xl-5 inner-tab-one">
                            <ul class="nav nav-tabs" id="inTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="prereg-tab" data-bs-toggle="tab"
                                        data-bs-target="#prereg" type="button" role="tab" aria-controls="prereg"
                                        aria-selected="true">
                                        <span class="pre-reg-icon"></span> Pre-registration
                                        and Registration
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pointser-tab" data-bs-toggle="tab"
                                        data-bs-target="#pointser" type="button" role="tab"
                                        aria-controls="pointser" aria-selected="false">
                                        <span class="point-ser-icon"></span> Point of Service
                                        Collections
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="isv-tab" data-bs-toggle="tab" data-bs-target="#isv"
                                        type="button" role="tab" aria-controls="isv" aria-selected="false">
                                        <span class="ins-ver-icon"></span> Insurance
                                        Eligibility Verification
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="encount-tab" data-bs-toggle="tab"
                                        data-bs-target="#encount" type="button" role="tab" aria-controls="encount"
                                        aria-selected="false">
                                        <span class="enc-gen-icon"></span> Encounter Form
                                        Generation
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="checkot-tab" data-bs-toggle="tab"
                                        data-bs-target="#checkot" type="button" role="tab"
                                        aria-controls="checkot" aria-selected="false">
                                        <span class="chck-icon"></span> Checkout
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 col-sm-12 col-12 col-xl-7 inner-tab-content-one">
                            <div class="tab-content" id="inTabContent">
                                <div class="tab-pane fade show active" id="prereg" role="tabpanel"
                                    aria-labelledby="prereg-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-pre-box">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-5 col-5 col-xl-5 order-one">
                                                    <img src="public/assets/images/ser-one.png" alt="ser one"
                                                        class="ser-one" />
                                                </div>
                                                <div class="col-md-12 col-sm-7 col-7 col-xl-7">
                                                    <h4>Pre-registration and Registration </h4>
                                                    <p>
                                                        Our home health and hospice billing
                                                        specialists accurately start the billing
                                                        process by gathering patient demographic and
                                                        insurance information during registration. We
                                                        maintain standard operating procedures for
                                                        patient registration to minimize errors and
                                                        enhance the quality of patient data.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pointser" role="tabpanel"
                                    aria-labelledby="pointser-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-point-box">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-5 col-5 col-xl-5 order-one">
                                                    <img src="public/assets/images/ser-two.png" alt="ser two"
                                                        class="ser-two" />
                                                </div>
                                                <div class="col-md-12 col-sm-7 col-7 col-xl-7">
                                                    <h4>Point of Service Collections</h4>
                                                    <p>
                                                        We determine patient financial
                                                        responsibilities based on verified benefit
                                                        information. We collect copays, deductibles,
                                                        coinsurance, or balances due. This enhances
                                                        revenue, minimizes debt and write-offs, and
                                                        reduces administrative burden. Additionally,
                                                        this improves cash flow and operational
                                                        efficiency and lowers billing disputes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="isv" role="tabpanel" aria-labelledby="isv-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 p-rel">
                                        <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                            <img src="public/assets/images/ser-three.png" alt="ser three"
                                                class="ser-three" />
                                        </div>
                                        <div class="max-ins-box">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                    <h4>Insurance Eligibility Verification </h4>
                                                    <p>
                                                        Our skilled staff verifies insurance
                                                        eligibility, ensuring the patient’s health
                                                        plan covers the home health services required.
                                                        We confirm effective dates, patient
                                                        responsibilities (coinsurance, copays,
                                                        deductibles), and plan benefits specific to
                                                        the service’s specialty and location. In
                                                        addition, we obtain the necessary
                                                        preauthorization that insurers often require.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="encount" role="tabpanel"
                                    aria-labelledby="encount-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-pre-box">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7 col-7 col-xl-7">
                                                    <h4>Encounter Form Generation</h4>
                                                    <p>
                                                        We generate encounter forms, which include
                                                        patient demographics and medical codes, to
                                                        facilitate efficient communication about the
                                                        type and number of services provided to the
                                                        patient.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 col-sm-5 col-5 col-xl-5">
                                                    <img src="public/assets/images/ser-four.png" alt="ser four"
                                                        class="ser-four" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="checkot" role="tabpanel"
                                    aria-labelledby="checkot-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-check-box">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-6 col-xl-6 order-one">
                                                    <img src="public/assets/images/ser-five.png" alt="ser five"
                                                        class="ser-five" />
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-6 col-xl-6">
                                                    <h4>Checkout</h4>
                                                    <p>
                                                        Our staff assists in scheduling follow-up
                                                        appointments when necessary, ensuring the
                                                        completion of encounter forms by providers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--backend-tab-->
                <div class="tab-pane fade" id="backend" role="tabpanel" aria-labelledby="backend-tab">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-12 col-xl-5 inner-tab-one">
                            <ul class="nav nav-tabs" id="backTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="entry-tab" data-bs-toggle="tab"
                                        data-bs-target="#entry" type="button" role="tab" aria-controls="entry"
                                        aria-selected="true">
                                        <span class="chrg-entry-icon"></span> Charge Entry
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="generate-tab" data-bs-toggle="tab"
                                        data-bs-target="#generate" type="button" role="tab"
                                        aria-controls="generate" aria-selected="false">
                                        <span class="claim-gen-icon"></span> Claim Generation
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="scrubbing-tab" data-bs-toggle="tab"
                                        data-bs-target="#scrubbing" type="button" role="tab"
                                        aria-controls="scrubbing" aria-selected="false">
                                        <span class="enc-gen-icon"></span> Claim Scrubbing
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="submission-tab" data-bs-toggle="tab"
                                        data-bs-target="#submission" type="button" role="tab"
                                        aria-controls="submission" aria-selected="false">
                                        <span class="chck-icon"></span> Claims Submission
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tracking-tab" data-bs-toggle="tab"
                                        data-bs-target="#tracking" type="button" role="tab"
                                        aria-controls="tracking" aria-selected="false">
                                        <span class="claim-trck-icon"></span> Claims
                                        Tracking
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="posting-tab" data-bs-toggle="tab"
                                        data-bs-target="#posting" type="button" role="tab"
                                        aria-controls="posting" aria-selected="false">
                                        <span class="pay-post-icon"></span> Payment Posting
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="denial-tab" data-bs-toggle="tab"
                                        data-bs-target="#denial" type="button" role="tab"
                                        aria-controls="denial" aria-selected="false">
                                        <span class="enc-gen-icon"></span> Denial Management
                                        and Appeals
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="collection-tab" data-bs-toggle="tab"
                                        data-bs-target="#collection" type="button" role="tab"
                                        aria-controls="collection" aria-selected="false">
                                        <span class="patient-coll-icon"></span> Patient
                                        Collections
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="resolu-tab" data-bs-toggle="tab"
                                        data-bs-target="#resolu" type="button" role="tab"
                                        aria-controls="resolu" aria-selected="false">
                                        <span class="credit-blnc-icon"></span> Credit Balance
                                        Resolutions
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 col-sm-12 col-12 col-xl-7 inner-tab-content-one">
                            <div class="tab-content" id="backTabContent">
                                <div class="tab-pane fade show active" id="entry" role="tabpanel"
                                    aria-labelledby="entry-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-cen-box">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-5 col-5 col-xl-5 order-one">
                                                    <img src="public/assets/images/ser-six.png" alt="ser six"
                                                        class="ser-six" />
                                                </div>
                                                <div class="col-md-12 col-sm-7 col-7 col-xl-7">
                                                    <h4>Charge Entry</h4>
                                                    <p>
                                                        We translate encounter forms into accurate
                                                        charge entries, capturing services rendered
                                                        and associated payments.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="generate" role="tabpanel"
                                    aria-labelledby="generate-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-cen-box max-claim-gen">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-5 col-5 col-xl-5 order-one">
                                                    <img src="public/assets/images/ser-seven.png" alt="ser seven"
                                                        class="ser-six" />
                                                </div>
                                                <div class="col-md-12 col-sm-7 col-7 col-xl-7">
                                                    <h4>Claim Generation</h4>
                                                    <p>
                                                        Our home health billing experts generate
                                                        claims by accurately creating claim numbers
                                                        for all charges and grouping them into
                                                        batches, as stated in the Home Health Billing
                                                        Options.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="scrubbing" role="tabpanel"
                                    aria-labelledby="scrubbing-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 p-rel">
                                        <div class="max-cen-box max-claim-scru">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                    <h4>Claim Scrubbing</h4>
                                                    <p>
                                                        To further ensure accuracy and maximum
                                                        reimbursement, we utilize claim scrubbing
                                                        tools to review each claim before submission.
                                                        This helps identify potential errors,
                                                        inconsistencies, and missing data in claims.
                                                        By ensuring any potential issues are addressed
                                                        before submission, your claim denials rate is
                                                        reduced while simultaneously increasing your
                                                        reimbursement rate.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="submission" role="tabpanel"
                                    aria-labelledby="submission-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-cen-box max-claim-submis">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-5 col-5 col-xl-5 order-one">
                                                    <img src="public/assets/images/ser-eight.png" alt="ser eight"
                                                        class="ser-six" />
                                                </div>
                                                <div class="col-md-12 col-sm-7 col-7 col-xl-7">
                                                    <h4>Claims Submission</h4>
                                                    <p>
                                                        Our Home Health Billing Solutions
                                                        revolutionize claims submission, streamlining
                                                        the path to revenue optimization. Our core
                                                        service seamlessly integrates with your EMR
                                                        system, pulling patient visit details and
                                                        relevant data into standardized claim forms to
                                                        submit to the insurance provider.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tracking" role="tabpanel"
                                    aria-labelledby="tracking-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-cen-box max-claim-trck">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-6 col-xl-6 order-one">
                                                    <img src="public/assets/images/ser-nine.png" alt="ser nine"
                                                        class="ser-nine" />
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-6 col-xl-6">
                                                    <h4>Claims Tracking</h4>
                                                    <p>
                                                        We diligently track claim statuses daily,
                                                        ensuring transparency in the adjudication
                                                        process. With clear insights, we act promptly
                                                        to address any discrepancies or queries.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="posting" role="tabpanel"
                                    aria-labelledby="posting-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-cen-box max-pay-post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-6 col-xl-6 order-one">
                                                    <img src="public/assets/images/ser-ten.png" alt="ser ten"
                                                        class="ser-six" />
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-6 col-xl-6">
                                                    <h4>Payment Posting</h4>
                                                    <p>
                                                        We post the payments received by insurance
                                                        companies to our patient accounts. Our staff
                                                        matches expenses to the respective patient
                                                        accounts, rectifying whether payments are made
                                                        according to their claim and confirming data
                                                        to match payments.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="denial" role="tabpanel"
                                    aria-labelledby="denial-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-cen-box max-daniel-manage">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-6 col-xl-6 order-one">
                                                    <img src="public/assets/images/ser-eleven.png" alt="ser eleven"
                                                        class="ser-eleven" />
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-6 col-xl-6">
                                                    <h4>Denial Management and Appeals</h4>
                                                    <p>
                                                        We diligently track claim statuses daily,
                                                        ensuring transparency in the adjudication
                                                        process. With clear insights, we act promptly
                                                        to address any discrepancies or queries.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="collection" role="tabpanel"
                                    aria-labelledby="collection-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-cen-box max-patient-collections">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-5 col-5 col-xl-5 order-one">
                                                    <img src="public/assets/images/ser-twevel.png" alt="ser twevel"
                                                        class="ser-six" />
                                                </div>
                                                <div class="col-md-12 col-sm-7 col-7 col-xl-7">
                                                    <h4>Patient Collections </h4>
                                                    <p>
                                                        Our specialists perform the timely mailing out
                                                        of home health bills and meticulously follow
                                                        up with overdue accounts, ensuring that
                                                        patient financial responsibilities are met
                                                        within the designated timeframe. After
                                                        payments are successfully collected, our
                                                        integration with accounts receivable (A/R)
                                                        management provides accurate tracking and
                                                        posting of revenue.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="resolu" role="tabpanel"
                                    aria-labelledby="resolu-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-cen-box max-credit-balance">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-5 col-5 col-xl-5 order-one">
                                                    <img src="public/assets/images/ser-thirteen.png" alt="ser thirteen"
                                                        class="ser-thirteen" />
                                                </div>
                                                <div class="col-md-12 col-sm-7 col-7 col-xl-7">
                                                    <h4>Credit Balance Resolutions</h4>
                                                    <p>
                                                        Credit balances are a substantial risk for
                                                        home healthcare providers, which is why our
                                                        billers also identify credit balances and
                                                        promptly facilitate refunds where necessary.
                                                        Our diligent approach prevents legal and
                                                        financial repercussions, ensuring compliance
                                                        and financial stability.
                                                    </p>
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

        <!--services-mobile-view-->
        <div class="col-md-12 col-sm-12 col-12 col-xl-12 services-main-tabcontent mobile-view">
            <div class="">
                <button class="btn btn-frnt active">
                    <span class="frnt-icn"></span> Front-End Billing
                </button>
            </div>

            <div class="col-md-12 col-sm-12 col-12 col-xl-12 mb-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="pre-reg-icon"></span> Pre-registration and
                                Registration
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-pre-box">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-one.png" alt="ser one"
                                                    class="ser-one" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Pre-registration and Registration </h4>
                                                <p>
                                                    Our home health and hospice billing specialists
                                                    accurately start the billing process by
                                                    gathering patient demographic and insurance
                                                    information during registration. We maintain
                                                    standard operating procedures for patient
                                                    registration to minimize errors and enhance the
                                                    quality of patient data.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="point-ser-icon"></span> Point of Service
                                Collections
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-point-box">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-two.png" alt="ser two"
                                                    class="ser-two" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Point of Service Collections</h4>
                                                <p>
                                                    We determine patient financial responsibilities
                                                    based on verified benefit information. We
                                                    collect copays, deductibles, coinsurance, or
                                                    balances due. This enhances revenue, minimizes
                                                    debt and write-offs, and reduces administrative
                                                    burden. Additionally, this improves cash flow
                                                    and operational efficiency and lowers billing
                                                    disputes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="ins-ver-icon"></span> Insurance Eligibility
                                Verification
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one p-rel">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                        <img src="public/assets/images/ser-three.png" alt="ser three" class="ser-three" />
                                    </div>
                                    <div class="max-ins-box">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Insurance Eligibility Verification </h4>
                                                <p>
                                                    Our skilled staff verifies insurance
                                                    eligibility, ensuring the patient’s health plan
                                                    covers the home health services required. We
                                                    confirm effective dates, patient
                                                    responsibilities (coinsurance, copays,
                                                    deductibles), and plan benefits specific to the
                                                    service’s specialty and location. In addition,
                                                    we obtain the necessary preauthorization that
                                                    insurers often require.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="enc-gen-icon"></span> Encounter Form
                                Generation
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-pre-box">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Encounter Form Generation</h4>
                                                <p>
                                                    We generate encounter forms, which include
                                                    patient demographics and medical codes, to
                                                    facilitate efficient communication about the
                                                    type and number of services provided to the
                                                    patient.
                                                </p>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <img src="public/assets/images/ser-four.png" alt="ser four"
                                                    class="ser-four" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="chck-icon"></span> Checkout
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-check-box">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-five.png" alt="ser five"
                                                    class="ser-five" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Checkout</h4>
                                                <p>
                                                    Our staff assists in scheduling follow-up
                                                    appointments when necessary, ensuring the
                                                    completion of encounter forms by providers.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <button class="btn btn-frnt">
                    <span class="brnt-icn"></span> Back-End Billing
                </button>
            </div>

            <div class="col-md-12 col-sm-12 col-12 col-xl-12 mb-5">
                <div class="accordion" id="accordionExamplee">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <span class="chrg-entry-icon"></span> Charge Entry
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExamplee">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-cen-box">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-six.png" alt="ser six"
                                                    class="ser-six" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Charge Entry</h4>
                                                <p>
                                                    We translate encounter forms into accurate
                                                    charge entries, capturing services rendered and
                                                    associated payments.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <span class="claim-gen-icon"></span> Claim Generation
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExamplee">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-cen-box max-claim-gen">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-seven.png" alt="ser seven"
                                                    class="ser-six" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Claim Generation</h4>
                                                <p>
                                                    Our home health billing experts generate claims
                                                    by accurately creating claim numbers for all
                                                    charges and grouping them into batches, as
                                                    stated in the Home Health Billing Options.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <span class="enc-gen-icon"></span> Claim Scrubbing
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExamplee">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one p-rel">
                                    <div class="max-cen-box max-claim-scru">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Claim Scrubbing</h4>
                                                <p>
                                                    To further ensure accuracy and maximum
                                                    reimbursement, we utilize claim scrubbing tools
                                                    to review each claim before submission. This
                                                    helps identify potential errors,
                                                    inconsistencies, and missing data in claims. By
                                                    ensuring any potential issues are addressed
                                                    before submission, your claim denials rate is
                                                    reduced while simultaneously increasing your
                                                    reimbursement rate.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <span class="chck-icon"></span> Claims Submission
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExamplee">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-cen-box max-claim-submis">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-eight.png" alt="ser eight"
                                                    class="ser-six" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Claims Submission</h4>
                                                <p>
                                                    Our Home Health Billing Solutions revolutionize
                                                    claims submission, streamlining the path to
                                                    revenue optimization. Our core service
                                                    seamlessly integrates with your EMR system,
                                                    pulling patient visit details and relevant data
                                                    into standardized claim forms to submit to the
                                                    insurance provider.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <span class="claim-trck-icon"></span> Claims Tracking
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExamplee">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-cen-box max-claim-trck">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-nine.png" alt="ser nine"
                                                    class="ser-nine" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Claims Tracking</h4>
                                                <p>
                                                    We diligently track claim statuses daily,
                                                    ensuring transparency in the adjudication
                                                    process. With clear insights, we act promptly to
                                                    address any discrepancies or queries.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="false"
                                aria-controls="collapseEleven">
                                <span class="pay-post-icon"></span> Payment Posting
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse inner-tab-content-one"
                            aria-labelledby="headingEleven" data-bs-parent="#accordionExamplee">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                    <div class="max-cen-box max-pay-post">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-ten.png" alt="ser ten"
                                                    class="ser-six" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Payment Posting</h4>
                                                <p>
                                                    We post the payments received by insurance
                                                    companies to our patient accounts. Our staff
                                                    matches expenses to the respective patient
                                                    accounts, rectifying whether payments are made
                                                    according to their claim and confirming data to
                                                    match payments.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwevel">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwevel" aria-expanded="false"
                                aria-controls="collapseTwevel">
                                <span class="enc-gen-icon"></span> Denial Management and
                                Appeals
                            </button>
                        </h2>
                        <div id="collapseTwevel" class="accordion-collapse collapse" aria-labelledby="headingTwevel"
                            data-bs-parent="#accordionExamplee">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-cen-box max-daniel-manage">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-eleven.png" alt="ser eleven"
                                                    class="ser-eleven" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Denial Management and Appeals</h4>
                                                <p>
                                                    We diligently track claim statuses daily,
                                                    ensuring transparency in the adjudication
                                                    process. With clear insights, we act promptly to
                                                    address any discrepancies or queries.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThirteen" aria-expanded="false"
                                aria-controls="collapseThirteen">
                                <span class="patient-coll-icon"></span> Patient
                                Collections
                            </button>
                        </h2>
                        <div id="collapseThirteen" class="accordion-collapse collapse"
                            aria-labelledby="headingThirteen" data-bs-parent="#accordionExamplee">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-cen-box max-patient-collections">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-twevel.png" alt="ser twevel"
                                                    class="ser-six" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Patient Collections </h4>
                                                <p>
                                                    Our specialists perform the timely mailing out
                                                    of home health bills and meticulously follow up
                                                    with overdue accounts, ensuring that patient
                                                    financial responsibilities are met within the
                                                    designated timeframe. After payments are
                                                    successfully collected, our integration with
                                                    accounts receivable (A/R) management provides
                                                    accurate tracking and posting of revenue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFourteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFourteen" aria-expanded="false"
                                aria-controls="collapseFourteen">
                                <span class="credit-blnc-icon"></span> Credit Balance
                                Resolutions
                            </button>
                        </h2>
                        <div id="collapseFourteen" class="accordion-collapse collapse"
                            aria-labelledby="headingFourteen" data-bs-parent="#accordionExamplee">
                            <div class="accordion-body">
                                <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12 inner-tab-content-one">
                                    <div class="max-cen-box max-credit-balance">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12 order-one">
                                                <img src="public/assets/images/ser-thirteen.png" alt="ser thirteen"
                                                    class="ser-thirteen" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 col-xl-12">
                                                <h4>Credit Balance Resolutions</h4>
                                                <p>
                                                    Credit balances are a substantial risk for home
                                                    healthcare providers, which is why our billers
                                                    also identify credit balances and promptly
                                                    facilitate refunds where necessary. Our diligent
                                                    approach prevents legal and financial
                                                    repercussions, ensuring compliance and financial
                                                    stability.
                                                </p>
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
        <!--services-mobile-view-->
    </div>
</div>
<!--services-section-two-closed-->

<!--services-call-to-action-->
<div class="black-call-to-action-wrap services-call-to-action">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-12 col-xl-12 sca-div">
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
</div>
<!--call-to-action-closed-->

<!--services-section-three-->
<div class="services-section-three">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-12 col-xl-12 mb-5">
            <h3>Why Choose Cliniqon's Home Health Billing Services?</h3>
        </div>

        <div class="col-md-12 col-sm-12 col-12 col-xl-12 pt-3">
            <div class="max-services-card">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12 col-xl-4">
                        <div class="card">
                            <img src="public/assets/images/increased-icon.png" class="image-fluid" alt="increased" />
                            <h6>Increased Work Efficiency</h6>
                            <p>
                                Filing claims and invoices or managing an in-house billing
                                team can take up much of home health providers’ time,
                                which they can spend directly on patient care. Our home
                                health billing solutions streamline your operations,
                                boosting efficiency and eliminating distractions from
                                time-consuming administrative tasks.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12 col-xl-4">
                        <div class="card">
                            <img src="public/assets/images/accuracy-icon.png" class="image-fluid" alt="accuracy" />
                            <h6>Enhanced Accuracy</h6>
                            <p>
                                Our specialists use advanced claim scrubbing tools,
                                ensuring that your billing is always accurate and
                                compliant. This proactive approach sets us apart from
                                other home health medical billing outsourcing services by
                                reducing errors, denials, and payment delays.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12 col-xl-4">
                        <div class="card">
                            <img src="public/assets/images/savings-icon.png" class="image-fluid" alt="savings" />
                            <h6>Cost-savings</h6>
                            <p>
                                We cut unnecessary overhead costs by eliminating the need
                                for in-house billing teams, infrastructure, and software
                                investments. In addition, our incredible accuracy during
                                the home health billing process reduces costly claim
                                rework, giving you peace of mind without the added
                                expense.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12 col-xl-4">
                        <div class="card">
                            <img src="public/assets/images/faster-icon.png" class="image-fluid" alt="faster" />
                            <h6>Faster Claims Processing </h6>
                            <p>
                                Partnering with Cliniqon accelerates claims processing
                                through streamlined processes and advanced technology. Our
                                skilled home health billing experts systematically deal
                                with large volumes of records proficiently. Our efficient
                                approach guarantees faster claims processing, helping you
                                get reimbursements quicker.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12 col-xl-4">
                        <div class="card">
                            <img src="public/assets/images/satisfy-icon.png" class="image-fluid" alt="satisfy" />
                            <h6>Increased Patient Satisfaction</h6>
                            <p>
                                Our expertise in the timely processing of claims expedites
                                insurance reimbursements, resulting in quicker resolutions
                                and easing patients' concerns about prolonged payment
                                delays.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12 col-xl-4">
                        <div class="card">
                            <img src="public/assets/images/patient-icon.png" class="image-fluid" alt="patient" />
                            <h6>Secured Patient Data</h6>
                            <p>
                                Our home health care billing services safeguard patient
                                information at every step. We utilize robust data security
                                measures and up-to-date software that adhere to industry
                                standards and compliance regulations to prevent potential
                                data breaches and data loss. Moreover, our staff are
                                trained on HIPAA compliance protocols.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
