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

<body class="contact-page">

    <?php include('includes/header.php'); ?>
    <?php include('includes/breadcrumb.php'); ?>

    <main class="site-main">

        <div class="textblock">
            <h1>Contact SEN In Ten</h1>
            <p>Vestibulum cursus pellentesque felis ac sodales. Phasellus rhoncus diam at arcu tincidunt, in vulputate tellus accumsan. 
            ullamcorper congue massa. Proin pharetra ultricies ullamcorper congue massa. Proin pharetra ultricies</p>
        </div>

        <div class="contact-container">

            <div class="get-in-touch">

                <?php
                    $phone_number = '01524 845046';
                    $phone_number_nospace = str_replace(' ','',$phone_number);
                    $email = 'hello@seninten.co.uk';
                ?>

                <h2>Get In Touch</h2>
                <ul>
                    <li><a href="tel:<?php echo $phone_number_nospace; ?>"><?php echo $phone_number; ?></a></li>
                    <li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                </ul>

                <div class="follow">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#" target="_blank">X</a></li>
                        <li><a href="#" target="_blank">F</a></li>
                        <li><a href="#" target="_blank">IG</a></li>
                    </ul>
                </div>

            </div>

            <div class="contact-form">

                <h2>Send Us A Message</h2>

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

        </div>

        <?php include('includes/subscribe.php'); ?>

    </main>
  
    <?php include('includes/footer.php'); ?>

</body>
</html>