<!doctype html>
<html lang="en" dir="ltr">

<head>

   @include('librarian.css')

</head>

<body class="app sidebar-mini ltr light-mode">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('librarian.header')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
           @include('librarian.sidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            @include('librarian.body')
            <!--app-content close-->

        </div>

        <!-- Sidebar-right -->
 
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->
        @include('librarian.countryselector')
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        @include('librarian.footer')
        <!-- FOOTER END -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

   @include('librarian.javascript')

</body>

</html>