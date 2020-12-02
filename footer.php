
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
<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
	"use strict";
		
  // init Isotope
  var $container = $('.isotope').isotope({
    itemSelector: '.gallery-item',
    layoutMode: 'fitRows'
  });
  

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  $container.isotope('layout');
	});

  // bind filter button click
  $('#filters').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
	$('#filters li').removeClass('active');
	$(this).parent().addClass('active');	
    $container.isotope({ filter: filterValue });
  });

	
});
</script>
<!-- Specific Page Scripts END -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#profile_photo").change(function(event){
   var x = URL.createObjectURL(event.target.files[0]);
   $("#user_image").attr('src',x);
});

// phot upload ajax start

  $(document).on('change','#profile_photo',function(){
    var user_id = $("#user_id").val();
    var property = document.getElementById("profile_photo").files[0];
    image_name = property.name;
    var image_extension = image_name.split('.').pop().toLowerCase();
    if(jQuery.inArray(image_extension,['gif','png','jpg','jpeg']) == -1){ alert("wrong extension"); }
    var image_size = property.size;
    if(image_size > 2000000){alert("Image size is so big");}
    else{
      var form_data = new FormData();
      form_data.append("profile_photo",property);
      form_data.append("user_id",user_id);
      $.ajax({
        url:"functions.php",
        method:"post",
        data:form_data,
        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function(){
          $("#user_image").html("<label class'text-success'>Photo Uploding...</label>");
        },
        success:function(data){
          console.log(data);
        }
      });
    }
  });
});

</script>
<script src="chat_script.js"></script>
</body>

</html>