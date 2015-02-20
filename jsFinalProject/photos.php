 <?php require_once('inc/header.inc'); ?> 

<!--

Instructions:
    Create a page with a photo library on it. 

Use either FancyBox2, Lightbox2 or another jQuery plugin for this. 

Your image library page should contain no less than 9 pictures. 

Fancybox (Links to an external site.) is another lightbox plugin that you may consider exploring.


Notes:

This gallery uses Flickr API to assimilate photos,
then uses fancy box to isolate them.

-->

<script>$('#gallerynav').addClass('active');</script>

 <!-- FLIKR API SCRIPTS -->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 

<!--FANCY BOX SCRIPTS-->

<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->

<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>

<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>  
<!-- end fancy box scripts -->

    
 
      <script> 
           $(document).ready(function() {

               //call fancy box
            $(".fancybox").attr('rel','gallery').fancybox({           
 //   Buttons/helpers if NON API/Local images:
//		prevEffect		: 'none',
//		nextEffect		: 'none',
//		closeBtn		: false,
//		helpers		: {
//			title	: { type : 'inside' },
//			buttons	: {}
//        }
              });//end fancy box
     // call the function below to get the party going
     getJSONData(); 
});
        
        
        function getJSONData (){
     // URL to Flickr API
     var flickrAPI = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
     // call jQuery .getJSON()
     $.getJSON(flickrAPI, {
          tags : "iwanttobelieve",
          tagmode : "any",
          format : "json",
       },
        successFn
      );
} // end of function
        
        
        
        //get the data back from Flickr.
        //The data will be returned in a format called JSON or JavaScript Object Notation
        
        //The code will then use the jQuery .each() to iterate through the JSON adding a new image to the page. You will notice that some CSS is also applied to each image.
        
        
        // When the call to Flickr is successfull execute the functon below
function successFn(result) { 

     //uncomment the line below to see the raw json data if you would like.
     //document.write(JSON.stringify(result));

     // For each item returned in the JSON data add an image to the page
    
    // add fancy box link elements for each photo
    //for example:
    
    /*
    
    <a class="fancybox" rel="group" href="big_image_1.jpg"><img src="small_image_1.jpg" alt="" /></a>
    
<a class="fancybox" rel="group" href="big_image_2.jpg"><img src="small_image_2.jpg" alt="" /></a>
*/
     $.each(result.items, function(i,item){
          $('<img>').attr('src', item.media.m).addClass('gallerythumbnails fancybox').attr('rel', 'gallery').appendTo('#photogallery');
})
} // end of function
        
          
          //END FLIKR API
          
          // FANCY BOX INSTRUCTIONS::
          
          // http://fancyapps.com/fancybox/
          
</script>  

 <div class="content">
  <h1>Photo Gallery</h1>
     
     <div id="feedcontent">
            <div id="feed">       
                 <div id="photogallery"></div>
            </div><!-- END Feed -->
        </div><!-- END feedview CONTENT -->

   
</div><!-- end content -->

 <?php require_once('inc/footer.inc'); ?> 
