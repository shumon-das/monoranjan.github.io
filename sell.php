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
              <div class="col-sm-8">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-green">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-magic"></i> </span> Select Your Currency </h3>
                  </div>
                  <div id="wizard-1" class="panel-body vd_custom-product form-wizard">
                    <form class="form-horizontal" action="functions.php" method="post" role="form">
                      <ul style="display: none;">
                        <li><a href="#tab1" data-toggle="tab">
                          <div class="menu-icon"> 1 </div>
                          Server Spec </a></li>
                        <li><a href="#tab2" data-toggle="tab">
                          <div class="menu-icon"> 2 </div>
                          Software </a></li>
                        <li><a href="#tab3" data-toggle="tab">
                          <div class="menu-icon"> 3 </div>
                          Services </a></li>
                    
                      </ul>
                      <div class="progress progress-striped active">
                        <div class="progress-bar vd_bg-green" > </div>
                      </div>
                      <h5 class="msgall alert alert-danger">Please fill-up the form properly</h5>
                      <div class="tab-content no-bd">
                        <div id="tab1" class="tab-pane">
                          
                          
                          <div class="form-group content-list">
                            
                            <div class="menu-text" style="margin-left: 0px;">

                              <div class="radio" style="width: 50%;float: left;">
                               <i>send to </i> <label style="width: 100%;padding-left:0;"> 
                                 <?php 
                                   $icon_query = mysqli_query($conn,"SELECT * FROM wa ORDER BY id DESC LIMIT 1");
                                   $icon = mysqli_fetch_assoc($icon_query);
                                   $ico = $icon['wa_name'];
                                  ?>
                                  <img src="http://localhost/project_one/img/<?php echo $icon['wa_logo']; ?>" alt="" style="width:50px;margin-top: 15px;float: left;height: 50px;" id="wa_logo">
                                  <select name="send_from" id="send_method" style="width: 80%;float:left;height: 50px;margin-top: 15px;">
                                <?php $wquery = mysqli_query($conn,"SELECT * FROM wa ORDER BY id DESC");
                                while ($wrows = mysqli_fetch_assoc($wquery)) {
                                      echo "<option value='".$wrows['wa_name']."'>".$wrows['wa_name']."</option>";
                                    }
                                ?>        

                                  </select>
                                  
                              </div>

                              <div class="radio" style="width: 50%;float: left;">
                                <i style="margin-left: 20px;">receive with </i><label style="width: 100%;padding-left:0;">
                                <?php 
                                   $icon_query = mysqli_query($conn,"SELECT * FROM ba ORDER BY id ASC LIMIT 1");
                                   $icon = mysqli_fetch_assoc($icon_query);
                                   $bdico = $icon['account_name'];
                                  ?> 
                                  <img src="http://localhost/project_one/img/<?php echo $icon['account_logo']; ?>" alt="" style="width:50px;margin-top: 15px;float: left;height: 50px;" id="logo">
                                  <select name="receive_with" id="receive_method" style="width: 80%;float:left;height: 50px;margin-top: 15px;">
                                <?php $bdquery = mysqli_query($conn,"SELECT * FROM ba");
                                while ($bdrows = mysqli_fetch_assoc($bdquery)) {
                                      echo "<option value='".$bdrows['account_name']."'>".$bdrows['account_name']."</option>";
                                    }
                                ?>       
                                    
                                  </select>
                                  
                              </div>

                              <div class="radio" style="width: 50%;float: left;">
                                <label style="width: 100%;padding-left:0;"> 
                                  
                                  
                                  <input type="text" name="send_amount" id="given_input" value="" placeholder="0" style="width: 96%;float:left;height: 50px;margin-top: 15px;font-family: sans-serif;font-size: 18px;">

                                  <label for="given_input" class="alert alert-danger msg1" id="error_alert">please give some value how much you need to transact </label>
                                  
                              </div>

                              <div class="radio" style="width: 50%;float: left;">
                                <label style="width: 100%;padding-left:0;"> 
                                  
                                  <input type="text" name="" id="receive_input" value="" disabled="" placeholder="0" style="width: 96%;float:left;height: 50px;margin-top: 15px;font-family: sans-serif;font-size: 18px;">
                                  <input type="hidden" name="receive_amount" value="" id="dreceive_input">                                  
                              </div>
                              <?php 
                                   $re_sql = mysqli_query($conn,"SELECT * FROM trs_rate WHERE send_name='$ico' AND receive_name='$bdico'");
                                   $res = mysqli_fetch_assoc($re_sql);$send_rate=$res['send_rate'];$receive_rate=$res['receive_rate'];
                                  ?> 
                                  <input type="text" disabled="" value="Exchange rate <?php echo $send_rate;?> USD to <?php echo $receive_rate;?>  BDT <?php echo ' '.$space = ' '.' '.' '; ?> Reserved <?php echo $res['reserve'];?>  BDT" id="show_rate_input">
                
                            </div>
                          </div>
                          
                          
                        </div>
                        <!-- #tab-1 -->
                        <div id="tab2" class="tab-pane">
                          <div class="form-group content-list">
                           <div class="menu-text" style="margin-left: 0px;">
                              <h3>Required information</h3>
                              <p class="help-inline">Please fill up this form</p>
                              <label for=""><span id="mail"></span> email address</label>
                              <input type="email" name="trs_mail" id="trs_mail">
                              <label for=""><span id="account"></span> Transaction ID</label>
                              <input type="text" name="trs_id" id="trs_id">
                              <label for=""> Phone (optional)</label>
                              <input type="text" name="trs_phone" id="trs_phone">
                              
                              
                            </div>                            

                          </div>
                          <!-- form-group -->
                         
                          <!-- form-group --> 
                        </div>
                        <!-- #tab2 -->
                        <div id="tab3" class="tab-pane">
                          <div class="form-group content-list">
                            <div class="menu-text" style="margin-left: 0px;">
                              <h3>Required information</h3>
                              <div class="panel widget light-widget panel-bd-left">
                                <table class="table table-condensed table-striped">
                                  
                                  <tr>
                                    <td>Send from</td>
                                    <td id="dsend_method">Web Money</td>
                                    <td>Send Amount</td>
                                    <td id="dsend_amount">
                                      <label for="" class='alert alert-danger msgall'>please select send amount</label>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Receive with</td>
                                    <td id="dreceive_method"></td>
                                    <td>Receive Amount</td>
                                    <td id="dreceive_amount"></td>
                                  </tr>

                                  <tr>
                                    <td>E-mail Address</td>
                                    <td></td>
                                    <td></td>
                                    <td id="invoice_email_address">
                                    <label class='alert alert-danger msgall'>please give email address</label>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Transaction ID</td>
                                    <td></td>
                                    <td></td>
                                    <td id="invoice_trs_id">
                                    <label class='alert alert-danger msgall'>please give the transaction id</label>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Phone</td>
                                    <td></td>
                                    <td></td>
                                    <td id="invoice_phone">
                                      <label class='alert alert-danger msgall'>please give your phone number</label>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>Total Fee</td>
                                    <td></td>
                                    <td></td>
                                    <td>0.00 USD</td>
                                  </tr>
                                </table>
                              </div>
                              
                            </div>
                          </div>
                          <!-- form-group -->
                          
                          <!-- form-group --> 
                          
                        </div>
                        <!-- #tab3 -->
                       
                      </div>
                      <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
                      <input type="hidden"  name="order_type" value="sell">
                      <!-- tab-content -->
                      <div class="form-actions-condensed wizard text-right" style="margin-top: 0;"> 
                        <a class="btn vd_btn prev" href="javascript:void(0);"><span class="menu-icon"><i class="fa fa-fw fa-chevron-circle-left"></i></span> Previous</a> 
                        <a class="btn vd_btn next" href="javascript:void(0);">Next <span class="menu-icon"><i class="fa fa-fw fa-chevron-circle-right"></i></span></a> 
                        <input class="btn vd_btn vd_bg-green finish" id="on-submit" type="submit" value="Make Order" name="trs_submit">
                      </div>
                    </form>
                  </div>
                  <!-- panel-body --> 
                  
                </div>
                <!-- Panel Widget --> 
                
              </div>
              <!-- col-sm-8 -->
              
              <div class="col-sm-4 sidebar-affix">
                <div class="panel widget vd_summary-panel">
                  <div class="panel-heading vd_bg-yellow">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-usd"></i> </span> Reserve </h3>
                  </div>
                  <div class="panel-body-list">
                    <form class="form-horizontal" action="#" role="form">
                      <div class="content-list menu-action-right" >
                        <div data-rel="scroll">
                          <ul class="list-wrapper pd-lr-15">
                            <?php 
                               $bdreserve_query = mysqli_query($conn,"SELECT * FROM ba");
                               while($bdr_rows = mysqli_fetch_assoc($bdreserve_query)){
                                $r = $bdr_rows['account_name'];
                                $reserve_query = mysqli_query($conn,"SELECT * FROM trs_rate WHERE receive_name='$r'");
                                $reserve = mysqli_fetch_assoc($reserve_query);
                                ?>
                                <li>
                                  <img src="http://localhost/project_one/img/<?php echo $bdr_rows['account_logo'];?>" alt="" width="40"> 

                                    <span class="product-title"><strong><?php echo $reserve['receive_name'];?></strong></span>
                                    <div class="menu-action"> &#x9f3; <?php echo $reserve['reserve'];?> </div>
                                  </li>
                                     
                             <?php  } ?>
                             <?php 
                               $wareserve_query = mysqli_query($conn,"SELECT * FROM wa");
                               while($war_rows = mysqli_fetch_assoc($wareserve_query)){
                                $wr = $war_rows['wa_name'];
                                $wreserve_query = mysqli_query($conn,"SELECT * FROM trs_rate WHERE receive_name='$wr'");
                                $wreserve = mysqli_fetch_assoc($wreserve_query);
                                ?>
                                <li>
                                  <img src="http://localhost/project_one/img/<?php echo $war_rows['wa_logo'];?>" alt="" width="40"> 

                                    <span class="product-title"><strong><?php echo $wreserve['receive_name'];?></strong></span>
                                    <div class="menu-action"> &#36; <?php echo $wreserve['reserve'];?> </div>
                                  </li>
                                     
                             <?php  } ?>
                                                                             
                          </ul>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
                <!-- Panel Widget --> 
              </div>
              <!-- col-sm-8 --> 
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
                  	Copyright &copy;2014 Exchange Inc. All Rights Reserved 
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
<script type="text/javascript" src='plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js'></script>


<script type="text/javascript">
$(document).ready(function() {
	
  "use strict";
  	
  var tablet_width = 751;

  var top_value;
  var bottom_value;
  
  setValue();
  resizePanel();
  setAffix();  

  $(window).on("resize", function(){
		if ($(window).width()>tablet_width){	  
			resizePanel();	 
			setValue();	
		} else{
			$('.sidebar-affix .panel').removeAttr('style');
		}


  });		  

 

  function setAffix(){
	  $('.sidebar-affix').before('<style>.affix{top:'+top_value+'px; position:fixed !important;} .affix-bottom{position:absolute; }</style>');
	  $('.sidebar-affix .panel').affix({
		offset: {
		  top: top_value,
		  bottom: bottom_value
		}
	  })
  }
  
  function resizePanel(){
	  $('.sidebar-affix .panel').css('width',($('.vd_content-section').innerWidth()-114)/3+'px');
	  if ($(window).width()<=tablet_width)	{
			$('.sidebar-affix .panel').removeAttr('style');		  
	  }
  }
  function setValue(){
	  top_value = $('#header').outerHeight() + $('.vd_content .vd_head-section').height() + $('.vd_content .vd_title-section').height() - 39;
	  bottom_value = $('#footer').outerHeight() + 61 ;		  
  } 
  function clearAffix(){
	  $('.sidebar-affix .panel').removeClass('affix');
	  $('.sidebar-affix .panel').removeClass('affix-top');
	  $('.sidebar-affix .panel').removeClass('affix-bottom');
	  $('.sidebar-affix .panel').removeAttr('style');	  	  	  
  }
  
  // Bootstrap Wizard
	$('#wizard-1').bootstrapWizard({
		'tabClass': 'nav nav-pills nav-justified',
		'nextSelector': '.wizard .next',
		'previousSelector': '.wizard .prev',
		'onTabShow' :  function(tab, navigation, index){
			$('#wizard-1 .finish').hide();
			$('#wizard-1 .next').show();
			if ($('#wizard-1 .nav li:last-child').hasClass('active')){
				$('#wizard-1 .next').hide();
				$('#wizard-1 .finish').show();
			}
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#wizard-1').find('.progress-bar').css({width:$percent+'%'});			
		},
		'onTabClick': function(tab, navigation, index) {
			return false;		
		},
		'onNext': function(){
			scrollTo('#wizard-1',-100);
		},
		'onPrevious': function(){
			scrollTo('#wizard-1',-100);
		}		
	});

  
});
</script>
<!-- Specific Page Scripts END -->


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

<!-- custom js file start after re edit -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#send_method").change(function(){
      var send_method = $(this).val();
      var test = $("#receive_method").val();
      //alert(send_method);
      $.ajax({
        url:"functions.php",
        type:"post",
        dataType:"json",
        data:{
          send_method:send_method,
          test:test
        },
        success:function(data){
          $("#wa_logo").attr('src','http://localhost/project_one/img/'+data.wa_logo);
          $("#receive_input").attr('value','0');  
          $("#given_input").attr('value','0');  
          if(data.send_account == 'bd' && data.re_account == 'en'){            
           if(data.g_input < 100){
            $("#show_rate_input").attr('value',"Minimum Exchange 100 "+' '+" BDT      Reserved "+data.reserve+" USD ");
           }else{
            
            $("#show_rate_input").attr('value',"Exchange rate "+data.send_rate+" BDT to "+data.receive_rate+' '+" USD      Reserved "+data.reserve+" USD ");}
          }else if(data.send_account == 'en' && data.re_account == 'en'){
                      
            $("#show_rate_input").attr('value',"Exchange rate "+data.send_rate+" USD to 0."+data.receive_rate+' '+" USD      Reserved "+data.reserve+" USD ");

          }else if(data.send_account == 'en' && data.re_account == 'bd'){
            
            $("#show_rate_input").attr('value',"Exchange rate "+data.send_rate+" USD to "+data.receive_rate+' '+" BDT      Reserved "+data.reserve+" BDT ");
          } 
        }
      });

    });
  });

$(document).ready(function(){
    $("#receive_method").change(function(){
      var receive_method = $(this).val();
      var check = $("#send_method").val();
     // alert(test);
      $.ajax({
        url:"functions.php",
        type:"post",
        dataType:"json",
        data:{
          receive_method:receive_method,
          check:check
        },
        success:function(data){
         // console.log(data.checkk);
          $("#logo").attr('src','http://localhost/project_one/img/'+data.account_logo);
          $("#receive_input").attr('value','0');         
          if(data.send_account == 'bd' && data.re_account == 'en'){            
           if(data.g_input < 100){
            $("#show_rate_input").attr('value',"Minimum Exchange 100 "+' '+" BDT      Reserved "+data.reserve+" USD ");
           }else{
            
            $("#show_rate_input").attr('value',"Exchange rate "+data.send_rate+" BDT to "+data.receive_rate+' '+" USD      Reserved "+data.reserve+" USD ");}
          }else if(data.send_account == 'en' && data.re_account == 'en'){
                      
            $("#show_rate_input").attr('value',"Exchange rate "+data.send_rate+" USD to 0."+data.receive_rate+' '+" USD      Reserved "+data.reserve+" USD ");

          }else if(data.send_account == 'en' && data.re_account == 'bd'){
            
            $("#show_rate_input").attr('value',"Exchange rate "+data.send_rate+" USD to "+data.receive_rate+' '+" BDT      Reserved "+data.reserve+" BDT ");
          } 
        }
      });

    });
  });


  $(document).ready(function(){
    $("#given_input").keyup(function(){
      $(".msgall").hide();
      var sm = $("#send_method").val();
      var rm = $("#receive_method").val();
      var gi = $("#given_input").val();
       $.ajax({
        url:"functions.php",
        type:"post",
        dataType:"json",
        data:{
          sm:sm,
          rm:rm,
          gi:gi
        },
        success:function(data){
          if(data.send_account == 'bd' && data.re_account == 'en'){            
           if(data.g_input < 100){
            $("#show_rate_input").attr('value',"Minimum Exchange 100 "+' '+" BDT      Reserved "+data.reserve+" USD ");
            $("#receive_input").attr('value','0');
           }else{
            $("#receive_input").attr('value',data.bd_result);
            $("#dreceive_input").attr('value',data.bd_result);
            $("#dsend_method").html(data.send_name);
            $("#dsend_amount").html(data.g_input);
            $("#dreceive_method").html(data.receive_name);
            $("#dreceive_amount").html(data.bd_result);

            $("#show_rate_input").attr('value',"Exchange rate "+data.send_rate+" BDT to "+data.receive_rate+' '+" USD      Reserved "+data.reserve+" USD ");}
          }else if(data.send_account == 'en' && data.re_account == 'en'){
           $("#receive_input").attr('value',data.result);
           $("#dreceive_input").attr('value',data.result);            
           $("#dsend_method").html(data.send_name);
            $("#dsend_amount").html(data.g_input);
            $("#dreceive_method").html(data.receive_name);
            $("#dreceive_amount").html(data.result); 

            $("#show_rate_input").attr('value',"Exchange rate "+data.send_rate+" USD to "+data.receive_rate+' '+" USD      Reserved "+data.reserve+" USD ");

          }else if(data.send_account == 'en' && data.re_account == 'bd'){
            $("#receive_input").attr('value',data.result);
            $("#dreceive_input").attr('value',data.result);            
            $("#dsend_method").html(data.send_name);
            $("#dsend_amount").html(data.g_input);
            $("#dreceive_method").html(data.receive_name);
            $("#dreceive_amount").html(data.result);
            if(data.reserve_error == 'reserved'){$("#error_alert").html(data.reserve_error).hide();}
            else{$("#error_alert").html(data.reserve_error).show();}
            $("#show_rate_input").attr('value',"Exchange rate "+data.send_rate+" USD to "+data.receive_rate+' '+" BDT      Reserved "+data.reserve+" BDT ");
          } 
        }
       });
     
    });
  });

</script>
<script src="js/allpagescript.js"></script>
<script src="chat_script.js"></script>
</body>


</html>