<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Havana Restaurant</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{URL('css/styles.css')}}" rel="stylesheet" />
        <style>
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}


.navbar {

    display: flex;
    width: 100%; /* Changed from fixed width to relative width */

}

.logo {
    background-image: url(https://th.bing.com/th/id/OIP.37DCK4F56yNnYPynRXscyAHaFj?rs=1&pid=ImgDetMain);
    background-position: center;
    background-size: cover;
    margin: 25px 0px 0px 25px;
    border-radius: 25px;
    height: 100px;
    width: 250px;

}

.uls ul a {
    text-decoration: none;
    margin: 0px 100px 0px 0px;
    display: inline;
    justify-content: space-around;
    color:bisque;
    transition: all ease 0.2s;
    font-size: 30px;
    font-weight: bold;

}

.uls ul a:hover {
    color: red;
    transform: scale(1.5);
}






        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->


        <div class="container">
        <div class="row">
        <nav class="navbar col-2">
            <div class="logo col-2">
            </div>
            <div class="uls col-6">
                <ul>
                    <a  href="{{URL('shop')}}">Ordar</a>
                    <a   href="{{URL('home')}}" style="font-size: 40px;">Home</a>
                    <a  href="{{URL('menu')}}">Menu</a>

                </ul>
            </div>
            <a class="btn btn-success col-1.5" href="{{URL('login')}}">login</a>
            <a  class="btn btn-success col-1.5" href="{{URL('register')}}">Register</a>


        </nav>
        </div>
</div>

        @yield('content')




        <!-- Footer-->

            <footer class="bg-body-tertiary text-center text-lg-start">
<!-- Grid container -->
<div class="container p-4">
    <!--Grid row-->
    <div class="row">
    <!--Grid column-->
    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase"></h5>

        <p>
        #Havana_Will_Be_Your_Home
-
📞For Order Mohamed Mohamed ali | 0102039-9344
        </p>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase"></h5>

        <p>
            you are welcome
        </p>
    </div>
    <!--Grid column-->
    </div>
    <!--Grid row-->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2020 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
</div>
<!-- Copyright -->
</footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{URL('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
