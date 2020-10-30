<?php
    $realpath = realpath(dirname(__FILE__));
    include $realpath."/classes/FontView.php";
    $fnt = new FontView();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <header id="header"  class="header header-fixed fixed-top">
        <div class="container">
            <div class="row align-items-center h-100">
                <nav class="col-9 col-lg-6">
                    <div class="header_logo">
                        <div class="header_logo-icon"></div>
                        <a href="">fahad.me</a>
                    </div>
                    
                    <div class="header__status header__status--success aos-init aos-animate">
                        <?php 
                            $connection_status = connection_status();
                            if($connection_status == 1){
                        ?>
                            Online
                        <?php }else{ ?>
                            Offline
                        <?php } ?>
                    </div>
                </nav>
                <nav class="col-3 col-lg-6">
                    <svg class="header__burger d-lg-none collapsed" width="25px">
                        <svg id="list" viewBox="0 0 511.626 511.627"><title>list</title><path d="M118.771,200.999H27.406c-7.611,0-14.084,2.664-19.414,7.994C2.663,214.32,0,220.791,0,228.407v54.823 c0,7.61,2.663,14.078,7.992,19.406c5.33,5.329,11.803,7.994,19.414,7.994h91.365c7.611,0,14.084-2.665,19.414-7.994 c5.33-5.328,7.992-11.796,7.992-19.406v-54.823c0-7.616-2.662-14.087-7.992-19.414S126.382,200.999,118.771,200.999z"></path><path d="M118.771,54.814H27.406c-7.611,0-14.084,2.663-19.414,7.993C2.663,68.137,0,74.61,0,82.221v54.821 c0,7.616,2.663,14.091,7.992,19.417c5.33,5.327,11.803,7.994,19.414,7.994h91.365c7.611,0,14.084-2.667,19.414-7.994 s7.992-11.798,7.992-19.414V82.225c0-7.611-2.662-14.084-7.992-19.417C132.855,57.48,126.382,54.814,118.771,54.814z"></path><path d="M118.771,347.177H27.406c-7.611,0-14.084,2.662-19.414,7.994C2.663,360.502,0,366.974,0,374.585v54.826 c0,7.61,2.663,14.086,7.992,19.41c5.33,5.332,11.803,7.991,19.414,7.991h91.365c7.611,0,14.084-2.663,19.414-7.991 c5.33-5.324,7.992-11.8,7.992-19.41v-54.826c0-7.611-2.662-14.083-7.992-19.411S126.382,347.177,118.771,347.177z"></path><path d="M484.215,200.999H210.131c-7.614,0-14.084,2.664-19.414,7.994s-7.992,11.798-7.992,19.414v54.823 c0,7.61,2.662,14.078,7.992,19.406c5.327,5.329,11.8,7.994,19.414,7.994h274.091c7.61,0,14.085-2.665,19.41-7.994 c5.332-5.328,7.994-11.796,7.994-19.406v-54.823c0-7.616-2.662-14.087-7.997-19.414 C498.3,203.663,491.833,200.999,484.215,200.999z"></path><path d="M484.215,347.177H210.131c-7.614,0-14.084,2.662-19.414,7.994c-5.33,5.331-7.992,11.8-7.992,19.41v54.823 c0,7.611,2.662,14.089,7.992,19.417c5.327,5.328,11.8,7.987,19.414,7.987h274.091c7.61,0,14.085-2.662,19.41-7.987 c5.332-5.331,7.994-11.806,7.994-19.417v-54.823c0-7.61-2.662-14.085-7.997-19.41C498.3,349.846,491.833,347.177,484.215,347.177z "></path><path d="M503.629,62.811c-5.329-5.327-11.797-7.993-19.414-7.993H210.131c-7.614,0-14.084,2.663-19.414,7.993 s-7.992,11.803-7.992,19.414v54.821c0,7.616,2.662,14.083,7.992,19.414c5.327,5.327,11.8,7.994,19.414,7.994h274.091 c7.61,0,14.078-2.667,19.41-7.994s7.994-11.798,7.994-19.414V82.225C511.626,74.613,508.964,68.141,503.629,62.811z"></path></svg>
                    </svg>
                    <ul class="header__menu collapse">
                        <li class="header__menu-item">
                            <a href="" class="header__menu-link nav-link">Services</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="" class="header__menu-link nav-link">Portfolios</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="" class="header__menu-link nav-link">Pricing</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main" id="main">
        <section class="hero" id="hero">
            <div class="hero__inner">
                <div class="hero__divider">
                    <div class="container section text-center aos-init aos-animate">
                        <div class="row aos-init aos-animate">
                            <div class="col-md-10 col-lg-7 mx-auto">
                                <h1 class="text-uppercase">Halifax Web Design &amp;<br> <span>Web App Development</span></h1>

                                <p>Specializing in custom theme development. If you're a business seeking a web presence or are looking to hire, contact me <a href="#contact">here</a>.</p>
                                <a href="" class="btn btn-secondary--gradient">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="top-content">
                <div class="container-fluid">
                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                                <img src="img/design.svg" class="mx-auto d-block icon" alt="img1">
                                <h2 class="text-primary text-uppercase">web design</h2>
                                <p>We provide professional and affordable website.Our web site is clean and modern so you can trust it</p>
                            </div>
                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                <img src="img/cloud-storage.svg" class="icon mx-auto d-block" alt="img2">
                                <h2 class="text-primary text-uppercase">Analytics</h2>
                                <p>Get insights into who is browsing your site so that you can make smarter business decisions.</p>
                            </div>
                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                <img src="img/hosting.svg" class="icon mx-auto d-block" alt="img3">
                                <h2 class="text-primary text-uppercase">Web Development</h2>
                                <p>Clean, modern designs - optimized for performance, search engines, and converting users to customers.</p>
                            </div>
                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                <img src="img/shopping-cart.svg" class="icon mx-auto d-block" alt="img4">
                                <h2 class="text-primary text-uppercase">eCommerce</h2>
                                <p>Integration of eCommerce platforms, payment gateways, custom product templates, and more.</p>
                            </div>
                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                <img src="img/operation.svg" class="icon mx-auto d-block" alt="img4">
                                <h2 class="text-primary text-uppercase">Bug Fixing</h2>
                                <p>Integration of eCommerce platforms, payment gateways, custom product templates, and more.</p>
                            </div>
                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                <img src="img/graphic.svg" class="icon mx-auto d-block" alt="img4">
                                <h2 class="text-primary text-uppercase">Mobile Friendly</h2>
                                <p>Integration of eCommerce platforms, payment gateways, custom product templates, and more.</p>
                            </div>
                            
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                            <img src="img/back.svg" alt="">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                            <img src="img/next.svg" alt="">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="text-center mt-4">
                        <a href="" class="btn btn-outline-primary">Lern More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolios">
            <hr>
            <h2 class="pre text-center pt-5">Portfolio</h2>
            <?php 
                $portfolio = $fnt->viewPortfolio();
                if($portfolio){
                    while($result = $portfolio->fetch_assoc()){
                      
            ?>
            <div class="container section">
                <div class="row align-items-center h-100 text-center text-lg-left">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="admin/<?php echo $result['image']; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 mx-auto py-3">
                        <h2 class="mb-3"><?php echo $result['title']; ?> <span class="badge badge-primary badge-sm"><?php echo $result['year']; ?></span></h2>
                        <p class="showcase__description"><?php echo $result['description']; ?></p>
                        <a href="" class="btn btn-primary mr-lg-3">Preview</a>
                        <a href="" class="btn btn-outline-primary">Visit Site</a>
                    </div>
                </div>
            </div>
            <hr>
                    <?php }} ?>
        </section>
        <section id="pricing" class="bg-primary section">
            <h2 class="pre text-center color-white">Pricing per build</h2>
            <div class="container">
                <div class="pricing">
                    <div class="pricing-inner">
                        <div class="row text-center mb-4">
                            <div class="col-md-8 mx-auto col-lg-4 mb-md-3 mb-sm-3  mb-col-3">
                                <div class="pricing__plan pricing__plan--1 aos-init aos-animate">
                                    <h3 class="pricing__name">Basic</h3>
                                    <ul class="pricing__features">
                                        <li class="pricing__feature">Website Audit
                                        </li>
                                        <li class="pricing__feature">Design
                                        </li>
                                        <li class="pricing__feature">Development
                                        </li>
                                    </ul>
                                    <div><a href="" class="btn btn-sm mt-3 btn-outline-default">Request quote</a></div>
                                </div>
                            </div><div class="col-md-8 mx-auto col-lg-4 mb-md-3 mb-sm-3 mb-col-3">
                                <div class="pricing__plan pricing__plan--2 aos-init aos-animate">
                                    <h3 class="pricing__name">STANDARD</h3>
                                    <ul class="pricing__features">
                                        <li class="pricing__feature">Website Audit
                                        </li>
                                        <li class="pricing__feature">Design
                                        </li>
                                        <li class="pricing__feature">Development
                                        </li>
                                        <li class="pricing__feature">Backups
                                        </li>
                                        <li class="pricing__feature">Analytics
                                        </li>
                                        <li class="pricing__feature">Live Chat
                                        </li>
                                        <li class="pricing__feature">Search Engine Optimization
                                        </li>
                                        <li class="pricing__feature">Content Management</li>
                                    </ul>
                                    <div><a href="" class="btn btn-sm mt-3 btn-primary">Request quote</a></div>
                                </div>
                            </div><div class="col-md-8 mx-auto col-lg-4 ">
                                <div class="pricing__plan pricing__plan--3 aos-init aos-animate">
                                    <h3 class="pricing__name">PREMIUM</h3>
                                    <ul class="pricing__features">
                                        <li class="pricing__feature">Website Audit
                                        </li>
                                        <li class="pricing__feature">Design
                                        </li>
                                        <li class="pricing__feature">Development
                                        </li>
                                        <li class="pricing__feature">Backups
                                        </li>
                                        <li class="pricing__feature">Analytics
                                        </li>
                                        <li class="pricing__feature">Live Chat
                                        </li>
                                        <li class="pricing__feature">Search Engine Optimization
                                        </li>
                                        <li class="pricing__feature">Content Management</li>
                                        <li class="pricing__feature">Maintenance Agreement

                                        </li>
                                        <li class="pricing__feature">eCommerce
                                        </li>
                                        <li class="pricing__feature">Email Setup
                                        </li>
                                        <li class="pricing__feature">Hosting
                                        </li>
                                    </ul>
                                    <div><a href="" class="btn btn-secondary btn-sm my-2">Request quote</a></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <footer id="footer" class="footer">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-12 text-center">
                                <h2>Get in touch</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" class="contact-form" method="post">
                                <div id="state"></div>
                                    <div class="form-inner">
                                        <div class="row">
                                            <div class="col-md-6 pr-md-2">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" id="email" class="form-control">
                                                </div>
                                            </div>
                                        <div class="col-md-6 pl-md-2">
                                            <div class="form-group">
                                                <label for="">Plan <small>(optional)</small></label>
                                                <select name="package" id="package" class="form-control" id="package"><option value="">&nbsp;</option><option value="1">Basic</option><option value="2">Standard</option><option value="3">Premium</option></select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group"><label for="message">Message</label><textarea name="message" class="form-control" rows="5" id="message"></textarea></div>
                                        <div class="text-center mt-4">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Send">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <nav>
                    <ul class="footer__menu">
                        <li class="footer__menu__item"><a class="footer__menu-link" href="https:://">Linkedin</a></li>
                        <li class="footer__menu__item"><a class="footer__menu-link" href="">Email</a></li>
                        <li class="footer__menu__item"><a class="footer__menu-link" href="">GitHub</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
    </main>
    <div class="drift-trigger">

    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script>

$(function(){
    //for user registration...
    $("#submit").click(function(){
        var email = $("#email").val();
        var package = $("#package").val();
        var message = $("#message").val();
        var dataString = 'email='+email+'&package='+package+'&message='+message;
        $.ajax({
            type:"POST",
            url:"get_touch.php",
            data:dataString,
            success:function(data){
                $("#state").html(data);
            }
        });
        return false;
    });
});

        $('.header__burger').click(function(){
            $('.collapse').toggleClass('d-block');
        });
        $('body').blur(function(){
            $('.collapse').removeClass('d-block');
        });

        //for sticky navigation bar
        $(window).scroll(function(){
            $('.header').toggleClass('headersticky', window.scrollY > 0);
        });
        $('.header__status').mouseover(function(){
            $(this).html('Chat now');
            $(this).addClass('chatnow');

        });

        $('.header__status').mouseout(function(){
            $(this).html('Online');
            $(this).removeClass('chatnow');
        });

        

    </script>
    <script>
        
    </script>
</body>
</html>