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

<body class="training-cpd-page">

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
            <h1>Training &amp; CPD</h1>
            <p>SEN in Ten offers training and CPD sessions free of charge, book your place using the links below.</p>
        </div>

        <div class="training-list">
            <div class="c-container">
    
                <h2>Training Sessions</h2>

                <ul>
                    <li>
                        <date>1st<span>Oct</span></date>
                        <img src="images/event-1.png">
                        
                        <div class="training-details">
                            <h3><a href="session.php">Training Name</a></h3>
                            <a class="default" href="session.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>1st<span>Oct</span></date>
                        <img src="images/event-2.png">
                        
                        <div class="training-details">
                            <h3><a href="session.php">Training Name</a></h3>
                            <a class="default" href="session.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>1st<span>Oct</span></date>
                        <img src="images/event-3.png">
                        
                        <div class="training-details">
                            <h3><a href="session.php">Training Name</a></h3>
                            <a class="default" href="session.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>1st<span>Oct</span></date>
                        <img src="images/event-1.png">
                        
                        <div class="training-details">
                            <h3><a href="session.php">Training Name</a></h3>
                            <a class="default" href="session.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>1st<span>Oct</span></date>
                        <img src="images/event-2.png">
                        
                        <div class="training-details">
                            <h3><a href="session.php">Training Name</a></h3>
                            <a class="default" href="session.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>1st<span>Oct</span></date>
                        <img src="images/event-3.png">
                        
                        <div class="training-details">
                            <h3><a href="session.php">Training Name</a></h3>
                            <a class="default" href="session.php">Read More</a>
                        </div>
                    </li>

                </ul>

            </div>
        </div><!-- end episode list -->

        <div class="banner-callout" style="padding-top: 0">
            <div class="c-container">
                <picture>
                <source media="(max-width:767px)" srcset="images/mobile/sponsor-banner.png"><!-- Image for mobile devices -->        
                <img src="images/desktop/sponsor-banner.png" alt=""><!-- Image for desktop screens -->
                </picture>
            </div>
        </div><!-- end banner callout -->

        <div class="testimonials">
            <h4>Testimonials</h4>
            <ul>
                <li>
                    <blockquote>
                        Praesent neque mauris, cursus sed imperdiet a
                    </blockquote>
                    <cite>Podcaster, Lorem Ipsum</cite>
                </li>
                <li>
                    <blockquote>
                        Praesent neque mauris, cursus sed imperdiet a, Proin euismod non lacus a elementum. 
                    </blockquote>
                    <cite>Podcaster, Lorem Ipsum</cite>
                </li>
                <li>
                    <blockquote>
                        Praesent neque mauris, cursus sed imperdiet a
                    </blockquote>
                    <cite>Podcaster, Lorem Ipsum</cite>
                </li>
            </ul>
        </div><!-- end testimonials -->

        <div class="text-image">
            <div class="c-container">

                <div class="image-col">
                    <img src="images/desktop/about.png">
                </div>

                <div class="text-col">
                <h5>What is CPD</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur dapibus sollicitudin. Sed at nisi finibus, laoreet sem sed, consequat mi.</p>
                <p>Etiam mattis quis nulla eget lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim leo, mattis id efficitur sit amet, lobortis tincidunt urna. 
                    Ut dapibus est leo, quis ornare orci egestas eget. Fusce ut luctus mi, nec cursus massa. Etiam nec imperdiet erat.</p>
                </div>

            </div>
        </div><!-- end Text Image Block -->

    </main>

    <?php include('includes/subscribe.php'); ?>
        
    <?php include('includes/footer.php'); ?>

</body>
</html>