<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Residency Maintainance</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('assets/img/favicon.png')}}" rel="icon">
    <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- CSS File -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">


</head>
<body>
     <!-- ======= Property Search Section ======= -->
     <div class="click-closed"></div>
     <!--/ Form Search Star /-->
     <div class="box-collapse">
         <div class="title-box-d">
             <h3 class="title-d">Search Property</h3>
         </div>
         <span class="close-box-collapse right-boxed bi bi-x"></span>
         <div class="box-collapse-wrap form">
             <form class="form-a">
                 <div class="row">
                     <div class="col-md-12 mb-2">
                         <div class="form-group">
                             <label class="pb-2" for="Type">Keyword</label>
                             <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                         </div>
                     </div>
                     <div class="col-md-6 mb-2">
                         <div class="form-group mt-3">
                             <label class="pb-2" for="Type">Type</label>
                             <select class="form-control form-select form-control-a" id="Type">
                 <option>All Type</option>
                 <option>For Rent</option>
                 <option>For Sale</option>
                 <option>Open House</option>
               </select>
                         </div>
                     </div>
                     <div class="col-md-6 mb-2">
                         <div class="form-group mt-3">
                             <label class="pb-2" for="city">City</label>
                             <select class="form-control form-select form-control-a" id="city">
                 <option>All City</option>
                 <option>Alabama</option>
                 <option>Arizona</option>
                 <option>California</option>
                 <option>Colorado</option>
               </select>
                         </div>
                     </div>
                     <div class="col-md-6 mb-2">
                         <div class="form-group mt-3">
                             <label class="pb-2" for="bedrooms">Bedrooms</label>
                             <select class="form-control form-select form-control-a" id="bedrooms">
                 <option>Any</option>
                 <option>01</option>
                 <option>02</option>
                 <option>03</option>
               </select>
                         </div>
                     </div>
                     <div class="col-md-6 mb-2">
                         <div class="form-group mt-3">
                             <label class="pb-2" for="garages">Garages</label>
                             <select class="form-control form-select form-control-a" id="garages">
                 <option>Any</option>
                 <option>01</option>
                 <option>02</option>
                 <option>03</option>
                 <option>04</option>
               </select>
                         </div>
                     </div>
                     <div class="col-md-6 mb-2">
                         <div class="form-group mt-3">
                             <label class="pb-2" for="bathrooms">Bathrooms</label>
                             <select class="form-control form-select form-control-a" id="bathrooms">
                 <option>Any</option>
                 <option>01</option>
                 <option>02</option>
                 <option>03</option>
               </select>
                         </div>
                     </div>
                     <div class="col-md-6 mb-2">
                         <div class="form-group mt-3">
                             <label class="pb-2" for="price">Min Price</label>
                             <select class="form-control form-select form-control-a" id="price">
                 <option>Unlimite</option>
                 <option>$50,000</option>
                 <option>$100,000</option>
                 <option>$150,000</option>
                 <option>$200,000</option>
               </select>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <button type="submit" class="btn btn-b">Search Property</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
     <!-- End Property Search Section -->>
    @include('frontend.layout.header')

    <main id="main">
        @yield('main-container')
    </main>

    @include('frontend.layout.footer')

</body>

<!-- End Header/Navbar -->

    <!-- Vendor JS Files -->
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('assets/js/main.js')}}"></script>


</html>