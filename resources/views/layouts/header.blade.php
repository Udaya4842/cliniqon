

    <header>
      <div class="topbar">
        <div class="container-xxl">
          <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
              <p>☎️ Call - <a href="tel:1800-826-2477">1800-826-2477</a></p>
            </div>
            <div
              class="col-xxl-6 col-xl-6 col-lg-6 col-12 certified_logo text-end">
              <img
                src="public/assets/images/verified_chap_amber_logo.png"
                alt="CHAP verified" />
              <span class="gptw_logo absolute">
                <img src="public/assets/images/gptw.png" alt="CHAP verified" />
              </span>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#"
            ><img src="public/assets/images/cliniqon_logo.png" alt="Cliniqon"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
              </li>
              <!-- <li class="nav-item">
                <a href="" class="nav-link">Services</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('services') }}">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item health-icon" href="{{ route('home-health-and-qa') }}"
                      >Home Health And QA</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item coding-icon" href="{{ route('hospice-coding-and-qa') }}"
                      >Hospice Coding And QA
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item clinc-icon" href="{{ route('clinical-administrative') }}"
                      >Clinical Administrative</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item revenue-icon" href="{{ route('revenue-cycle-management') }}"
                      >Revenue Cycle Management
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item care-icon" href="{{ route('care-management') }}"
                      >Care Management</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item billing-icon" href="{{ route('hospice-billing') }}"
                      >Hospice Billing</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item health-billing-icon" href="{{ route('home-health-billing') }}"
                      >Home health Billing</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('insights') }}" class="nav-link">Insights</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('careers') }}" class="nav-link">Careers</a>
              </li>
              <li class="nav-item nav-button">
                <a href="{{ route('partner-with-us') }}" class="nav-link">Partner With us</a>
              </li>
            </ul>
          </div>
          <div
            class="offcanvas offcanvas-start d-lg-none"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <a class="navbar-brand" href="#"
                  ><img src="public/assets/images/cliniqon_logo.png" alt="Cliniqon"
                /></a>
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#"> Services </a>
                  <span
                    class="nav-link dropdown-toggle"
                    role="button"
                    data-bs-toggle="dropdown"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none">
                      <path
                        d="M6 9.00732L12 15.0073L18 9.00732"
                        stroke="#4F5574"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </span>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item health-icon" href="#"
                        >Home Health And QA</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item coding-icon" href="#"
                        >Hospice Coding And QA
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item clinc-icon" href="#"
                        >Clinical Administrative</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item revenue-icon" href="#"
                        >Revenue Cycle Management
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item care-icon" href="#"
                        >Care Management</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item billing-icon" href="#"
                        >Hospice Billing</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item health-billing-icon" href="#"
                        >Home health Billing</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Insights</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Careers</a>
                </li>
                <li class="nav-item nav-button">
                  <a href="#" class="nav-link">Partner With us</a>
                </li>
              </ul>
              <div class="res-menu-logo">
                <img
                  src="public/assets/images/verified_chap_amber_logo_black.png"
                  alt="CHAP verified" />
                <img src="public/assets/images/gptw.png" alt="CHAP verified" />
              </div>
            </div>
            <div class="offcanvas-footer mt-auto">
              <p>☎️ Call - <a href="tel:1800-826-2477">1800-826-2477</a></p>
            </div>
          </div>
        </div>
      </nav>
    </header>