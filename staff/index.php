<?php session_start();?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard</title>
    <!-- <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png"> -->
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/pages/dashboard-ecommerce.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

  <?php
       include('./php/side-topbar.php');
    ?>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Chart -->
<div class="row match-height">
    <div class="col-12">
        <div class="">
        <div id="curve_chart" style="width: 900px; height: 300px" class="mb-2"></div>
        </div>
    </div>
</div>
<!-- Chart -->
<!-- eCommerce statistic -->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted danger position-absolute p-1">NEW LEADS</h5>
                <div>
                    <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                <div class="card-body">
                <h1 id="new"></h1>
              </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted info position-absolute p-1">PENDING LEADS</h5>
                <div>
                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                   
                   <div class="card-body">
                   <h1 id="pend"></h1> 
              </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted warning position-absolute p-1">COMPLETED LEADS</h5>
                <div>
                <i class="fa fa-check danger font-large-1 float-right p-1" aria-hidden="true"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                   
                   <div class="card-body">
                   <h1 id="comp" class="font-large-1"></h1>
              </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/  -->

<!-- Statistics -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="heading-multiple-thumbnails">PENDING LEADS</h4>
                    
                    
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">LEADS</h4>
                        <div id="pending"></div>
                    </div>
                </div>
            </div>
    </div>
    
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Rejected Leads</h4>
               
                <div id="rejected"></div>
            </div>
        </div>
    </div>
</div>
<!--/ Statistics -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php
       include("./php/footer.php");
    ?>

    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
  <script>
  setInterval(() => {
    newleads();
  }, 1000);
  setInterval(() => {
      pend();
  }, 1000);
  setInterval(() => {
    comp();
  }, 1000);
  setInterval(() => {
    fetchnew();
  }, 1000);
  setInterval(() => {
    not();
  }, 1000);
        function newleads(){
        $.ajax({
                    url:"./php/new-lead.php",
                    method:"POST",
                    success:function(data){
                         $("#new").html(data);
                         }
                })
      }
      function pend(){
        $.ajax({
                    url:"./php/count-pend.php",
                    method:"POST",
                    success:function(data){
                $("#pend").html(data);
                
                         }
                })
      }
      function comp(){
        $.ajax({
                    url:"./php/comp.php",
                    method:"POST",
                    success:function(data){
                $("#comp").html(data);
                
                         }
                })
      }
      function fetchnew(){
        $.ajax({
                    url:"./php/fetchnew-lead.php",
                    method:"POST",
                    success:function(data){
                $("#pending").html(data);
                
                         }
                })
      }
      setInterval(() => {
        session();
      }, 1000);
      session();
      function session(){
        $.ajax({
                    url:"./php/session.php",
                    method:"POST",
                    success:function(data){
                      if(data != 'goon'){
                        window.location = "../index.php";
                      }
                
                         }
                })
      }
      function not(){
        $.ajax({
                    url:"./php/not-lead.php",
                    method:"POST",
                    success:function(data){
                $("#rejected").html(data);
                
                         }
                })
      }
  </script>
</html>