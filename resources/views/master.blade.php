<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Piassa101</title>
    <link rel="icon" href="{{asset('/uploads/other/logo.jpg')}}">
    <!-- <link rel="icon" href="https://kit.fontawesome.com/918ca60ec1.js" crossorigin="anonymous" class="fa-solid fa-person-hiking"> -->
    
   

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Custom styles for this template -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>

<body>

    @include('partials.navbartwo')
    @yield('contents')

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-12 blog-main">
                @yield('content')
            </div><!-- /.blog-main -->

        </div><!-- /.row -->

    </main><!-- /.container -->
</body>
    <footer class="blog-footer">
        <!-- <p>Our objective is make you satisfy with our products</p> -->
        <p>Our objective is make your outdoors easier</p>
        
        <p>Copyrights by <a href="#">SELMERRA HAMZA</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
        <a href="https://www.facebook.com/marketplace/profile/100001065624061/?ref=share_attachment" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/piassa101?igsh=ZTJncHl2ZmkzbWtl" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/qr/TVX65TBE3AUJP1" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

        <!-- <div class="footer-col-2">
            <img src="" alt="">    
        </div> -->
        
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>

</body>
</html>
