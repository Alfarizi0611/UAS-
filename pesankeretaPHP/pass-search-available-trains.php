<!--Start Server side code to give us and hold session-->
<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['pass_id'];
?>
<!--End Server side scriptiing-->
<!DOCTYPE html>
<html lang="en">
<!--HeAD-->
  <?php include('assets/inc/head.php');?>
 <!-- end HEAD--> 
  <body>
    <div class="be-wrapper be-fixed-sidebar">
    <!--navbar-->
      <?php include('assets/inc/navbar.php');?>
      <!--End navbar-->
      <!--Sidebar-->
      <?php include('assets/inc/sidebar.php');?>
      <!--End Sidebar-->

      <div class="be-content">
      <div class="page-head">
          <h2 class="page-head-title">Cari Kereta</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="pass">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Kereta</a></li>
              <li class="breadcrumb-item active">Cari Kereta</li>
            </ol>
          </nav>
        </div>

        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Cari Kereta
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-bordered table-hover table-fw-widget" id="table1">
                    <thead class="thead-dark">
                      <tr>
                      <th>Nomor Kereta</th>
                        <th>Kereta</th>
                        <th>Rute</th>
                        <th>Keberangkatan</th>
                        <th>Kedatangan</th>
                        <th>Waktu Perjalanan</th>
                        <th>Harga</th>
                        <th>Total Penumpang</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        /*
                        *Lets get details of available trains!!
                        */
                        $ret="SELECT * FROM orrs_train  "; //sql code to get all details of trains.
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        $cnt=1;
                        while($row=$res->fetch_object())
                        {
                    ?>
                      <tr class="odd gradeX even gradeC odd gradeA even gradeA ">
                        <td><?php echo $row->number;?></td>
                        <td><?php echo $row->name;?></td>
                        <td><?php echo $row->route;?></td>
                        <td class="center"><?php echo $row->current;?></td>
                        <td class="center"><?php echo $row->destination;?></td>
                        <td class="center"><?php echo $row->time;?></td>
                        <td class="center">Rp<?php echo $row->fare;?></td>
                        <td class="center"><?php echo $row->passengers;?></td>
                      </tr>
                        <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
         <!--footer-->
         <?php include('assets/inc/footer.php');?>
         <!--End Footer-->
        </div>
      </div>
     
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>
  </body>

</html>