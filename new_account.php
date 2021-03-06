<?php 
include("database_connection.php");
include("ad-sidebar.php");
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
                    <img src="ad-vendors/images/img.jpg" alt="">John Doe
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" style="display: none;">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Add new account</h3>
                  </div>
                  
                </div>

                <div class="col-md-8 col-sm-9 ">
                  
                	<h3 id="inq_error" class="alert alert-danger" style="display: none;"></h3>
                  <h3 id="inq_success" class="alert alert-info" style="display: none;"></h3>
                        <form action="functions.php" method="post" enctype="multipart/form-data">
                          <div class="form-group content-list">
                              
                              <div class="radio" style="width: 100%;float: left;">
                                <label style="width: 100%;padding-left:0;">Account name</label> 
                            	<input type="text" name="account_name" id="account_name" placeholder="account name" style=""> 
                              </div>
                              <span class="alert alert-danger" id="account_name_error" style="display: none;">please write account name</span>
                           
                              <div class="radio" style="width: 100%;float: left;">
                                  
                                <label for="account_logo" class="btn btn-info" id="a_logo" style=""><img src="img/bkash.png" alt="" width="30" id="previewImage"> Select Account Logo</label>
                                  <input type="file" name="account_logo" id="account_logo" style="display: none;">                
                              </div>
                              <span class="alert alert-danger" id="account_logo_error" style="display: none;">please select a account logo</span>

                              <div class="radio" style="width: 100%;float: left;">
                                <label style="width: 100%;padding-left:0;">Account type</label> 
                                  <select name="account_type" id="account_type" style="width: 96%;float:left;height: 50px;margin-bottom: 15px;">
                                  <option value="account_type">Account Type</option>
                                  <option value="en">World Account</option>
                                    <option value="bd">Bangla Bangladesh</option>
                                  </select>                                
                              </div>
                              <span class="alert alert-danger" id="account_type_error" style="display: none;">please select account type <smal>(it's mandatory)</smal></span>

                            </div>
                                  <div class="col-md-12" >
                                    <input type="submit" class="btn btn-primary btn-lg" value="Save Account" id="new_account" name="new_account">
                                  </div> 
                          </div>
                          </form>
                        </div>
                <div class="col-md-4 col-sm-4  bg-white">
                  <div class="x_title">
                    <h2>all world account</h2>
                    <div class="clearfix"></div>
                  </div>
                  <ul class="list-group">
                <?php
                   $allac = mysqli_query($conn,"SELECT * FROM wa");
                   while ( $acrows = mysqli_fetch_assoc($allac)) {
                     echo "<li class='list-group-item'><img src='http://localhost/project_one/img/".$acrows['wa_logo']."' width='30'> ".$acrows['wa_name']."</li>";
                   }
                ?></ul>
                
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />
   
          </div>
        </div>

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
		  // custom script 

$(document).ready(function(){  
    $("#new_account").click(function(){
    	var account_name = $("#account_name").val();
    	var account_logo = $("#account_logo").val();
    	var account_type = $("#account_type").val();
    	if(account_name == '' || account_name == '0'){
    		$("#account_name_error").show();
    		return false;
    	}else if(account_logo == ''){
        $("#account_logo_error").show();
        return false;
      }else if(account_type == 'account_type'){
        $("#account_type_error").show();
        return false;
      }
   account_type_error
  });
});

$("#account_logo").change(function(event){
   var x = URL.createObjectURL(event.target.files[0]);
   $("#previewImage").attr('src',x);
})
</script>
    <script src="ad-vendors/js/custom.min.js"></script>
  </body>
</html>
