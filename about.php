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

    <?php include('includes/header.php'); ?>
    <?php include('includes/breadcrumb.php'); ?>

    <main class="site-main">

        <div class="textblock">
            <h1>About SEN In Ten</h1>
            <p>Vestibulum cursus pellentesque felis ac sodales. Phasellus rhoncus diam at arcu tincidunt, in vulputate tellus accumsan. 
            ullamcorper congue massa. Proin pharetra ultricies ullamcorper congue massa. Proin pharetra ultricies</p>
            <p>Nullam condimentum varius elit, vel ultricies ex iaculis in. Proin euismod non lacus a elementum. Cras nisi dolor, pretium a metus</p>
        </div>

        <div class="text-image">
            <div class="c-container">

                <div class="image-col">
                <img src="images/square-placeholder.jpg">
                </div>

                <div class="text-col">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur dapibus sollicitudin. Sed at nisi finibus, laoreet sem sed, consequat mi.</p>
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
                <a href="#">Become A Sponsor</a>
                </div>
            </div>
        </div><!-- end sponsor callout -->

        <div class="equal-cols">
            <div class="col-l">
                <h4>Why SEN In Ten?</h4>
                <ul>
                    <li>
                        <h5>Delivered By Experts</h5>
                        <p>Etiam mattis quis nulla eget lacinia.</p>
                    </li>
                    <li>
                        <h5>High Quality</h5>
                        <p>Fusce ut luctus mi, nec cursus massa. Etiam nec imperdiet erat.</p>
                    </li>
                    <li>
                        <h5>High Accessible</h5>
                        <p>Fusce ut luctus mi, nec cursus massa. Etiam nec imperdiet erat.</p>
                    </li>
                    <li>
                        <h5>Insightful</h5>
                        <p>Fusce ut luctus mi, nec cursus massa.</p>
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
  
                <h2>Latest SEN in Ten Episodes <a href="#">View All Episodes</a></h2>

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