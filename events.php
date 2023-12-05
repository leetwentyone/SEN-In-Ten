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

<body class="events-page">

    <?php include('includes/header.php'); ?>
    <?php include('includes/breadcrumb.php'); ?>

    <main class="site-main">

        <div class="textblock">
            <h1>Events</h1>
            <p>Stay updated and informed about all our upcoming events!</p>
        </div>

        <div class="featured-event">
        
            <div class="image-col">
                <date>8th<br>Dec</date>
                <picture>
                    <source media="(max-width:767px)" srcset="images/mobile/featured-podcast.png"><!-- Image for mobile devices -->        
                    <img src="images/desktop/featured-podcast.png" alt=""><!-- Image for desktop screens -->
                </picture>
            </div>

            <div class="event-overview">
                <p>Featured Event</p>
                <h3><a href="event.php">Event Name</a></h3>
                <p>Praesent euismod auctor lectus, pulvinar aliquam nulla auctor non. Pellentesque tristique pellentesque sem, a condimentum magna viverra in. 
                    Vestibulum ut lacinia purus. Praesent molestie rutrum fringilla.
                </p>
                <ul class="event-details">
                    <li class="time">8pm - 9pm</li>
                    <li class="date">Monday 6th February 2023</li>
                    <li class="location">Arena</li>
                </ul>
                <ul class="event-actions">
                    <a href="https://www.eventbrite.com" target="_blank" class="blue-btn">Book Via Eventbrite</a>
                    <a href="https://www.zoom.com" target="_blank" class="blue-outline">Book Via Zoom</a>
                </ul>
            </div>

        </div><!-- end featured event -->

        <div class="event-listing" style="padding-bottom: 0;">
            <div class="c-container">

                <h4>Upcoming Events</h4>

                <ul>
                    <li>
                        <date>8th<br>Dec</date>
                        <a href="event.php">
                            <img src="images/event-1.png" alt="">
                        </a>
                        
                        <div class="event-content">
                            <h5><a href="event.php">Event Name</a></h5>
                            <a href="event.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>8th<br>Dec</date>
                        <a href="event.php">
                            <img src="images/event-2.png" alt="">
                        </a>
                        
                        <div class="event-content">
                            <h5><a href="event.php">Event Name</a></h5>
                            <a href="event.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>8th<br>Dec</date>
                        <a href="event.php">
                            <img src="images/event-3.png" alt="">
                        </a>
                        
                        <div class="event-content">
                            <h5><a href="event.php">Event Name</a></h5>
                            <a href="event.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>8th<br>Dec</date>
                        <a href="event.php">
                            <img src="images/event-1.png" alt="">
                        </a>
                        
                        <div class="event-content">
                            <h5><a href="event.php">Event Name</a></h5>
                            <a href="event.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>8th<br>Dec</date>
                        <a href="event.php">
                            <img src="images/event-2.png" alt="">
                        </a>
                        
                        <div class="event-content">
                            <h5><a href="event.php">Event Name</a></h5>
                            <a href="event.php">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>8th<br>Dec</date>
                        <a href="event.php">
                            <img src="images/event-3.png" alt="">
                        </a>
                        
                        <div class="event-content">
                            <h5><a href="event.php">Event Name</a></h5>
                            <a href="event.php">Read More</a>
                        </div>
                    </li>

                </ul>

            </div>
        </div><!-- end episode list -->

        <div class="banner-callout" style="padding-top: 0">
            <div class="c-container">
                <a href="#">
                    <picture>
                        <source media="(max-width:767px)" srcset="images/mobile/sponsor-banner.png"><!-- Image for mobile devices -->        
                        <img src="images/desktop/sponsor-banner.png" alt=""><!-- Image for desktop screens -->
                    </picture>
                </a>
            </div>
        </div><!-- end banner callout -->

        <?php include('includes/subscribe.php'); ?>

    </main>
  
    <?php include('includes/footer.php'); ?>

</body>
</html>