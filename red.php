<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>ORESV - Optimization of Rockets Engines and Structural Vibrations </title>
	<!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- magnific popup -->
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- themify icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animate -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- swiper -->
  <link rel="stylesheet" href="plugins/swiper/swiper.min.css">
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  
  <link rel="stylesheet" href="dist/css/style.css" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

</head>

<body>
  

<!-- preloader start -->
<!--<div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
</div>-->
<!-- preloader end -->

<!-- navigation -->
<?php include('oresv_header.php'); ?>
<!-- /navigation --> 

<section class="page-title overlay" style="background-image: url(images/background/rocket.png);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">RDE</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index">Home</a>
                    </li>
                    <li>RDE</li>
                </ol>
            </div>
        </div>
    </div>
</section>



<!-- faqs -->
<div class="accordion-container">
    <div id="accordion" class="accordion">

    <!-- ================== SECTION 1 ================== -->
    <div class="card border-0 mb-4">
        <div class="card-header bg-gray border p-0">
            <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseOne">
                <i class="ti-plus text-primary mr-2"></i>
                 Detonation Engine (DE)
            </a>
        </div>
        <div id="collapseOne" class="collapse" data-parent="#accordion">
            <div class="card-body font-secondary text-color pl-0 pb-0">

                <!-- Nested Accordion -->
                <div id="nestedAccordion1">

                    <!-- Shock Wave -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse1-1">
                                <i class="ti-plus text-primary mr-2"></i> Shock Wave
                            </a>
                        </div>
                        <div id="collapse1-1" class="collapse" data-parent="#nestedAccordion1">
                            <div class="card-body">
                                The ignition source creates a high-pressure shock wave that compresses the fuel/oxidizer mixture ahead of it.
                            </div>
                        </div>
                    </div>

                    <!-- Chemical Reaction -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse1-2">
                                <i class="ti-plus text-primary mr-2"></i> Chemical Reaction
                            </a>
                        </div>
                        <div id="collapse1-2" class="collapse" data-parent="#nestedAccordion1">
                            <div class="card-body">
                                The compressed mixture undergoes a rapid exothermic reaction, releasing energy almost instantaneously.
                            </div>
                        </div>
                    </div>

                    <!-- Propagation Mechanics -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse1-3">
                                <i class="ti-plus text-primary mr-2"></i> Propagation Mechanics
                            </a>
                        </div>
                        <div id="collapse1-3" class="collapse" data-parent="#nestedAccordion1">
                            <div class="card-body">
                                The high-pressure region created by the detonation wave compresses the incoming mixture, maintaining the conditions needed for continuous detonation.
                            </div>
                        </div>
                    </div>

                    <!-- Supersonic Speed -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse1-4">
                                <i class="ti-plus text-primary mr-2"></i> Supersonic Speed
                            </a>
                        </div>
                        <div id="collapse1-4" class="collapse" data-parent="#nestedAccordion1">
                            <div class="card-body">
                                The detonation wave moves at supersonic speeds, maintaining the high pressure and high temperature conditions needed to sustain itself.
                            </div>
                        </div>
                    </div>

                    <!-- Thermodynamic Cycle -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse1-5">
                                <i class="ti-plus text-primary mr-2"></i> Thermodynamic Cycle
                            </a>
                        </div>
                        <div id="collapse1-5" class="collapse" data-parent="#nestedAccordion1">
                            <div class="card-body">
                                Unlike conventional engines, RDEs operate on a different thermodynamic cycle where the detonation wave itself compresses the incoming reactants.
                            </div>
                        </div>
                    </div>

                    <!-- Wave Initiation and Stability -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse1-6">
                                <i class="ti-plus text-primary mr-2"></i> Wave Initiation and Stability
                            </a>
                        </div>
                        <div id="collapse1-6" class="collapse" data-parent="#nestedAccordion1">
                            <div class="card-body">
                                Proper injector design and fuel/oxidizer flow rates are critical for sustaining a stable rotating detonation wave.
                            </div>
                        </div>
                    </div>

                    <!-- Rotational Mechanism -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse1-7">
                                <i class="ti-plus text-primary mr-2"></i> Rotational Mechanism for RDE With Annular Combustion Chamber
                            </a>
                        </div>
                        <div id="collapse1-7" class="collapse" data-parent="#nestedAccordion1">
                            <div class="card-body">
                                The combustion chamber is ring shaped, providing a pathway for the detonation wave to travel continuously.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ================== SECTION 2 ================== -->
    <div class="card border-0 mb-4">
        <div class="card-header bg-gray border p-0">
            <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseTwo">
                <i class="ti-plus text-primary mr-2"></i>
                Ignition and Injector Configuration
            </a>
        </div>
        <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body font-secondary text-color pl-0 pb-0">

                <div id="nestedAccordion2">

                    <!-- Positioning -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse2-1">
                                <i class="ti-plus text-primary mr-2"></i> Positioning
                            </a>
                        </div>
                        <div id="collapse2-1" class="collapse" data-parent="#nestedAccordion2">
                            <div class="card-body">
                                Injectors are strategically placed to introduce fresh fuel and oxidizer into the path of the rotating detonation wave.
                            </div>
                        </div>
                    </div>

                    <!-- Synchronization -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse2-2">
                                <i class="ti-plus text-primary mr-2"></i> Synchronization
                            </a>
                        </div>
                        <div id="collapse2-2" class="collapse" data-parent="#nestedAccordion2">
                            <div class="card-body">
                                The injectors must deliver fuel and oxidizer at the right time to maintain the continuous propagation of the wave.
                            </div>
                        </div>
                    </div>

                    <!-- Initiation -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse2-3">
                                <i class="ti-plus text-primary mr-2"></i> Initiation
                            </a>
                        </div>
                        <div id="collapse2-3" class="collapse" data-parent="#nestedAccordion2">
                            <div class="card-body">
                                An ignition source provides the initial energy to start the detonation.
                            </div>
                        </div>
                    </div>

                    <!-- Pre-detonator -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse2-4">
                                <i class="ti-plus text-primary mr-2"></i> Pre-detonator
                            </a>
                        </div>
                        <div id="collapse2-4" class="collapse" data-parent="#nestedAccordion2">
                            <div class="card-body">
                                In some designs, a pre-detonator helps create a strong initial shock wave.
                            </div>
                        </div>
                    </div>

                    <!-- Valve System -->
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse2-5">
                                <i class="ti-plus text-primary mr-2"></i> Valve System
                            </a>
                        </div>
                        <div id="collapse2-5" class="collapse" data-parent="#nestedAccordion2">
                            <div class="card-body">
                                Precisely controls the timing and amount of fuel and oxidizer entering the injectors. Must have a fast response time to match the high frequency operation of the engine.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ================== SECTION 3 ================== -->
    <!--<div class="card border-0 mb-4">
        <div class="card-header bg-gray border p-0">
            <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseThree">
                <i class="ti-plus text-primary mr-2"></i>
                Exhaust Nozzle & Casing and Support Structure & Cooling System
            </a>
        </div>
        <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="card-body font-secondary text-color pl-0 pb-0">

                <div id="nestedAccordion3">
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse3-1">
                                <i class="ti-plus text-primary mr-2"></i> Shape
                            </a>
                        </div>
                        <div id="collapse3-1" class="collapse" data-parent="#nestedAccordion3">
                            <div class="card-body">
                                Typically, a convergent-divergent (De Laval) nozzle to efficiently expand and accelerate the exhaust gases.
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse3-2">
                                <i class="ti-plus text-primary mr-2"></i> Materials
                            </a>
                        </div>
                        <div id="collapse3-2" class="collapse" data-parent="#nestedAccordion3">
                            <div class="card-body">
                                Made from high-temperature materials like alloys or ceramics to withstand extreme temperatures and pressures.
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse3-3">
                                <i class="ti-plus text-primary mr-2"></i> Function
                            </a>
                        </div>
                        <div id="collapse3-3" class="collapse" data-parent="#nestedAccordion3">
                            <div class="card-body">
                                Provides necessary structural support and protection for internal components.
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse3-4">
                                <i class="ti-plus text-primary mr-2"></i> Cooling Methods
                            </a>
                        </div>
                        <div id="collapse3-4" class="collapse" data-parent="#nestedAccordion3">
                            <div class="card-body">
                                Includes regenerative cooling, heat exchangers, or ablative cooling for thermal management.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>-->

    <!-- ================== SECTION 4 ================== -->
    <!--<div class="card border-0 mb-4">
        <div class="card-header bg-gray border p-0">
            <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseFour">
                <i class="ti-plus text-primary mr-2"></i>
                 Engine Vibrations
            </a>
        </div>
        <div id="collapseFour" class="collapse" data-parent="#accordion">
            <div class="card-body font-secondary text-color pl-0 pb-0">

                <div id="nestedAccordion4">
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse4-1">
                                <i class="ti-plus text-primary mr-2"></i> Purpose
                            </a>
                        </div>
                        <div id="collapse4-1" class="collapse" data-parent="#nestedAccordion4">
                            <div class="card-body">
                                Designed to absorb and mitigate unwanted acoustic waves that can cause instability or structural damage.
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse4-2">
                                <i class="ti-plus text-primary mr-2"></i> Location
                            </a>
                        </div>
                        <div id="collapse4-2" class="collapse" data-parent="#nestedAccordion4">
                            <div class="card-body">
                                Located in areas prone to pressure oscillations, such as near injectors or along combustion chamber walls.
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 mb-2">
                        <div class="card-header bg-light border p-0">
                            <a class="card-link d-block py-8 px-4" data-toggle="collapse" href="#collapse4-3">
                                <i class="ti-plus text-primary mr-2"></i> Vibration Isolation
                            </a>
                        </div>
                        <div id="collapse4-3" class="collapse" data-parent="#nestedAccordion4">
                            <div class="card-body">
                                May include features to isolate the engine from vibrations to prevent damage to the vehicle.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>-->
  </div>
</div>
<!-- /faqs -->

<?php include('footer.php'); ?>

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script  src="plugins/google-map/gmap.js"></script>
<!-- Syo Timer -->
<script src="plugins/syotimer/jquery.syotimer.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- swiper -->
<script src="plugins/swiper/swiper.min.js"></script>
<!-- Main Script -->
<script src="js/script.js"></script>
<script src="dist/js/app.js"></script>

</body>
</html>