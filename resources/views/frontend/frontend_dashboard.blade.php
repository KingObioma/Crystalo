<!DOCTYPE html>
<html lang="en">


<!-- index-2 06:41:43 GMT -->

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon/favicon-32x32.png') }}"
        sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon/favicon-16x16.png') }}"
        sizes="16x16">
</head>

<body>
    <div class="boxed_wrapper">

        <!-- main header -->
        @include('frontend.home.header')
        <!-- main-header end -->

        @yield('main')

        <!-- main-footer -->
        @include('frontend.home.footer')
        <!-- main-footer end -->

    </div>

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.enllax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/js/validation.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/bootstrap-sl-1.12.1/bootstrap-select.js') }}"></script>
    <script src="{{ asset('frontend/assets/jquery-ui-1.11.4/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.bootstrap-touchspin.js') }}"></script>


    <!---
<script src="js/gmaps.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="js/mapapi.js"></script>
--->
    <script src="{{ asset('frontend/js/map-helper.js') }}"></script>

    <script src="{{ asset('frontend/assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('frontend/assets/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('frontend/assets/html5lightbox/html5lightbox.js') }}"></script>

    <!--Revolution Slider-->
    <script src="{{ asset('frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main-slider-script.js') }}"></script>

    <!-- thm custom script -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    <script>
       document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star');
    const ratingValue = document.getElementById('rating-value');

    stars.forEach(star => {
        star.addEventListener('click', function () {
            const selectedValue = parseInt(this.getAttribute('data-value'));

            // Update the hidden input with the selected rating value
            ratingValue.value = selectedValue;

            // Remove 'selected' class from all stars
            stars.forEach(s => s.classList.remove('selected'));

            // Add 'selected' class to the clicked star and all preceding stars
            stars.forEach(s => {
                if (parseInt(s.getAttribute('data-value')) <= selectedValue) {
                    s.classList.add('selected');
                }
            });
        });
    });
});


    </script>



</body>


<!-- index-2 06:43:55 GMT -->

</html>
