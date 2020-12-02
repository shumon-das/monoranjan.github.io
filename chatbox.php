<div class="vd_chat-menu hidden-xs" style="width:22%;position: fixed;bottom: 0;right: 2%;z-index: 9;background-color: #39515F;border-top: 3px solid #333333;">
      <div class="vd_mega-menu-wrapper">
          <div class="vd_mega-menu" style="width: 100%;">
             <ul class="mega-ul">
  
     
    <li class="profile border-left mega-li"style="width: 70%;" data-animation="fadeInUp"> 
        <a class="mega-link" href="index.html"  data-action="click-trigger"> 
            <span class="menu-name" style="font-size: 15px;">
                <i class="fa fa-comments append-icon" ></i>we are online <i class="append-icon fa fa-fw fa-circle"></i> 
            </span>
        </a> 
<div class="vd_mega-menu-content  open-top width-xs-4 width-md-5 width-lg-4 center-xs-4 animation-item--title" data-action="click-target" style="left: -20px;">
                    <div class="child-menu">  
                       <div class="title"> 
                           Jessyline <i>(online)</i>
                           <div class="vd_panel-menu">
                                 <div  data-rel="tooltip"  data-original-title="Make a Call" class="menu entypo-icon smaller-font">
                                    <i class="icon-phone"></i>
                                </div>               
                                 <div  data-rel="tooltip"  data-original-title="Video Call" class="menu">
                                    <i class="fa fa-video-camera"></i>
                                </div>               
                                 <div  data-rel="tooltip"  data-original-title="Message Setting" class="menu smaller-font entypo-icon">
                                    <i class="icon-cog"></i>
                                </div>   
                                 <div data-rel="tooltip"  data-original-title="Close" class="menu entypo-icon">
                                    <i class="icon-cross"></i>
                                </div>                                                                                                 
                            </div>
                       </div>                 
                   <div class="content-list content-image content-menu">  
                       <div   data-rel="scroll" style="background-color: #E6EAEA;">
                           <ul class="list-wrapper pd-lr-10" id="message" >
                                <?php 
                                $chat_sql = mysqli_query($conn,"SELECT * FROM chat WHERE user_id='$user_id'");
                                while($c_rows = mysqli_fetch_assoc($chat_sql)){ ?>
                                    <?php if($c_rows['replie_message'] == ''){}else{ ?>
                                      <li> 
                                        <a href="#"> 
                                          <div class="menu-icon"><img alt="example image" src="img/user-icon.png"></div> 
                                              <div class="menu-text"> 
                                                <span style="background-color: #435f7a;color: #f5f5f5;padding: 5px 10px;border-radius: 15px;"><?php echo $c_rows['replie_message'];?></span>
                                                <div class="menu-info"><span class="menu-date">12 Minutes Ago </span></div>
                                              </div> 
                                          </a> 
                                      </li>
                                    <?php } ?>                                     
                                    <?php if($c_rows['sent_message'] == ''){}else{ ?>
                                      <li class="align-right"> 
                                        <a href="#"> 
                                          <div class="menu-icon"><img alt="example image" src="img/<?php echo $profile_photo;?>"></div> 
                                              <div class="menu-text"> <span style="background-color: #f5f5f5;color: #000;padding: 5px 10px;border-radius: 15px;"><?php echo $c_rows['sent_message'];?></span>
                                                <div class="menu-info"><span class="menu-date">21 Days Ago</span></div>   
                                              </div> 
                                        </a> 
                                      </li>                                     
                                   <?php }
                                    } ?>         
                           </ul>
                        </div>
                           
                        <div class="closing chat-area" >
                          <form action="" method="post">
                              <div class="chat-box">
                                <input type="text" placeholder="chat here.." id="inpbox" style="background-color: #E6EAEA;width: 80%;"/>
                                <input type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" />
                                  <button type="submit" style="border: none;background-color: #E6EAEA;height: 40px;" id="chat_submit"><i class="append-icon fa fa-fw fa-send" style="font-size: 25px;color: royalblue;"></i></button>
                               </div>  
                          </form>  
                        </div>                                                                    
                       </div>                              
                    </div> <!-- child-menu -->                      
                  </div>   <!-- vd_mega-menu-content -->      
  
    </li> 
                     
</ul>
<!-- Head menu search form ends -->  
          </div>   
      </div>      
  </div>

</div>