<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Twilight - Admin Dashboard </title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href={{ url('backend/css/app.min.css') }}>
    <!-- Template CSS -->
    <link rel="stylesheet" href={{ url('backend/css/style.css') }}>
    <link rel="stylesheet" href={{ url('backend/css/components.css') }}>
    <!-- Custom style CSS -->
    <link rel="stylesheet" href={{ url('backend/css/custom.css') }}>
    <link rel='shortcut icon' type='image/x-icon' href={{ url('backend/img/favicon.ico') }} />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">


            <div id="app">
                <section class="section">
                    <div class="container mt-5">
                        <div class="page-error">
                            <div class="page-inner">
                                <h1>403</h1>
                                <div class="page-description">
                              To access the Twilight admin panel login first
                                </div>
                                <div class="page-search">
                                    <div class="mt-3">
                                        <a href="{{url('/admin/auth/login')}}">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ url('backend/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ url('backend/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ url('backend/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ url('backend/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ url('backend/js/custom.js') }}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
