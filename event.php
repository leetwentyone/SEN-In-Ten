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

<body class="single-event">

    <?php include('includes/header.php'); ?>
    <?php include('includes/breadcrumb.php'); ?>

    <main class="site-main">

        <div class="textblock">
            <h1>Event Name</h1>
        </div>

        <div class="event-summary">
        
            <date>8th<br>Dec</date>
            <div class="image-col">
                <picture>
                    <source media="(max-width:767px)" srcset="images/mobile/featured-podcast.png"><!-- Image for mobile devices -->        
                    <img src="images/desktop/featured-podcast.png" alt=""><!-- Image for desktop screens -->
                </picture>
            </div>

            <div class="event-overview">
                <p>Praesent euismod auctor lectus, pulvinar aliquam nulla auctor non. Pellentesque tristique pellentesque sem, a condimentum magna viverra in. 
                    Vestibulum ut lacinia purus. Praesent molestie rutrum fringilla.
                </p>
                <ul class="event-details">
                    <li class="time">8pm - 9pm</li>
                    <li class="date">Monday 6th February 2023</li>
                    <li class="location">Arena</li>
                </ul>
                <ul class="event-actions">
                    <a href="#" target="_blank" class="blue-btn">Book Via Eventbrite</a>
                    <a href="#" target="_blank" class="blue-outline">Book Via Zoom</a>
                </ul>
                <div class="share">
                    <div class="share-title">Share Event</div>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="images/icons/facebook.png">
                                <img src="images/icons/facebook-white.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/icons/x.png">
                                <img src="images/icons/x-white.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/icons/linkedin.png">
                                <img src="images/icons/linkedin-white.png">
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/icons/instagram.png">
                                <img src="images/icons/instagram-white.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/icons/youtube.png">
                                <img src="images/icons/youtube-white.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/icons/tiktok.png">
                                <img src="images/icons/tiktok-white.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div><!-- end latest podcast -->

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

        <div class="text-image is-reversed">
            <div class="c-container">

                <div class="image-col">
                    <img src="images/podcast-2.png">
                </div>

                <div class="text-col">
                <h5>Event Information</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur dapibus sollicitudin. Sed at nisi finibus, laoreet sem sed, consequat mi.</p>
                <p>Etiam mattis quis nulla eget lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim leo, mattis id efficitur sit amet, lobortis tincidunt urna. 
                    Ut dapibus est leo, quis ornare orci egestas eget. Fusce ut luctus mi, nec cursus massa. Etiam nec imperdiet erat.</p>
                <a href="#" class="blue-btn">Register</a>
                </div>

            </div>
        </div><!-- end Text Image Block -->

        <div class="enquiry" id="enquire">
            <div class="c-container">

                <h3>Make An Enquiry</h3>

                <form>
                    <fieldset>
                        <legend>Your Details</legend>
                        <div class="form-row">
                            <div class="field-50">
                                <input type="text" placeholder="First Name*">
                            </div>
                            <div class="field-50">
                                <input type="text" placeholder="Last Name*">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="field-100">
                                <input type="email" placeholder="Email Address*">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="field-100">
                                <textarea placeholder="Your Enquiry*"></textarea>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Additional Information</legend>
                        <div class="form-row">
                            <div class="field-50">
                                <input type="text" placeholder="Telephone Number">
                            </div>
                            <div class="field-50">
                                <input type="text" placeholder="Organisation Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="field-100">
                                <input type="email" placeholder="Website">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="field-100">
                                <input type="text" placeholder="How did you hear about us?*">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="field-100">
                                <input type="radio">I agree to the data <a href="#">terms &amp; conditions</a>
                            </div>
                            <p><a href="#">Read our Privacy Policy</a></p>
                        </div>
                        <div class="form-row centered">
                            -- ReCaptcha --
                        </div>
                        <div class="form-row centered">
                            <button type="submit">Submit</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!-- end enquiry form -->

        <div class="event-listing">
            <div class="c-container">
        
                <h4>Related Events</h4>

                <ul>

                    <li>
                        <date>1st<span>Oct</span></date>
                        <img src="images/event-1.png">
                        
                        <div class="event-details">
                        <h5><a href="event.php">Event Name</a></h5>
                        <a href="#">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>2nd<span>Dec</span></date>
                        <img src="images/event-2.png">
                        
                        <div class="event-details">
                        <h5><a href="event.php">Event Name</a></h5>
                        <a href="#">Read More</a>
                        </div>
                    </li>

                    <li>
                        <date>8th<span>Dec</span></date>
                        <img src="images/event-3.png">
                        
                        <div class="event-details">
                        <h5><a href="event.php">Event Name</a></h5>
                        <a href="#">Read More</a>
                        </div>
                    </li>

                </ul>

            </div>
        </div><!-- end event list -->

        <?php include('includes/subscribe.php'); ?>

    </main>
  
    <?php include('includes/footer.php'); ?>

</body>
</html>