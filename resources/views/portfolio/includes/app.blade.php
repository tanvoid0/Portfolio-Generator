<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Aircv" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        @include('portfolio.includes.header')
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        @include('portfolio.includes.nav')

        <!--========== SLIDER ==========-->
        @include('portfolio.pages.intro')
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        @include('portfolio.pages.about')
        <!-- End About -->

        <!-- Experience -->
        @include('portfolio.pages.experience')
        <!-- End Experience -->

        <!-- Work -->
        @include('portfolio.pages.work')
        <!-- End Work -->

        <!-- Contact -->
        @include('portfolio.pages.contact')
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->
        @include('portfolio.includes.footer')
    </body>
    <!-- END BODY -->
</html>
