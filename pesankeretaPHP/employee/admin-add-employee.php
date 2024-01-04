 <!--Server side code to handle passenger sign up-->
 <?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['Create_Profile']))
		{
			$emp_fname=$_POST['emp_fname'];
			#$mname=$_POST['mname'];
			$emp_lname=$_POST['emp_lname'];
			$emp_nat_idno=$_POST['emp_nat_idno'];
      $emp_phone=$_POST['emp_phone'];
      $emp_addr = $_POST['emp_addr'];
			$emp_uname=$_POST['emp_uname'];
      $emp_email=$_POST['emp_email'];
      $emp_dept=$_POST['emp_dept'];
			$emp_pwd=sha1(md5($_POST['emp_pwd']));
      //sql to insert captured values
			$query="insert into orrs_employee (emp_fname, emp_lname, emp_phone, emp_addr, emp_nat_idno, emp_uname, emp_email, emp_dept, emp_pwd) values(?,?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssssss',$emp_fname, $emp_lname, $emp_phone, $emp_addr, $emp_nat_idno, $emp_uname, $emp_email, $emp_dept, $emp_pwd);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Employee  Account Created";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
		}
?>
<!--End Server Side-->

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="assets/img/favicon.ico">
      <title>Online Railway Reservation System</title>
      <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
      <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
      <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
    </head>

      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Pendaftaran Kariawan</h2>
          <nav aria-label="breadcrumb" role="navigation">
          </nav>
        </div>
            <?php if(isset($success)) {?>
                                <!--This code for injecting an alert-->
            <script>
              setTimeout(function () 
              { 
                  swal("Success!","<?php echo $success;?>!","success");
              },
                  100);
            </script>

        <?php } ?>
        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
        <script>
          setTimeout(function () 
          { 
              swal("Failed!","<?php echo $err;?>!","Failed");
          },
              100);
        </script>

        <?php } ?>
        <div class="main-content container-fluid">
       
          <div class="row">
            <div class="col-md-12">
			<!--Log on to codeastro.com for more projects!-->
              <div class="card card-border-color card-border-color-success">
                <div class="card-header card-header-divider">Masukan Data Anda<span class="card-subtitle"></span></div>
                <div class="card-body">
                  <form method ="POST">
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> First Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="emp_fname"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Last Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="emp_lname"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">National ID Number</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="emp_nat_idno"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Contact Number</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="emp_phone"  id="inputText3" type="text">
                      </div>
                    </div>
					<!--Log on to codeastro.com for more projects!-->
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Address</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="emp_addr"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Department</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="emp_dept"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Email</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="emp_email"  id="inputText3" type="email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Username</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="emp_uname"  id="inputText3" type="text">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Password</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="emp_pwd"  id="inputText3" type="password">
                      </div>
                    </div>
					<!--Log on to codeastro.com for more projects!-->
                    <div class="col-sm-6">
                        <p class="text-right">
                          <input class="btn btn-space btn-success" value ="Register " name = "Create_Profile" type="submit">
                          <a class="btn btn-space btn-danger" href="emp-login.php">Login</a></button>
                          
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
       
        
        
        </div>
        <!--footer-->
        <?php include('assets/inc/footer.php');?>
        <!--EndFooter-->
      </div>
	  <!--Log on to codeastro.com for more projects!-->

    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="assets/lib/bs-custom-file-input/bs-custom-file-input.js" type="text/javascript"></script>
    <script src="assets/js/swal.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.formElements();
      });
    </script>
  </body>

</html>