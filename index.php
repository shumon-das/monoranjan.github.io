<?php 

include("header.php");
?>

    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          
          <!-- vd_head-section -->
          
          
          <!-- vd_title-section -->
          
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-md-7 mgbt-md-20 mgbt-lg-0">
                <div class="panel vd_interactive-widget light-widget widget">
  <div class="panel-body-list">
    <div class="vd_panel-menu">
  <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
  <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
    <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
    <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
      <div class="child-menu">
        <div class="content-list content-menu">
          <ul class="list-wrapper pd-lr-10">
            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
</div>
<!-- vd_panel-menu --> 
 
    
    <div class="pd-20">
      <h5 class="mgbt-xs-20 mgtp-20"><span class="menu-icon append-icon"><i class="icon-graph"></i></span> <strong>Work with us trustfully</strong>  </h5>
      <img src="img/page-icon.png" style="width: 100%;" alt="">
    </div>
    <div class="row mgbt-xs-0">
      <div class="col-sm-4 mgbt-xs-15 mgbt-sm-0">
        <div class="item-left pd-15">
          <div id="revenue-donut-chart" style="height:100px;"></div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="item-right pd-15">
          <div id="revenue-bar-chart" style="height: 100px;" > </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Panel Widget -->               </div>
              <!--col-md-7 -->
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-12">
                    <div class="vd_status-widget vd_bg-green widget">
	<div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                                
    <a class="panel-body" href="#">
            <div class="content-list menu-action-right" >
                        <div data-rel="scroll">
                          <ul class="list-wrapper pd-lr-15">
                            <?php 
                               $wareserve_query = mysqli_query($conn,"SELECT * FROM wa");
                               while($war_rows = mysqli_fetch_assoc($wareserve_query)){
                                $r = $war_rows['wa_name'];
                                $reserve_query = mysqli_query($conn,"SELECT * FROM trs_rate WHERE receive_name='$r'");
                                $reserve = mysqli_fetch_assoc($reserve_query);
                                ?>
                                <li id="lis">
                                  <img class="ratimg" src="<?php echo $war_rows['wa_logo'];?>" alt="" width="40"> 

                                    <span class="product-title"><strong><?php echo $reserve['receive_name'];?></strong></span>
                                    <div class="menu-action"> &#36; <?php echo $reserve['reserve'];?> </div>
                                  </li>
                                     
                             <?php  } ?>                                            
                          </ul>
                        </div>
                      </div>
                                                                           
    </a>        
</div>                    </div>
                  <!--col-md-12 --> 
                </div>
                <!-- .row -->
                <div class="row">
                  <div class="col-xs-6">
                    <div class="vd_status-widget vd_bg-red  widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                                 
    <a class="panel-body" href="#" data-rel="scroll">                                
        <div class="clearfix" >
            <span class="menu-icon">
                <i class="icon-bars"></i>
            </span>
            <span class="menu-value">
               <?php echo mysqli_num_rows($trss_query);?>
            </span>  
        </div>   
         
        <div class="menu-text clearfix">
            New Transactions
        </div>  
     </a>                                                                
</div>                    </div>
                  <!--col-xs-6 -->
                  <div class="col-xs-6">
                    <div class="vd_status-widget vd_bg-blue widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                                  
    <a class="panel-body"  href="#">                                  
        <div class="clearfix">
            <h6 >
            <span >
                <i class="fa fa-exchange"></i>
            </span>
                Todays Exchange Rate
            </h6>  
        </div>   
        <div class="menu-text clearfix">
          <table>
           
            <?php 
                  $wareserve_query = mysqli_query($conn,"SELECT * FROM wa");
                  while($tr_rows = mysqli_fetch_assoc($wareserve_query)){
                      echo "<tr>";
                      echo "<td><img class='ratimg' src='".$tr_rows['wa_logo']."'></td>";
                      echo "<td>".$tr_rows['wa_name']."</td>";
                      echo "<td>".$tr_rows['e_rate']."</td>";
                      echo "</tr>";
                  }

            ?>
             
            </table>
        </div>
     </a>                                                                  
</div>                   </div>
                  <!--col-xs-6 --> 
                </div>
                <!-- .row -->
                <div class="row">
                  <div class="col-xs-6">
                    <div class="vd_status-widget vd_bg-yellow widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                                  
    <a class="panel-body"  href="#">                                
        <div class="clearfix">
            <span class="menu-icon">
                <i class="fa fa-exchange"></i>
            </span>
            <span class="menu-value">
                250
            </span>  
        </div>   
        <div class="menu-text clearfix">
            Waiting Transactions
        </div>  
     </a>                                                                
</div>                    </div>
                  <!--col-xs-6 -->
            <div class="col-xs-6">
                    <div class="vd_status-widget vd_bg-grey widget">
              <div class="vd_panel-menu">
                <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
              </div>
            <!-- vd_panel-menu --> 
                                               
                <a class="panel-body"  href="#">                                  
                    <div class="clearfix">
                        <span class="menu-icon">
                            <i class="fa fa-exchange"></i>
                        </span>
                        <span class="menu-value">
                            3
                        </span>  
                    </div>   
                    <div class="menu-text clearfix">
                        Completed Transaction
                    </div>
                 </a>                                                                  
            </div>                   
          </div>

                  <!--col-md-xs-6 --> 
                </div>
                <!-- .row --> 
                
              </div>
              <!-- .col-md-5 --> 
            </div>
            <div class="row">
              <div class="col-md-5">
                

<!-- Panel Widget -->               </div>
              <!--col-md-5-->
              <div class="col-md-4">
                

<!-- Panel Widget -->               </div>
              <!--col-md-4-->
              <div class="col-md-3">
                

              </div>
              <!-- col-md-3 --> 
            </div>
            <div class="row">
              <div class="col-md-6  mgbt-xs-20 mgbt-md-0">
                
<div class="panel widget light-widget panel-bd-top">
  <div class="panel-body">
    <div id="calendar" class="mgtp-10">  </div>
    <div class="panel-heading"><h3>Todays Transactions</h3></div>
    <table class="table table-striped table-hover">
      <th>Send</th>
      <th>Receive</th>
      <th>Send Amount</th>
      <th>Receive Amount</th>
      <th>Date</th>
    <?php 
      while($trs_rows = mysqli_fetch_assoc($trss_query)){
          echo "<tr>";
          echo "<td>".$trs_rows['send_from']."</td>";
          echo "<td>".$trs_rows['receive_with']."</td>";
          echo "<td>".$trs_rows['send_amount']."</td>";
          echo "<td>".$trs_rows['receive_amount']."</td>";
          echo "<td>".$trs_rows['order_time']."</td>";
          echo "</tr>";
      }
    ?></table>
  </div>
</div>
<!-- Panel Widget -->              </div>
              <!-- col-md-6 -->
              
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="tabs widget">
        <ul class="nav nav-tabs widget">
          <li class="active">
          <a data-toggle="tab" href="#home-tab">
              <span class="menu-icon"><i class="fa fa-comments"></i></span>
              Recent Reviews 
              <span class="menu-active"><i class="fa fa-caret-up"></i></span>
          </a></li>
          <li>
          <a data-toggle="tab" href="#posts-tab">
              <span class="menu-icon"><i class="fa fa-rocket"></i></span>
              Activities
              <span class="menu-active"><i class="fa fa-caret-up"></i></span>
          </a></li>
          <li>
          <a data-toggle="tab" href="#list-tab">
              <span class="menu-icon"><i class="fa fa-user"></i></span>
              New Users
              <span class="menu-active"><i class="fa fa-caret-up"></i></span>
          </a></li>
        </ul>
        <div class="tab-content">
          <div id="home-tab" class="tab-pane active">                                         
           <div class="content-list content-image menu-action-right">
           <div  data-rel="scroll" data-scrollheight="550">
               <ul class="list-wrapper pd-lr-15">
                    <li>  
                        <div class="menu-icon"><a href="#"><img alt="example image" src="img/avatar/avatar.jpg"></a></div> 
                        <div class="menu-text"> 
                            This product is so good that i manage to buy it 1 for me and 3 for my families. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco laboris nisi ut aliquip ex tris. 
                        </div>                                               
                        <div class="menu-text">
                            <div class="menu-info">
                                in <a href="#">Samsung Galaxy S4</a> - 

                                <span class="menu-date">12 Minutes Ago </span> - 
                                <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span>
                                                                                               
                            </div>
                        </div>
                        <div class="menu-action">  
                            <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                <i class="fa fa-check"></i>
                            </div>                                                            
                            <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                <i class="fa fa-times"></i>
                            </div>                                                                                                                                       
                        </div>                                                	  
                    </li>
                    <li>                                            
                        <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></div>  
                        <div class="menu-text"> 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. 
                        </div>                                               
                        <div class="menu-text">
                            <div class="menu-info">
                                in <a href="#">LG G2</a> - 

                                <span class="menu-date">12 Minutes Ago </span> - 
                                <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span>
                                                                                               
                            </div>
                        </div>
                        <div class="menu-action">  
                            <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                <i class="fa fa-check"></i>
                            </div>                                                            
                            <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                <i class="fa fa-times"></i>
                            </div>                                                                                                                                       
                        </div>  
                    </li>    
                    <li>  
                            <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-3.jpg"></div> 
                            <div class="menu-text"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco.
                            </div>                                               
                            <div class="menu-text">
                                <div class="menu-info">
                                    in <a href="#">Sony Experia Z10</a> - 

                                    <span class="menu-date">12 Minutes Ago </span> - 
                                    <span class="menu-rating vd_yellow"><i class="icon-star"></i></span>
                                                                                                   
                                </div>
                            </div>
                            <div class="menu-action">  
                                <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                    <i class="fa fa-check"></i>
                                </div>                                                            
                                <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>  
                    </li>                                     
                    <li>  
                        <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-4.jpg"></div> 
                        <div class="menu-text"> 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Ipsum dolor sit amet, consectetur adipisicing elit !!!
                        </div>                                               
                        <div class="menu-text">
                            <div class="menu-info">
                                in <a href="#">Nokia Lumia</a> - 

                                <span class="menu-date">12 Minutes Ago </span> - 
                                <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span>
                                                                                               
                            </div>
                        </div>
                        <div class="menu-action">  
                            <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                <i class="fa fa-check"></i>
                            </div>                                                            
                            <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                <i class="fa fa-times"></i>
                            </div>                                                                                                                                       
                        </div>
                    </li> 
                    <li> 
                        <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-5.jpg"></div>  
                        <div class="menu-text"> 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>                                               
                        <div class="menu-text">
                            <div class="menu-info">
                                in <a href="#">Samsung Galaxy Note 8</a> - 

                                <span class="menu-date">12 Minutes Ago </span> - 
                                <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span>
                                                                                               
                            </div>
                        </div>
                        <div class="menu-action">  
                            <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                <i class="fa fa-check"></i>
                            </div>                                                            
                            <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                <i class="fa fa-times"></i>
                            </div>                                                                                                                                       
                        </div>
                    </li>
                    <li>  
                        <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-6.jpg"></div> 
                        <div class="menu-text"> 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        </div>                                               
                        <div class="menu-text">
                            <div class="menu-info">
                                in <a href="#">LG L3</a> - 

                                <span class="menu-date">12 Minutes Ago </span> - 
                                <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span>
                                                                                               
                            </div>
                        </div>
                        <div class="menu-action">  
                            <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                <i class="fa fa-check"></i>
                            </div>                                                            
                            <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                <i class="fa fa-times"></i>
                            </div>                                                                                                                                       
                        </div>
                    </li>                                     
                    <li> 
                        <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-7.jpg"></div> 
                        <div class="menu-text"> 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit xorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>                                               
                        <div class="menu-text">
                            <div class="menu-info">
                                in <a href="#">Motorola Moto-X</a> - 

                                <span class="menu-date">12 Minutes Ago </span> - 
                                <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span>
                                                                                               
                            </div>
                        </div>
                        <div class="menu-action">  
                            <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                <i class="fa fa-check"></i>
                            </div>                                                            
                            <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                <i class="fa fa-times"></i>
                            </div>                                                                                                                                       
                        </div> 
                    </li> 
                    <li>  
                        <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-8.jpg"></div> 
                        <div class="menu-text"> 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit xorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>                                               
                        <div class="menu-text">
                            <div class="menu-info">
                                in <a href="#">Monitor Asus</a> - 

                                <span class="menu-date">12 Minutes Ago </span> - 
                                <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span>
                                                                                               
                            </div>
                        </div>
                        <div class="menu-action">  
                            <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                <i class="fa fa-check"></i>
                            </div>                                                            
                            <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                <i class="fa fa-times"></i>
                            </div>                                                                                                                                       
                        </div>
                    </li>     
               </ul>
               </div>
               <div class="closing text-center">
                    <a href="#">See All Recent Reviews <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                                                            
           </div>                              

          </div>
          <div id="posts-tab" class="tab-pane sidebar-widget">
               <div class="content-list">	
                   <div data-rel="scroll">
                   <ul  class="list-wrapper pd-lr-15">
                        <li> <a href="#"> 
                                <div class="menu-icon vd_yellow"><i class="fa fa-suitcase"></i></div> 
                                <div class="menu-text"> Someone has give you a surprise 
                                    <div class="menu-info"><span class="menu-date"> ~ 12 Minutes Ago</span></div>
                                </div> 
                        </a> </li>
                        <li> <a href="#"> 
                                <div class="menu-icon vd_blue"><i class=" fa fa-user"></i></div> 
                                <div class="menu-text">  Change your user profile details
                                    <div class="menu-info"><span class="menu-date"> ~ 1 Hour 20 Minutes Ago</span></div>
                                </div> 
                        </a> </li>    
                        <li> <a href="#"> 
                                <div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                                <div class="menu-text">  Your setting is updated
                                    <div class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></div>                            
                                </div> 
                        </a> </li>                                     
                        <li> <a href="#"> 
                                <div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                                <div class="menu-text">  Added new article
                                    <div class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></div>                              
                                </div> 
                        </a> </li> 
                        <li> <a href="#"> 
                                <div class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                                <div class="menu-text">  Change Profile Pic
                                    <div class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></div>                              
                                </div> 
                        </a> </li>
                        <li> <a href="#"> 
                                <div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                                <div class="menu-text">  Your setting is updated
                                    <div class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></div>                            
                                </div> 
                        </a> </li>                                     
                        <li> <a href="#"> 
                                <div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                                <div class="menu-text">  Added new article
                                    <div class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></div>                              
                                </div> 
                        </a> </li> 
                        <li> <a href="#"> 
                                <div class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                                <div class="menu-text">  Change Profile Pic
                                    <div class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></div>                              
                                </div> 
                        </a> </li>                                                                                
                        
                   </ul>
                   </div>
                   <div class="closing text-center" style="">
                        <a href="#">See All Activities <i class="fa fa-angle-double-right"></i></a>
                   </div>                                                                       
               </div>                              
          </div>
         
        </div>
</div> <!-- tabs-widget -->                  </div>
                  <!-- col-md-12 --> 
                </div>
                <!-- row --> 
              </div>
            </div>
            <!-- .row -->
            <div class="row">
              <div class="col-md-4">
                

<!-- Panel Widget -->               </div>
              <!-- col-md-4 -->
              <div class="col-md-4">
                

<!-- Panel Widget -->               </div>
              <!-- col-md-4 -->
              <div class="col-md-4" >
                
<div class="panel widget vd_news-widget">
  <div class="panel-body-list">
    <div class="vd_panel-menu">
  <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
  <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
    <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
    <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
      <div class="child-menu">
        <div class="content-list content-menu">
          <ul class="list-wrapper pd-lr-10">
            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
</div>
<!-- vd_panel-menu --> 
 
    <div class="vd_carousel-control"> <a href="#"> <i class="fa fa-chevron-left"></i></a> <a href="#"><i class="fa fa-chevron-right"></i></a> </div>
    
    <!-- vd_carousel --> 
    
  </div>
  <!-- panel-body-list --> 
  
</div>
<!-- Panel Widget -->               </div>
              <!-- col-md-4 --> 
              
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

<!-- Footer Start -->
  <footer class="footer-1"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	Copyright &copy;2014 Venmond Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
 <?php include("chatbox.php"); ?>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

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
<!-- Flot Chart  -->
<script type="text/javascript" src="plugins/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.categories.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.animator.min.js"></script>

<!-- Vector Map -->
<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Calendar -->
<script type="text/javascript" src='plugins/moment/moment.min.js'></script>
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src='plugins/fullcalendar/fullcalendar.min.js'></script>

<!-- Intro JS (Tour) -->
<script type="text/javascript" src='plugins/introjs/js/intro.min.js'></script>

<!-- Sky Icons -->
<script type="text/javascript" src='plugins/skycons/skycons.js'></script>


<script type="text/javascript">
$(window).load(function () 
	{




		$.fn.UseTooltip = function () {
			var previousPoint = null;
			 
			$(this).bind("plothover", function (event, pos, item) {        
					if (item) {
						if (previousPoint != item.dataIndex) {
		
							previousPoint = item.dataIndex;
		
							$("#tooltip").remove();
							var x = item.datapoint[0].toFixed(2),
							y = item.datapoint[1].toFixed(2);
		
							showTooltip(item.pageX, item.pageY,
								"<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + Math.round(x)  + " NOV 2013 </strong></p>" +
								"<div style='padding: 0 10px 10px;'>" +
								"<div>" + item.series.label +": <strong>"+ Math.round(y)  +"</strong></div>" +
								"<div> Profit: <strong>$"+ Math.round(y)*7  +"</strong></div>" +
								"</div>"
							);
						}
					} else {
						$("#tooltip").remove();
						previousPoint = null;            
					}
			});
		};
		 
		function showTooltip(x, y, contents) {
			$('<div id="tooltip">' + contents + '</div>').css({
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 20,    
				size: '10',  
//				'border-top' : '3px solid #1FAE66',
				'background-color': '#111111',
				color: "#FFFFFF",
				opacity: 0.85
			}).appendTo("body").fadeIn(200);
		}


/* REVENUE LINE CHART */

	var d2 = [ [1, 250],
            [2, 150],
            [3, 50],
            [4, 200],
            [5,50],
            [6, 150],
            [7, 150],
            [8, 200],
            [9, 100],
            [10, 250],
            [11,250],
            [12, 200],
            [13, 300]			

];
	var d1 = [
			[1, 650],
            [2, 550],
            [3, 450],
            [4, 550],
            [5, 350],
            [6, 500],
            [7, 600],
            [8, 450],
            [9, 300],
            [10, 600],
            [11, 400],
            [12, 500],
            [13, 700]					
			
];
	var plot = $.plotAnimator($("#revenue-line-chart"), [
			{  	label: "Revenue",
				data: d2, 	
				lines: {				
					fill: 0.4,
					lineWidth: 0,				
				},
				color:['#f2be3e']
			},{ 
				data: d1, 
				animator: {steps: 60, duration: 1000, start:0}, 		
				lines: {lineWidth:2},	
				shadowSize:0,
				color: '#F85D2C'
			},{
				label: "Revenue",
				data: d1, 
				points: { show: true, fill: true, radius:6,fillColor:"#F85D2C",lineWidth:3 },	
				color: '#fff',				
				shadowSize:0
			},
			{	label: "Cost",
				data: d2, 
				points: { show: true, fill: true, radius:6,fillColor:"#f2be3e",lineWidth:3 },	
				color: '#fff',				
				shadowSize:0
			}
		],{	xaxis: {
		tickLength: 0,
		tickDecimals: 0,
		min:2,

				font :{
					lineHeight: 13,
					style: "normal",
					weight: "bold",
					family: "sans-serif",
					variant: "small-caps",
					color: "#6F7B8A"
				}
			},
			yaxis: {
				ticks: 3,
                tickDecimals: 0,
				tickColor: "#f0f0f0",
				font :{
					lineHeight: 13,
					style: "normal",
					weight: "bold",
					family: "sans-serif",
					variant: "small-caps",
					color: "#6F7B8A"
				}
			},
			grid: {
				backgroundColor: { colors: [ "#fff", "#fff" ] },
				borderWidth:1,borderColor:"#f0f0f0",
				margin:0,
				minBorderMargin:0,							
				labelMargin:20,
				hoverable: true,
				clickable: true,
				mouseActiveRadius:6
			},
			legend: { show: false}
		});

 		$("#revenue-line-chart").UseTooltip();		

		$(window).on("resize", function(){
			plot.resize();
			plot.setupGrid();
			plot.draw();
		});
				

/* REVENUE DONUT CHART */
	
		var data2 = [],
			series = 3;
		var data2 = [
			{ label: "Men",  data: 35},
			{ label: "Women",  data: 65}
		];
		var revenue_donut_chart = $("#revenue-donut-chart");
		
		$("#revenue-donut-chart").bind("plotclick", function (event, pos, item) {
			if (item) {
				$("#clickdata").text(" - click point " + item.dataIndex + " in " + item.series.label);
				plot.highlight(item.series, item.datapoint);
			}
		});
		$.plot(revenue_donut_chart, data2, {
			series: {
				pie: { 
					innerRadius: 0.4,
					show: true
				}
			},
			grid: {
				hoverable: true,
				clickable: true,
			},
			colors: ["#1FAE66", "#F85D2C "]				
		});
		
		
/* REVENUE BAR CHART */	
	
		var bar_chart_data = [ ["Jan", 10], ["Feb", 8], ["Mar", 4], ["Apr", 13], ["May", 17], ["Jun", 9], ["Jul", 10], ["Aug", 8], ["Sep", 4], ["Oct", 13], ["Nov", 17], ["Dec", 9] ];
		
        var bar_chart = $.plot(
        $("#revenue-bar-chart"), [{
            data: bar_chart_data,
 //           color: "rgba(31,174,102, 0.8)",
 			color: "#F85D2C" ,
            shadowSize: 0,
            bars: {
                show: true,
                lineWidth: 0,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 1
                    }, {
                        opacity: 1
                    }]
                }
            }
        }], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.9,
					align: "center"
                }
            },
            grid: {
                show: true,
                hoverable: true,
                borderWidth: 0
            },
            yaxis: {
                min: 0,
                max: 20,
				show: false
            },
			xaxis: {
				mode: "categories",
				tickLength: 0,
				color: "#FFFFFF",				
			}			
        });
		
	   var previousPoint2 = null;
       $("#revenue-bar-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint2 != item.dataIndex) {
                    previousPoint2 = item.dataIndex;
                    $("#tooltip").remove();
                    var x = item.datapoint[0] + 1,
                        y = item.datapoint[1].toFixed(2);
                    showTooltip(item.pageX, item.pageY, 
								"<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + x + " - 2013 </strong></p>" +
								"<div style='padding: 0 10px 10px;'>" +
								"<div> Sales: <strong>"+ Math.round(y)*17  +"</strong></div>" +
								"<div> Profit: <strong>$"+ Math.round(y)*280  +"</strong></div>" +
								"</div>"										
					);
                }
            }
        });

        $('#revenue-bar-chart').bind("mouseleave", function () {
            $("#tooltip").remove();
        });



/* PIE CHART */

		var pie_placeholder = $("#pie-chart");

		var pie_data = [];
		
		pie_data[0] = {
			label: "IE",
			data: 10
		}
		pie_data[1] = {
			label: "Safari",
			data: 8
		}	
		pie_data[2] = {
			label: "Opera",
			data: 8
		}				
		pie_data[3] = {
			label: "Chrome",
			data: 13
		}	
		pie_data[4] = {
			label: "Firefox",
			data: 17
		}	
		pie_data[5] = {
			label: "Other",
			data: 3
		}					
		$.plot(pie_placeholder, pie_data, {
			series: {
				pie: { 
					show: true,
					label:{
						show: true,
						radius: .5,
						formatter: labelFormatter,
						background: {
							opacity: 0
						}
					},

				}
			},
			grid: {
				hoverable: true,
				clickable: true
			},
			colors: ["#FCB660", "#ce91db", "#56A2CF", "#52D793", "#FC8660", "#CCCCCC"]
		});

		pie_placeholder.bind("plothover", function(event, pos, obj) {
			if (!obj) {
				return;
			}
			var percent = parseFloat(obj.series.percent).toFixed(2);
			$("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
		});

		pie_placeholder.bind("plotclick", function(event, pos, obj) {
			if (!obj) {
				return;
			}
			percent = parseFloat(obj.series.percent).toFixed(2);
			alert(""  + obj.series.label + ": " + percent + "%");
		});

	function labelFormatter(label, series) {
		return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	}
		


var cityAreaData = [
        500.70,
        410.16,
        210.69,
        120.17,
        64.31,
        150.35,
        130.22,
        120.71,
        100.32
      ]
$('#map1').vectorMap({
   map: 'world_mill_en',
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    focusOn:{
		  x: 5,
		  y: 0.56,
		  scale: 1.7
	},
	zoomOnScroll:false,
	zoomMin:0.85,
    hoverColor: false,
	regionStyle:{
		  initial: {
			fill: '#abe7c8',
			"fill-opacity": 1,
			stroke: '#abe7c8',
			"stroke-width": 0,
			"stroke-opacity": 0
		  },
		  hover: {
			"fill-opacity": 0.8
		  },
		  selected: {
			fill: 'yellow'
		  },
		  selectedHover: {
		  }
		},
    markerStyle: {
		  initial: {
			fill: '#F85D2C',
			stroke: '#F85D2C',
			"fill-opacity": 0.9,
			"stroke-width": 10,
			"stroke-opacity": 0.5,
			r: 3
		  },
		  hover: {
			stroke: '#F85D2C',
			"stroke-width": 14
		  },
		  selected: {
			fill: 'blue'
		  },
		  selectedHover: {
		  }
		},
    backgroundColor: '#ffffff',
     markers :[
  		{latLng: [50, 0], name: 'France - 43145 views'},	 
  		{latLng: [0, 120], name: 'Indonesia - 145 views'},
  		{latLng: [-25, 130], name: 'Australia - 486 views'},	
  		{latLng: [0, 20], name: 'Africa - 12 views'},	
  		{latLng: [35, 100], name: 'China - 7890 views'},	
  		{latLng: [46, 105], name: 'Mongolia - 2123 views'},	
  		{latLng: [40, 70], name: 'Kyrgiztan - 87456 views'},	
  		{latLng: [58, 50], name: 'Russia - 4905 views'},
		{latLng: [35, 135], name: 'Japan - 87456 views'}																		
      ],
	series: {
      markers: [{
        attribute: 'r',
        scale: [3, 7],
        values: cityAreaData
      }]
    },
  });	  


/* REAL TIME CHART */
	  
		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var realtime_chart = $.plot("#realtime-chart", [ getRandomData() ], {
			series: {
				shadowSize: 0,	// Drawing is faster without shadows
				lines: {
					fill: true,
					fillColor: "#ffe29c",
				},
				color: "#ffe29c", 
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			},
			grid: {
				borderWidth: 0
			},
			
		});

		function update() {
			realtime_chart .setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()
			realtime_chart .draw();
			setTimeout(update, updateInterval);
		}

		update();


/* FULL CALENDAR  */
		
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left:   'title',
				center: '',
				right:  'today prev,next'
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		

// Skycons

      var icons = new Skycons({"color": "white","resizeClear": true}),
	  	  icons_btm = new Skycons({"color": "#F89C2C","resizeClear": true}),
          list  = "clear-day",
		  livd_btm = ["rain", "wind"
		  ];
		  icons.set(list,list)
      for(var i = livd_btm.length; i--; )
        icons_btm.set(livd_btm[i], livd_btm[i]);

      icons.play();
	  icons_btm.play();

/* News Widget */
	   $(".vd_news-widget .vd_carousel").carouFredSel({
			prev:{
				button : function()
				{
					return $(this).parent().parent().children('.vd_carousel-control').children('a:first-child')
				}
			},
			next:{
				button : function()
				{
					return $(this).parent().parent().children('.vd_carousel-control').children('a:last-child')
				}
			},		
			scroll: {
				fx: "crossfade",
				onBefore: function(){
						var target = "#front-1-clients";
						$(target).css("transition","all .5s ease-in-out 0s");				
					if ($(target).hasClass("vd_bg-soft-yellow")){						
						$(target).removeClass("vd_bg-soft-yellow");
						$(target).addClass("vd_bg-soft-red");		
					} else
					if ($(target).hasClass("vd_bg-soft-red")){						
						$(target).removeClass("vd_bg-soft-red");
						$(target).addClass("vd_bg-soft-blue");		
					} else
					if ($(target).hasClass("vd_bg-soft-blue")){						
						$(target).removeClass("vd_bg-soft-blue");
						$(target).addClass("vd_bg-soft-green");		
					} else
					if ($(target).hasClass("vd_bg-soft-green")){						
						$(target).removeClass("vd_bg-soft-green");
						$(target).addClass("vd_bg-soft-yellow");		
					} 					
				}
			},
			width: "auto",
			height: "responsive",
			responsive: true,
			auto:3000
			
		});



	// Notification
	  setTimeout(function() { notification("topright","notify","fa fa-exclamation-triangle vd_yellow","Welcome to Vendroid","Click on <i class='fa fa-question-circle vd_red'></i> Question Mark beside filter to take a view layout tour guide"); },1500)	 ; 
	  
	  

});
</script>




</body>

<!-- Mirrored from www.venmond.com/demo/vendroid/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 11:38:03 GMT -->
</html>