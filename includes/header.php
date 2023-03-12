<?php 

$location = $_SERVER['REQUEST_URI'];

?>

<!-- header
    ================================================== -->
    <header class="s-header <?php echo $location == "" ? "" : "sticky offset scrolling" ?> ">


    
        <div class="header-logo">
            <a href="index.html">
                <img src="/images/logo.svg" alt="Homepage">
            </a>
        </div>

        <div class="header-content">
    
            <nav class="row header-nav-wrap">
                <ul class="header-nav">
                    <li><a class="smoothscroll" href="/" title="Intro">Home</a></li>
                    <li><a class="smoothscroll" href="/about" title="About">About</a></li>
                    <li><a class="smoothscroll" href="/services" title="Services">Services</a></li>
                    <li><a class="smoothscroll" href="/portfolio" title="Works">Portfolio</a></li>
                    <li><a href="/contacts" title="Contact us">Contact</a></li>
                </ul>
            </nav> <!-- end header-nav-wrap -->

            <a href="#0" class="btn btn--stroke btn--small">Download CV</a>

        </div> <!-- end header-content -->

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> 