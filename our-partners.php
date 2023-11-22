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

<body class="our-partners-page">

    <?php include('includes/header.php'); ?>
    <?php include('includes/breadcrumb.php'); ?>

    <main class="site-main">

        <div class="textblock">
            <h1>Our Partners</h1>
            <p>Fusce mauris tellus, lacinia ac ullamcorper non, tempus eu eros. Nullam sem risus, congue a varius et, hendrerit id libero.</p>
        </div>

        <ul class="partner-logos">
            <li>
                <h2>Scanning Pens</h2>
                <p>Vestibulum cursus pellentesque felis ac sodales. Phasellus rhoncus diam at arcu tincidunt, in vulputate tellus accumsan. 
                    Nullam condimentum varius elit, vel ultricies ex iaculis in.
                </p>
                <a href="#" target="_blank">Visit Website</a>
            </li>
            <li>
                <h2>ParentPay</h2>
                <p>Vestibulum cursus pellentesque felis ac sodales. Phasellus rhoncus diam at arcu tincidunt.
                </p>
                <a href="#" target="_blank">Visit Website</a>
            </li>
            <li>
                <h2>Orcam</h2>
                <p>Fusce eu luctus enim, a facilisis purus. Praesent neque mauris, cursus sed imperdiet a, tempor eget arcu. Vestibulum ante ipsum primis in faucibus orci luctus et.
                </p>
                <a href="#" target="_blank">Visit Website</a>
            </li>
            <li>
                <h2>SENsible SENCO</h2>
                <p>Fusce eu luctus enim, a facilisis purus. Praesent neque mauris, cursus sed imperdiet a, tempor eget arcu.
                </p>
                <a href="#" target="_blank">Visit Website</a>
            </li>
            <li>
                <h2>Nook</h2>
                <p>Fusce eu luctus enim, a facilisis purus. Praesent neque mauris, cursus sed imperdiet a, tempor eget arcu. Vestibulum ante ipsum primis in faucibus orci.
                </p>
                <a href="#" target="_blank">Visit Website</a>
            </li>
            <li>
                <h2>IDL Group</h2>
                <p>Fusce eu luctus enim, a facilisis purus. Praesent neque mauris, cursus sed imperdiet a, tempor eget arcu.
                </p>
                <a href="#" target="_blank">Visit Website</a>
            </li>
        </ul>

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

        <div class="text-image">
            <div class="c-container">

                <div class="image-col">
                <img src="images/square-placeholder.jpg">
                </div>

                <div class="text-col">
                <h5>All things SEN In Ten</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur dapibus sollicitudin. Sed at nisi finibus, laoreet sem sed, consequat mi.</p>
                <p>Etiam mattis quis nulla eget lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim leo, mattis id efficitur sit amet, lobortis tincidunt urna. 
                    Ut dapibus est leo, quis ornare orci egestas eget. Fusce ut luctus mi, nec cursus massa. Etiam nec imperdiet erat.</p>
                <a href="#">Find Out More</a>
                </div>

            </div>
        </div><!-- end Text Image Block -->

        <div class="why-icons">
            <h3>Why SEN In Ten?</h3>
            <ul>
                <li>
                    <div class="icon-title">Delivered By Experts</div>
                    <p>Proin efficitur dapibus sollicitudin. Sed at nisi finibus, laoreet sem sed, consequat mi.</p>
                </li>
                <li>
                    <div class="icon-title">High Quality</div>
                    <p>Proin efficitur dapibus sollicitudin. Sed at nisi finibus, laoreet sem sed, consequat mi.</p>
                </li>
                <li>
                    <div class="icon-title">Highly Accessible</div>
                    <p>Proin efficitur dapibus sollicitudin. Sed at nisi finibus, laoreet sem sed, consequat mi.</p>
                </li>
                <li>
                    <div class="icon-title">Insightful</div>
                    <p>Proin efficitur dapibus sollicitudin. Sed at nisi finibus, laoreet sem sed, consequat mi.</p>
                </li>
            </ul>
        </div><!-- Why Icons -->

        <?php include('includes/subscribe.php'); ?>

    </main>
        
    <?php include('includes/footer.php'); ?>

</body>
</html>