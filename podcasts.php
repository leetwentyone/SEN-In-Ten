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

<body class="podcasts-page">
  
  <?php include('includes/header.php'); ?>
  <?php include('includes/breadcrumb.php'); ?>
  
  <main class="site-main">

    <div class="textblock">
        <h1>Podcasts</h1>
        <p>Praesent euismod auctor lectus, pulvinar aliquam nulla auctor non. Pellentesque tristique pellentesque sem, a condimentum magna viverra in. 
            Vestibulum ut lacinia purus. Praesent molestie rutrum fringilla. Nam arcu urna, egestas at vulputate at, dictum nec lorem. 
            Ut efficitur vehicula neque, quis porta risus cursus nec.
        </p>
    </div>

    <div class="latest-podcast">
    
        <div class="image-col">
            <date>1st<span>Oct</span></date>
            <img src="images/square-placeholder.jpg">
        </div>

        <div class="episode-details">
            <p>Latest Episode</p>
            <h3>OrCam Learn</h3>
            <p>Praesent euismod auctor lectus, pulvinar aliquam nulla auctor non. Pellentesque tristique pellentesque sem, a condimentum magna viverra in. 
                Vestibulum ut lacinia purus. Praesent molestie rutrum fringilla. </p>
            <a class="listen" href="podcast.php">Listen Now</a>
        </div>

    </div><!-- end latest podcast -->

    <div class="banner-callout">
      -- Parent Pay Banner to be placed here --
    </div><!-- end banner callout -->

    <div class="filter-bar">
        <div class="c-container">
            <form>
                <input type="text" placeholder="Search Our Podcasts">
                <button type="submit"><img src="images/search.png"></button>
            </form>
            <form>
                <select>
                    <option>Collection</option>
                    <option>Option Two</option>
                    <option>Option Three</option>
                    <option>Option Four</option>
                </select>
            </form>
        </div>  
    </div><!-- end filter bar -->

    <div class="podcast-list">
      <div class="c-container">
  
        <h2>All Episodes</h2>

        <ul>
          <li>
            <date>1st<span>Oct</span></date>
            <div class="overlay-content">
              <img src="images/square-placeholder.jpg">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 1 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay">Parent Pay</span>
                <a class="listen" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 1 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen" href="podcast.php">Listen Now</a>
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
                <a class="listen" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 2 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen" href="podcast.php">Listen Now</a>
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
                <a class="listen" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 3 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen" href="podcast.php">Listen Now</a>
            </div>
          </li>

          <li>
            <date>31st<span>Oct</span></date>
            <div class="overlay-content">
              <img src="images/square-placeholder.jpg">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 4 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay">Parent Pay</span>
                <a class="listen" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 4 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen" href="podcast.php">Listen Now</a>
            </div>
          </li>

          <li>
            <date>3rd<span>Nov</span></date>
            <div class="overlay-content">
              <img src="images/square-placeholder.jpg">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 5 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay">Parent Pay</span>
                <a class="listen" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 5 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen" href="podcast.php">Listen Now</a>
            </div>
          </li>

          <li>
            <date>3rd<span>Nov</span></date>
            <div class="overlay-content">
              <img src="images/square-placeholder.jpg">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 6 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay">Parent Pay</span>
                <a class="listen" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 6 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen" href="podcast.php">Listen Now</a>
            </div>
          </li>

        </ul>

      </div>
    </div><!-- end episode list -->

    <div class="seperator"><div class="c-container"></div></div>

    <div class="listen-links">
      <h3>Listen Now</h3>
      <p>Listen to the latest episode here or find us on Spotify, Apple Podcasts and more</p>
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

    <div class="subscribe">
      <div class="c-container">
        <div class="form-col">
          <h5>Subscribe to our mailing list</h5>
          <form>
            <input type="text" placeholder="Name">
            <input type="email" placeholder="Email Address">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur dapibus sollicitudin. Sed at nisi finibus, laoreet sem sed, consequat mi.</p>
            <button type="submit">Submit</button>
          </form>
        </div>
        <div class="quote-col">
          <div class="quote-box">
            <blockquote>
              "This is a quote for this column"
            </blockquote>
            <cite>Name of Person</cite>
          </div>
        </div>
      </div>
    </div><!-- End Subscribe -->

  </main>

  <?php include('includes/footer.php'); ?>

</body>
</html>