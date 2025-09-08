<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="mailto:info@oresv.com">info@oresv.com</a>
                        </li>
<!--                        <li class="list-inline-item">-->
<!--                            <a href="callto:1234565523">Call Us Now:-->
<!--                                <span class="ml-2"> 123 456 5523</span>-->
<!--                            </a>-->
<!--                        </li>-->
                        <li class="list-inline-item">
                            <a href="#" id="searchOpen">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="logo_oresv.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <?php
                        @$menu = $_GET['id'];
                                            
                    ?>
                        <li class="nav-item dropdown <?php if ($menu == 'index' || $menu = ""){
                                echo 'active';
                            } 
                            
                            else {
                                
                            } ?>">
                            <a class="nav-link" href="index.html?id=index">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="index.html#about">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="red.html" class="nav-link"> RDE </a>
                        </li>
                        
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Research
                            </a>
                            
                        </li>
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Publications
                            </a>
                            
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="milestones.html" >
                                Miles Stones
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="team.html" >
                                Team
                            </a>                            
                        </li>
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">
                                Collaborations
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="#">Sponsors</a>
                            </div>
                        </li>-->
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Drones
                            </a>
                            
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="contact.html">
                                Contact
                            </a>                            
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>