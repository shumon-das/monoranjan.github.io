<?php include("ad-sidebar.php");?>
<?php include("database_connection.php");?>

           
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
   

          <div class="row" style="height: 500px;overflow: scroll;">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                

                
                <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Select the user to whom you want to send mail</small></h2>                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <form action="" method="post">
                                <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                                  <thead>
                                    <tr>                        
                                      <th><input type="checkbox" id="check-all" ></th>     
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Username</th>
                                      <th>E-mail Address</th>
                                      <th>Status</th>
                                      <th>Join Date</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <?php 
                                      $q = mysqli_query($conn,"SELECT * FROM `user_information`");
                                      while($qr = mysqli_fetch_assoc($q)){?>
                                              <tr>    
                                                  <td><input type="checkbox" id="check-all" name="user_email[]" value="<?php echo $qr['email_address'];?>"></td>
                                                  <td><?php echo $qr['first_name'];?></td>
                                                  <td><?php echo $qr['last_name'];?></td>
                                                  <td><?php echo $qr['username'];?></td>
                                                  <td><?php echo $qr['email_address'];?></td>
                                                  <td><?php echo $qr['status'];?></td>
                                                  <td><?php echo $qr['date_time'];?></td>
                                                  <td></td>
                                              </tr>           
                                     <?php }
                                    ?>                       
                                  </tbody>
                                </table>
                               
                            </div>
                          </div>
                      
                    </div>
                  </div>
                </div>
              </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />



          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-md-9">
                <div class="panel widget light-widget" style="min-width: 100%;max-width: 100%;">
                  <div class="panel-heading no-title"> </div>
                  <!-- vd_panel-heading -->
                  
                  <div class="panel-body">
                    <h2 class="mgtp--10"><i class="icon-feather mgr-10 vd_green"></i> Compose New Email </h2>
                    <br/>
                    
                      <div class="form-group clearfix">
                        <label class="col-sm-2 control-label">To</label>
                        <div class="col-sm-10 controls">
                          <input id="email-input" type="text" name="user_email[]" class="input-border-btm" placeholder="someone@example.com"  >
                        </div>
                      </div>
                      <div class="form-group  clearfix">
                        <label class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10 controls">
                          <input type="text" name="subject" id="subject-input" class="input-border-btm" placeholder="Subject Title">
                        </div>
                      </div>
                      <br/>
                      <div class="form-group  clearfix">
                        <label class="col-sm-12 control-label sr-only">Message</label>
                        <div class="col-sm-12 controls">
                          <textarea id="message" class="width-100 form-control" name="message"  rows="15" placeholder="Write your message here"></textarea>
                        </div>
                      </div>
                      <div class="form-group form-actions">
                        <div class="col-sm-12">
                          <button type="submit" name="submit" class="btn vd_btn vd_bg-green vd_white"><i class="fa fa-envelope append-icon"></i> SEND</button>
                          <button type="submit"  class="btn vd_btn vd_bg-yellow vd_white"><i class="fa fa-archive append-icon"></i> SAVE TO DRAFT</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- panel-body  --> 
                  
                </div>
                <!-- panel --> 
              </div>
              <!-- col-md-8 -->
              
              <div class="col-md-3">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-yellow">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="glyphicon glyphicon-book"></i> </span> Address Book </h3>
                  </div>
                  <!-- vd_panel-heading -->
                  
                  <div class="panel-body">
                    <div class="form-group clearfix mgtp-10">
                      <div class="vd_input-wrapper light-theme"> <span class="menu-icon"> <i class="fa fa-filter"></i> </span>
                        <input type="text" id="filter-text" placeholder="Name Filter">
                      </div>
                    </div>
                    <br/>
                    <form class="form-horizontal" role="form" action="#">


                           
                          <a href="#" id="check-all">Check All</a> <span class="mgl-10 mgr-10">/</span> <a href="#" id="uncheck-all">Uncheck All</a>  
     
                          <hr class="mgtp-5"/>                   
                          <div class="form-group clearfix" style="height: 250px; overflow-y:scroll;">
                              <div class="col-md-12">
                                <div class="content-list content-menu" id="email-list">
                                  <div class="list-wrapper wrap-25 isotope">
                                    <div class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-1" value="brad@pitt.com">
                                        <label class="filter-name" for="checkbox-1"> Brad Pitt - <em class="font-normal">brad@pitt.com</em> </label>
                                      </div>
                                    </div>
                                    <div  class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-2" value="angelina@jolie.com">
                                        <label class="filter-name" for="checkbox-2"> Angelina Jolie - <em class="font-normal">angelina@jolie.com</em> </label>
                                      </div>
                                    </div>
                                    <div class="email-item">
                                      <div class="vd_checkbox checkbox-success"> <input type="checkbox" id="checkbox-3" value="adam@sandler.com">
                                  
                                        <label class="filter-name" for="checkbox-3"> Adam Sandler - <em class="font-normal">adam@sandler.com</em> </label>
                                      </div>
                                    </div>
                                    <div  class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-4" value="christina@aguilera.com">
                                        <label class="filter-name" for="checkbox-4"> Chirstina Aguilera - <em class="font-normal">christina@aguilera.com</em> </label>
                                      </div>
                                    </div>
                                    <div class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-5" value="tom@cruise.com">
                                        <label class="filter-name" for="checkbox-5"> Tom Cruise - <em class="font-normal">tom@cruise.com</em> </label>
                                      </div>
                                    </div>
                                    <div  class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-6" value="dominicus@soddley.com">
                                        <label class="filter-name" for="checkbox-6"> Dominicus Soddley - <em class="font-normal">dominicus@soddley.com</em> </label>
                                      </div>
                                    </div>
                                    <div class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-7" value="web@designer.com">
                                        <label class="filter-name" for="checkbox-7"> Web Designer - <em class="font-normal">web@designer.com</em> </label>
                                      </div>
                                    </div>
                                    <div  class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-8" value="web@templatecompany.com">
                                        <label class="filter-name" for="checkbox-8"> Web Template Company - <em class="font-normal">web@templatecompany.com</em> </label>
                                      </div>
                                    </div>
                                    <div class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-9" value="round@live.com">
                                        <label class="filter-name" for="checkbox-9"> Round Live - <em class="font-normal">round@live.com</em> </label>
                                      </div>
                                    </div>
                                    <div  class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-10" value="chrisitan@bautista.com">
                                        <label class="filter-name" for="checkbox-10"> Chrisitan Bautista - <em class="font-normal">chrisitan@bautista.com</em> </label>
                                      </div>
                                    </div>
                                    <div  class="email-item">
                                      <div class="vd_checkbox checkbox-success">
                                        <input type="checkbox" id="checkbox-11" value="admin@template.com">
                                        <label class="filter-name" for="checkbox-11"> Admin Template - <em class="font-normal">admin@template.com</em> </label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- list-wrapper --> 
                                </div>
                                <!-- content-list --> 
                              </div>
                              <!-- col-md-12 --> 
                            </div>
                            <!-- form-group -->
                            
                        
                      <hr/>
                      <div class="form-group form-actions">
                        <div class="col-sm-12">
                          <button type="button" id="insert-email-btn" class="btn vd_btn vd_bg-blue vd_white"><i class="fa fa-angle-double-left append-icon"></i> INSERT ADDRESS</button>
                          <button type="button" class="btn vd_btn vd_bg-grey vd_white"><i class="fa fa-plus append-icon"></i> ADD NEW</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- panel-body  --> 
                  
                </div>
                <!-- panel --> 
              </div>
              <!-- col-md-8 --> 
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
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
<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="js/caroufredsel.js"></script> 
<script type="text/javascript" src="js/plugins.js"></script>

<script type="text/javascript" src="plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="custom/custom.js"></script>
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="plugins/bootstrap-wysiwyg/js/wysihtml5-0.3.0.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap-wysiwyg/js/bootstrap-wysihtml5-0.0.2.js"></script>
<script type="text/javascript" language="javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>


<script type="text/javascript">

$(function () {
  "use strict";
  
  $('#message').wysihtml5();
  


    // init Isotope
    var $container = $('.isotope').isotope({
    itemSelector: '.isotope .email-item',
    layoutMode: 'vertical'
    });

    
  // User types in search box - call our search function and supply lower-case keyword as argument
  $('#filter-text').bind('keyup', function() {

    var filterValue = this.value.toLowerCase();
    isotopeFilter();

  });
  
  var filterFns = function() {     
    var kwd = $('#filter-text').val().toLowerCase();
    var re = new RegExp(kwd, "gi");
      var name = $(this).find('.filter-name').text();
      return name.match( re );      
  }
  
  function isotopeFilter(){

      $container.isotope({ filter: filterFns });  
  }
  
  
  $('#check-all').click(function() {
        $('.email-item input').prop('checked', true);
  });
  $('#uncheck-all').click(function() {
        $('.email-item input').prop('checked', false);
  }); 


    
  $('#insert-email-btn').click(function(e) {
          e.preventDefault();
      var emails='';
      emails=$('.email-item input:checked').map(function(n){  //map all the checked value to tempValue with `,` seperated
              return  this.value;
        }).get().join(' , ');
      var comma = $('#email-input').val() ? ' , ' : '';   
      if (emails)  {
        $('#email-input').val($('#email-input').val() + comma + emails);
      }
    });
    
});
</script>
<!-- Specific Page Scripts END -->




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script> 
    <!-- Custom Theme Scripts -->
    <script src="ad-vendors/js/custom.min.js"></script>
  
                      <?php 
                        if(isset($_POST['submit'])){
                            if(isset($_POST['user_email'])!=''){
                            foreach ($_POST['user_email'] as $email) {
                             echo $email.' '."<br>";
                             
                            // mail is start to here
                             /*
                                $messages = $_POST['message'];
                                $to = $email;
                                $subject = $_POST['subject'];
                                $message =  "<div class='panel panel-primary'>
                                                <div class='panel-heading'>$subject</div>
                                                <div class='panel-body'>$messages</div>
                                              </div>";
                                $headers = "need to setup our website mail";              
                                if(mail($to, $subject, $message,$headers)){
                                  echo "mail send successfully";

                                }else{
                                  echo "sorry message not sent";
                                }
                              */  
                            // mail end is here
                            }
                            echo count($_POST['user_email']);
                          }else{
                            echo "<span class='alert alert-danger'>Please select at least one user email</span>";
                          }
                        }
                      ?>
  </body>
</html>