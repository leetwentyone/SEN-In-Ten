<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SEN in Ten</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css?v=1.0">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/custom.js"></script>
</head>

<body class="about-page">

    <div class="page-banner">
        <picture>
            <source media="(max-width:767px)" srcset="images/mobile/our-partners.png"><!-- Image for mobile devices -->        
            <img src="images/desktop/our-partners.png" alt=""><!-- Image for desktop screens -->
        </picture>
    </div>

    <?php include('includes/header.php'); ?>
    <?php include('includes/breadcrumb.php'); ?>

    <main class="site-main">

        <div class="textblock">
            <h1>About SEN In Ten</h1>
            <p>SEN in Ten is a brand-new podcast offering practical advice and support from SEN experts. 
                The podcast will feature best practices for educating children with SEN 
                and inspirational stories from those making a difference. 
            </p>
            <p>Listen to our podcast episodes to discover a community of people who understand the challenges and rewards associated with SEN!</p>
        </div>

        <div class="text-image">
            <div class="c-container">

                <div class="image-col">

                    <picture>
                        <source media="(max-width:767px)" srcset="images/mobile/about.png"><!-- Image for mobile devices -->        
                        <img src="images/desktop/about.png" alt=""><!-- Image for desktop screens -->
                    </picture>

                </div>

                <div class="text-col">
                <p>Sponsored by IDL, International Dyslexia Learning Solutions, who provide software for pupils with special education needs to schools around the world.</p>
                <p>Etiam mattis quis nulla eget lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim leo, mattis id efficitur sit amet, lobortis tincidunt urna. 
                    Ut dapibus est leo, quis ornare orci egestas eget. Fusce ut luctus mi, nec cursus massa. Etiam nec imperdiet erat.</p>
                <p>Suspendisse rutrum mollis metus, sit amet pulvinar tortor suscipit in. Curabitur sagittis consectetur felis nec consectetur. 
                    Sed nec porta ex. Praesent lobortis ex ut odio luctus, ac egestas est efficitur. Fusce non placerat nisi, eget ultrices nisl. 
                    Donec sed vehicula lectus. Aliquam scelerisque enim vitae facilisis condimentum.</p>
                </div>

            </div>
        </div><!-- end Text Image Block -->

        <div class="sponsor-callout">
            <?php
                $phone_number = '01524 845046';
                $phone_number_nospace = str_replace(' ','',$phone_number);
            ?>
            <div class="c-container">
                <div class="callout-inner">
                <div class="callout-title">Become a Sponsor</div>
                <p>Interested in becoming a sponsor call us on <a href="tel:<?php echo $phone_number_nospace; ?>"><?php echo $phone_number; ?></a> or <a href="#">contact us</a> today!</p>
                <a href="become-sponsor.php" class="blue-btn2">Become A Sponsor</a>
                <img src="images/waveform-pattern.png" class="waveform">
                </div>
            </div>
        </div><!-- end sponsor callout -->

        <div class="equal-cols">
            <div class="col-l">
                <h5>Why SEN In Ten?</h5>
                <ul>
                    <li>
                        <img src="images/icons/experts.png">
                        <h6>Delivered By Experts</h6>
                        <p>We use a range of experts to curate and deliver our sessions.</p>
                    </li>
                    <li>
                        <img src="images/icons/high-quality.png">
                        <h6>High Quality</h6>
                        <p>Our state of the art studio lets us record in High Definition (1080p) with amazing audio quality.</p>
                    </li>
                    <li>
                        <img src="images/icons/accessible.png">
                        <h6>High Accessible</h6>
                        <p>All sessions are transcribed automatically. Users can choose to turn on subtitles for each video.</p>
                    </li>
                    <li>
                        <img src="images/icons/insightful.png">
                        <h6>Insightful</h6>
                        <p>Tempor incididunt ut labore et dolore magna aliqua.</p>
                    </li>
                </ul>
            </div>
            <div class="col-r">
                <p>Fusce eu luctus enim, a facilisis purus. Praesent neque mauris, cursus sed imperdiet a, tempor eget arcu. Vestibulum ante ipsum primis in faucibus orci luctus et 
                    ultrices posuere cubilia curae; Praesent maximus pellentesque velit, ut dapibus ipsum sagittis id. 
                    Vivamus ultricies nisl vitae tortor vehicula, sit amet tempor neque eleifend. Suspendisse potenti. Proin euismod non lacus a elementum. 
                    Cras nisi dolor, pretium a metus id, suscipit maximus lorem.</p>
                <p>Praesent euismod auctor lectus, pulvinar aliquam nulla auctor non. Pellentesque tristique pellentesque sem, a condimentum magna viverra in. Vestibulum ut lacinia purus.
                Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit. 
                Mauris luctus, velit ac vehicula aliquet, tellus orci semper est, in mollis odio enim vitae dui.</p>
            </div>
        </div><!-- End Equal Columns block -->

        <div class="episode-list">
            <div class="c-container">
  
                <h3>Latest SEN in Ten Episodes <a href="podcasts.php" class="blue-outline-cross">View All Episodes</a></h3>

                <ul>
                    <li>
                        <date>1st<span>Oct</span></date>
                        <div class="overlay-content">
                            <img src="images/podcast-1.png">
                            <div class="overlay-inner">
                                <h4 class="episode-title"><a href="podcast.php">Episode 1 : OrCam Learn</a></h4>
                                <p>Sponsored By</p>
                                <span class="parent-pay"><img src="images/parent-pay.png"></span>
                                <a class="listen-blue" href="podcast.php">Listen Now</a>
                            </div>
                        </div>

                        <div class="episode-details">
                            <p>Episode 1 :</p>
                            <h4><a href="podcast.php">OrCam Learn</a></h4>
                            <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                            <a class="listen-blue-outline" href="podcast.php">Listen Now</a>
                        </div>
                    </li>

                    <li>
                        <date>31st<span>Oct</span></date>
                        <div class="overlay-content">
                            <img src="images/podcast-2.png">
                            <div class="overlay-inner">
                                <h4 class="episode-title"><a href="podcast.php">Episode 2 : OrCam Learn</a></h4>
                                <p>Sponsored By</p>
                                <span class="parent-pay"><img src="images/parent-pay.png"></span>
                                <a class="listen-blue" href="podcast.php">Listen Now</a>
                            </div>
                        </div>

                        <div class="episode-details">
                        <p>Episode 2 :</p>
                        <h4><a href="podcast.php">OrCam Learn</a></h4>
                        <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                        <a class="listen-blue-outline" href="podcast.php">Listen Now</a>
                        </div>
                    </li>

                    <li>
                        <date>3rd<span>Nov</span></date>
                        <div class="overlay-content">
                            <img src="images/podcast-3.png">
                            <div class="overlay-inner">
                                <h4 class="episode-title"><a href="podcast.php">Episode 3 : OrCam Learn</a></h4>
                                <p>Sponsored By</p>
                                <span class="parent-pay"><img src="images/parent-pay.png"></span>
                                <a class="listen-blue" href="podcast.php">Listen Now</a>
                            </div>
                        </div>

                        <div class="episode-details">
                        <p>Episode 3 :</p>
                        <h4><a href="podcast.php">OrCam Learn</a></h4>
                        <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                        <a class="listen-blue-outline" href="podcast.php">Listen Now</a>
                        </div>
                    </li>
                </ul>

                <div class="controls">
                    <div class="previous">Previous</div>
                    <div class="next">Next</div>
                </div>

            </div>
        </div><!-- end episode list -->

        <?php include('includes/subscribe.php'); ?>

    </main>
  
    <?php include('includes/footer.php'); ?>

</body>
</html>