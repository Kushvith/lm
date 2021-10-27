
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <?php
         include('../php/side-topbar.php');
    ?>
   
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h6 class="card-title">Not interested Leads</h6>
              </div>
              <div class="card-body">
                <div id="display"></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
     <?php
         include('../php/side-topbar.php');
     ?>
    </div>
  </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="details"></div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->

  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>
<script>
$(document).ready(function(){
  fetch();
        search();
        delte();
        not();
  interval = setInterval(fetch,3000);
  setInterval(() => {
        session();
      }, 1000);
      session();
      function session(){
        $.ajax({
                    url:"../php/session.php",
                    method:"POST",
                    success:function(data){
                      if(data != 'goon'){
                        window.location = "../../index.php";
                      }
                
                         }
                })
      }
     function fetch(){
                $.ajax({
                    url:"../php/fetch-notinterest.php",
                    method:"POST",
                    success:function(data){
                $("#display").html(data);
                
                         }
                })
              }
              // fetch ends
              function search(){
                  
                  $('#search_text').keyup(function(){
                      var txt = $(this).val();
                      if(txt !=""){
                        clearInterval(interval);
                        $("#display").html('');
                        var txt = $(this).val();
                        
                          $.ajax({
                           url:"../php/search-interested-lead.php",
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
         $.ajax({
           url:"../php/view-lead.php",
           method:"POST",
           data:{id},
           success:function(data){
            $("#details").html(data);
            
           }
         })
        })
        // view ends here
    function delte(){
      $(document).on('click','.delete',function(){
        id = $(this).data('id');
        $.ajax({
           url:"../php/reject.php",
           method:"POST",
           data:{id},
           success:function(data){
            swal("successfully Deleted", "Lead deleted", "success");
           }
         })
      })
    }
})
// delete function ends here
function not(){
  $(document).on('click','.notin',function(){
    id = $(this).data('id');
    $.ajax({
           url:"../php/in.php",
           method:"POST",
           data:{id},
           success:function(data){
            swal("Lead Updated", "Lead Updated", "success");
           }
         })
  })
}

       
</script>
</html>