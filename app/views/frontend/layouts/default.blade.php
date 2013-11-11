<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Photogabble</title>
    <meta name="description" content="Personal photoblog of Simon Dann">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<header>
    <div class="inner">
        <img src="assets/img/logo.png" alt="photogabble - photography blog of simon dann" class="logo" />
        <h1>photogabble</h1>

        <div class="searchBoxContainer">
            <?php echo Form::open( array( 'route' => 'search', 'method' => 'post' ) ); ?>
                <label for="s">Are you looking for something? <small>Smile <span>More</span> Often.</small></label>
                <input id="s" name="s" type="text" placeholder="Click here to search for it..." class="text" />
                <input type="submit" value="Search" class="sprite button" />
            <?php echo Form::close(); ?>
        </div>
    </div>
</header>
<!-- ./ header -->

<!-- Page Body -->
<div class="inner">
@yield('page_body')
</div>
<!-- ./ page body -->

<!-- Footer -->

<footer>

    <div class="inner">

        <div class="row">
            Content &copy; 2013 Simon Dann.
        </div>

    </div>

</footer>

<!-- ./footer -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="assets/js/vendor/jquery.jcarousel.min.js"></script>
<script src="assets/js/vendor/jquery.jcarousel-autoscroll.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='http://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>
