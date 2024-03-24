<div class="header-v1">
    <div class="header-navbar" style="background-color: #037329">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12" style="padding: 0px;">
                    <div class="header-logo">
                        <a href="index.php">
                            <img src="{{ asset('assets/images/logo/ARMA-Real-Estate-Logo.png') }}"
                                alt="ARMA-Real-Estate-Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="phone-menu"><i class="fa fa-bars show-menu"></i></div>
                    <div class="main-menu text-center">
                        <nav>
                            <ul class="main-nav">
                                <li><a href="{{ url('/') }}">Home </a></li>
                                <li>
                                    <a>About Us <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('mission vision') }}">Mission & Vision </a></li>
                                        <li><a href="{{ route('our values') }}">Our Values</a></li>
                                        <li><a href="{{ route('our strength') }}">Our Strength</a></li>
                                        <li><a href="{{ route('chairman message') }}">Chairman's Message</a>
                                        </li>
                                    </ul>
                                </li>
                                <!--<li><a href="about.php">About Us</a></li>-->
                                <li>
                                    <a>Project <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('completed project') }}">Completed Project</a>
                                        </li>
                                        <li><a href="{{ route('on going project') }}">On Going Project</a></li>
                                        <li><a href="{{ route('upcoming project') }}">Upcoming Project</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('gallary') }}">Gallery</a></li>
                                <li><a href="{{ route('certrfication') }}">Certification</a></li>
                                <li><a href="{{ route('Career') }}">Career</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <img src="">
                                <!--<li><a href="">Hotline:</a></li>-->
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.php">Home </a></li>
                            <li>
                                <a>About Us <i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="mission-vision.php">Mission & Vision </a></li>
                                    <li><a href="our-values.php">Our Values</a></li>
                                    <li><a href="our-strength.php">Our Strength</a></li>
                                    <li><a href="chairman-message.php">Chairman's Message</a></li>
                                </ul>
                            </li>
                            <li><a href="project.php">Project </a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="certrfication.php">Certification</a></li>
                            <li><a href="career.php">Career</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->
