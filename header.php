<?php
require("mail.php");
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>SoftEzi</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#0072f6">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 300;
        src: url(fonts/ProximaNova-Light.html) ;
      }

      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 400;
        src: url(fonts/ProximaNova-Regular.html) ;
      }

      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 600;
        src: url(fonts/ProximaNova-Semibold.html);
      }

      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 700;
        src: url(fonts/ProximaNova-Bold.html);
      }


      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 800;
        src: url(fonts/ProximaNova-Black.html);
      }

      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 900;
        src: url(fonts/ProximaNova-Xbold.html);
      }
.logo {
    /*background-image: url(img/logo-blue.svg);*/
    background-size: contain;
  }
  .form-group{
    width: inherit;
  }
  .mysec{
padding: 3px 61px;
}
.text-area{
      position: absolute;
    bottom: 10px;
    width: 85%;
 
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
 /* background-color: #f1f1f1;*/
 height: 360px;
 width: 300px;
}
.card-bg1{
background-image: url(assets/49c5770d/img/home-offices/Pune.jpg) ;
background-size: cover;
}
/*.card-bg1{*/
/*background-image: url(assets/49c5770d/img/home-offices/Puneffice.png) no-repeat center center fixed;*/
 /*background-size: cover;*/
/*}*/
.card-bg2{
  background-image: url(assets/49c5770d/img/home-offices/Mumbai.jpg) ;
  background-size: cover;
  /*filter: blur(1px);*/
  
}
/*.office-text{*/
/*    background-color: rgb(0,0,0);*/
/*  background-color: rgba(0,0,0, 0.4);*/
/*  color: black;*/
/*  font-weight: bold;*/
/*  border: 3px solid #f1f1f1;*/
/*  position: absolute;*/
/*  top: 50%;*/
/*  left: 50%;*/
/*  transform: translate(-50%, -50%);*/
/*  z-index: 2;*/
/*  width: 80%;*/
/*  padding: 20px;*/
/*  text-align: center;*/
/*}*/
.card-bg3{
  background-image: url(assets/49c5770d/img/home-offices/Trivandrum.jpg);
  background-size: cover;
}

  @media screen and (max-width: 360px){
.form__box .form-group {
    /* width: 100%; */
    width: 300px;
}
.mysec{
padding: 0px 35px;
}
.text-area{
      position: absolute;
    bottom: 10px;
    width: 85%;
}
.card{
  margin-bottom: 33px;
}
}
.nav-mobile .c-menu__items {
    padding: 130px 0 35px;
}
    </style>
  
<meta name="csrf-param" content="">
<meta name="csrf-token" content="">
<meta property="og:title" content="Software Development Company | SoftEzi US">
<meta property="og:description" content="SoftEzi is a full-service software development company of engineers, designers, and developers. Mobile app development and custom software solutions in USA, Palo Alto">
<meta property="og:image" content="">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1920">
<meta property="og:image:height" content="1280">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="https://www.SoftEzi.com/">
<meta property="og:site_name" content="SoftEzi">
<meta property="og:type" content="website">
<meta name="twitter:title" content="Software Development Company | SoftEzi">
<meta name="twitter:description" content="">
<meta name="twitter:card" content="summary">
<meta name="description" content="SoftEzi is a full-service software development company of engineers, designers, and developers. Mobile app development and custom software solutions in USA, Palo Alto">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="alternate" type="application/rss+xml" title="Intellectsoft Blog &raquo; Feed" href="blog/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Intellectsoft Blog &raquo; Comments Feed" href="blog/comments/feed/index.html" />
<link rel='stylesheet' id='' href='blog/wp-content/themes/style.css' type='text/css' media='all' />
<link rel="stylesheet" href="assets/main-style.min.css">
<link rel='stylesheet' id='slick-css' href='blog/wp-content/uploads/hummingbird-assets/b8d0db99b17e4d9b83062be81237a679.css' type='text/css' media='1' />
<link rel='stylesheet' id='wphb-1-css' href='blog/wp-content/uploads/hummingbird-assets/6fe36af9adbb0c054e8856d039ce5348.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='main-style.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='icons-css' href='blog/wp-content/uploads/hummingbird-assets/a60900a3ebb93d8b40a752033ab2d78b.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='assets/main-style.min.css' type='text/css' media='all' />
<link href="assets/49c5770d/iconsd391.css?v=1608714995" rel="stylesheet" position="3">
<link href="assets/49c5770d/vendor/owl.carousel.min1a4f.css?v=1608714905" rel="stylesheet">
<link href="assets/49c5770d/vendor/swiper.min1a4f.css?v=1608714905" rel="stylesheet">
<link href="assets/49c5770d/home1a4f.css" rel="stylesheet">
<link rel="https://api.w.org/" href="blog/wp-json/index.html" /><link rel="alternate" type="application/json" href="blog/wp-json/wp/v2/pages/20062.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="blog/xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="blog/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.6" />
<link rel='shortlink' href='blog/indexede6.html?p=20062' />
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="blog/wp-content/uploads/cropped-favicon-1-32x32.png" sizes="32x32" />
<link rel="icon" href="blog/wp-content/uploads/cropped-favicon-1-192x192.png" sizes="192x192" />
<meta name="msapplication-TileImage" content="blog/wp-content/uploads/cropped-favicon-1-270x270.png" />

<link href="index.html" rel="canonical">
<link href="index.html" rel="alternate" hreflang="en-US">
<link href="index.html" rel="alternate" hreflang="x-default">
<link href="assets/49c5770d/iconsd391.css?v=1608714995" rel="stylesheet" position="3">
<link href="assets/49c5770d/bundledb85.css" rel="stylesheet">
<link rel="stylesheet" href="assets/49c5770d/vendor/owl.carousel.min1a4f.css">
<style>
    .nav-mobile .c-menu__items {
    /*padding: 130px 0 35px;*/
    margin-top: 130px;
}
.has-active-menu .nav-mobile .btn-close {
    z-index: 500;
}
.owl-carousel .owl-item img {
    display: block;
    width: 120px;
}
.team .team__block .team__block--item {
    padding: 0px 9px;
}


@media screen and (max-width: 767px){
.form__box .form-group {
    /* width: 100%; */
    width: 300px;
}
.team .team__block .team__block--image .team-image {
    max-width: 68px;
}
}
</style>
<!--[if IE 9]>
<script src="/assets/49c5770d/vendor/ie9-placeholder.js?v=1608714905"></script>
<![endif]-->
<!--[if IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WXTDXX');
</script> 
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class="pages-index">
<div id="o-wrapper" class="wrapper overflow-hidden">
    
<?php
require("desktop-nav.php");
?>