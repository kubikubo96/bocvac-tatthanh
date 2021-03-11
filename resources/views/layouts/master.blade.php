<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
          content="bốc xếp hà nội, cửu vạn hà nội, bốc vác hàng hóa, bốc xếp hàng hóa,
          chuyển nhà hà nội, chuyển nhà trọn gói, bốc xếp container, bốc hàng container,
          bốc xếp giá rẻ, dọn kho">
    <meta name="description" content="Bốc vác, Bốc xếp hàng hóa, Cửu vạn, Bốc dỡ container">
    <meta name="author" content="BOCXEPHANOI247.COM">
    <base href="{{asset('')}}" />
    <title>Bốc xếp hàng hóa, Cửu vạn, Bốc dỡ container</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/{{@$logo_page->image}}"/>
    <link href="css/app.css" rel="stylesheet">
    <!-- jQuery library -->
    <link href="css/font-awesome4.7.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/file.js"></script>
    <script type="text/javascript" src="js/jquery3.4.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-190610381-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-190610381-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 411647905 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-411647905"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-411647905');
    </script>
    <!-- Event snippet for Lượt nhấp vào đường liên kết ngoài conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-411647905/ojsCCLHA7vgBEKH_pMQB'});
    </script>
</head>
<body>

<div class="wrapper">

    @include('layouts.info-top')

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</div>
@if(@$user->phone_number != null)
<div class="phone-fixed">
  <img src="images/phone-ring.gif" title="chuông điện thoại" alt="chuông điện thoại">
  <h1>
      <a href="tel:{{@$user->phone_number}}">{{@''.substr(@$user->phone_number, 0, 3).' '.substr(@$user->phone_number, 3, 3).' '.substr(@$user->phone_number,6)}}</a>
  </h1>
</div>
@endif
@if(@$user->other_phone_number != null)
<div class="phone-fixed phone-fixed-two">
  <img src="images/phone-ring.gif" title="chuông điện thoại" alt="chuông điện thoại">
  <h1>
      <a href="tel:{{@$user->other_phone_number}}">{{@''.substr(@$user->other_phone_number, 0, 3).' '.substr(@$user->other_phone_number, 3, 3).' '.substr(@$user->other_phone_number,6)}}</a>
  </h1>
</div>
@endif
<button onclick="goTopFunc()" id="goTop" title="Go to top"><i class="fas fa-arrow-alt-circle-up"></i></button>


<!-- Bootstrap core JavaScript-->
<script src="admin/vendor/jquery/jquery.min.js"></script>
<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="admin/js/sb-admin-2.min.js"></script>
<script type=”application/ld+json”>
{
  “@context”: “https://www.bocxephanoi247.com/”,

  “@type”: “Bốc xếp hà nội”,

  “name”: “Bốc xếp hà nội”,

  “description”: “Bốc xếp hà nội, Bốc xếp giá rẻ, bốc dỡ hàng container”,

  “address”: {

    “@type”: “PostalAddress”,

    “addressLocality”: Hà Nội, Việt Nam”,
  },

  “telephone”: “+84984416863”,
}
</script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/navbar.js"></script>
</body>
</html>
