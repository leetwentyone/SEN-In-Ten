<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SEN in Ten</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css?v=1.0">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/custom.js"></script>
</head>

<body class="single-podcast">
    
    <?php include('includes/header.php'); ?>
    <?php include('includes/breadcrumb.php'); ?>

    <main class="site-main">

        <div class="textblock">
            <h1>Episode 1: OrCam Learn</h1>
        </div>

        <div class="podcast-summary">
        
            <div class="image-col">
                <img src="images/square-placeholder.jpg">
            </div>

            <div class="episode-details">
                <h3>Episode Summary</h3>
                <p>Praesent euismod auctor lectus, pulvinar aliquam nulla auctor non. Pellentesque tristique pellentesque sem, a condimentum magna viverra in. 
                    Vestibulum ut lacinia purus. Praesent molestie rutrum fringilla. </p>
                <a href="#">View Podcast Notes</a>
                <div class="share">
                    <div class="share-title">Share Podcast</div>
                    <ul>
                        <li><a href="#">F</a></li>
                        <li><a href="#">X</a></li>
                        <li><a href="#">In</a></li>
                        <li><a href="#">IG</a></li>
                        <li><a href="#">YT</a></li>
                        <li><a href="#">TT</a></li>
                    </ul>
                </div>
            </div>

        </div><!-- end latest podcast -->

        <div class="listen-links">
            <h3>Listen Now</h3>
            <ul>
                <li>
                <a href="#" target="_blank">Listen on Spotify</a>
                </li>
                <li>
                <a href="#" target="_blank">Listen on Apple Podcast</a>
                </li>
                <li>
                <a href="#" target="_blank">Listen on Amazon Music</a>
                </li>
                <li>
                <a href="#" target="_blank">Listen on Google Podcast</a>
                </li>
                <li>
                <a href="#" target="_blank">Listen on TuneIn</a>
                </li>
                <li>
                <a href="#" target="_blank">Listen on Overcast</a>
                </li>
            </ul>
            <p>How to listen? <a href="#">Learn More</a></p>
        </div><!-- End Listen Links -->

        <div class="embedded-player">
            <div class="c-container">
                <span>-- Embedded Podcast to be placed here --</span>
            </div>
        </div><!-- End Embedded Player -->

        <div class="banner-callout">
        -- Parent Pay Banner to be placed here --
        </div><!-- end banner callout -->

        <div class="podcast-notes" id="podcast-notes">

            <div class="col-l">
                <h4>Podcast Notes</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sollicitudin consequat mauris et sodales. Nunc placerat augue dui, 
                ut viverra risus pellentesque sit amet. </p>
                <p>Praesent vestibulum tortor in elit lobortis, vel interdum elit auctor. Fusce non odio vel arcu viverra lacinia. Nulla consequat erat quis augue pulvinar, 
                vel dapibus magna lobortis. Cras placerat, libero in lobortis sodales, lacus odio condimentum ipsum, ut gravida nulla massa quis libero. </p>
                <p>Morbi ultrices at nunc in cursus. Suspendisse aliquam sagittis egestas. Donec at tellus vel lectus sollicitudin euismod. Donec mi elit, fringilla sit amet 
                    pellentesque id, blandit id mi.</p>
            </div>

            <div class="col-r">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#" target="_blank">www.website.com/blog</a></li>
                    <li><a href="#" target="_blank">www.website.com/shop</a></li>
                    <li><a href="#" target="_blank">Threads - @website</a></li>
                    <li><a href="#" target="_blank">Instagram - @website</a></li>
                    <li><a href="#" target="_blank">LinkedIn - website</a></li>
                </ul>
            </div>

        </div><!-- end podcast notes -->

        <div class="sponsor-callout">
            <?php
                $phone_number = '01524 845046';
                $phone_number_nospace = str_replace(' ','',$phone_number);
            ?>
            <div class="c-container">
                <div class="callout-inner">
                    <div class="callout-title">Become a Sponsor</div>
                    <p>Interested in becoming a sponsor call us on <a href="tel:<?php echo $phone_number_nospace; ?>"><?php echo $phone_number; ?></a> or <a href="#">contact us</a> today!</p>
                    <a href="#">Become A Sponsor</a>
                </div>
            </div>
        </div><!-- end sponsor callout -->

        <div class="episode-list">
            <div class="c-container">
    
                <h2>More Episodes <a href="#">View All Episodes</a></h2>

                <ul>
                    <li>
                        <date>1st<span>Oct</span></date>
                        <div class="overlay-content">
                        <img src="images/square-placeholder.jpg">
                        <div class="overlay-inner">
                            <h3 class="episode-title">Episode 1 : OrCam Learn</h3>
                            <p>Sponsored By</p>
                            <span class="parent-pay">Parent Pay</span>
                            <a class="listen" href="#">Listen Now</a>
                        </div>
                        </div>

                        <div class="episode-details">
                        <p>Episode 1 :</p>
                        <h3>OrCam Learn</h3>
                        <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                        <a class="listen" href="#">Listen Now</a>
                        </div>
                    </li>

                    <li>
                        <date>31st<span>Oct</span></date>
                        <div class="overlay-content">
                        <img src="images/square-placeholder.jpg">
                        <div class="overlay-inner">
                            <h3 class="episode-title">Episode 2 : OrCam Learn</h3>
                            <p>Sponsored By</p>
                            <span class="parent-pay">Parent Pay</span>
                            <a class="listen" href="#">Listen Now</a>
                        </div>
                        </div>

                        <div class="episode-details">
                        <p>Episode 2 :</p>
                        <h3>OrCam Learn</h3>
                        <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                        <a class="listen" href="#">Listen Now</a>
                        </div>
                    </li>

                    <li>
                        <date>3rd<span>Nov</span></date>
                        <div class="overlay-content">
                        <img src="images/square-placeholder.jpg">
                        <div class="overlay-inner">
                            <h3 class="episode-title">Episode 3 : OrCam Learn</h3>
                            <p>Sponsored By</p>
                            <span class="parent-pay">Parent Pay</span>
                            <a class="listen" href="#">Listen Now</a>
                        </div>
                        </div>

                        <div class="episode-details">
                        <p>Episode 3 :</p>
                        <h3>OrCam Learn</h3>
                        <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                        <a class="listen" href="#">Listen Now</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div><!-- end episode list -->

        <?php include('includes/subscribe.php'); ?>

    </main>

    <?php include('includes/footer.php'); ?>

</body>
</html>