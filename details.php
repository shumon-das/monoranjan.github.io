  <?php 
  include("database_connection.php");
  include("ad-sidebar.php");

  $trs_id = $_GET['d'];
  
  $trs_sum = mysqli_query($conn,"SELECT * FROM `transactions`");
  //$date = date("Y-m-d H:i:s");
 // $todays_trs = mysqli_query($conn,"SELECT * FROM `transactions` WHERE order_time='$date'");
 // $addate = ADDDATE($date, INTERVAL 7 DAY );
 // $lw = mysqli_query($conn,"SELECT * FROM `transactions` WHERE order_time = '$addate'");
  ?>

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav" style="float: revert;">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="img/<?php echo $admin['admin_photo'];?>" alt=""><?php echo $admin['username'];?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" style="display: none;">
                    <a class="dropdown-item"  href="admin.php"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1" style="display: none;">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="img/<?php echo $admin['admin_photo'];?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="ad-vendors/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="ad-vendors/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="ad-vendors/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            
            <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Todays Transactions</span>
              <div class="count green"><?php //echo mysqli_num_rows($todays_trs);?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> This Week TRS</span>
              <div class="count"><?php //echo mysqli_num_rows($lw); ?></div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Transactions</span>
              <div class="count"><?php echo mysqli_num_rows($trs_sum);?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
        
          <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Users </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Send From</th>
                          <th>to</th>
                          <th>Receive With</th>
                          <th>Send Amount</th>
                          <th>Receive Amount</th>
                          
                          <th>Order Time</th>
                        </tr>
                      </thead>
                      <tbody>
                 <?php $i = 1;
                  $t = mysqli_query($conn,"SELECT * FROM `transactions` WHERE exchange_id='$trs_id'");
                  $r = mysqli_fetch_assoc($t);
                  ?>
                        <tr>
                          <th scope="row"><?php echo $r['id']; ?></th>
                          <td><?php echo $r['send_from']; ?></td>
                          <td><i class="fa fa-arrows-h"></i></td>
                          <td><?php echo $r['receive_with']; ?></td>
                          <td><?php echo $r['send_amount']; ?></td>
                       

                          <td><?php echo $r['receive_amount']; ?></td>
                          <td><?php echo $r['order_time']."<br>"; ?></td>
                          
                        </tr>
                        <thead>
                          <th>TRS mail</th>
                          <th>TRS ID</th>
                          <th>Phone</th>
                          <th>Type</th>
                          <th>Present Status</th>
                          <th>Change Status</th>
                          <th>Change Status</th>
                          <th></th>
                        </thead>
                        <tr>
                          <td><?php echo $r['trs_email']; ?></td>
                          <td><?php echo $r['transaction_id']; ?></td>
                          <td><?php echo $r['phone']; ?></td>
                          <td><span class="btn btn-round"><?php echo $r['order_type']; ?></span></td>
                          <?php if($r['status'] == 'completed'){ ?>
                          <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i><?php echo $r['status']; ?></a></td>
                        <?php }elseif($r['status'] == 'waiting'){?>
                          <td><i class="fa fa-spinner"></i> <?php echo $r['status']; ?></td>
                        <?php }else{?>
                          <td><i class="fa fa-close"></i> <?php echo $r['status']; ?></td>
                        <?php }?>
                        <?php if($r['status'] == 'completed'){}else{?>
                          <td><a href="action.php?id=<?php echo $r['id'];?>&ac=complete" class="btn btn-primary btn-sm"><i class="fa fa-check-square"></i><?php echo "Complete"; ?></a></td>

                          <td><a href="action.php?id=<?php echo $r['id'];?>&ac=reject" class="btn btn-danger btn-sm"> <i class="fa fa-close"></i> <?php echo "Reject"; ?></a></td>
                        <?php } ?>
                        </tr>
                    
                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
          <br />

          <div class="row">

          </div>


          
        </div>
        <!-- /page content -->


      </div>
    </div>

    <!-- jQuery -->
    <script src="ad-vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="ad-vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="ad-vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="ad-vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="ad-vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="ad-vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="ad-vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="ad-vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="ad-vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="ad-vendors/Flot/jquery.flot.js"></script>
    <script src="ad-vendors/Flot/jquery.flot.pie.js"></script>
    <script src="ad-vendors/Flot/jquery.flot.time.js"></script>
    <script src="ad-vendors/Flot/jquery.flot.stack.js"></script>
    <script src="ad-vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="ad-vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="ad-vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="ad-vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="ad-vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="ad-vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="ad-vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="ad-vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="ad-vendors/moment/min/moment.min.js"></script>
    <script src="ad-vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script type="text/javascript">

      
    </script>
    <script src="ad-vendors/js/custom.min.js"></script>
  
  </body>
</html>
