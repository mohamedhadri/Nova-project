<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin-themes/assets/plugins/global/plugins.bundle.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet"> 
    <link type="font/ttf" href="{{ asset('admin-themes/assets/plugins/global/fonts/montserrat-arabic/Montserrat-Regular.ttf') }}" as="font" crossorigin="anonymous" rel="preload">
    <link rel="stylesheet" href="{{ asset('admin-themes/assets/css/style.bundle.css') }}">

    {{-- this links should be activated when switching to AR  and its recommended to disable the style.bundle.css --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin-themes/assets/css/style.bundle.rtl.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin-themes/assets/css/style.rtl.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('admin-themes/assets/css/style.main.css') }}">

</head>
<body>
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    <script src="{{ asset('admin-themes/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin-themes/assets/js/scripts.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        referrerpolicy="no-referrer">
	</script>
	<script>
		    $(document).ready(function () {
        $('#owl-one').owlCarousel({
            loop: false,
            margin: 22,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 12,
                },
                450: {
                    items: 2,
                    margin: 12,
                },
                780: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
	})
	</script>
</body>
</html>