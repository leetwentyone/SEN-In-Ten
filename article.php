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

<body class="single-post">
    
    <?php include('includes/header.php'); ?>
  
    <main class="site-main">

        <div class="article-post--image">
            <picture>
                <source media="(max-width:767px)" srcset="images/hero-mobile.jpg">      
                <img src="images/hero-desktop.jpg" alt="">
            </picture>
        </div><!-- end article post -->

        <?php include('includes/breadcrumb.php'); ?>

        <article>

            <h1 class="post-title">This is the main heading for this article</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida laoreet rhoncus. Fusce suscipit orci id libero cursus, et sagittis augue ultricies. 
                Cras in lacus ac nisi ultrices maximus. Quisque placerat urna urna, a venenatis neque vulputate nec. 
                Sed id enim quis erat dapibus hendrerit id sit amet nisl. Praesent sit amet nunc porta augue tincidunt dapibus pretium et metus. 
                Duis ut ante non risus commodo maximus. Proin a est aliquet, varius nulla vel, imperdiet sem. Fusce dignissim quis neque accumsan egestas.
            </p>

            <h2>This is a sub heading for this post</h2>

            <p>Fusce mauris tellus, lacinia ac ullamcorper non, tempus eu eros. Nullam sem risus, congue a varius et, hendrerit id libero. 
                Aenean tristique, libero quis scelerisque fringilla, mi diam congue est, consectetur semper nisi risus iaculis felis. 
                Nunc vitae finibus tellus. Nam pharetra, erat nec suscipit tristique, tortor dolor pretium justo, a vehicula massa orci elementum metus. 
                Donec elementum imperdiet neque vitae venenatis. Quisque non neque hendrerit, accumsan libero at, ultricies neque. 
                Donec maximus est sit amet tincidunt pretium.
            </p>

            <h3>This is a sub heading for this post</h3>

            <p>Vestibulum cursus pellentesque felis ac sodales. Phasellus rhoncus diam at arcu tincidunt, in vulputate tellus accumsan. 
                Nullam condimentum varius elit, vel ultricies ex iaculis in. Praesent ligula neque, rhoncus vel rhoncus eget, ullamcorper congue massa. 
                Proin pharetra ultricies justo, ac suscipit purus consequat vitae. Orci varius natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus. Sed a dolor lorem.
            </p>

            <div class="share">
                <div class="share-title">Share Article</div>
                <ul>
                    <li><a href="#">F</a></li>
                    <li><a href="#">X</a></li>
                    <li><a href="#">In</a></li>
                    <li><a href="#">IG</a></li>
                    <li><a href="#">YT</a></li>
                    <li><a href="#">TT</a></li>
                </ul>
            </div>

        </article>

        <div class="banner-callout">
            -- Parent Pay Banner to be placed here --
        </div><!-- end banner callout -->

    </main>

    <div class="post-navigation">
        <a href="#" class="prev-post">Previous Article</a>

        <div class="follow">
            <p>Follow Us:</p>
            <ul>
                <li><a href="#" target="_blank">X</a></li>
                <li><a href="#" target="_blank">F</a></li>
                <li><a href="#" target="_blank">IG</a></li>
            </ul>
        </div>

        <a href="#" class="next-post">Next Article</a>
    </div>

    <div class="news-list">
        <div class="c-container">
  
            <h4>Related News <a href="blog.php">View All News</a></h4>

            <ul>
                <li>
                    <img src="images/square-placeholder.jpg">
                    <div class="post-content">
                        <h5><a href="article.php">Title of Post</a></h5>
                        <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                        <a href="article.php">Read More</a>
                    </div>
                </li>
                <li>
                    <img src="images/square-placeholder.jpg">
                    <div class="post-content">
                        <h5><a href="article.php">Title of Post</a></h5>
                        <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                        <a href="article.php">Read More</a>
                    </div>
                </li>
                <li>
                    <img src="images/square-placeholder.jpg">
                    <div class="post-content">
                        <h5><a href="article.php">Title of Post</a></h5>
                        <p>Phasellus egestas, ipsum vitae molestie condimentum, lorem risus bibendum diam, eu lobortis odio eros eget velit.</p>
                        <a href="article.php">Read More</a>
                    </div>
                </li>
            </ul>

        </div>
    </div><!-- end news list -->

    <?php include('includes/subscribe.php'); ?>

    <?php include('includes/footer.php'); ?>

</body>
</html>