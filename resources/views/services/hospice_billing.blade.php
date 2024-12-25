@extends('layouts.index')
@section('title', 'Service')


@section('content')

<!--services-banner-section-->
<section class="service-banner banner-wrap">
    <div class="container">
        <h1>
           Best Hospice Medical <span>Billing services in the U.S</span>
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
                    <h3>Hospice Billing</h3>
                    <h6>                        
                        Outsourced Hospice Billing RCM Services for 
                        Streamlined Operations 
                    </h6>
                    <p>
                        Efficient hospice billing is essential to the financial success of hospice care providers. 
                        At Cliniqon, we offer specialized hospice billing RCM outsourcing solutions that ensure 
                        accurate and timely billing, helping you avoid costly mistakes and streamline your revenue cycle. 
                        As one of the leading hospice billing companies, our hospice billing experts are highly 
                        skilled in handling the unique complexities of hospice medical billing, ensuring your claims are processed quickly and efficiently. 
                    </p>
                </div>
                <div class="col-md-6 col-sm-12 col-12 col-xl-6">
                    <div>
                        <img src="public/assets/images/hospice-billing.png" class="image-fluid" alt="hospicebilling" />
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
            <h3 class="mb-3">End-to-End Home Hospice Billing Services </h3>
            <p class="mb-5">
                Our hospice billing services cover the entire process, from Front-end to Back-end billing.
                With Cliniqon’s hospice billing RCM services, you can focus on delivering compassionate care 
                while we expertly manage your financial operations, streamlining the billing cycle and improving your revenue flow.
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
                                    <button class="nav-link active" id="iv-tab" data-bs-toggle="tab"
                                        data-bs-target="#iv" type="button" role="tab" aria-controls="iv"
                                        aria-selected="true">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#4F5574" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.1253 0.666992H3.26421C1.82866 0.666992 0.666992 1.82866 0.666992 3.26421V17.9031C0.666992 19.3386 1.82866 20.5003 3.26421 20.5003H10.2342L10.442 19.3386C10.5364 18.8097 10.782 18.3375 11.1597 17.9503L16.7225 12.397V3.26421C16.7225 1.82866 15.5608 0.666992 14.1253 0.666992ZM4.44476 4.44476H8.22253C8.74197 4.44476 9.16697 4.86976 9.16697 5.3892C9.16697 5.90865 8.74197 6.33364 8.22253 6.33364H4.44476C3.92532 6.33364 3.50032 5.90865 3.50032 5.3892C3.50032 4.86976 3.92532 4.44476 4.44476 4.44476ZM9.16697 13.8892H4.44476C3.92532 13.8892 3.50032 13.4642 3.50032 12.9447C3.50032 12.4253 3.92532 12.0003 4.44476 12.0003H9.16697C9.68642 12.0003 10.1114 12.4253 10.1114 12.9447C10.1114 13.4642 9.68642 13.8892 9.16697 13.8892ZM12.9447 10.1114H4.44476C3.92532 10.1114 3.50032 9.68641 3.50032 9.16697C3.50032 8.64753 3.92532 8.22253 4.44476 8.22253H12.9447C13.4642 8.22253 13.8892 8.64753 13.8892 9.16697C13.8892 9.68641 13.4642 10.1114 12.9447 10.1114Z"/>
                                            <path d="M12.499 23.3339C12.3129 23.3339 12.1316 23.2602 11.9984 23.1261C11.835 22.9627 11.7614 22.7304 11.802 22.5019L12.3025 19.6638C12.3271 19.5212 12.397 19.389 12.499 19.286L19.5115 12.2745C20.3728 11.4113 21.219 11.6446 21.6818 12.1073L22.8501 13.2756C23.4951 13.9197 23.4951 14.968 22.8501 15.6131L15.8376 22.6256C15.7356 22.7285 15.6034 22.7975 15.4598 22.822L12.6218 23.3226C12.5811 23.3301 12.5396 23.3339 12.499 23.3339Z" />
                                            </svg>
                                             Insurance Verification 
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pointser-tab" data-bs-toggle="tab"
                                        data-bs-target="#pointser" type="button" role="tab"
                                        aria-controls="pointser" aria-selected="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#4F5574" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0019 23.3337H3.09556C2.45118 23.3337 1.83352 23.0779 1.37856 22.6221C0.922803 22.1671 0.666992 21.5495 0.666992 20.9051V7.95271H5.52413C6.16852 7.95271 6.78618 7.6969 7.24113 7.24113C7.6969 6.78618 7.95271 6.16852 7.95271 5.52413V0.666992H17.667C19.0084 0.666992 20.0956 1.75418 20.0956 3.09556V9.43656C19.1039 9.00266 18.0086 8.76223 16.8575 8.76223C15.5274 8.76223 14.2718 9.08361 13.1636 9.65352C13.0568 9.6009 12.9369 9.57175 12.8098 9.57175H4.71461C4.26775 9.57175 3.90509 9.93442 3.90509 10.3813C3.90509 10.8281 4.26775 11.1908 4.71461 11.1908H11.0783C10.3934 11.8894 9.83404 12.7111 9.43656 13.6194H4.71461C4.26775 13.6194 3.90509 13.982 3.90509 14.4289C3.90509 14.8758 4.26775 15.2384 4.71461 15.2384H8.92414C8.81809 15.7614 8.76223 16.3029 8.76223 16.8575C8.76223 17.1303 8.77599 17.4007 8.8019 17.667H4.71461C4.26775 17.667 3.90509 18.0297 3.90509 18.4765C3.90509 18.9234 4.26775 19.286 4.71461 19.286H9.1338C9.64704 20.918 10.6638 22.3282 12.0019 23.3337ZM0.761707 6.33366C0.874231 5.94185 1.08471 5.5808 1.37856 5.28694L5.28694 1.37856C5.5808 1.08471 5.94185 0.874231 6.33366 0.761707V5.52413C6.33366 5.73866 6.24866 5.94509 6.09647 6.09647C5.94509 6.24866 5.73866 6.33366 5.52413 6.33366H0.761707ZM16.8575 10.3813C20.4315 10.3813 23.3337 13.2834 23.3337 16.8575C23.3337 20.4315 20.4315 23.3337 16.8575 23.3337C13.2834 23.3337 10.3813 20.4315 10.3813 16.8575C10.3813 13.2834 13.2834 10.3813 16.8575 10.3813ZM16.8575 18.3146C16.7377 18.3146 16.6324 18.249 16.5766 18.1519C16.3523 17.7649 15.8569 17.633 15.4699 17.8572C15.0838 18.0807 14.9518 18.5761 15.1753 18.963C15.376 19.3103 15.6812 19.5888 16.0479 19.7572V20.0956C16.0479 20.5424 16.4106 20.9051 16.8575 20.9051C17.3043 20.9051 17.667 20.5424 17.667 20.0956V19.7572C18.3357 19.4504 18.8003 18.7744 18.8003 17.9908C18.8003 17.0307 18.2482 16.5596 17.5108 16.2447C17.2606 16.1378 16.9854 16.0544 16.7449 15.9387C16.647 15.8917 16.5337 15.8569 16.5337 15.7241C16.5337 15.5452 16.6786 15.4003 16.8575 15.4003C16.9773 15.4003 17.0825 15.4659 17.1384 15.563C17.3626 15.95 17.858 16.0819 18.245 15.8577C18.6311 15.6343 18.7631 15.1389 18.5397 14.7519C18.3389 14.4046 18.0337 14.1261 17.667 13.9578V13.6194C17.667 13.1725 17.3043 12.8098 16.8575 12.8098C16.4106 12.8098 16.0479 13.1725 16.0479 13.6194V13.9578C15.3793 14.2646 14.9146 14.9405 14.9146 15.7241C14.9146 16.6842 15.4667 17.1554 16.2042 17.4703C16.4543 17.5771 16.7296 17.6605 16.97 17.7763C17.0679 17.8232 17.1813 17.858 17.1813 17.9908C17.1813 18.1697 17.0364 18.3146 16.8575 18.3146Z"/>
                                            </svg>
                                            Claims Scrubbing and Submission
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="isv-tab" data-bs-toggle="tab" data-bs-target="#isv"
                                        type="button" role="tab" aria-controls="isv" aria-selected="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#4F5574" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.1248 0.666992H3.26373C1.82817 0.666992 0.666504 1.82866 0.666504 3.26421V17.9031C0.666504 19.3387 1.82817 20.5003 3.26373 20.5003H10.9609C10.1676 19.2442 9.63873 17.7614 9.63873 16.0614V13.757C9.49706 13.842 9.3365 13.8892 9.1665 13.8892H4.44428C3.92484 13.8892 3.49984 13.4642 3.49984 12.9448C3.49984 12.4253 3.92484 12.0003 4.44428 12.0003H9.1665C9.34595 12.0003 9.5065 12.0475 9.64817 12.1325C9.68595 11.3298 10.0637 10.5931 10.6587 10.1114H4.44428C3.92484 10.1114 3.49984 9.68644 3.49984 9.16699C3.49984 8.64755 3.92484 8.22255 4.44428 8.22255H12.9443C13.3409 8.22255 13.6809 8.4681 13.8226 8.81755L16.5143 7.90144C16.5804 7.8731 16.6465 7.85421 16.7221 7.84477V3.26421C16.7221 1.82866 15.5604 0.666992 14.1248 0.666992ZM8.22206 6.33366H4.44428C3.92484 6.33366 3.49984 5.90866 3.49984 5.38921C3.49984 4.86977 3.92484 4.44477 4.44428 4.44477H8.22206C8.7415 4.44477 9.1665 4.86977 9.1665 5.38921C9.1665 5.90866 8.7415 6.33366 8.22206 6.33366Z" />
                                            <path d="M22.6925 11.3757L17.7342 9.68896C17.5368 9.62191 17.3224 9.62191 17.125 9.68896L12.1667 11.3757C11.7842 11.5061 11.5264 11.8659 11.5264 12.2701V16.0649C11.5264 20.8504 16.8332 23.1624 17.0589 23.2587C17.1779 23.3088 17.3045 23.3334 17.4301 23.3334C17.5557 23.3334 17.6823 23.3088 17.8003 23.2578C18.026 23.1615 23.3329 20.8504 23.3329 16.0649V12.2701C23.3329 11.865 23.076 11.5061 22.6925 11.3757ZM20.7829 14.9278L17.9495 18.7056C17.7852 18.9247 17.5349 19.0616 17.261 19.0805C17.2384 19.0824 17.2157 19.0834 17.194 19.0834C16.9437 19.0834 16.7038 18.9851 16.5263 18.8066L14.6374 16.9177C14.2681 16.5485 14.2681 15.9516 14.6374 15.5823C15.0066 15.213 15.6035 15.213 15.9728 15.5823L17.092 16.7015L19.2718 13.7945C19.5844 13.378 20.1765 13.292 20.593 13.6056C21.0114 13.9182 21.0964 14.5104 20.7829 14.9278Z" />
                                            </svg>
                                             Denial Management and Appeals
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="encount-tab" data-bs-toggle="tab"
                                        data-bs-target="#encount" type="button" role="tab" aria-controls="encount"
                                        aria-selected="false">
                                        <svg width="20" height="22" viewBox="0 0 20 22" fill="#4F5574" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.59582 10.7912V12.5058H8.85041V10.7912C8.85041 10.4449 9.13144 10.1639 9.47771 10.1639H11.1923V8.9093H9.47771C9.13144 8.9093 8.85041 8.62827 8.85041 8.282V6.56738H7.59582V8.282C7.59582 8.62827 7.31479 8.9093 6.96852 8.9093H5.25391V10.1639H6.96852C7.31479 10.1639 7.59582 10.4449 7.59582 10.7912Z" />
                                            <path d="M10.846 19.7758C10.708 19.4521 10.6043 19.1188 10.5349 18.7784H9.49816C9.15189 18.7784 8.87086 18.4973 8.87086 18.1511C8.87086 17.8048 9.15189 17.5238 9.49816 17.5238H10.4379C10.4558 17.0964 10.5269 16.6765 10.6495 16.2692H3.72702C3.38284 16.2692 3.09972 15.9861 3.09972 15.6419C3.09972 15.2977 3.38284 15.0146 3.72702 15.0146H11.2153C11.4265 14.6746 11.6766 14.3593 11.9639 14.072C12.4423 13.5936 12.9985 13.2176 13.6174 12.9541C14.3818 12.6273 15.2139 12.4916 16.043 12.556V2.59409C16.043 2.24783 15.7619 1.9668 15.4157 1.9668H13.6157C13.6446 2.14579 13.6592 2.32937 13.6592 2.51631V2.59409C13.6592 3.63164 12.8149 4.47599 11.7773 4.47599H4.66797C3.63042 4.47599 2.78608 3.63164 2.78608 2.59409V2.51631C2.78608 2.32937 2.80071 2.14579 2.82957 1.9668H1.02964C0.683373 1.9668 0.402344 2.24783 0.402344 2.59409V21.0785C0.402344 21.4247 0.683373 21.7058 1.02964 21.7058H12.2629C11.6485 21.18 11.1607 20.517 10.846 19.7758ZM3.99885 8.28159C3.99885 7.93533 4.27988 7.6543 4.62615 7.6543H6.34076V5.93968C6.34076 5.59341 6.62179 5.31238 6.96806 5.31238H9.47725C9.82352 5.31238 10.1045 5.59341 10.1045 5.93968V7.6543H11.8192C12.1654 7.6543 12.4465 7.93533 12.4465 8.28159V10.7908C12.4465 11.1371 12.1654 11.4181 11.8192 11.4181H10.1045V13.1327C10.1045 13.479 9.82352 13.76 9.47725 13.76H6.96806C6.62179 13.76 6.34076 13.479 6.34076 13.1327V11.4181H4.62615C4.27988 11.4181 3.99885 11.1371 3.99885 10.7908V8.28159ZM6.98897 18.7784H3.72702C3.38075 18.7784 3.09972 18.4973 3.09972 18.1511C3.09972 17.8048 3.38075 17.5238 3.72702 17.5238H6.98897C7.33524 17.5238 7.61627 17.8048 7.61627 18.1511C7.61627 18.4973 7.33524 18.7784 6.98897 18.7784Z"/>
                                            <path d="M4.66831 3.22133H11.7777C12.124 3.22133 12.405 2.94031 12.405 2.59404V2.51625C12.405 1.29093 11.408 0.293945 10.1827 0.293945H8.223H6.26332C5.038 0.293945 4.04102 1.29093 4.04102 2.51625V2.59404C4.04102 2.94031 4.32205 3.22133 4.66831 3.22133Z" />
                                            <path d="M15.6428 13.7949C13.4732 13.7949 11.6875 15.5806 11.6875 17.7502C11.6875 19.9203 13.4732 21.7056 15.6428 21.7056C17.8129 21.7056 19.5981 19.9203 19.5981 17.7502C19.5981 15.5806 17.8129 13.7949 15.6428 13.7949ZM17.1952 17.4826L15.7733 18.9045C15.752 18.9258 15.7294 18.9455 15.706 18.9626C15.5947 19.0462 15.4622 19.0881 15.3296 19.0881C15.169 19.0881 15.0084 19.027 14.8859 18.9045L14.0913 18.1099C13.8467 17.8648 13.8467 17.4675 14.0913 17.2225C14.3364 16.9778 14.7337 16.9778 14.9787 17.2225L15.3296 17.5738L15.706 17.1974L16.3078 16.5952C16.5511 16.3518 16.9518 16.3518 17.1952 16.5952C17.4386 16.8386 17.4386 17.2392 17.1952 17.4826Z" />
                                            </svg>
                                             Patient Collections
                                    </button>
                                </li>                              
                            </ul>
                        </div>
                        <div class="col-md-7 col-sm-12 col-12 col-xl-7 inner-tab-content-one">
                            <div class="tab-content" id="inTabContent">
                                <div class="tab-pane fade show active" id="iv" role="tabpanel"
                                    aria-labelledby="iv-tab">
                                    <div class="col-md-12 col-sm-12 col-12 col-xl-12 col-12">
                                        <div class="max-pre-box">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-5 col-5 col-xl-5 order-one">
                                                    <img src="public/assets/images/document.png" alt="document"
                                                        class="document" />
                                                </div>
                                                <div class="col-md-12 col-sm-7 col-7 col-xl-7">
                                                    <h4>Insurance Verification</h4>
                                                    <p>
                                                        We ensure smooth billing right from the start by accurately collecting patient information 
                                                        and verifying insurance coverage. Additionally, we obtain the necessary preauthorization that 
                                                        insurers often require.
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
