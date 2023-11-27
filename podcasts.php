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

<body class="podcasts-page">

  <div class="page-banner">
    <picture>
      <source media="(max-width:767px)" srcset="images/mobile/about-header.png"><!-- Image for mobile devices -->        
      <img src="images/desktop/about-sen.png" alt=""><!-- Image for desktop screens -->
    </picture>
  </div>
  
  <?php include('includes/header.php'); ?>

  <?php include('includes/breadcrumb.php'); ?>
  
  <main class="site-main">

    <div class="textblock">
        <h1>Podcasts</h1>
        <p>Listen to the latest episodes here or find us on Spotify, Apple Podcasts and more.  
          Discover new episodes of our insightful podcast every fortnight. Join host Darren Clark as he welcomes a 
          new passionate guest to discuss all things SEN.
        </p>
    </div>

    <div class="latest-podcast">
    
        <div class="image-col">
            <date>1st<span>Oct</span></date>
            <img src="images/event-1.png">
        </div>

        <div class="episode-details">
            <p>Latest Episode</p>
            <h3>OrCam Learn</h3>
            <p>A new solution developed for students with reading and learning differences including Dyslexia and ADHD that improves fluency, 
              accuracy and comprehension.</p>
            <a class="listen-blue" href="podcast.php">Listen Now</a>
        </div>

    </div><!-- end latest podcast -->

    <div class="banner-callout" style="padding-top: 0">
      <div class="c-container">
        <picture>
          <source media="(max-width:767px)" srcset="images/mobile/sponsor-banner.png"><!-- Image for mobile devices -->        
          <img src="images/desktop/sponsor-banner.png" alt=""><!-- Image for desktop screens -->
        </picture>
      </div>
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
              <img src="images/podcast-1.png">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 1 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay"><img src="images/parent-pay.png"></span>
                <a class="listen-blue" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 1 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen-blue-outline" href="podcast.php">Listen Now</a>
            </div>
          </li>

          <li>
            <date>31st<span>Oct</span></date>
            <div class="overlay-content">
              <img src="images/podcast-2.png">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 2 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay"><img src="images/parent-pay.png"></span>
                <a class="listen-blue" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 2 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen-blue-outline" href="podcast.php">Listen Now</a>
            </div>
          </li>

          <li>
            <date>3rd<span>Nov</span></date>
            <div class="overlay-content">
              <img src="images/podcast-3.png">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 3 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay"><img src="images/parent-pay.png"></span>
                <a class="listen-blue" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 3 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen-blue-outline" href="podcast.php">Listen Now</a>
            </div>
          </li>

          <li>
            <date>31st<span>Oct</span></date>
            <div class="overlay-content">
              <img src="images/podcast-1.png">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 4 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay"><img src="images/parent-pay.png"></span>
                <a class="listen-blue" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 4 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen-blue-outline" href="podcast.php">Listen Now</a>
            </div>
          </li>

          <li>
            <date>3rd<span>Nov</span></date>
            <div class="overlay-content">
              <img src="images/podcast-2.png">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 5 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay"><img src="images/parent-pay.png"></span>
                <a class="listen-blue" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 5 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen-blue-outline" href="podcast.php">Listen Now</a>
            </div>
          </li>

          <li>
            <date>3rd<span>Nov</span></date>
            <div class="overlay-content">
              <img src="images/podcast-3.png">
              <div class="overlay-inner">
                <h3 class="episode-title">Episode 6 : OrCam Learn</h3>
                <p>Sponsored By</p>
                <span class="parent-pay"><img src="images/parent-pay.png"></span>
                <a class="listen-blue" href="podcast.php">Listen Now</a>
              </div>
            </div>

            <div class="episode-details">
              <p>Episode 6 :</p>
              <h3>OrCam Learn</h3>
              <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
              <a class="listen-blue-outline" href="podcast.php">Listen Now</a>
            </div>
          </li>

        </ul>

      </div>
    </div><!-- end episode list -->

    <div class="seperator"><div class="c-container"></div></div>

    <div class="listen-links">
      <h4>Listen Now</h4>
      <p>Listen to the latest episode here or find us on Spotify, Apple Podcasts and more</p>
      <ul>
        <li>
          <a href="#" target="_blank" class="blue-icon"><span></span>Listen on Spotify</a>
        </li>
        <li>
          <a href="#" target="_blank" class="yellow-icon"><span></span>Listen on Apple Podcast</a>
        </li>
        <li>
          <a href="#" target="_blank" class="blue-icon"><span></span>Listen on Amazon Music</a>
        </li>
        <li>
          <a href="#" target="_blank" class="yellow-icon"><span></span>Listen on Google Podcast</a>
        </li>
        <li>
          <a href="#" target="_blank" class="blue-icon"><span></span>Listen on TuneIn</a>
        </li>
        <li>
          <a href="#" target="_blank" class="yellow-icon"><span></span>Listen on Overcast</a>
        </li>
      </ul>
      <p>How to listen? <a href="#">Learn More</a></p>
    </div><!-- End Listen Links -->

    <?php include('includes/subscribe.php'); ?>

  </main>

  <?php include('includes/footer.php'); ?>

</body>
</html>