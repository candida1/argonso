<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Design System - Free Design System for Bootstrap 4</title>
    <!-- Favicon -->
    <link href="{{ asset('img/brand/favicon.png')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('css/argon.css?v=1.0.0')}}" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="{{ asset('css/docs.min.css')}}" rel="stylesheet">
</head>

<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="./index.html">
                    <img src="{{ asset('img/brand/white.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                    aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="./index.html">
                                    <img src="{{ asset('img/brand/blue.png')}}">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                                <i class="ni ni-ui-04 d-lg-none"></i>
                                <span class="nav-link-inner--text">Components</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl">
                                <div class="dropdown-menu-inner">
                                    <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html"
                                        class="media d-flex align-items-center">
                                        <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                            <i class="ni ni-spaceship"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="heading text-primary mb-md-1">Getting started</h6>
                                            <p class="description d-none d-md-inline-block mb-0">Get started with
                                                Bootstrap, the world's most popular framework for building responsive
                                                sites.</p>
                                        </div>
                                    </a>
                                    <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html"
                                        class="media d-flex align-items-center">
                                        <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                            <i class="ni ni-ui-04"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h5 class="heading text-warning mb-md-1">Components</h5>
                                            <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon
                                                compiling Scss, change brand colors and more.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                                <i class="ni ni-collection d-lg-none"></i>
                                <span class="nav-link-inner--text">Examples</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="./examples/landing.html" class="dropdown-item">Landing</a>
                                <a href="./examples/profile.html" class="dropdown-item">Profile</a>
                                <a href="./examples/login.html" class="dropdown-item">Login</a>
                                <a href="./examples/register.html" class="dropdown-item">Register</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim"
                                target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                                <i class="fa fa-facebook-square"></i>
                                <span class="nav-link-inner--text d-lg-none">Facebook</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial"
                                target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                                <i class="fa fa-instagram"></i>
                                <span class="nav-link-inner--text d-lg-none">Instagram</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank"
                                data-toggle="tooltip" title="Follow us on Twitter">
                                <i class="fa fa-twitter-square"></i>
                                <span class="nav-link-inner--text d-lg-none">Twitter</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon"
                                href="https://github.com/creativetimofficial/argon-design-system" target="_blank"
                                data-toggle="tooltip" title="Star us on Github">
                                <i class="fa fa-github"></i>
                                <span class="nav-link-inner--text d-lg-none">Github</span>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block ml-lg-4">
                            @if (Route::has('login'))
                                @auth
                                    <x-link :href="route('dashboard')" variant="danger" text="Dashboard"/>
                                @else
                                    <x-link :href="route('login')" variant="primary" text="Login"/>
                                    </a>
                                    @if (Route::has('register'))
                                    <x-link :href="route('register')" variant="info" text="Register"/>
                                    @endif
                                @endauth
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="position-relative">
            <!-- Hero for FREE version -->
            <section class="section-hero section-shaped my-0">
                <div class="shape shape-style-1 shape-primary">
                    <span class="span-150"></span>
                    <span class="span-50"></span>
                    <span class="span-50"></span>
                    <span class="span-75"></span>
                    <span class="span-100"></span>
                    <span class="span-75"></span>
                    <span class="span-50"></span>
                    <span class="span-100"></span>
                    <span class="span-50"></span>
                    <span class="span-100"></span>
                </div>
                <div class="container shape-container d-flex align-items-center">
                    <div class="col px-0">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-7 text-center pt-lg">
                                <img src="{{ asset('img/brand/white.png')}}" style="width: 200px;" class="img-fluid">
                                <p class="lead text-white mt-4 mb-5">A beautiful Design System for Bootstrap 4. It's
                                    Free and Open Source.</p>
                                <div class="btn-wrapper">
                                    <a href="#section-components" class="btn btn-info btn-icon mb-3 mb-sm-0"
                                        data-toggle="scroll">
                                        <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                                        <span class="btn-inner--text">Components</span>
                                    </a>
                                    <a href="https://themewagon.com/themes/free-bootstrap-4-design-system/"
                                        class="btn btn-white btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                                        <span class="btn-inner--text">Download HTML</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-around stars-and-coded">
                            <div class="col-sm-4">
                                <span class="text-white alpha-7 ml-3">Star us on</span>
                                <a href="https://github.com/creativetimofficial/argon-design-system" target="_blank"
                                    title="Support us on Github">
                                    <img src="{{ asset('img/brand/github-white-slim.png')}}"
                                        style="height: 22px; margin-top: -3px">
                                </a>
                            </div>
                            <div class="col-sm-4 mt-4 mt-sm-0 text-right">
                                <span class="text-white alpha-7">Coded by</span>
                                <a href="https://www.creative-tim.com" target="_blank"
                                    title="Creative Tim - Premium Bootstrap Themes and Templates">
                                    <img src="{{ asset('img/brand/creativetim-white-slim.png')}}" class="ml-3"
                                        style="height: 30px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="section section-components pb-0" id="section-components">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <!-- Basic elements -->
                        <h2 class="mb-5">
                            <span>Basic Elements</span>
                        </h2>
                        <!-- Buttons -->
                        <h3 class="h4 text-success font-weight-bold mb-4">Buttons</h3>
                        <!-- Button styles -->
                        <div>
                            <x-welcome.button>Button</x-welcome.button>
                            <x-welcome.icon-button icon="ni ni-bag-17">With icon</x-welcome.icon-button>
                            <x-welcome.icon-button icon="ni ni-bag-17"></x-welcome.icon-button>
                            <!-- Button wizes -->
                            <div class="mb-3 mt-5">
                                <small class="text-uppercase font-weight-bold">Icon Buttons</small>
                            </div>
                            <x-welcome.icon-button size="btn-1" color="primary"
                                icon="ni ni-bag-17">Primary</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="info"
                                icon="ni ni-active-40">Info</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="success"
                                icon="ni ni-air-baloon">Success</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="warning"
                                icon="ni ni-atom">Warning</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="danger"
                                icon="ni ni-bell-55">Danger</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="neutral"
                                icon="ni ni-bulb-61">Neutral</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="default"
                                icon="ni ni-calendar-grid-58">Default</x-welcome.icon-button>
                            <div class="mb-3 mt-5">
                                <small class="text-uppercase font-weight-bold">Icon Buttons Position</small>
                            </div>
                            <x-welcome.icon-button size="btn-1" color="primary" icon="ni ni-bag-17"
                                iconPosition="left">Primary</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="info" icon="ni ni-bag-17"
                                iconPosition="right">Info</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="success"
                                icon="ni ni-bag-17"></x-welcome.icon-button>
                            <div class="mb-3 mt-5">
                                <small class="text-uppercase font-weight-bold">Icon Buttons Outline</small>
                            </div>
                            <x-welcome.icon-button size="btn-1" color="primary" icon="ni ni-bag-17"
                                outline="true">Primary</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="info" icon="ni ni-active-40"
                                outline="true">Info</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" color="success" icon="ni ni-air-baloon"
                                outline="true">Success</x-welcome.icon-button>
                            <div class="mb-3 mt-5">
                                <small class="text-uppercase font-weight-bold">Icon Buttons Size</small>
                            </div>
                            <x-welcome.icon-button size="btn-1" size="btn-sm" color="primary"
                                icon="ni ni-bag-17">Primary</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" size="btn-1" color="info"
                                icon="ni ni-active-40">Info</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-lg" size="btn-lg" color="success"
                                icon="ni ni-air-baloon">Success</x-welcome.icon-button>
                            <!-- Button wizes -->
                            <div class="mb-3 mt-5">
                                <small class="text-uppercase font-weight-bold">Pick your size</small>
                            </div>
                            <x-welcome.button size="btn-sm">Small</x-welcome.button>
                            <x-welcome.button size="btn-1">Regular</x-welcome.button>
                            <x-welcome.button size="btn-lg">Large Button</x-welcome.button>
                            <!-- Button styles -->
                            <div class="mb-3 mt-5">
                                <small class="text-uppercase font-weight-bold">Pick your style</small>
                            </div>
                            <x-welcome.button size="btn-1">Default</x-welcome.button>
                            <x-welcome.button size="btn-1" style="round">Round</x-welcome.button>
                            <x-welcome.icon-button size="btn-1" icon="ni ni-bag-17" iconPosition="right">With
                                Icon</x-welcome.icon-button>
                            <x-welcome.icon-button size="btn-1" icon="ni ni-active-40"></x-welcome.icon-button>
                            <x-welcome.button size="btn-1" style="neutral">Regular</x-welcome.button>
                        </div>
                        <!-- Button colors -->
                        <div class="mb-3 mt-5">
                            <small class="text-uppercase font-weight-bold">Pick your color</small>
                        </div>
                        <x-welcome.button color="primary">Primary</x-welcome.button>
                        <x-welcome.button color="info">Info</x-welcome.button>
                        <x-welcome.button color="success">Success</x-welcome.button>
                        <x-welcome.button color="warning">Warning</x-welcome.button>
                        <x-welcome.button color="danger">Danger</x-welcome.button>
                        <x-welcome.button color="neutral">Neutral</x-welcome.button>
                        <x-welcome.button color="default">Default</x-welcome.button>
                        <div class="mb-3 mt-5">
                            <small class="text-uppercase font-weight-bold">Disabled state</small>
                        </div>
                        <x-welcome.button size="btn-1" color="primary" isDisabled="true">Primary</x-welcome.button>
                        <x-welcome.button size="btn-1" color="info" isDisabled="true">Info</x-welcome.button>
                        <x-welcome.button size="btn-1" color="success" isDisabled="true">Success</x-welcome.button>
                        <x-welcome.button size="btn-1" color="warning" isDisabled="true">Warning</x-welcome.button>
                        <x-welcome.button size="btn-1" color="danger" isDisabled="true">Danger</x-welcome.button>
                        <x-welcome.button size="btn-1" color="neutral" isDisabled="true">Neutral</x-welcome.button>
                        <x-welcome.button size="btn-1" color="default" isDisabled="true">Default</x-welcome.button>
                        <div class="mb-3 mt-5">
                            <small class="text-uppercase font-weight-bold">Disabled state icon</small>
                        </div>
                        <x-welcome.icon-button color="primary" isDisabled="true"
                            icon="ni ni-active-40">Primary</x-welcome.icon-button>
                        <x-welcome.icon-button color="info" isDisabled="true"
                            icon="ni ni-air-baloon">Info</x-welcome.icon-button>
                        <x-welcome.icon-button color="success" isDisabled="true"
                            icon="ni ni-atom">Success</x-welcome.icon-button>
                        <x-welcome.icon-button color="warning" isDisabled="true"
                            icon="ni ni-bell-55">Warning</x-welcome.icon-button>
                        <x-welcome.icon-button color="danger" isDisabled="true"
                            icon="ni ni-bold">Danger</x-welcome.icon-button>
                        <x-welcome.icon-button color="neutral" isDisabled="true"
                            icon="ni ni-bulb-61">Neutral</x-welcome.icon-button>
                        <x-welcome.icon-button color="default" isDisabled="true"
                            icon="ni ni-calendar-grid-58">Default</x-welcome.icon-button>
                        <div class="mb-3 mt-5">
                            <small class="text-uppercase font-weight-bold">Outline</small>
                        </div>
                        <x-welcome.button size="btn-1" color="primary" outline="true">Outline-primary</x-welcome.button>
                        <x-welcome.button size="btn-1" color="info" outline="true">Outline-info</x-welcome.button>
                        <x-welcome.button size="btn-1" color="success" outline="true">Outline-success</x-welcome.button>
                        <x-welcome.button size="btn-1" color="warning" outline="true">Outline-warning</x-welcome.button>
                        <x-welcome.button size="btn-1" color="danger" outline="true">Outline-danger</x-welcome.button>
                        <!-- Button links -->
                        <div class="mb-3 mt-5">
                            <small class="text-uppercase font-weight-bold">Links</small>
                        </div>
                        <x-welcome.link color="default">Default</x-welcome.link>
                        <x-welcome.link color="primary">Primary</x-welcome.link>
                        <x-welcome.link color="info">Info</x-welcome.link>
                        <x-welcome.link color="success">Success</x-welcome.link>
                        <x-welcome.link color="warning">Warning</x-welcome.link>
                        <x-welcome.link color="danger">Danger</x-welcome.link>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pb-0 section-components">
            <div class="container mb-5">
                <!-- Inputs -->
                <h3 class="h4 text-success font-weight-bold mb-4">Inputs</h3>
                <div class="mb-3">
                    <small class="text-uppercase font-weight-bold">Form controls</small>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <x-welcome.form-input type="text" placeholder="Regular" />
                        <x-welcome.form-input type="text" placeholder="Search" icon="ni ni-zoom-split-in" />
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <x-welcome.form-input type="text" placeholder="Regular" disabled="true" />
                        <x-welcome.form-input type="text" placeholder="Birthday" icon="ni ni-zoom-split-in"
                            iconPosition="right" />
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <x-welcome.form-input type="text" placeholder="Success" :isValid="true" />
                        <x-welcome.form-input type="email" placeholder="Error Input" :isValid="false" />
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <x-welcome.form-textarea id="description" name="description" placeholder="Write here..." />
                    </div>
                </div>
            </div>
            <div class="py-5 bg-secondary">
                <div class="container">
                    <!-- Inputs (alternative) -->
                    <div class="mb-3">
                        <small class="text-uppercase font-weight-bold">Form controls (alternative)</small>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <x-welcome.form-input-alternative type="text" placeholder="Regular" />
                            <x-welcome.form-input-alternative type="text" placeholder="Search"
                                icon="ni ni-zoom-split-in" />
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <x-welcome.form-input-alternative type="text" placeholder="Regular" disabled="true" />
                            <x-welcome.form-input-alternative type="text" placeholder="Birthday"
                                icon="ni ni-zoom-split-in" iconPosition="right" />
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <x-welcome.form-input-alternative type="text" placeholder="Success" :isValid="true" />
                            <x-welcome.form-input-alternative type="email" placeholder="Error Input" :isValid="false" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="py-5 bg-secondary">
                <div class="container">
                    <div class="mb-3">
                        <small class="text-uppercase font-weight-bold">Carousel</small>
                    </div>
                    <x-welcome.carousel id="myCarousel" size="d-block w-30">
                        <x-welcome.carousel-item src="{{ asset('img/theme/img-1-1200x1000.jpg') }}" alt="First slide" active="true" />
                        <x-welcome.carousel-item src="{{ asset('img/theme/img-2-1200x1000.jpg') }}" alt="Second slide" />
                        <x-welcome.carousel-item src="{{ asset('img/theme/animal.jpeg') }}" alt="Third slide" />
                    </x-welcome.carousel>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <!-- Custom controls -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Checkboxes -->
                        <div class="mb-3">
                            <small class="text-uppercase font-weight-bold">Checkboxes</small>
                        </div>
                        <x-welcome.checkbox id="customCheck1" label="Unchecked" />
                        <x-welcome.checkbox id="customCheck2" checked="true" label="Checked" />
                        <x-welcome.checkbox id="customCheck3" disabled="true" label="Disabled Unchecked" />
                        <x-welcome.checkbox id="customCheck4" checked="true" disabled="true" label="Disabled Checked" />
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
                        <!-- Radio buttons -->
                        <div class="mb-3">
                            <small class="text-uppercase font-weight-bold">Radios</small>
                        </div>
                        <x-welcome.radio name="custom-radio-1" id="customRadio1" label="Unchecked" />
                        <x-welcome.radio name="custom-radio-1" id="customRadio2" checked="true" label="Checked" />
                        <x-welcome.radio name="custom-radio-2" id="customRadio3" disabled="true"
                            label="Disabled unchecked" />
                        <x-welcome.radio name="custom-radio-2" id="customRadio4" checked="true" disabled="true"
                            label="Disabled checked" />
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
                        <!-- Toggle buttons -->
                        <div class="mb-3">
                            <small class="text-uppercase font-weight-bold">Toggle buttons</small>
                        </div>
                        <x-welcome.toggle-button />
                        <span class="clearfix"></span>
                        <x-welcome.toggle-button checked="true" />
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
                        <div class="mb-3">
                            <small class="text-uppercase font-weight-bold">Sliders</small>
                        </div>
                        <!-- Simple slider -->
                        <x-welcome.input-slider id="input-slider" min="100" max="500" valueId="input-slider-value"
                            value="100" />

                        <!-- Range slider -->
                        <x-welcome.range-slider id="input-slider-range" min="100" max="500"
                            lowValueId="input-slider-range-value-low" lowValue="200"
                            highValueId="input-slider-range-value-high" highValue="400" />
                    </div>
                </div>
                <div class="row justify-content-center mt-md">
                    <div class="col-lg-12">
                        <!-- Menu -->
                        <h3 class="h4 text-success font-weight-bold mb-4">Menu</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <small class="text-uppercase font-weight-bold">With text</small>
                                </div>
                                <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
                                    <div class="container">
                                        <a class="navbar-brand" href="#">Menu</a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#nav-inner-primary" aria-controls="nav-inner-primary"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="nav-inner-primary">
                                            <div class="navbar-collapse-header">
                                                <div class="row">
                                                    <div class="col-6 collapse-brand">
                                                        <a href="./index.html">
                                                            <img src="img/brand/blue.png">
                                                        </a>
                                                    </div>
                                                    <div class="col-6 collapse-close">
                                                        <button type="button" class="navbar-toggler"
                                                            data-toggle="collapse" data-target="#nav-inner-primary"
                                                            aria-controls="nav-inner-primary" aria-expanded="false"
                                                            aria-label="Toggle navigation">
                                                            <span></span>
                                                            <span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="navbar-nav ml-lg-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Discover
                                                        <span class="sr-only">(current)</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Profile</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link" href="#" id="nav-inner-primary_dropdown_1"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Settings</a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="nav-inner-primary_dropdown_1">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="mb-3">
                                    <small class="text-uppercase font-weight-bold">With icons</small>
                                </div>
                                <nav class="navbar navbar-expand-lg navbar-dark bg-success rounded">
                                    <div class="container">
                                        <a class="navbar-brand" href="#">Menu</a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#nav-inner-success" aria-controls="nav-inner-success"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="nav-inner-success">
                                            <div class="navbar-collapse-header">
                                                <div class="row">
                                                    <div class="col-6 collapse-brand">
                                                        <a href="./index.html">
                                                            <img src="img/brand/blue.png">
                                                        </a>
                                                    </div>
                                                    <div class="col-6 collapse-close">
                                                        <button type="button" class="navbar-toggler"
                                                            data-toggle="collapse" data-target="#nav-inner-success"
                                                            aria-controls="nav-inner-success" aria-expanded="false"
                                                            aria-label="Toggle navigation">
                                                            <span></span>
                                                            <span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="navbar-nav ml-lg-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link nav-link-icon" href="#">
                                                        <i class="ni ni-favourite-28"></i>
                                                        <span class="nav-link-inner--text d-lg-none">Discover</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-link-icon" href="#">
                                                        <i class="ni ni-notification-70"></i>
                                                        <span class="nav-link-inner--text d-lg-none">Profile</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link nav-link-icon" href="#"
                                                        id="nav-inner-success_dropdown_1" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ni ni-settings-gear-65"></i>
                                                        <span class="nav-link-inner--text d-lg-none">Settings</span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="nav-inner-success_dropdown_1">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <div class="container">
                <!-- Navigation -->
                <h2 class="mb-5">
                    <span>Navbars</span>
                </h2>
            </div>
            <!-- Navbar default -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-default">
                <div class="container">
                    <a class="navbar-brand" href="#">Default Color</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default"
                        aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-default">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="./index.html">
                                        <img src="img/brand/blue.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar-default" aria-controls="navbar-default"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="ni ni-favourite-28"></i>
                                    <span class="nav-link-inner--text d-lg-none">Discover</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="ni ni-notification-70"></i>
                                    <span class="nav-link-inner--text d-lg-none">Profile</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="nav-link-inner--text d-lg-none">Settings</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbar-default_dropdown_1">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar primary -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-4">
                <div class="container">
                    <a class="navbar-brand" href="#">Primary Color</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary"
                        aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-primary">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="./index.html">
                                        <img src="img/brand/blue.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar-primary" aria-controls="navbar-primary"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Discover
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbar-primary_dropdown_1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                                <div class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbar-primary_dropdown_1">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar success -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-success mt-4">
                <div class="container">
                    <a class="navbar-brand" href="#">Success Color</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-success"
                        aria-controls="navbar-success" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-success">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="./index.html">
                                        <img src="img/brand/blue.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar-success" aria-controls="navbar-success"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="ni ni-favourite-28"></i>
                                    <span class="nav-link-inner--text d-lg-none">Favorites</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="ni ni-planet"></i>
                                    <span class="nav-link-inner--text d-lg-none">Another action</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-link-icon" href="#" id="navbar-success_dropdown_1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="nav-link-inner--text d-lg-none">Settings</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbar-success_dropdown_1">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar danger -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger mt-4">
                <div class="container">
                    <a class="navbar-brand" href="#">Danger Color</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-danger"
                        aria-controls="navbar-danger" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-danger">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="./index.html">
                                        <img src="img/brand/blue.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar-danger" aria-controls="navbar-danger" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-facebook-square"></i>
                                    <span class="nav-link-inner--text d-lg-none">Facebook</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-twitter"></i>
                                    <span class="nav-link-inner--text d-lg-none">Twitter</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-google-plus"></i>
                                    <span class="nav-link-inner--text d-lg-none">Google +</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-instagram"></i>
                                    <span class="nav-link-inner--text d-lg-none">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar warning -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-warning mt-4">
                <div class="container">
                    <a class="navbar-brand" href="#">Warning Color</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-warning"
                        aria-controls="navbar-warning" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-warning">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="./index.html">
                                        <img src="img/brand/blue.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar-warning" aria-controls="navbar-warning"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-facebook-square"></i>
                                    <span class="nav-link-inner--text d-lg-none">Share</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-twitter"></i>
                                    <span class="nav-link-inner--text d-lg-none">Tweet</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-pinterest"></i>
                                    <span class="nav-link-inner--text d-lg-none">Pin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar info -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-info mt-4">
                <div class="container">
                    <a class="navbar-brand" href="#">Info Color</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-info"
                        aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-info">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="./index.html">
                                        <img src="img/brand/blue.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-facebook-square"></i>
                                    <span class="nav-link-inner--text">Facebook</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-twitter"></i>
                                    <span class="nav-link-inner--text">Twitter</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="fa fa-instagram"></i>
                                    <span class="nav-link-inner--text">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <section class="section section-components">
            <div class="container">
                <h3 class="h4 text-success font-weight-bold mb-4">Tabs</h4>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <!-- Tabs with icons -->
                            <div class="mb-3">
                                <small class="text-uppercase font-weight-bold">With icons</small>
                            </div>
                            <x-welcome.tab-wrapper id="tabs-icons-text">
                                <x-welcome.tab-item id="tabs-icons-text-1" label="Home" icon="ni ni-cloud-upload-96"
                                    :active="true" />
                                <x-welcome.tab-item id="tabs-icons-text-2" label="Profile" icon="ni ni-bell-55"
                                    :active="false" />
                                <x-welcome.tab-item id="tabs-icons-text-3" label="Messages"
                                    icon="ni ni-calendar-grid-58" :active="false" />
                            </x-welcome.tab-wrapper>
                            <div class="card shadow">
                                <div class="card-body">
                                    <x-welcome.tab-content id="myTabContent">
                                        <x-welcome.tab-pane id="tabs-icons-text-1" :active="true">
                                            <p class="description">Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                                            <p class="description">Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse.</p>
                                        </x-welcome.tab-pane>
                                        <x-welcome.tab-pane id="tabs-icons-text-2" :active="false">
                                            <p class="description">Cosby sweater eu banh mi, qui irure terry richardson
                                                ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis
                                                cardigan american apparel, butcher voluptate nisi qui.</p>
                                        </x-welcome.tab-pane>
                                        <x-welcome.tab-pane id="tabs-icons-text-3" :active="false">
                                            <p class="description">Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                                        </x-welcome.tab-pane>
                                    </x-welcome.tab-content>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <!-- Menu -->
                            <div class="mb-3">
                                <small class="text-uppercase font-weight-bold">With text</small>
                            </div>
                            <x-welcome.tab-wrapper id="tabs-text">
                                <x-welcome.tab-item id="tabs-text-1" label="Home" :active="true" />
                                <x-welcome.tab-item id="tabs-text-2" label="Profile" :active="false" />
                                <x-welcome.tab-item id="tabs-text-3" label="Messages" :active="false" />
                            </x-welcome.tab-wrapper>
                            <div class="card shadow">
                                <div class="card-body">
                                    <x-welcome.tab-content id="myTabContent">
                                        <x-welcome.tab-pane id="tabs-text-1" :active="true">
                                            <p class="description">Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                                            <p class="description">Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse.</p>
                                        </x-welcome.tab-pane>
                                        <x-welcome.tab-pane id="tabs-text-2" :active="false">
                                            <p class="description">Cosby sweater eu banh mi, qui irure terry richardson
                                                ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis
                                                cardigan american apparel, butcher voluptate nisi qui.</p>
                                        </x-welcome.tab-pane>
                                        <x-welcome.tab-pane id="tabs-text-3" :active="false">
                                            <p class="description">Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                                        </x-welcome.tab-pane>
                                    </x-welcome.tab-content>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-grid justify-content-between align-items-center mt-lg">
                        <div class="col-lg-5">
                            <h3 class="h4 text-success font-weight-bold mb-4">Progress bars</h3>
                            <x-welcome.progress-bar label="Task completed" percentage="40" color="default" value="25" />
                            <x-welcome.progress-bar label="Task completed" percentage="60" color="primary" value="60" />
                        </div>
                        <div class="col-lg-5">
                            <h3 class="h4 text-success font-weight-bold mb-5">Pagination</h3>
                            <x-welcome.pagination :pages="[1, 2, 3, 4, 5]" :currentPage="2" class="mb-4"
                                :showArrows="false" />
                            <x-welcome.pagination :pages="[1, 2, 3, 4, 5]" :currentPage="2" />
                        </div>
                    </div>
                    <div class="row row-grid justify-content-between">
                        <div class="col-lg-5">
                            <h3 class="h4 text-success font-weight-bold mb-5">Navigation Pills</h3>
                            <x-welcome.nav-pills id="tabs_2">
                                <x-welcome.nav-pill-item id="tabs_2_1" icon="ni ni-atom" :active="true" />
                                <x-welcome.nav-pill-item id="tabs_2_2" icon="ni ni-chat-round" :active="false" />
                                <x-welcome.nav-pill-item id="tabs_2_3" icon="ni ni-cloud-download-95" :active="false" />
                            </x-welcome.nav-pills>
                        </div>
                        <div class="col-lg-5">
                            <h3 class="h4 text-success font-weight-bold mb-5">Labels</h3>
                </h3>
                <x-welcome.badge color="primary" text="Primary" />
                <x-welcome.badge color="success" text="Success" />
                <x-welcome.badge color="danger" text="Danger" />
                <x-welcome.badge color="warning" text="Warning" />
                <x-welcome.badge color="info" text="Info" />
            </div>
            </div>
            <h3 class="mt-lg mb-4">
                <span>Alerts</span>
            </h3>
            <x-welcome.alert type="success" icon="ni ni-like-2" title="Success!"
                message="This is a success alert—check it out!" />
            <x-welcome.alert type="info" icon="ni ni-bell-55" title="Info!"
                message="This is an info alert—check it out!" />
            <x-welcome.alert type="warning" icon="ni ni-bell-55" title="Warning!"
                message="This is a warning alert—check it out!" />
            <x-welcome.alert type="danger" icon="ni ni-support-16" title="Danger!"
                message="This is an error alert—check it out!" />
            <!-- Typography -->
            <h2 class="mt-lg mb-5">
                <span>Typography</span>
            </h2>
            <h3 class="h4 text-success font-weight-bold">Headings</h3>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Heading 1</small>
                </div>
                <x-welcome.heading level="1" text="Argon Design System" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Heading 2</small>
                </div>
                <x-welcome.heading level="2" text="Argon Design System" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Heading 3</small>
                </div>
                <x-welcome.heading level="3" text="Argon Design System" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Heading 4</small>
                </div>
                <x-welcome.heading level="4" text="Argon Design System" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Heading 5</small>
                </div>
                <x-welcome.heading level="5" text="Argon Design System" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Heading 6</small>
                </div>
                <x-welcome.heading level="6" text="Argon Design System" />
            </div>
            <!-- Display titles -->
            <h3 class="h4 text-success font-weight-bold mt-md">Display titles</h3>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Display 1</small>
                </div>
                <x-welcome.display-title level="1" text="Argon Design System" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Display 2</small>
                </div>
                <x-welcome.display-title level="2" text="Argon Design System" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Display 3</small>
                </div>
                <x-welcome.display-title level="3" text="Argon Design System" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Display 4</small>
                </div>
                <x-welcome.display-title level="4" text="Argon Design System" />
            </div>
            <!-- Specialized titles -->
            <h3 class="h4 text-success font-weight-bold mt-md">Specialized titles</h3>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Heading</small>
                </div>
                <x-welcome.specialized-heading text="Argon Design System" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Heading title</small>
                </div>
                <x-welcome.specialized-heading-title text="Argon Design System" color="warning" />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Heading section</small>
                </div>
                <x-welcome.heading-section title="Header with small subtitle"
                    subtitle="According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scientist, puts the potentially record maximum." />
            </div>
            <!-- Paragraphs -->
            <h3 class="h4 text-success font-weight-bold mt-md">Paragraphs</h3>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Paragraph</small>
                </div>
                <div class="col-sm-9">
                    <p>I will be the leader of a company that ends up being worth billions of dollars, because I got the
                        answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to
                        push possibilities, to show people, this is the level that things could be at.</p>
                </div>
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Lead text</small>
                </div>
                <div class="col-sm-9">
                    <p class="lead">I will be the leader of a company that ends up being worth billions of dollars,
                        because I got the answers. I understand culture. I am the nucleus. I think that’s a
                        responsibility that I have, to push possibilities, to show people, this is the level that things
                        could be at.</p>
                </div>
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Quote</small>
                </div>
                <div class="col-sm-9">
                    <x-welcome.blockquote
                        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."
                        footer="Someone famous in" cite="Source Title" />
                </div>
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Muted text</small>
                </div>
                <x-welcome.colored-text color="muted"
                    text="I will be the leader of a company that ends up being worth billions of dollars, because I got the answers..." />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Primary text</small>
                </div>
                <x-welcome.colored-text color="primary"
                    text="I will be the leader of a company that ends up being worth billions of dollars, because I got the answers..." />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Info text</small>
                </div>
                <x-welcome.colored-text color="info"
                    text="I will be the leader of a company that ends up being worth billions of dollars, because I got the answers..." />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Success text</small>
                </div>
                <x-welcome.colored-text color="success"
                    text="I will be the leader of a company that ends up being worth billions of dollars, because I got the answers..." />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Warning text</small>
                </div>
                <x-welcome.colored-text color="warning"
                    text="I will be the leader of a company that ends up being worth billions of dollars, because I got the answers..." />
            </div>
            <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                    <small class="text-uppercase text-muted font-weight-bold">Danger text</small>
                </div>
                <x-welcome.colored-text color="danger"
                    text="I will be the leader of a company that ends up being worth billions of dollars, because I got the answers..." />
            </div>
            <!-- Images -->
            <h2 class="mt-lg mb-5">
                <span>Images</span>
            </h2>
            <div class="row">
                <x-welcome.image src="img/theme/team-1-800x800.jpg" alt="Rounded image" class="rounded shadow"
                    style="width: 150px;" label="Image" />
                <x-welcome.image src="img/theme/team-2-800x800.jpg" alt="Circle image" class="rounded-circle shadow"
                    style="width: 150px;" label="Circle Image" />
                <x-welcome.image src="img/theme/team-3-800x800.jpg" alt="Raised image" class="rounded shadow-lg"
                    style="width: 150px;" label="Raised" />
                <x-welcome.image src="img/theme/team-4-800x800.jpg" alt="Raised circle image"
                    class="rounded-circle shadow-lg" style="width: 150px;" label="Circle Raised" />
            </div>
            <h2 class="mt-lg mb-5">
                <span>Javascript Components</span>
            </h2>
            <h3 class="h4 text-success font-weight-bold mb-4">Modals</h3>
            <!-- Modals -->
            <div class="row">
                <div class="col-md-4">
                    <x-welcome.modal-button target="modal-default" color="primary" text="Default" />
                    <x-welcome.modal id="modal-default" title="Type your modal title">
                        <x-slot name="body">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.</p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                                your mouth.</p>
                        </x-slot>
                        <x-slot name="footer">
                            <x-welcome.button color="primary" type="button">Save Changes</x-welcome.button>
                            <x-welcome.button color="link" type="button" dismiss="true">Close</x-welcome.button>
                        </x-slot>
                    </x-welcome.modal>
                </div>
                <div class="col-md-4">
                    <x-welcome.modal-button target="modal-notification" color="warning" text="Notification" />
                    <x-welcome.modal id="modal-notification" title="Your attention is required" style="danger">
                        <x-slot name="body">
                            <div class="py-3 text-center">
                                <i class="ni ni-bell-55 ni-3x"></i>
                                <h4 class="heading mt-4">You should read this!</h4>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </x-slot>
                        <x-slot name="footer">
                            <x-welcome.button color="white" type="button">Ok, Got it</x-welcome.button>
                            <x-welcome.button color="link" textColor='white' type="button"
                                dismiss="true">Close</x-welcome.button>
                        </x-slot>
                    </x-welcome.modal>
                </div>
                <div class="col-md-4">
                    <x-welcome.modal-button target="modal-form" color="default" text="Form" />
                    <x-welcome.modal-form id="modal-form" title="Sign in with">
                        <x-slot name="slot">
                            <x-welcome.social-link url="#" icon="img/icons/common/github.svg" name="Github" />
                            <x-welcome.social-link url="#" icon="img/icons/common/google.svg" name="Google" />
                        </x-slot>
                        <x-slot name="form">
                            <div class="text-center text-muted mb-4">
                                <small>Or sign in with credentials</small>
                            </div>
                            <form role="form">
                                <x-welcome.form-input-alternative icon="ni ni-email-83" placeholder="Email"
                                    label="Email" type="email" />
                                <x-welcome.form-input-alternative icon="ni ni-lock-circle-open" placeholder="Password"
                                    label="Remember me" type="password" />
                                <x-welcome.check-box id="customCheckLogin" label="Remember me" />
                                <div class="text-center">
                                    <x-welcome.button color="primary my-4" type="button">Sign in</x-welcome.button>
                                </div>
                            </form>
                        </x-slot>
                    </x-welcome.modal-form>
                </div>
            </div>
            <!-- Datepicker -->
            <h3 class="h4 text-success font-weight-bold mt-md mb-4">Datepicker</h3>
            <div class="row">
                <div class="col-md-4">
                    <small class="d-block text-uppercase font-weight-bold mb-3">Single date</small>
                    <x-welcome.datepicker placeholder="Select date" value="06/20/2018" />
                </div>
                <div class="col-md-8 mt-4 mt-md-0">
                    <small class="d-block text-uppercase font-weight-bold mb-3">Date range</small>
                    <x-welcome.datepicker-range startPlaceholder="Start date" endPlaceholder="End date"
                        startValue="06/18/2018" endValue="06/22/2018" />
                </div>
            </div>
            <!-- Tooltips and Popovers -->
            <h3 class="h4 text-success font-weight-bold mt-md mb-4">Tooltips &amp; Popovers</h3>
            <div class="row">
                <div class="col-lg-6">
                    <small class="d-block text-uppercase font-weight-bold mb-3">Tooltips</small>
                    <x-welcome.tooltip placement="left" title="Tooltip on left" text="On left" />
                    <x-welcome.tooltip placement="top" title="Tooltip on top" text="On top" />
                    <x-welcome.tooltip placement="bottom" title="Tooltip on bottom" text="On bottom" />
                    <x-welcome.tooltip placement="right" title="Tooltip on right" text="On right" />
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <small class="d-block text-uppercase font-weight-bold mb-3">Popovers</small>
                    <x-welcome.popover placement="left" title="Popover On Left"
                        content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." text="On left" />
                    <x-welcome.popover placement="top" title="Popover on Top"
                        content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." text="On top" />
                    <x-welcome.popover placement="right" title="Popover on Right"
                        content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." text="On right" />
                    <x-welcome.popover placement="bottom" title="Popover on Bottom"
                        content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." text="On bottom" />
                </div>
            </div>
            </div>
        </section>
        <section class="section section-lg section-shaped overflow-hidden my-0">
            <div class="shape shape-style-1 shape-default shape-skew">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container py-0 pb-lg">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h1 class="text-white font-weight-light">Bootstrap carousel</h1>
                        <p class="lead text-white mt-4">Argon Design System comes with four pre-built pages to help you
                            get started faster. You can change the text and images and you're good to go.</p>
                        <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html"
                            class="btn btn-white mt-4">See all components</a>
                    </div>
                    <div class="col-lg-6 mb-lg-auto">
                        <div class="rounded shadow-lg overflow-hidden transform-perspective-right">
                            <div id="carousel_example" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel_example" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="{{ asset('img/theme/img-1-1200x1000.jpg')}}"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="{{ asset('img/theme/img-2-1200x1000.jpg')}}"
                                            alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel_example" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel_example" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg section-nucleo-icons pb-250">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="display-3">Nucleo Icons</h2>
                        <p class="lead">
                            The official package contains over 21.000 icons which are looking great in combination with
                            Argon Design System. Make sure you check all of them and use those that you like the most.
                        </p>
                        <div class="btn-wrapper">
                            <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/icons.html"
                                class="btn btn-primary">View demo icons</a>
                            <a href="https://nucleoapp.com/?ref=1712" target="_blank"
                                class="btn btn-default mt-3 mt-md-0">View all icons</a>
                        </div>
                    </div>
                </div>
                <div class="blur--hover">
                    <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/icons.html">
                        <div class="icons-container blur-item mt-5" data-toggle="on-screen">
                            <!-- Center -->
                            <i class="icon ni ni-diamond"></i>
                            <!-- Right 1 -->
                            <i class="icon icon-sm ni ni-album-2"></i>
                            <i class="icon icon-sm ni ni-app"></i>
                            <i class="icon icon-sm ni ni-atom"></i>
                            <!-- Right 2 -->
                            <i class="icon ni ni-bag-17"></i>
                            <i class="icon ni ni-bell-55"></i>
                            <i class="icon ni ni-credit-card"></i>
                            <!-- Left 1 -->
                            <i class="icon icon-sm ni ni-briefcase-24"></i>
                            <i class="icon icon-sm ni ni-building"></i>
                            <i class="icon icon-sm ni ni-button-play"></i>
                            <!-- Left 2 -->
                            <i class="icon ni ni-calendar-grid-58"></i>
                            <i class="icon ni ni-camera-compact"></i>
                            <i class="icon ni ni-chart-bar-32"></i>
                        </div>
                        <span class="blur-hidden h5 text-success">Eplore all the 21.000+ Nucleo Icons</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="section section-lg section-shaped overflow-hidden my-0">
            <div class="shape shape-style-1 shape-default shape-skew">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container shape-container py-0 pb-5">
                <div class="row row-grid justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <h3 class="display-3 text-white">A beautiful Design System
                            <span class="text-white">completed with examples</span>
                        </h3>
                        <p class="lead text-white">The Design System comes with four pre-built pages to help you get
                            started faster. You can change the text and images and you're good to go. More importantly,
                            looking at them will give you a picture of what you can built with this powerful Bootstrap 4
                            Design System.</p>
                        <div class="btn-wrapper">
                            <a href="{{ route('login') }}" class="btn btn-success">Login Page</a>
                            <a href="{{ route('register') }}" class="btn btn-white">Register Page</a>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-lg-auto">
                        <div class="transform-perspective-right">
                            <div class="card bg-secondary shadow border-0">
                                <div class="card-header bg-white pb-5">
                                    <div class="text-muted text-center mb-3">
                                        <small>Sign in with</small>
                                    </div>
                                    <div class="btn-wrapper text-center">
                                        <a href="#" class="btn btn-neutral btn-icon">
                                            <span class="btn-inner--icon">
                                                <img src="{{ asset('img/icons/common/github.svg')}}">
                                            </span>
                                            <span class="btn-inner--text">Github</span>
                                        </a>
                                        <a href="#" class="btn btn-neutral btn-icon">
                                            <span class="btn-inner--icon">
                                                <img src="{{ asset('img/icons/common/google.svg')}}">
                                            </span>
                                            <span class="btn-inner--text">Google</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                        <small>Or sign in with credentials</small>
                                    </div>
                                    <form role="form">
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Email" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Password" type="password">
                                            </div>
                                        </div>
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id=" customCheckLogin2" type="checkbox">
                                            <label class="custom-control-label" for=" customCheckLogin2">
                                                <span>Remember me</span>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary my-4">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg">
            <div class="container">
                <div class="row row-grid justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="display-3">Do you love this awesome
                            <span class="text-success">Design System for Bootstrap 4?</span>
                        </h2>
                        <p class="lead">Cause if you do, it can be yours for FREE. Hit the button below to navigate to
                            Creative Tim where you can find the Design System in HTML. Start a new project or give an
                            old Bootstrap project a new look!</p>
                        <div class="btn-wrapper">
                            <a href="https://themewagon.com/themes/free-bootstrap-4-design-system/"
                                class="btn btn-primary mb-3 mb-sm-0">Download HTML</a>
                        </div>
                        <div class="text-center">
                            <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
                            <div class="row justify-content-center">
                                <div class="col-lg-2 col-4">
                                    <a href="https://getbootstrap.com/" target="_blank" data-toggle="tooltip"
                                        data-original-title="Bootstrap 4 - Most popular front-end component library">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="https://www.sketchapp.com/" target="_blank" data-toggle="tooltip"
                                        data-original-title="[Coming Soon] Sketch - Digital design toolkit">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg"
                                            class="img-fluid opacity-5">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="https://www.adobe.com/products/photoshop.html" data-toggle="tooltip"
                                        data-original-title="[Coming Soon] Adobe Photoshop - Software for digital images manipulation">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg"
                                            class="img-fluid  opacity-5">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="https://vuejs.org/" target="_blank" data-toggle="tooltip"
                                        data-original-title="[Coming Soon] Vue.js - The progressive javascript framework">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg"
                                            class="img-fluid opacity-5">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="https://angularjs.org/" target="_blank" data-toggle="tooltip"
                                        data-original-title="[Coming Soon] Angular - One framework. Mobile &amp; desktop">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg"
                                            class="img-fluid opacity-5">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <a href="https://reactjs.org/" target="_blank" data-toggle="tooltip"
                                        data-original-title="[Coming Soon] React - A JavaScript library for building user interfaces">
                                        <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg"
                                            class="img-fluid opacity-5">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer has-cards">
        <div class="container container-lg">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="card card-lift--hover shadow border-0">
                        <a href="./examples/landing.html" title="Landing Page">
                            <img src="{{ asset('img/theme/landing.jpg')}}" class="card-img">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-lg-0">
                    <div class="card card-lift--hover shadow border-0">
                        <a href="./examples/profile.html" title="Profile Page">
                            <img src="{{ asset('img/theme/profile.jpg')}}" class="card-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-grid align-items-center my-md">
                <div class="col-lg-6">
                    <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
                    <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
                </div>
                <div class="col-lg-6 text-lg-center btn-wrapper">
                    <a target="_blank" href="https://twitter.com/creativetim"
                        class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip"
                        data-original-title="Follow us">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/creativetim"
                        class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip"
                        data-original-title="Like us">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a target="_blank" href="https://dribbble.com/creativetim"
                        class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip"
                        data-original-title="Follow us">
                        <i class="fa fa-dribbble"></i>
                    </a>
                    <a target="_blank" href="https://github.com/creativetimofficial"
                        class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip"
                        data-original-title="Star on Github">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; 2025
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> | Distribution: <a
                            href="https://themewagon.com/">ThemeWagon</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-footer justify-content-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                                class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendor/headroom/headroom.min.js')}}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('vendor/onscreen/onscreen.min.js')}}"></script>
    <script src="{{ asset('vendor/nouislider/js/nouislider.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('js/argon.js?v=1.0.0')}}"></script>
</body>

</html>
