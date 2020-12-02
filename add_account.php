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
                    <h3>Setup Exchange Rate (<small>It is definitely needed)</small></h3>
                  </div>
                  
                </div>

                <div class="col-md-8 col-sm-9 ">

                	<h3 id="inq_error" class="alert alert-danger" style="display: none;"></h3>
                  <h3 id="inq_success" class="alert alert-info" style="display: none;"></h3>
                        <form action="functions.php" method="post">
                          <div class="form-group content-list">
                            <div class="row">
                              <div class="col">
                               <i>send to </i> <label style="width: 100%;padding-left:0;"> 
                                
                                  <img src="http://localhost/project_one/img/web.png" alt="" style="width:50px;margin-bottom: 15px;float: left;height: 50px;" id="slogo">
                                  <select name="send_name" id="send_name" class="form-control" style="width: 80%;float:left;height: 50px;margin-bottom: 15px;">
	                              <?php
	                                  $wa_sql = mysqli_query($conn,"SELECT * FROM `wa` order by id DESC");
	                                  while ($warows = mysqli_fetch_assoc($wa_sql)) {
	                                    echo "<option value='".$warows['wa_name']."'>".$warows['wa_name']."</option>";
	                                        } 	                                  
	                              ?>                
                                  </select>                                 
                              </div>
                              <div class="col">
                                <i style="margin-left: 20px;">receive with </i><label style="width: 100%;padding-left:0;"> 
                                  <img src="http://localhost/project_one/img/skrill.jpg" alt="" style="width:50px;margin-bottom: 15px;float: left;height: 50px;" id="rlogo">
                                  <select name="receive_name" class="form-control" id="receive_name" style="width: 80%;float:left;height: 50px;margin-bottom: 15px;">
                                <?php 
                                  $w_sql = mysqli_query($conn,"SELECT * FROM `wa`");
                                  while ($wrows = mysqli_fetch_assoc($w_sql)) {
                                          echo "<option value='".$wrows['wa_name']."'>".$wrows['wa_name']."</option>";
                                        }      
                                ?>
                                  </select>                                  
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label style="width: 100%;padding-left:0;">Send rate</label> 
                            	<input type="number" name="send_rate" id="send_rate" value="1" style="width: 96%;float:left;height: 50px;margin-bottom: 15px;font-family: sans-serif;font-size: 18px;"> 
                              </div>
                              <div class="col">
                                <label style="width: 100%;padding-left:0;">Receive rate</label> 
                                  <input type="text" name="receive_rate" id="receive_rate"  value=""  placeholder="0.00" style="width: 96%;float:left;height: 50px;margin-bottom: 15px;font-family: sans-serif;font-size: 18px;">
                              	<span id="receive_error" class="alert alert-danger" style="display: none;">no no no receive rate should be not blank or zero</span>
                              </div>
                            </div>
                            
                            <div class="row">
                              <div class="col">
                                <label style="width: 100%;padding-left:0;">Send account type</label> 
                                  <select name="sat" id="send_account_type" style="width: 96%;float:left;height: 50px;margin-bottom: 15px;">
	                                <option value="en">World</option>
                                  	<option value="bd">Bangladesh</option>
                                  </select>                                
                              	<span id="account_error" class="alert alert-danger" style="display: none;float: left;">please select account type </span>
                              </div>
                              <div class="col">
                                <label style="width: 100%;padding-left:0;">Receive account type</label> 
                                  <select name="rat" id="receive_account_type" style="width: 96%;float:left;height: 50px;margin-bottom: 15px;"> 
	                                 <option value="en">World</option>
                                  	<option value="bd">Bangladesh</option>
                                  </select>                                
                              	<span id="account_error" class="alert alert-danger" style="display: none;float: left;">please select account type </span>
                              </div>
                            </div>
                            
                            <div class="row">
                              <div class="col">
                                  <?php $skrillreserve = mysqli_query($conn,"SELECT * FROM trs_rate WHERE receive_name='skrill'");$srows = mysqli_fetch_assoc($skrillreserve); ?>
                                <label style="width: 100%;padding-left:0;" id="res_label"> Reserve <?php echo $srows['reserve']; ?></label>
                                  <input type="text" name="reserve" id="reserve"  value="<?php echo $srows['reserve']; ?>"  placeholder="0" style="width: 96%;float:left;height: 50px;margin-bottom: 15px;font-family: sans-serif;font-size: 18px;">                                
                              </div>
                              <div class="col">
                              </div>
                            </div>
                              <div class="radio" style="width: 50%;float: left;">
                              </div>


                            </div>
                                  <div class="col-md-12" ><input type="submit" class="btn btn-primary btn-lg" value="Save" id="trs_rate_save" name="trs_rate_save"></div> 
                          </div>
                          </form>
                        </div>
                <div class="col-md-4 col-sm-4  bg-white">
                  <div class="x_title">
                    <h2>all account</h2>
                    <div class="clearfix"></div>
                  </div>
                  <ul class="list-group">
                <?php
                   $allac = mysqli_query($conn,"SELECT * FROM wa");
                   while ( $acrows = mysqli_fetch_assoc($allac)) {
                     echo "<li class='list-group-item'><img src='http://localhost/project_one/img/".$acrows['wa_logo']."' width='30'> ".$acrows['wa_name']."</li>";
                   }
                   $bllac = mysqli_query($conn,"SELECT * FROM ba");
                   while ( $bcrows = mysqli_fetch_assoc($bllac)) {
                     echo "<li class='list-group-item'><img src='http://localhost/project_one/img/".$bcrows['account_logo']."' width='30'> ".$bcrows['account_name']."</li>";
                   }
                ?></ul>
                
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

		    $("#send_name").change(function(){
		      var esm = $(this).val();
		      var erm = $("#receive_name").val();	

		      $.ajax({
		        url:"functions.php",
		        type:"post",
		        dataType:"json",
		        data:{
		          esm:esm,
		          erm:erm
		        },
		        success:function(data){
		          $("#slogo").attr('src','http://localhost/project_one/img/'+data.blogo);		          
		            $("#reserve").attr('value',data.reserve);
		        }
		      });

		    });
		  });

		$(document).ready(function(){
		    $("#receive_name").change(function(){
		      var errm = $(this).val();
		      var essm = $("#send_name").val();
		     // alert(test);
		      $.ajax({
		        url:"functions.php",
		        type:"post",
		        dataType:"json",
		        data:{
		          errm:errm,
		          essm:essm
		        },
		        success:function(data){
		         // console.log(data.checkk);
		          $("#rlogo").attr('src','http://localhost/project_one/img/'+data.blogo);
		          $("#reserve").attr('value',data.reserve);
		          $("#res_label").html("Reserve "+data.reserve);
		          if(data.inquery_error == 'blank'){$("#inq_error").hide();$("#inq_success").html('Setup New Exchange Rate').show();}		          
		          else if(data.inquery_error == 'Sorry this rows allready reserved in database'){$("#inq_error").html(data.inquery_error).show();$("#inq_success").hide();}
		        }
		      });

		    });
		  });



$("#trs_rate_save").click(function(){
	var send = $("#send_name").val();
	var receive = $("#receive_name").val();
	var send_rate = $("#send_rate").val();
	var receive_rate = $("#receive_rate").val();
	var sat = $("#send_account_type").val();
	if(receive_rate == '' || receive_rate == '0'){
		$("#receive_error").show();
		return false;
	}else if(sat == 'account_type'){
		$("#account_error").show();
		return false;
	}
});
$("#receive_rate").keyup(function(){
	$("#receive_error").hide();
});
$("#send_account_type").change(function(){
	$("#account_error").hide();
})
</script>
    <script src="ad-vendors/js/custom.min.js"></script>
  </body>
</html>
