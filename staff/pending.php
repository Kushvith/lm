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
    <title>Icons - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN summer note-->
    <!-- include libraries(jQuery, bootstrap) -->


<!-- include summernote css/js -->

    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

  <?php
       include('./php/side-topbar.php');
    ?>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Pending</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Pending
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Line Awesome section start -->
<section id="line-awesome-icons">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Pending Leads</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">
                     <div id="display" class="table responsive"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Line Awesome section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php
        include('./php/footer.php');
    ?>
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="details"></div>
        <div id='det'>
        <input type="number" id="id-rej" hidden>
             <textarea name="" id="pendin" cols="30" rows="10" placeholder="Query.." class="form-control"></textarea>
             <br>
             <button class="btn btn-info" id="pen-btn">Save</button>
        </div>
        <div id="reject-form">
            <input type="number" id="id-rej" hidden>
             <textarea name="" id="reject" cols="30" rows="10" placeholder="rejection Query...." class="form-control"></textarea>
             <br>
             <button class="btn btn-info" id="rej-btn">Submit</button>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">close</button>
      </div>
    </div>
  </div>
</div>
    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
 
    <!-- END PAGE LEVEL JS-->
  </body>
  <script>
  $('#details').hide();
  $('#reject-form').hide();
  $('#det').hide();
        fetch();
        interval = setInterval(fetch,3000);
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
       function fetch(){
                $.ajax({
                    url:"./php/fetch-pending.php",
                    method:"POST",
                    success:function(data){
                $("#display").html(data);
                
                         }
                })
              }
              // fetch ends
              search();
              function search(){
                  
                  $('#search_text').keyup(function(){
                      var txt = $(this).val();
                      if(txt !=""){
                        clearInterval(interval);
                        $("#display").html('');
                        var txt = $(this).val();
                        
                          $.ajax({
                           url:"../php/search-not-interested-lead.php",
                            method:"POST",
                          data:{search:txt},
                          dataType:"text",
                          success:function(data)
                          {
                            $("#display").html(data);
                          }
                      })
                        
                      }
                      else{
                        fetch();
                        interval = setInterval(fetch,3000);
                          }
                          
                  });
                }
                // search function
         $(document).on('click','.view',function(){
         id = $(this).data('id');
         $('#details').show();
         $('#reject-form').hide();
        $('#det').hide();
         $.ajax({
           url:"./php/view-lead.php",
           method:"POST",
           data:{id},
           success:function(data){
            $("#details").html(data);
            
           }
         })
        }) 
        // view function ends
        $(document).on('click','.comp',function(){
          id = $(this).data('id');
         $.ajax({
           url:"./php/comp-lead.php",
           method:"POST",
           data:{id},
           success:function(data){
            swal("Successfully updated", "Lead Completed!", "success");
           }
         })
        })
        // complete fun complete
        $(document).on('click','.rej',function(){
          id = $(this).data('id');
          $('#id-rej').val(id);
          $('#details').hide();
         $('#reject-form').show();
        $('#det').hide();
        })
        $(document).on('click','#rej-btn',function(){
           id = $('#id-rej').val();
          text = $('#reject').val();
          if(text == ''){
            swal("Rejected Query required", "Enter this field!", "error");
          }
          else{
            $.ajax({
           url:"./php/rej-lead.php",
           method:"POST",
           data:{id,text},
           success:function(data){
            swal("Successfully updated", "Lead Rejected!", "success");
           }
         })
          }
        })
        // reject function ends here
        $(document).on('click','.det',function(){
          id = $(this).data('id');
          $('#id-rej').val(id);
          $('#details').hide();
         $('#reject-form').hide();
        $('#det').show();
        $.ajax({
           url:"./php/det-fetch-lead.php",
           method:"POST",
           data:{id},
           success:function(data){
            $('#pendin').val(data);
           }
         })
        })
        $(document).on('click','#pen-btn',function(){
           id = $('#id-rej').val();
          text = $('#pendin').val();
          $.ajax({
           url:"./php/up-det-lead.php",
           method:"POST",
           data:{id,text},
           success:function(data){
            swal("Successfully updated", "Lead Saved!", "success");
           }
         })
        })
  </script>
</html>