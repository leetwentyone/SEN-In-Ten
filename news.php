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

<body class="blog">
  
  <?php include('includes/header.php'); ?>
  <?php include('includes/breadcrumb.php'); ?>
  
  <main class="site-main">
    
    <div class="textblock">
      <h1>News</h1>
    </div>

    <div class="latest-post">
    
      <div class="image-col">
        <img src="images/desktop/featured-news.png">
      </div>

      <div class="post-details">
        <p>Most Recent</p>
        <h3><a href="article.php">This is the latest blog article</a></h3>
        <p>Praesent euismod auctor lectus, pulvinar aliquam nulla auctor non. Pellentesque tristique pellentesque sem, a condimentum magna viverra in. 
          Vestibulum ut lacinia purus. Praesent molestie rutrum fringilla. </p>
        <a href="article.php">Read More</a>
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
          <input type="text" placeholder="Search Our Blog">
          <button type="submit"><img src="images/icons/search-blue.png"></button>
        </form>
        <form>
          <select>
            <option>Categories</option>
            <option>Category One</option>
            <option>Category Two</option>
            <option>Category Three</option>
          </select>
        </form>
      </div>  
    </div><!-- end filter bar -->

    <div class="news-list">
      <div class="c-container">

        <ul>
          <li>
            <img src="images/blog-1.png">
              
            <div class="post-content">
                <h5><a href="article.php">Title of Post</a></h5>
                <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                <a href="article.php">Read More</a>
            </div>
          </li>

          <li>
          <img src="images/blog-2.png">
              
            <div class="post-content">
                <h5><a href="article.php">Title of Post</a></h5>
                <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                <a href="article.php">Read More</a>
            </div>
          </li>

          <li>
            <img src="images/blog-1.png">
              
            <div class="post-content">
                <h5><a href="article.php">Title of Post</a></h5>
                <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                <a href="article.php">Read More</a>
            </div>
          </li>

          <li>
            <img src="images/blog-1.png">
              
            <div class="post-content">
                <h5><a href="article.php">Title of Post</a></h5>
                <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                <a href="article.php">Read More</a>
            </div>
          </li>

          <li>
            <img src="images/blog-2.png">
              
            <div class="post-content">
                <h5><a href="article.php">Title of Post</a></h5>
                <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                <a href="article.php">Read More</a>
            </div>
          </li>

          <li>
            <img src="images/blog-1.png">
              
            <div class="post-content">
                <h5><a href="article.php">Title of Post</a></h5>
                <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                <a href="article.php">Read More</a>
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