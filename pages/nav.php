<?php
$pagename = basename($_SERVER['PHP_SELF']);
?>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">
            <!-- <a href="index.php">AskAI Tech Solutions Pvt. Ltd.</a> -->
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo_askai.png" alt="" width="100" />
            </a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="<?php echo $pagename == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a></li>
                <li><a class="<?php echo $pagename == 'about.php' ? 'active' : ''; ?>" href="about.php">About</a></li>
                <li><a class="<?php echo ($pagename == 'courses.php' ? 'active' : ($pagename == 'course-details.php' ? 'active' : '')); ?>" href="courses.php">Courses</a></li>
                <li><a class="<?php echo $pagename == 'trainers.php' ? 'active' : ''; ?>" href="trainers.php">Trainers</a></li>
                <li><a class="<?php echo $pagename == 'events.php' ? 'active' : ''; ?>" href="events.php">Events</a></li>
                <li><a class="<?php echo $pagename == 'pricing.php' ? 'active' : ''; ?>" href="pricing.php">Pricing</a></li>

                <li class="dropdown d-none"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="<?php echo $pagename == 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="courses.php" class="get-started-btn">Get Started</a>

    </div>
</header>