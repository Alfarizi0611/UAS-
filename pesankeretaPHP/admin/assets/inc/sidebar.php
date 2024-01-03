<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class=""><a href="emp-dashboard.php"><i class="icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
                  </li>
                    <?php
                      $aid=$_SESSION['admin_id'];//assaign session a varible [PASSENGER ID]
                      $ret="select * from orrs_admin where admin_id=?";
                      $stmt= $mysqli->prepare($ret) ;
                      $stmt->bind_param('i',$aid);
                      $stmt->execute() ;//ok
                      $res=$stmt->get_result();
                      //$cnt=1;
                      while($row=$res->fetch_object())
                      {
                    ?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span><?php echo $row->admin_uname;?>'s Profile</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-profile.php">View</a>
                      </li>
                      <li><a href="emp-profile-update.php">Update</a>
                      </li>
                      
                      <li><a href="emp-profile-avatar.php">Profile Avatar</a>
                      </li>
                      <li><a href="emp-profile-password.php">Change Password</a>
                      </li>
                      
                    </ul>
                  </li>
                    <?php }?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-train"></i><span>Kereta</span></a>
                  
                    <ul class="sub-menu">
                       <li><a href="emp-add-train.php">Tambah Kereta</a>
                       <li><a href="emp-manage-train.php">Kelola Kereta</a>
                    </li>
                      
                    </ul>
                
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi  mdi-account-switch"></i><span>Penumpang</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-add-passenger.php">Tambah Penumpang</a>
                      </li>
                      <li><a href="emp-manage-passengers.php">Kelola Penumpang</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi  mdi-account-check"></i><span>Karyawan</span></a>
                    <ul class="sub-menu">
                      <li><a href="admin-add-employee.php">Tambah Karyawan</a>
                      </li>
                      <li><a href="admin-manage-employee.php">Kelola Karyawan</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-ticket-confirmation"></i><span>Tickets</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-approved-tickets.php"><span class="badge badge-success float-right">Diterima</span>View</a>
                      <li><a href="emp-pending-tickets.php"><span class="badge badge-info float-right">Terunda</span>View</a>
                      <li><a href="emp-tickets.php">Kelola</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi  mdi-key-variant"></i><span>Password Resets</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-approved-pwdresets.php"><span class="badge badge-success float-right">Approved</span>View</a>
                      <li><a href="emp-pending-pwdresets.php"><span class="badge badge-info float-right">Pending</span>View</a>
                      </li>
                    </ul>
                  </li> 

                  <li class="parent"><a href="#"><i class="icon mdi  mdi-square-inc-cash"></i><span>Pendapatan</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-view-accounting.php"><span class="badge badge-success float-right">Tiket Pembayaran</span>View</a>
                      </li>
                    </ul>
                  </li>   

                  <li><a href="emp-logout.php "><i class="icon mdi mdi-exit-run"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>