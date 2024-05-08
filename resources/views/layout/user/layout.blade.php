<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title')</title>

    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/user/index.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="https://kit.fontawesome.com/a051b84b57.js" crossorigin="anonymous"></script>


    <style>
        .loan-cal {
            width: 100%;
        }



        @media (max-width: 500px) {
            .carousel-inner {
                height: 200px;
            }

            .carousel-inner img {
                height: auto;
                width: 100%;
                object-fit: cover;
            }

            #company-do-content {
                font-size: 10px
            }

            #company-objective-content {
                font-size: 10px
            }

            .awards-images {
                height: auto;
                width: 100%;
                object-fit: cover;

            }
        }
    </style>


</head>

<body>
    {{-- 
    <div id="loader" class="p-5 bg-white p-3 w-100" style="height: 100vh; position: fixed; z-index:">
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="h1">ALVEO LAND</div>
        </div>
    </div> --}}



    <div class="offcanvas offcanvas-end loan-cal" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header text-center">

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="text-center">
            </div>
            <form id="calculator-form" class="">
                <h3 class="text-dark">Housing Loan Calculator</h3>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control loan-selling-price" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Selling Price</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating w-100">
                            <select class="form-select loan-property-type" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Choose</option>
                                <option value="House & Lot">House & Lot</option>
                                <option value="Residential Condominium">Residential Condominium</option>
                                <option value="Lot Purchase">Lot Purchase</option>
                                <option value="Property Acquisition (OFW)">Property Acquisition (OFW)
                                </option>
                            </select>
                            <label for="floatingSelect">Property Type</label>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control loan-interest-rate" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Interst Rate</label>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating w-100">
                            <select class="form-select loan-downpayment" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Choose</option>
                                <option value="10">10%</option>
                                <option value="20">20%</option>
                                <option value="30">30%</option>
                                <option value="40">40%</option>
                                <option value="50">50%</option>
                                >
                            </select>
                            <label for="floatingSelect">Downpayment</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating w-100">
                            <select class="form-select loan-term" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Choose</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Years</option>
                                <option value="3">3 Years</option>
                                <option value="4">4 Years</option>
                                <option value="5">5 Years</option>
                                <option value="6">6 Years</option>
                                <option value="7">7 Years</option>
                                <option value="8">8 Years</option>
                                <option value="9">9 Years</option>
                                <option value="10">10 Years</option>
                                <option value="11">11 Years</option>
                                <option value="12">12 Years</option>
                                <option value="13">13 Years</option>
                                <option value="14">14 Years</option>
                                <option value="15">15 Years</option>
                                <option value="16">16 Years</option>
                                <option value="17">17 Years</option>
                                <option value="18">18 Years</option>
                                <option value="19">19 Years</option>
                                <option value="20">20 Years</option>

                            </select>
                            <label for="floatingSelect">Payment Term</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <button type="button" class="btn btn-primary w-100 mt-3 loan-calculate me-3">Calculate</button>
                    <button type="button" class="btn btn-primary w-100 mt-3 loan-calculate-clear">Clear</button>
                </div>
            </form>
            <div class=" mt-3 border p-3">
                <div id="loan-results" class="row w-100 d-none">

                </div>


            </div>

        </div>
    </div>
    <div class="bg-light text-end px-3">
        <small>Here is where you can reach us!</small>
        <div id="google_translate_element"></div>
    </div>
    <div class="top-navbar pt-1 lh-2 text-center">
        <div class="d-flex justify-content-center align-items-center">
            <a href="https://account.viber.com/en/login?destination=purchase" target="_blank" class="me-2 nav-link  "
                target="_blank">
                <h5><i class="me-2 fa-brands fa-viber"></i></h5>
            </a>
            <a href="https://web.whatsapp.com/" target="_blank" class="me-2 nav-link " title="WhatsApp">
                <h5><i class="fa-brands fa-whatsapp"></i></h5>

            </a>
            <a href="https://web.telegram.org/a/#6381425825" target="_blank" class="me-2 nav-link  "
                title="Telegram">
                <h5><i class="me-2 fa-brands fa-telegram"></i></h5>
            </a>
            <a href="tel:09108707822" class="me-2 nav-link " target="_blank" title="Phone">
                <h5><i class="me-2 fa-solid fa-phone"></i></h5>
            </a>
            <a href="https://web.facebook.com/messages/t/100003131920372" target="_blank" class="me-2 nav-link"
                title="Messenger">
                <h5><i class="me-2 fa-brands fa-facebook-messenger"></i></h5>
            </a>

        </div>
        <div class="">
        </div>
    </div>

    <div id="navbar" class="navbar navbar-expand-lg navbar-dark bg-transparent w-100">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand d-none d-lg-block" href="{{ url('/') }}"><img src="/static/ALVEO.svg"
                    alt="ALVEO" height="30"></a>
            <a class="navbar-brand d-lg-none text-center " href="{{ url('/') }}"><img src="/static/ALVEO.svg"
                    alt="ALVEO" height="30"></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::url() == url('/about') ? 'active' : '' }}"
                            href="{{ '/about' }}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ '/projects' }}"
                            class="nav-link {{ Request::url() == url('/projects') ? 'active' : '' }}">PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::url() == url('/our-properties/sale') ? 'active' : '' }}"
                            href="{{ '/our-properties/sale' }}">FOR SALE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::url() == url('/our-properties/lease') ? 'active' : '' }}"
                            href="{{ '/our-properties/lease' }}">FOR LEASE</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            LOCATIONS
                        </a>
                        <ul class="dropdown-menu locations-city-list" aria-labelledby="navbarDropdown">

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/inquiry') }}">SEND US A MESSAGE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target=".loan-cal"
                            aria-controls="staticBackdrop">LOAN CALCULATOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/send-property' }}">SUBMIT PROPERTY</a>
                    </li>
                    <!-- Other nav items -->
                    <!-- Add other navbar items here -->
                </ul>
            </div>
        </div>
    </div>



    <div class="section" id="section">
        @yield('index')
        @yield('about')
        @yield('lease')
        @yield('sale')
        @yield('locations')
        @yield('viwe_units_data')
        @yield('user_projects')
        @yield('project_units')
        @yield('prospects')
        @yield('our_properties')
        @yield('send_inquiry')
        @yield('property_view')
        @yield('submit_property_form')
        @yield('schedule_viewing')
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="toasMessage" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto" id="toast-header"></strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <span id="toast-content"></span>
            </div>
        </div>
    </div>

    @include('pages.chat')
    <script src="{{ asset('js/user/index.js') }}"></script>
    <script src="{{ asset('js/user/logo.js') }}"></script>
    <script src="{{ asset('js/user/search.js') }}"></script>
    <script src="{{ asset('js/user/calculator.js') }}"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="{{ asset('/js/user/units.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Loader()
            Calculator()




            $('#openNavigationMenu').click(function(e) {
                e.preventDefault();
                $('#logomobile').addClass('d-none')
                $('#closeNavigationMenu').removeClass('d-sm-none')
                $('#openNavigationMenu').removeClass('d-sm-block')
                $('#openNavigationMenu').addClass('d-sm-none')
                $('#mobileSizeNavigation').removeClass('d-sm-none')
                // $('#openNavigationMenu').addClass('d-none')

            });
            $('#closeNavigationMenu').click(function(e) {
                e.preventDefault();
                $('#logomobile').removeClass('d-none')
                $('#closeNavigationMenu').addClass('d-sm-none')
                $('#openNavigationMenu').addClass('d-sm-block')
                $('#openNavigationMenu').removeClass('d-sm-none')
                $('#mobileSizeNavigation').addClass('d-sm-none')

                // $('#openNavigationMenu').addClass('d-none')

            });
            tagline()
            LocationsList()
            EventsLocation();





            $('.subscribe-btn').click(function(e) {
                e.preventDefault();

                $('#subscribe-modal').modal('show')

            });
            $('#subscriber-form').submit(function(e) {
                e.preventDefault();
                var formdata = new FormData($(this)[0])
                $.ajax({
                    type: "POST",
                    url: "/newsletter/subscribe",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 200) {
                            $('#subscriber-form')[0].reset()
                        } else {

                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseTxt)
                    }
                });

            });


        });
    </script>


</body>

</html>
